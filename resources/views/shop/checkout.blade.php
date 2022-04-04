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
                                    @if($errors->count() > 0)
                                        @foreach ($errors->all() as $error)
                                            <div>{{ $error }}</div>
                                        @endforeach
                                    @endif

                                    <form name="checkout" method="post"
                                          class="checkout woocommerce-checkout col-md-12"
                                          action="{{route('place-order')}}">
                                        @csrf
                                        <input type="hidden" name="m_payment_id" value="{{Str::random(4)}}">
                                        <input type="hidden" name="amount" value="{{number_format(Cart::getTotal())}}">
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
                                                            <label for="billing_country" class="">Country<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                    <select name="billing_country" id="billing_country" class="form-control">
                                                                        <option value="SA">South Africa</option>
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
                                                            <label for="billing_phone" class="">Phone&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel"></span>
                                                        </p>
                                                        <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110">
                                                            <label for="billing_email" class="">Email address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="" autocomplete="email">
                                                            </span>
                                                        </p>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-2">
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
                                                                    <bdi>{{number_format($item['price'])}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR</span></bdi>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    @if(Cart::getContent()->count() === 1 && collect(Cart::getContent()->toArray())->first()['quantity'] === 6)
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                &nbsp;&nbsp;Shipping Cost
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi>{{number_format(120)}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR</span></bdi>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @else
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            &nbsp;&nbsp;
                                                            No Item in Cart
                                                        </td>
                                                        <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi>0&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR</span></bdi>
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
                                                             @if(Cart::getContent()->count() === 1 && collect(Cart::getContent()->toArray())->first()['quantity'] === '6')
                                                                <bdi>{{number_format(Cart::getSubTotal() + 120)}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR</span></bdi>
                                                            @else
                                                                <bdi>{{number_format(Cart::getSubTotal())}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR</span></bdi>
                                                            @endif
                                                        </span>
                                                    </td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                                @if(Cart::getContent()->count() === 1 && collect(Cart::getContent()->toArray())->first()['quantity'] === '6')
                                                                <bdi>{{number_format(Cart::getTotal() +120)}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR</span></bdi>
                                                                @else
                                                                <bdi>{{number_format(Cart::getTotal())}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR</span></bdi>
                                                                @endif
                                                            </span>
                                                        </strong>
                                                    </td>
                                                </tr>


                                                </tfoot>
                                            </table>

                                            <input type="hidden" name="lang" value="en">
                                            <div id="payment" class="woocommerce-checkout-payment">
                                                <div class="form-row place-order">

                                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                                        <div class="woocommerce-privacy-policy-text">
                                                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our
                                                                <a href="" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.
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
                                                        <div class="woocomerce-terms-and-conditions" style="padding: 30px 0;">
                                                            <p style="font-size: 14px;">
                                                                <b>Note:</b>
                                                                Minimum procurement: case of 6 bottles. Delivery fee is a flat rate of R120 for all orders and free delivery for orders of 2 cases and more.
                                                                The wine for sale on this website is only for delivery within South Africa
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>



                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                </div><!-- .entry-content -->
                            </div>
                        </article><!-- #post -->
                    </div>
                    <!-- end page container -->

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
