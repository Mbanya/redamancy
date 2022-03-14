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
                        <div id="product-645" class="product type-product post-645 status-publish first instock product_cat-red-wines product_tag-red product_tag-wine has-post-thumbnail shipping-taxable purchasable product-type-simple">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="transition: opacity .25s ease-in-out;">
                                        <figure class="woocommerce-product-gallery__wrapper">
                                            <div data-thumb="{{$item->product_image}}"
                                                 data-thumb-alt="" class="woocommerce-product-gallery__image">
                                                <a href="{{$item->product_image}}">
                                                    <img width="840" height="1335" src="{{asset($item->product_image)}}" class="wp-post-image" alt="" loading="lazy"
                                                         title="{{$item->product_name}}" data-caption="" data-src=""
                                                         data-large_image="" data-large_image_width="840"
                                                         data-large_image_height="1335" srcset="{{asset($item->product_image)}} 840w,
                                                         {{asset($item->product_image)}} 189w,
                                                         {{asset($item->product_image)}} 644w,
                                                        {{asset($item->product_image)}} 768w" sizes="(max-width: 840px) 100vw, 840px" />
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
                                                        <span class="woocommerce-Price-currencySymbol">ZAR </span>&nbsp;{{$item->price}}
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

                                            @if($item->product_name === 'Chardonnay')
                                            <span class="posted_in">Category: <a href="" rel="tag">White wines</a></span>
                                            @else
                                            <span class="posted_in">Category: <a href="" rel="tag">Red wines</a></span>
                                            @endif
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
                                                    @if($item->product_name === 'Chardonnay')
                                                    <p>
                                                        A Creamy textured and subtly oaked Chardonnay showcasing nuances of lime and vanilla pod.
                                                        The intriguing savoury character is a reflection of the special terroir where this wine finds its roots.
                                                    </p>
                                                    @else
                                                    <p>
                                                        ......................
                                                    </p>
                                                    @endif

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
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                        @if($item->product_name === 'Chardonnay')
                                                            <img width="1170" height="1400" src="{{asset('images/shop/chardonnay-tasting-notes.png')}}" class="vc_single_image-img attachment-full" alt=""
                                                                 loading="lazy" srcset="{{asset('images/shop/chardonnay-tasting-notes.png')}} 1170w,
                                                              {{asset('images/shop/chardonnay-tasting-notes.png')}} 251w,
                                                               {{asset('images/shop/chardonnay-tasting-notes.png')}} 856w,
                                                                {{asset('images/shop/chardonnay-tasting-notes.png')}} 768w"
                                                                 sizes="(max-width: 1170px) 100vw, 1170px" />
                                                        @else
                                                            <img width="1170" height="1400" src="{{asset('wp-content/uploads/2016/03/product-img-1.jpg')}}" class="vc_single_image-img attachment-full" alt=""
                                                                 loading="lazy" srcset="{{asset('wp-content/uploads/2016/03/product-img-1.jpg')}} 1170w,
                                                                {{asset('wp-content/uploads/2016/03/product-img-1.jpg')}} 251w,
                                                                {{asset('wp-content/uploads/2016/03/product-img-1.jpg')}} 856w,
                                                                {{asset('wp-content/uploads/2016/03/product-img-1.jpg')}} 768w"
                                                                 sizes="(max-width: 1170px) 100vw, 1170px" />
                                                         @endif
                                                    </div>
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
                                                        @if($item->product_name === 'Chardonnay')
                                                        <img width="1170" height="1400" src="{{asset('images/shop/maturation-potential.png')}}" class="vc_single_image-img attachment-full" alt=""
                                                             loading="lazy" srcset="{{asset('images/shop/maturation-potential.png')}} 1170w,
                                                             {{asset('images/shop/maturation-potential.png')}} 251w,
                                                             {{asset('images/shop/maturation-potential.png')}} 856w,
                                                             {{asset('images/shop/maturation-potential.png')}} 768w" sizes="(max-width: 1170px) 100vw, 1170px" />

                                                        @else
                                                            <img width="1170" height="1400" src="{{asset('wp-content/uploads/2016/03/product-img-2.jpg')}}" class="vc_single_image-img attachment-full" alt=""
                                                                 loading="lazy" srcset="{{asset('wp-content/uploads/2016/03/product-img-2.jpg')}} 1170w,
                                                             {{asset('wp-content/uploads/2016/03/product-img-2.jpg')}}251w,
                                                             {{asset('wp-content/uploads/2016/03/product-img-2.jpg')}} 856w,
                                                             {{asset('wp-content/uploads/2016/03/product-img-2.jpg')}} 768w" sizes="(max-width: 1170px) 100vw, 1170px" />
                                                        @endif
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
                                                <h1 style=" font-style: normal;">Maturation Potential</h1>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    @if($item->product_name === 'Chardonnay')
                                                        <p>
                                                            Ready to drink now, but will mature for a further 3 to 5 years.
                                                            <br>
                                                            Serving temperature
                                                            Preferable 10 - 12° C <br>
                                                            <strong>Vineyards</strong> <br>
                                                        </p>
                                                        <ul>
                                                            <li>
                                                                Wine of Origin – Cape South Coast
                                                            </li>
                                                            <li>Soils – Limestone rich soils</li>
                                                            <li>Planted – 2010 & 2011</li>
                                                            <li>Variety – 100% Chardonnay</li>
                                                            <li>Clones – Clone 95 on R99/R110</li>
                                                            <li>Altitude – 100m above sea level</li>
                                                        </ul>

                                                    @else
                                                        <p>
                                                            Ready to drink now, but will mature for a further 5 to 10 years.
                                                            <br>
                                                            Serving temperature
                                                            Preferable 14 - 18° C

                                                        </p>
                                                        <ul>
                                                            <li>
                                                                Wine of Origin – Stellenbosch, Devon Valley
                                                            </li>
                                                            <li> Soils – ….</li>
                                                            <li>Planted – …..</li>
                                                            <li>Variety – 100% Cabernet Sauvignon</li>
                                                            <li>Clones –</li>
                                                            <li>Altitude – ……00m above sea level</li>
                                                        </ul>
                                                    @endif


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

                                                    @if($item->product_name === 'chardonnay')
                                                        <p>
                                                            Harvested by hand on 2 March 2021. Chilled overnight and selected manually on selection table before destemming.
                                                            Pressed on 3 March 2021. Natural fermentation was done in 300 litre French oak barrels and matured for 9 months on the lees.
                                                            No yeast or enzymes were added. Bottled in December 2021. Our winemaker is Guillaume Nell.
                                                        </p>
                                                    @else
                                                        <p>
                                                            Harvested by hand on March 2021 and selected manually on selection table before destemming.
                                                            Natural fermentation was done in 225, 300 and 500 litre French oak barrels, 30% new oak.
                                                            Matured for 15 months on the lees. No yeast or enzymes were added. Bottled in …… 2022.
                                                            Our winemaker is Guillaume Nell.
                                                        </p>
                                                    @endif


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
                                                        @if($item->product_name === 'Chardonnay')
                                                        <img width="1170" height="1400" src="{{asset('images/shop/winemaker-notes.png')}}" class="vc_single_image-img attachment-full"
                                                             alt="" loading="lazy" srcset="{{asset('images/shop/winemaker-notes.png')}} 1170w,
                                                              {{asset('images/shop/winemaker-notes.png')}} 251w,
                                                               {{asset('images/shop/winemaker-notes.png')}} 856w,
                                                               {{asset('images/shop/winemaker-notes.png')}} 768w"
                                                             sizes="(max-width: 1170px) 100vw, 1170px" />
                                                        @else
                                                            <img width="1170" height="1400" src="{{asset('wp-content/uploads/2016/03/product-img-3.jpg')}}"
                                                                 class="vc_single_image-img attachment-full"
                                                                 alt="" loading="lazy" srcset="{{asset('wp-content/uploads/2016/03/product-img-3.jpg')}} 1170w,
                                                                {{asset('wp-content/uploads/2016/03/product-img-3.jpg')}} 251w,
                                                                {{asset('wp-content/uploads/2016/03/product-img-3.jpg')}} 856w,
                                                                {{asset('wp-content/uploads/2016/03/product-img-3.jpg')}} 768w"
                                                                 sizes="(max-width: 1170px) 100vw, 1170px" />
                                                        @endif
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
            <form method="get" id="searchform" class="" action="">
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
