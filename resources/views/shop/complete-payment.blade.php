@extends('layouts.main')
@php


@endphp
@section('assets')
    <style>
        .woocommerce .cart .quantity {
            position: relative;
            max-width: 170px;
            float: left;
            margin-right: 30px;
        }
        .woocommerce form label div {
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
                                    Confirm Order
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

                                    <div class="checkout woocommerce-checkout col-md-12" >
                                        <div class="col-md-2">

                                        </div>
                                        <div id="order_review" class="woocommerce-checkout-review-order col-md-8">

                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Subtotal</th>
                                            </tr>
                                            </thead>
                                            <tbody>
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

                                            </tbody>
                                            <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{number_format(Cart::getSubTotal())}}&nbsp;<span class="woocommerce-Price-currencySymbol">ZAR</span></bdi>
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi>

                                                                    {{number_format(Cart::getTotal())}}&nbsp;
                                                                    <span class="woocommerce-Price-currencySymbol">ZAR</span></bdi>
                                                            </span>
                                                    </strong>
                                                </td>
                                            </tr>


                                            </tfoot>
                                        </table>
                                                 {!! $htmlForm !!}
                                        </div>
                                        <div class="col-md-2">

                                        </div>
                                    </div>


                                </div><!-- .entry-content -->
                            </div>
                        </article><!-- #post -->

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
