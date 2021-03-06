@php
    use App\Models\Order;use App\Models\Product;
    use App\Notifications\SendInvoiceNotification;
    use LaravelDaily\Invoices\Classes\InvoiceItem;
    use LaravelDaily\Invoices\Classes\Party;
    use LaravelDaily\Invoices\Invoice;

    function pfValidIP():bool {
           // Variable initialization
           $validHosts = array(
               'www.payfast.co.za',
               'sandbox.payfast.co.za',
               'w1w.payfast.co.za',
               'w2w.payfast.co.za',
           );

           $validIps = [];

           foreach( $validHosts as $pfHostname ) {
               $ips = gethostbynamel( $pfHostname );

               if( $ips !== false )
                   $validIps = array_merge( $validIps, $ips );
           }

           // Remove duplicates
           $validIps = array_unique( $validIps );
           $referrerIp = gethostbyname(parse_url($_SERVER['HTTP_REFERER'])['host']);
           if( in_array( $referrerIp, $validIps, true ) ) {
               return true;
           }
           return false;
       }
    function pfValidPaymentData( $cartTotal, $pfData ):bool {
           return !(abs((float)$cartTotal - (float)$pfData['amount_gross']) > 0.01);
       }
       function pfValidServerConfirmation( $pfParamString, $pfHost = 'sandbox.payfast.co.za', $pfProxy = null ):bool {
           // Use cURL (if available)
           if( in_array( 'curl', get_loaded_extensions(), true ) ) {
               // Variable initialization
               $url = 'https://'. $pfHost .'/eng/query/validate';

               // Create default cURL object
               $ch = curl_init();

               // Set cURL options - Use curl_setopt for greater PHP compatibility
               // Base settings
               curl_setopt( $ch, CURLOPT_USERAGENT, NULL );  // Set user agent
               curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );      // Return output as string rather than outputting it
               curl_setopt( $ch, CURLOPT_HEADER, false );             // Don't include header in output
               curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2 );
               curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, true );

               // Standard settings
               curl_setopt( $ch, CURLOPT_URL, $url );
               curl_setopt( $ch, CURLOPT_POST, true );
               curl_setopt( $ch, CURLOPT_POSTFIELDS, $pfParamString );
               if( !empty( $pfProxy ) )
                   curl_setopt( $ch, CURLOPT_PROXY, $pfProxy );

               // Execute cURL
               $response = curl_exec( $ch );
               curl_close( $ch );
               if ($response === 'VALID') {
                   return true;
               }
           }
           return false;
       }
       //Tell PayFast that this page is reachable by triggering a header 200
           header( 'HTTP/1.0 200 OK' );
           flush();

           const SANDBOX_MODE = true;
           $pfHost = SANDBOX_MODE ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
           // Posted variables from ITN
           $pfData = $_POST;
           // Strip any slashes in data
           foreach( $pfData as $key => $val ) {
               $pfData[$key] = stripslashes( $val );
           }
           // Convert posted variables to a string
           foreach( $pfData as $key => $val ) {
               if( $key !== 'signature' ) {
                   $pfParamString .= $key .'='. urlencode( $val ) .'&';
               } else {
                   break;
               }
           }
           $cart = Order::query()->where('m_payment_id',$pfData['m_payment_id'])->first();

           $products = \DB::table('order_products')->whereIn('order_id',$cart->id)->get();


           $pfParamString = substr( $pfParamString, 0, -1 );
           $check1 = $this->pfValidSignature($pfData, $pfParamString);
           $check2 =  $this->pfValidIP();
           $check3 =  $this->pfValidPaymentData($cart->amount, $pfData);
           $check4 =  $this->pfValidServerConfirmation($pfParamString, $pfHost);

           $fullname = $pfData['name_first'].' '.$pfData['name_last'];



           if($check1 && $check2 && $check3 && $check4) {

           } else {
               return 'Payment Failed';
           }
@endphp
