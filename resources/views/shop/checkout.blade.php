@extends('layouts.main')
@section('assets')
    <style>
        .woocommerce .cart .quantity {
            position: relative;
            max-width: 170px;
            float: left;
            margin-right: 30px;
        }
        .woocommerce form label {
            display: inline-block;
            clear: left;
        }
    </style>
@endsection

@section('content')
    <div class="site-wrapper">

        <header class="site-header default">

        @include('partials.nav')
        <!-- Page header image -->
            <!-- End Page header image -->
            <!-- Page meta -->
            <div class="page-meta " >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-meta-wrapper">
                                <h1>
                                    Checkout
                                </h1>

                            </div><!-- .page-meta-wrapper -->

                        </div><!-- .col-md-12 -->

                    </div><!-- .row -->
                </div><!-- .container -->

            </div><!-- .page-meta -->
            <!-- End Page meta -->

            <!-- Page header image -->
            <!-- End Page header image -->
        </header>
        <!-- End Header. Begin Template Content -->

        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">


                        <article id="post-7" class="post-7 page type-page status-publish hentry" style="margin: 50px 0">

                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <div class="woocommerce-form-login-toggle">

                                        <div class="woocommerce-info">
                                            Returning customer? <a href="#" class="showlogin">Click here to login</a>
                                        </div>
                                    </div>
                                    <form class="woocommerce-form woocommerce-form-login login" method="post" style=" display: none;">


                                        <p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing section.</p>

                                        <p class="form-row form-row-first">
                                            <label for="username">Username or email&nbsp;<span class="required">*</span></label>
                                            <input type="text" class="input-text" name="username" id="username" autocomplete="username">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="password">Password&nbsp;<span class="required">*</span></label>
                                            <input class="input-text" type="password" name="password" id="password" autocomplete="current-password">
                                        </p>
                                        <div class="clear"></div>


                                        <p class="form-row">
                                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                            </label>
                                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="683063fed5">
                                            <input type="hidden" name="_wp_http_referer" value="/villenoir/checkout/">
                                            <input type="hidden" name="redirect" value="">
                                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Login">Login</button>
                                        </p>
                                        <p class="lost_password">
                                            <a href="">Lost your password?</a>
                                        </p>

                                        <div class="clear"></div>


                                    </form>
                                    <div class="woocommerce-form-coupon-toggle">

                                        <div class="woocommerce-info">
                                            Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a>
                                        </div>
                                    </div>

                                    <form class="checkout_coupon" method="post" style="display: none;">

                                        <div class="input-group">
                                            <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                                            <span class="input-group-btn">
                                                <input type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                            </span>
                                        </div>
                                        <div class="clear"></div>

                                    </form>
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <form name="checkout" method="post" class="checkout woocommerce-checkout col-md-12" action="">
                                        <div class="col2-set col-md-7" id="customer_details">
                                            <div class="col-1">
                                                <div class="woocommerce-billing-fields">

                                                    <h3>Billing details</h3>



                                                    <div class="woocommerce-billing-fields__field-wrapper">
                                                        <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10">
                                                            <label for="billing_first_name" class="">First name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name">
                                                            </span>
                                                        </p>
                                                        <p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                            <label for="billing_last_name" class="">Last name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="" autocomplete="family-name">
                                                            </span>
                                                        </p>
                                                        <p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                            <label for="billing_company" class="">Company name&nbsp;<span class="optional">(optional)</span></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="" autocomplete="organization">
                                                            </span>
                                                        </p>
                                                        <p class="form-row form-row-wide" id="billing_country_field" data-priority="40">
                                                            <label for="billing_country" class="">Country / Region&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                    <select name="billing_country" id="billing_country" class="form-control">
                                                                        <option value="">Kenya</option>
                                                                        <option value="">South Africa</option>
                                                                        <option value="">Nigeria</option>
                                                                    </select>
                                                                </span>
                                                        </p>
                                                        <p class="form-row address-field validate-required form-row-wide" id="billing_address_1_field" data-priority="50">
                                                            <label for="billing_address_1" class="">Street address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text" name="billing_address_1"
                                                                       id="billing_address_1" placeholder="House number and street name"
                                                                       value="" autocomplete="address-line1" data-placeholder="House number and street name">
                                                            </span>
                                                        </p>
                                                        <p class="form-row address-field form-row-wide" id="billing_address_2_field" data-priority="60">
                                                            <label for="billing_address_2" class="screen-reader-text">Apartment, suite, unit, etc.&nbsp;<span class="optional">(optional)</span></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="billing_address_2" id="billing_address_2"
                                                                       placeholder="Apartment, suite, unit, etc. (optional)" value="" autocomplete="address-line2"
                                                                       data-placeholder="Apartment, suite, unit, etc. (optional)">
                                                            </span>
                                                        </p>
                                                        <p class="form-row address-field validate-required form-row-wide" id="billing_city_field" data-priority="70" data-o_class="form-row form-row-wide address-field validate-required">
                                                            <label for="billing_city" class="">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" autocomplete="address-level2">
                                                            </span>
                                                        </p>

                                                        <p class="form-row address-field validate-required validate-state form-row-wide" id="billing_state_field" data-priority="80" data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                                            <label for="billing_state" class="">State / County&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" id="billing_state" name="billing_state" placeholder="Select an option…" data-input-classes="" class="input-text">
                                                            </span>
                                                        </p>
                                                        <p class="form-row address-field validate-required validate-postcode form-row-wide" id="billing_postcode_field" data-priority="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                            <label for="billing_postcode" class="">Postcode / ZIP&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" autocomplete="postal-code">
                                                            </span>
                                                        </p>
                                                        <p class="form-row form-row-wide validate-phone" id="billing_phone_field" data-priority="100">
                                                            <label for="billing_phone" class="">Phone&nbsp;<span class="optional">(optional)</span></label>
                                                            <span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel"></span>
                                                        </p>
                                                        <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110">
                                                            <label for="billing_email" class="">Email address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="" autocomplete="email">
                                                            </span>
                                                        </p>
                                                </div>

                                                <div class="woocommerce-account-fields">

                                                    <p class="form-row form-row-wide create-account woocommerce-validated">
                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1"> <span>Create an account?</span>
                                                        </label>
                                                    </p>




                                                    <div class="create-account" style="display: none;">
                                                        <p class="form-row validate-required" id="account_username_field" data-priority="">
                                                            <label for="account_username" class="">Account username&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text " name="account_username" id="account_username" placeholder="Username" value="">
                                                            </span>
                                                        </p>
                                                        <p class="form-row validate-required" id="account_password_field" data-priority="">
                                                            <label for="account_password" class="">Create account password&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper password-input">
                                                                <input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password" value="">
                                                                <span class="show-password-input"></span>
                                                            </span>
                                                        </p>
                                                        <div class="clear"></div>
                                                    </div>


                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="woocommerce-shipping-fields">

                                                    <h3 id="ship-to-different-address">
                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                            <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" type="checkbox" name="ship_to_different_address" value="1">
                                                            <span>Ship to a different address?</span>
                                                        </label>
                                                    </h3>

                                                    <div class="shipping_address" style="display: none;">


                                                        <div class="woocommerce-shipping-fields__field-wrapper">
                                                            <p class="form-row form-row-first validate-required" id="shipping_first_name_field" data-priority="10">
                                                                <label for="shipping_first_name" class="">First name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder="" value="" autocomplete="given-name">
                                                                </span>
                                                            </p>
                                                            <p class="form-row form-row-last validate-required" id="shipping_last_name_field" data-priority="20">
                                                                <label for="shipping_last_name" class="">Last name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text " name="shipping_last_name" id="shipping_last_name" placeholder="" value="" autocomplete="family-name">
                                                                </span>
                                                            </p>
                                                            <p class="form-row form-row-wide" id="shipping_company_field" data-priority="30">
                                                                <label for="shipping_company" class="">Company name&nbsp;<span class="optional">(optional)</span></label>
                                                                <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="" value="" autocomplete="organization">
                                                                </span>
                                                            </p>
                                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
                                                                <label for="billing_country" class="">Country / Region&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                <span class="woocommerce-input-wrapper">
                                                                    <select name="billing_country" id="billing_country" class="country_to_state country_select select2-hidden-accessible">
                                                                        <option value="">Kenya</option>
                                                                        <option value="">South Africa</option>
                                                                        <option value="">Nigeria</option>
                                                                    </select>
                                                                </span>
                                                            </p>


                                                    </div>

                                                </div>
                                            </div>
                                                <div class="woocommerce-additional-fields">



                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="form-row notes" id="order_comments_field" data-priority="">
                                                            <label for="order_comments" class="">Order notes&nbsp;<span class="optional">(optional)</span></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                                            </span>
                                                        </p>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>




                                        <div id="order_review" class="woocommerce-checkout-review-order col-md-5">
                                            <h3 id="order_review_heading">Your order</h3>
                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                                <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Subtotal</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(Cart::getContent()->count() > 0)
                                                    @foreach(Cart::getContent() as $item)
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                &nbsp;&nbsp;{{$item['name']}}
                                                                <strong class="product-quantity">× {{$item['quantity']}}</strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi>{{number_format($item['price'])}}&nbsp;<span class="woocommerce-Price-currencySymbol">$</span></bdi>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            &nbsp;&nbsp;
                                                            No Item in Cart
                                                        </td>
                                                        <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi>0&nbsp;<span class="woocommerce-Price-currencySymbol">$</span></bdi>
                                                                </span>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                                <tfoot>

                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi>{{number_format(Cart::getSubTotal())}}&nbsp;<span class="woocommerce-Price-currencySymbol">$</span></bdi>
                                                        </span>
                                                    </td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi>{{number_format(Cart::getTotal())}}&nbsp;<span class="woocommerce-Price-currencySymbol">$</span></bdi>
                                                            </span>
                                                        </strong>
                                                    </td>
                                                </tr>


                                                </tfoot>
                                            </table>

                                            <input type="hidden" name="lang" value="en">
                                            <div id="payment" class="woocommerce-checkout-payment">
                                                <ul class="wc_payment_methods payment_methods methods">
                                                    <li class="wc_payment_method payment_method_bacs">
                                                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="">

                                                        <label for="payment_method_bacs">
                                                            Direct bank transfer 	</label>
                                                        <div class="payment_box payment_method_bacs">
                                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                        </div>
                                                    </li>
                                                    <li class="wc_payment_method payment_method_cheque">
                                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" data-order_button_text="">

                                                        <label for="payment_method_cheque">
                                                            Check payments
                                                        </label>
                                                        <div class="payment_box payment_method_cheque" style="display:none;">
                                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                        </div>
                                                    </li>
                                                    <li class="wc_payment_method payment_method_cod">
                                                        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">

                                                        <label for="payment_method_cod">
                                                            Cash on delivery
                                                        </label>
                                                        <div class="payment_box payment_method_cod" style="display:none;">
                                                            <p>Pay with cash upon delivery.</p>
                                                        </div>
                                                    </li>
                                                    <li class="wc_payment_method payment_method_paypal">
                                                        <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">

                                                        <label for="payment_method_paypal">
                                                            PayPal
                                                            <img src="{{asset('images/checkout/paypal.png')}}" alt="PayPal acceptance mark">
                                                            <a href="https://www.paypal.com/ro/cgi-bin/webscr?cmd=xpt/Marketing/general/WIPaypal-outside" class="about_paypal"
                                                               onclick="javascript:window.open('https://www.paypal.com/ro/cgi-bin/webscr?cmd=xpt/Marketing/general/WIPaypal-outside',
                                                               'WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?
                                                            </a>
                                                        </label>
                                                        <div class="payment_box payment_method_paypal" style="display:none;">
                                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="form-row place-order">
                                                    <noscript>
                                                        Since your browser does not support JavaScript, or it is disabled, please ensure you click the
                                                        <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.			<br/>
                                                        <button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                                                    </noscript>

                                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                                        <div class="woocommerce-privacy-policy-text">
                                                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our
                                                                <a href="" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.
                                                            </p>
                                                        </div>
                                                        <div class="woocommerce-terms-and-conditions" style="display: none; max-height: 200px; overflow: auto;">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet nunc vel nulla condimentum laoreet sed non urna.
                                                                Curabitur eu vehicula lectus, ac ornare ante. Pellentesque sodales suscipit arcu vel iaculis. Mauris pretium rutrum convallis.
                                                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec egestas purus id venenatis venenatis.
                                                                Praesent porttitor ornare neque, ac hendrerit ligula lobortis iaculis. Sed lectus purus, facilisis id nisi eget, ultricies varius elit.
                                                                Mauris ultrices, ipsum sit amet tempus condimentum, eros tellus egestas tortor, at varius ante quam quis nibh. Proin tortor tellus,
                                                                fringilla at fringilla consectetur, porta vel velit. Sed et elit eget urna efficitur tincidunt a ut mi.
                                                                Ut tristique tincidunt nulla quis pretium. Curabitur et dui sed massa cursus efficitur a sed leo. In hac habitasse platea dictumst.
                                                                Integer mollis ligula ac tempor fermentum. Proin id mauris ac mauris bibendum ultrices.
                                                            </p>
                                                            <p>
                                                                Duis mauris metus, imperdiet non metus id, rhoncus rhoncus ex. Curabitur in scelerisque magna.
                                                                Ut ipsum eros, cursus nec magna non, mollis interdum nisl. Maecenas congue dignissim lectus nec iaculis.
                                                                Integer leo eros, accumsan in dolor id, blandit tincidunt nibh. Aliquam in nulla in velit vestibulum eleifend vitae et lacus.
                                                                Donec urna odio, accumsan sed risus eget, molestie ullamcorper quam. Donec elit sem, pretium fermentum tempor et, ultrices ut ex.
                                                                Donec molestie tellus turpis, hendrerit euismod leo suscipit non. Sed et orci eu velit molestie hendrerit. Praesent gravida pellentesque purus,
                                                                id feugiat orci sollicitudin vel. Morbi varius dolor nisl, ac egestas sapien tincidunt eget. Donec ullamcorper elit et dolor maximus venenatis.
                                                                Maecenas pretium orci id dui laoreet lobortis. Integer varius tincidunt felis in hendrerit. Aliquam id mauris velit.
                                                            </p>
                                                            <p>
                                                                Morbi scelerisque sed eros id pulvinar. Nulla fringilla blandit lacus ac volutpat. Nullam ex leo, tristique id velit vel,
                                                                venenatis tincidunt magna. Nulla facilisi. Aliquam erat volutpat. Cras eget dignissim arcu, non gravida metus. Donec gravida blandit viverra.
                                                                Proin tempor metus vel ligula eleifend consectetur. Nulla nec felis nulla. Integer cursus ipsum ut turpis pretium laoreet. Duis id cursus leo,
                                                                a elementum dolor. Duis nec arcu odio. Pellentesque diam odio, accumsan ut tristique viverra, euismod ac neque. Praesent venenatis mi id purus porttitor sodales.
                                                            </p>
                                                        </div>
                                                        <p class="form-row validate-required">
                                                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" id="terms">
                                                                <span class="woocommerce-terms-and-conditions-checkbox-text">I have read and agree to the website
                                                                    <a href="" class="woocommerce-terms-and-conditions-link" target="_blank">terms and conditions</a>
                                                                </span>&nbsp;
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="hidden" name="terms-field" value="1">
                                                        </p>
                                                    </div>


                                                    <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>

                                                    <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="a79c89f08a">
                                                    <input type="hidden" name="_wp_http_referer" value="/villenoir/?wc-ajax=update_order_review">
                                                </div>
                                            </div>
                                    </form>


                                </div><!-- .entry-content -->
                            </div>
                        </article><!-- #post -->
                    </div><!-- end page container -->

                </div><!-- .row -->
            </div><!-- .container -->
        </section>
        @include('partials.footer')

        <livewire:side-cart/>
        <div class="click-capture"></div>

        <div id="fullscreen-searchform">
            <button type="button" class="close">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="12" height="12" viewBox="1.1 1.1 12 12" enable-background="new 1.1 1.1 12 12" xml:space="preserve"><path d="M8.3 7.1l4.6-4.6c0.3-0.3 0.3-0.8 0-1.2 -0.3-0.3-0.8-0.3-1.2 0L7.1 5.9 2.5 1.3c-0.3-0.3-0.8-0.3-1.2 0 -0.3 0.3-0.3 0.8 0 1.2L5.9 7.1l-4.6 4.6c-0.3 0.3-0.3 0.8 0 1.2s0.8 0.3 1.2 0L7.1 8.3l4.6 4.6c0.3 0.3 0.8 0.3 1.2 0 0.3-0.3 0.3-0.8 0-1.2L8.3 7.1z"></path></svg>
            </button>
            <form method="get" id="searchform" class="" action="http://127.0.0.1:81/wordpress/">
                <input type="search" value="" placeholder="Search for products" name="s" id="s" />
                <button type="submit" id="searchsubmit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <a href="#site-top" class="scrollup">
            <svg class="icon icon-scrollup" id="icon-scrollup" viewBox="0 0 45 45" width="100%" height="100%">
                <g fill="none" fill-rule="evenodd">
                    <path d="M22.966 14.75v18.242H22V14.86l-2.317 2.317-.683-.684 3-3v-.26h.261l.232-.233.045.045.045-.045.232.232h.151v.152l3.11 3.11-.683.683-2.427-2.427z" fill="#ffffff"></path>
                </g>
            </svg>
        </a>

    </div>
@endsection

@section('scripts')
@endsection
