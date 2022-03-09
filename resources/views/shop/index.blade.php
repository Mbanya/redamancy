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
                                    Wines
                                </h1>
                                <div class="header-page-description">
                                    <p>
                                        Wine is a treat and Redamancy wines seek to fill your experience with deep affection.
                                    </p>
                                </div>
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
                        @if ($message = Session::get('success'))
                            <div class="woocommerce-notices-wrapper" style="margin: 30px 0">
                                <div class="woocommerce-message" role="alert">
                                    {{ $message }}
                                </div>
                            </div>
                        @endif
                        <p class="woocommerce-result-count">
                            Showing all 3 results
                        </p>
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby" aria-label="Shop order">
                                <option value="menu_order"  selected='selected'>Default sorting</option>
                                <option value="popularity" >Sort by popularity</option>
                                <option value="rating" >Sort by average rating</option>
                                <option value="date" >Sort by latest</option>
                                <option value="price" >Sort by price: low to high</option>
                                <option value="price-desc" >Sort by price: high to low</option>
                            </select>
                            <input type="hidden" name="paged" value="1" />
                        </form>

                        <div class="row">

                            <ul class="products" style="margin: 30px 30px;">
                                @foreach($items as $item)
                                    <li class="col-xs-12 col-sm-6 col-md-6 product type-product post-645 status-publish instock
                                product_cat-red-wines product_tag-red product_tag-wine has-post-thumbnail shipping-taxable purchasable product-type-simple">

                                        <a href="{{route('shop.show',$item->slug)}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">{{$item->product_name}}</h2>
                                            <div class="gg-product-image-wrapper">
                                                <img width="840" height="1335" src="{{$item->product_image}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                     alt="" loading="lazy" srcset="{{$item->product_image}} 840w,
                                                    Red-Cabernet-Sauvignon-w-cup-v2-189x300.png 189w,
                                                    Red-Cabernet-Sauvignon-w-cup-v2-644x1024.png 644w,
                                                    Red-Cabernet-Sauvignon-w-cup-v2-768x1221.png 768w"
                                                     sizes="(max-width: 840px) 100vw, 840px" />
                                            </div>
                                        </a>
                                        <div class="gg-product-meta-wrapper">

                                            <dl>
                                                <dt> Year </dt>
                                                <dd>
                                                    <span class="year">{{$item->vintage}}</span>
                                                </dd>

                                                <dt> Price </dt>
                                                <dd>
                                                <span class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi><span class="woocommerce-Price-currencySymbol">ZAR</span>&nbsp;{{number_format($item->price)}}</bdi>
                                                    </span>
                                                </span>
                                                </dd>
                                            </dl>

                                            <form action="{{route('cart.store')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{$item->id}}" name="id">
                                                <input type="hidden" value="{{$item->product_name}}" name="product_name">
                                                <input type="hidden" value="{{$item->price}}" name="price">
                                                <input type="hidden" value="{{$item->product_image}}" name="image">

                                                <label for="qty">Quantity (Case)</label>
                                                <select name="quantity" id="qty" class="form-control">
                                                    <option value="6">1</option>
                                                    <option value="12">2</option>
                                                    <option value="18">3</option>
                                                    <option value="24">4</option>
                                                    <option value="30">5</option>
                                                </select>

                                                <p style="font-size: 13px; line-height: normal; padding: 30px 0;">
                                                    <b>Note:</b>
                                                    Minimum procurement: case of 6 bottles. Delivery fee is a flat rate of R120 for all orders and free delivery for orders of 2 cases and more.
                                                    The wine for sale on this website is only for delivery within South Africa
                                                </p>

                                                <button class="button product_type_simple add_to_cart_button ajax_add_to_cart" aria-label="{{$item->product_name}}" type="submit">
                                                    Add to cart
                                                </button>
                                            </form>

                                        </div>
                                    </li>
                                @endforeach



                            </ul>
                        </div>

                    </div>
                    <!-- /.villenoir_page_container() -->


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
