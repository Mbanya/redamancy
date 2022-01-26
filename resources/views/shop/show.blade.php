@extends('layouts.main')
@section('assets')
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1460727920666{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f2f2f2 !important;}
        .vc_custom_1460727927848{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f2f2f2 !important;}
        .vc_custom_1460727935440{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #f2f2f2 !important;}
        .vc_custom_1460636569719{padding: 20% !important;}
        .vc_custom_1460635864072{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}
        .vc_custom_1460727890422{margin-bottom: 0px !important;}.vc_custom_1459091894099{margin-bottom: 0px !important;}
        .vc_custom_1460635871252{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}
        .vc_custom_1460636579755{padding: 20% !important;}
        .vc_custom_1459092021864{margin-bottom: 0px !important;}
        .vc_custom_1460636587092{padding: 20% !important;}
        .vc_custom_1460635878309{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}
        .vc_custom_1459092115753{margin-bottom: 0px !important;}
    </style>
    <noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>

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
                            </div><!-- .page-meta-wrapper -->
                        </div><!-- .col-md-12 -->
                    </div><!-- .row -->
                </div><!-- .container -->

            </div><!-- .page-meta -->

            <!-- Page header image -->
            <!-- End Page header image -->
        </header>
        <!-- End Header. Begin Template Content -->
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div id="product-680" class="product type-product post-680 status-publish first instock product_cat-red-wines product_tag-red product_tag-wine has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="transition: opacity .25s ease-in-out;">
                                        <figure class="woocommerce-product-gallery__wrapper">
                                            <div data-thumb="{{$item->product_image}}"
                                                 data-thumb-alt="" class="woocommerce-product-gallery__image">
                                                <a href="{{$item->product_image}}">
                                                    <img width="840" height="1335" src="{{$item->product_image}}" class="wp-post-image" alt="" loading="lazy"
                                                         title="Dark-blue-Merlot-w-cup-v2" data-caption="" data-src="{{$item->product_image}}"
                                                         data-large_image="{{$item->product_image}}" data-large_image_width="840"
                                                         data-large_image_height="1335" srcset="{{$item->product_image}} 840w,
                                                         {{$item->product_image}} 189w,
                                                         {{$item->product_image}} 644w,
                                                        {{$item->product_image}} 768w" sizes="(max-width: 840px) 100vw, 840px" />
                                                </a>
                                            </div>
                                        </figure>
                                    </div>
                                </div><!-- .col-md-6 -->

                                <div class="col-md-6">
                                    <div class="summary entry-summary">
                                        <h1 class="product_title entry-title">{{$item->product_name}}</h1>
                                        <div itemprop="description">
                                            <p>{{$item->product_description}}</p>
                                        </div>
                                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

                                            <p class="price">
                                                <span class="price-text-prefix">From </span>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">USD</span>&nbsp;{{$item->price}}
                                                    </bdi>
                                                </span>
                                                <span class="bottle-size">/ {{$item->volume}} ml</span>
                                            </p>

                                        </div>
                                        <form action="{{route('cart.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="single_variation_wrap">
                                                <div class="woocommerce-variation single_variation"></div>
                                                <div class="woocommerce-variation-add-to-cart variations_button">
                                            <input type="hidden" value="{{$item->id}}" name="id">
                                            <input type="hidden" value="{{$item->product_name}}" name="product_name">
                                            <input type="hidden" value="{{$item->price}}" name="price">
                                            <input type="hidden" value="{{$item->product_image}}" name="image">

                                            <label for="qty">Quantity</label>
                                            <select name="quantity" id="qty" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>

                                            <button class="button product_type_simple add_to_cart_button ajax_add_to_cart" aria-label="{{$item->product_name}}" type="submit" style="margin-top: 10px; margin-bottom: 10px;">
                                                Add to cart
                                            </button>
                                                </div>
                                            </div>



                                        </form>

                                        <div class="product_meta">


                                            <span class="posted_in">Category: <a href="" rel="tag">Red wines</a></span>


                                        </div>


                                        <table class="woocommerce-product-attributes shop_attributes">
                                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_varietal">
                                                <th class="woocommerce-product-attributes-item__label">VARIETAL</th>
                                                <td class="woocommerce-product-attributes-item__value"><p>{{$item->varietal}} </p>
                                                </td>
                                            </tr>
                                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_appellation">
                                                <th class="woocommerce-product-attributes-item__label">APPELLATION</th>
                                                <td class="woocommerce-product-attributes-item__value"><p>{{$item->appellation}} </p>
                                                </td>
                                            </tr>
                                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_vintage">
                                                <th class="woocommerce-product-attributes-item__label">VINTAGE</th>
                                                <td class="woocommerce-product-attributes-item__value"><p>{{$item->vintage}}</p>
                                                </td>
                                            </tr>
                                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_profile">
                                                <th class="woocommerce-product-attributes-item__label">Profile</th>
                                                <td class="woocommerce-product-attributes-item__value"><p>{{$item->profile}}</p>
                                                </td>
                                            </tr>
                                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_alcohol">
                                                <th class="woocommerce-product-attributes-item__label">ALCOHOL</th>
                                                <td class="woocommerce-product-attributes-item__value"><p>{{$item->alcohol}}%</p>
                                                </td>
                                            </tr>
                                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_volume">
                                                <th class="woocommerce-product-attributes-item__label">VOLUME</th>
                                                <td class="woocommerce-product-attributes-item__value"><p>{{$item->volume}} mL</p>
                                                </td>
                                            </tr>
                                        </table>

                                    </div><!-- .summary -->
                                </div><!-- .col-md-6 -->
                            </div><!-- .row -->


                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1460727920666 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                    <div class="vc_column-inner vc_custom_1460636569719">
                                        <div class="wpb_wrapper">
                                            <div class="title-subtitle-box" style=" text-align: left;">
                                                <p  style="">Wine specs</p>
                                                <h1 style=" font-style: normal;">Tasting notes</h1>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element  vc_custom_1460727890422" >
                                                <div class="wpb_wrapper">
                                                    <p>Deep garnet with a vibrant ruby edge, velvety soft on the palate with bright cherry to plum flavors. This wine is weighty and full of fresh ripe berries with rich, dark accents of cocoa nib. Intriguing and delicious. Aromas of dark chocolate, plum, black cherry, cedar and tarragon jump from the glass.</p>
                                                    <p>A potent perfumed mix of berries, fresh herbs and roasted notes with a bit a mineral. A compelling blend of fresh and bright aroma next the rich and dark.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_hidden-sm vc_hidden-xs">
                                    <div class="vc_column-inner vc_custom_1460635864072">
                                        <div class="wpb_wrapper">
                                            <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1459091894099">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="1400" src="../../wp-content/uploads/2016/03/product-img-1.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-1.jpg 1170w, http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-1-251x300.jpg 251w, http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-1-856x1024.jpg 856w, http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-1-768x919.jpg 768w" sizes="(max-width: 1170px) 100vw, 1170px" /></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1460727927848 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_hidden-sm vc_hidden-xs">
                                    <div class="vc_column-inner vc_custom_1460635871252">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1459092021864">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                        <img width="1170" height="1400" src="../../wp-content/uploads/2016/03/product-img-2.jpg" class="vc_single_image-img attachment-full" alt=""
                                                             loading="lazy" srcset="http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-2.jpg 1170w,
                                                             http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-2-251x300.jpg 251w,
                                                             http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-2-856x1024.jpg 856w,
                                                             http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-2-768x919.jpg 768w" sizes="(max-width: 1170px) 100vw, 1170px" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                    <div class="vc_column-inner vc_custom_1460636579755">
                                        <div class="wpb_wrapper">
                                            <div class="title-subtitle-box" style=" text-align: left;">
                                                <p style="">Wine specs</p>
                                                <h1 style=" font-style: normal;">Food pairing notes</h1>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <p>
                                                        One of our favorite blocks from the Redamancy vineyard. This block tends to lift the aromatic character and soften the palate of
                                                        our Cabernet Sauvignon. We are proud to offer this very limited and barrel selected wine as a stand alone block.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1460727935440 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                    <div class="vc_column-inner vc_custom_1460636587092">
                                        <div class="wpb_wrapper">
                                            <div class="title-subtitle-box  " style=" text-align: left;">
                                                <p  style="">Wine specs</p>
                                                <h1 style=" font-style: normal;">Winemaker notes</h1>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <p>
                                                        Deep garnet with a vibrant ruby edge, velvety soft on the palate with bright cherry to plum flavors.
                                                        This wine is weighty and full of fresh ripe berries with rich, dark accents of cocoa nib.
                                                        Intriguing and delicious.
                                                    </p>
                                                    <p>Aromas of dark chocolate, plum, black cherry, cedar and tarragon jump from the glass.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_hidden-sm vc_hidden-xs">
                                    <div class="vc_column-inner vc_custom_1460635878309">
                                        <div class="wpb_wrapper">
                                            <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1459092115753">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper vc_box_border_grey">
                                                        <img width="1170" height="1400" src="../../wp-content/uploads/2016/03/product-img-3.jpg" class="vc_single_image-img attachment-full"
                                                             alt="" loading="lazy" srcset="http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-3.jpg 1170w,
                                                              http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-3-251x300.jpg 251w,
                                                               http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-3-856x1024.jpg 856w,
                                                                http://127.0.0.1:81/wordpress/wp-content/uploads/2016/03/product-img-3-768x919.jpg 768w"
                                                             sizes="(max-width: 1170px) 100vw, 1170px" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
