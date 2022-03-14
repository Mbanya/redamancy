@extends('layouts.main')
@section('assets')
@endsection

@section('content')
    <div class="site-wrapper">

        <header class="site-header default">

          @include('partials.nav')


            <!-- Page header image -->
            <!-- End Page header image -->

            <div class="subheader-slider">
                <div class="container">

                    <!-- START Main Slideshow REVOLUTION SLIDER 6.4.6 --><p class="rs-p-wp-fix"></p>
                    <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;">
                        <rs-module id="rev_slider_1_1" style="" data-version="6.4.6">
                            <rs-slides>
                                <rs-slide data-key="rs-1" data-title="Intro">
                                    <img src="{{asset('images/landing/slider-2-background.jpg')}}" title="slide-2-background" width="1440" height="763" class="rev-slidebg tp-rs-img" data-no-retina>
                                    <!---->
                                    <rs-layer
                                        id="slider-1-slide-1-layer-1"
                                        data-type="image"
                                        data-rsp_ch="on"
                                        data-xy="x:r,r,c,c;xo:-100px,-150px,0,0;y:m,m,b,b;yo:0,0,30px,25px;"
                                        data-text="l:22;"
                                        data-dim="w:794px,794px,500,350;h:754px,754px,475,332;"
                                        data-frame_0="x:50px;"
                                        data-frame_1="st:1250;sp:1000;sR:1250;"
                                        data-frame_999="o:0;e:power4.in;st:w;sp:1500;sR:6750;"
                                        style="z-index:8;"
                                    >
{{--                                        <img src="{{asset('images/wine-bottles/slider-bottle-main.png')}}" class="tp-rs-img" width="794" height="754" data-no-retina>--}}
                                    </rs-layer><!--

							--><rs-layer
                                        id="slider-1-slide-1-layer-7"
                                        class="Villenoir-Title-Italic"
                                        data-type="text"
                                        data-color="rgba(255, 255, 255, 1)"
                                        data-rsp_ch="on"
                                        data-xy="x:l,l,c,c;xo:30px,30px,0,0;y:m,m,t,t;yo:-80px,-80px,150px,120px;"
                                        data-text="s:48;l:48;"
                                        data-frame_0="x:-50px;"
                                        data-frame_1="e:power2.out;st:1000;sp:1000;sR:1000;"
                                        data-frame_999="o:0;e:power4.in;st:w;sp:1500;sR:7000;"
                                        style="z-index:5;font-style:italic;font-weight:300;"
                                    >Redamancy Wines
                                    </rs-layer><!--

							-->
                                    <rs-layer
                                        id="slider-1-slide-1-layer-10"
                                        class="Villenoir-Subtitle"
                                        data-type="text"
                                        data-color="rgba(176, 151, 109, 1)"
                                        data-rsp_ch="on"
                                        data-xy="x:l,l,c,c;xo:30px,30px,0,0;y:m,m,t,t;yo:-130px,-130px,100px,80px;"
                                        data-text="s:14;l:20;ls:2px;fw:700;"
                                        data-frame_0="x:-50px;"
                                        data-frame_1="e:power2.out;st:1250;sp:1000;sR:1250;"
                                        data-frame_999="o:0;e:power4.in;st:w;sp:1500;sR:6750;"
                                        style="z-index:6;text-transform:uppercase;font-weight:500;"
                                    >Introducing Redamancy Vineyards
                                    </rs-layer>
                                    <!--

							--><rs-layer
                                        id="slider-1-slide-1-layer-11"
                                        class="Villenoir-Title-Regular"
                                        data-type="text"
                                        data-color="rgba(255, 255, 255, 1)"
                                        data-rsp_ch="on"
                                        data-xy="x:l,l,c,c;xo:30px,30px,0,0;y:m,m,t,t;yo:10px,10px,230px,200px;"
                                        data-text="s:90;l:90;"
                                        data-frame_0="x:-50px;"
                                        data-frame_1="e:power2.out;st:1500;sp:1000;sR:1500;"
                                        data-frame_999="o:0;e:power4.in;st:w;sp:1500;sR:6500;"
                                        style="z-index:7;"
                                    >are a Treat!
                                    </rs-layer><!--
-->						</rs-slide>
                            </rs-slides>
                        </rs-module>
                        <script type="text/javascript">
                            setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1024,778,480],el:[500,500,960,720],gw:[1170,992,768,480],gh:[500,500,960,720],type:'standard',justify:'',layout:'fullscreen',offsetContainer:'',offset:'',mh:"0"});
                            var	revapi1,
                                tpj;
                            function revinit_revslider11() {
                                jQuery(function() {
                                    tpj = jQuery;
                                    revapi1 = tpj("#rev_slider_1_1");
                                    if(revapi1==undefined || revapi1.revolution == undefined){
                                        revslider_showDoubleJqueryError("rev_slider_1_1");
                                    }else{
                                        revapi1.revolution({
                                            DPR:"dpr",
                                            sliderLayout:"fullscreen",
                                            visibilityLevels:"1240,1024,778,480",
                                            gridwidth:"1170,992,768,480",
                                            gridheight:"500,500,960,720",
                                            perspective:600,
                                            perspectiveType:"local",
                                            editorheight:"500,500,960,720",
                                            responsiveLevels:"1240,1024,778,480",
                                            progressBar:{disableProgressBar:true},
                                            navigation: {
                                                keyboardNavigation:true,
                                                keyboard_direction:"vertical",
                                                mouseScrollNavigation:true,
                                                wheelCallDelay:1000,
                                                onHoverStop:false
                                            },
                                            fallbacks: {
                                                allowHTML5AutoPlayOnAndroid:true
                                            },
                                        });
                                    }

                                });
                            } // End of RevInitScript
                            var once_revslider11 = false;
                            if (document.readyState === "loading")
                            {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11 ) { once_revslider11 = true; revinit_revslider11();}});} else {once_revslider11 = true; revinit_revslider11();}
                        </script>
                    </rs-module-wrap>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </header>
        <!-- End Header. Begin Template Content -->
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">


                        <article id="post-193" class="post-193 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                     data-vc-stretch-content="true"
                                     class="vc_row wpb_row vc_row-fluid gg-force-background-left vc_custom_1617302572453 vc_row-has-fill vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6" style="margin-top: -3%">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1617353560917">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                            <img width="633" height="800" src="{{asset('images/landing/landing.jpg')}}"
                                                                 class="vc_single_image-img attachment-full" alt=""
                                                                 loading="lazy" srcset="images/landing/landing.jpg 633w, images/landing/landing.jpg 200w"
                                                                 sizes="(max-width: 500) 100vw, 633px" />
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                        <div class="vc_column-inner vc_custom_1460549807462">
                                            <div class="wpb_wrapper">
                                                <div class="title-subtitle-box" style="margin-bottom:60px; text-align: left;">
                                                    <p style="">Message from proprietors and wine lovers</p>
                                                    <h1 style=" font-style: normal;">A NEW BREED OF WINE PRODUCERS</h1>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element " >
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            Redamancy is classical Latin and pronounced as ‘RED-uh-man-see’ meaning the act of loving the one who loves you,
                                                            a love returned in full.  The word best describes reciprocal love.
                                                        </p>
                                                       <p>
                                                           Our wines are the ultimate expression of our relationship – our mutual redamancy extends to our wine.
                                                           The wines are produced from carefully farmed premium grapes; the 2021 Chardonnay grapes are sourced from the South Coast,
                                                           particularly in pursuit of distinctively cool climate Chardonnay.  While the Cabernet Sauvignon is from Devon Valley,
                                                           from a farm neighbouring the home of Redamancy Vineyards and Wines.
                                                           We are proud to present our first two wines in 2022, both wines fermented under their natural yeasts.
                                                       </p>

                                                    </div>
                                                </div>

                                                <div  class="wpb_single_image wpb_content_element vc_align_center">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">
                                                            <img width="302" height="99" src="{{asset('images/signature/redamancy-signature.jpg')}}" class="vc_single_image-img attachment-full" alt=""
                                                            loading="lazy" srcset="{{asset('images/signature/redamancy-signature.jpg')}} 302w, {{asset('images/signature/redamancy-signature.jpg')}} 300w"
                                                                 sizes="(max-width: 302px) 100vw, 302px" />
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1458035087061 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                        <div class="vc_column-inner vc_custom_1460628359633">
                                            <div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1617357504438">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">
                                                            <img width="1500" height="2299" src="{{asset('images/landing/white-wine-landing.png')}}" class="vc_single_image-img attachment-full" alt="" loading="lazy"
                                                            srcset="images/landing/white-wine-landing.png 1500w, images/landing/white-wine-landing.png 196w, images/landing/white-wine-landing.png 668w, images/landing/white-wine-landing.png 768w,
                                                             images/landing/white-wine-landing.png 1002w, images/landing/white-wine-landing.png 1336w" sizes="(max-width: 1500px) 100vw, 1500px" />
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                        <div class="vc_column-inner vc_custom_1460628348165">
                                            <div class="wpb_wrapper">
                                                <div class="title-subtitle-box" style=" margin-bottom:5px; text-align: left;">
                                                    <h2 style=" font-style: normal;">2021</h2>
                                                </div>
                                                <div class="title-subtitle-box  vc_custom_1639980038304" style=" margin-bottom:90px; text-align: left;">
                                                    <p  style="">Current release</p>
                                                    <h1 style=" font-style: normal;">Chardonnay</h1>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1457619221167" >
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            A creamy textured and subtly oaked Chardonnay showcasing nuances of lime and vanilla pod.
                                                            The intriguing savoury character is a reflection of the special terroir where this wine
                                                            finds its roots at the South Coast under a mist of sea air.
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container vc_btn3-inline vc_custom_1617350478559" >
                                                    <a style="background-color:#b0976d; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="" title="Redamancy Cabernet Sauvignon">Discover</a>
                                                </div>
                                                <div class="vc_btn3-container vc_btn3-inline vc_custom_1617350497245">
                                                    <a style="background-color:#000000; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="{{route('shop.index')}}" title="Wines">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix">

                                </div>

                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1458035087061 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                        <div class="vc_column-inner vc_custom_1460628348165">
                                            <div class="wpb_wrapper">
                                                <div class="title-subtitle-box" style=" margin-bottom:5px; text-align: left;">
                                                    <h2 style=" font-style: normal;">2021</h2>
                                                </div>
                                                <div class="title-subtitle-box  vc_custom_1639980038304" style=" margin-bottom:90px; text-align: left;">
                                                    <p  style="">Current release</p>
                                                    <h1 style=" font-style: normal;">Cabernet Sauvignon</h1>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element vc_custom_1457619221167">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            Coming Soon
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container vc_btn3-inline vc_custom_1617350478559" >
                                                    <a style="background-color:#b0976d; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="" title="Redamancy Cabernet Sauvignon">Discover</a>
                                                </div>
                                                <div class="vc_btn3-container vc_btn3-inline vc_custom_1617350497245">
                                                    <a style="background-color:#000000; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="{{route('shop.index')}}" title="Wines">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                        <div class="vc_column-inner vc_custom_1460628359633">
                                            <div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1617357504438">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">
                                                            <img width="1500" height="2299" src="{{asset('images/landing/red-wine-landing.png')}}" class="vc_single_image-img attachment-full" alt="" loading="lazy"
                                                                 srcset="images/landing/red-wine-landing.png 1500w, images/landing/red-wine-landing.png 196w,
                                                                  images/landing/red-wine-landing.png 668w, images/landing/red-wine-landing.png 768w,
                                                                   images/landing/red-wine-landing.png 1002w,
                                                                  images/landing/red-wine-landing.png 1336w" sizes="(max-width: 1500px) 100vw, 1500px" />
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>

                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1458035087061 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                        <div class="vc_column-inner vc_custom_1460628359633">
                                            <div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1617357504438">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">
                                                            <img width="1500" height="2299" src="{{asset('images/shop/cabernet-sauvignon-reserver.png')}}" class="vc_single_image-img attachment-full" alt="" loading="lazy"
                                                                 srcset="images/shop/cabernet-sauvignon-reserver.png 1500w, images/shop/cabernet-sauvignon-reserver.png 196w,
                                                                  images/shop/cabernet-sauvignon-reserver.png 668w, images/shop/cabernet-sauvignon-reserver.png 768w,
                                                                  images/shop/cabernet-sauvignon-reserver.png 1002w,
                                                                   images/shop/cabernet-sauvignon-reserver.png 1336w"
                                                                 sizes="(max-width: 1500px) 100vw, 1500px" />
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                        <div class="vc_column-inner vc_custom_1460628348165">
                                            <div class="wpb_wrapper">
                                                <div class="title-subtitle-box" style=" margin-bottom:5px; text-align: left;">
                                                    <h2 style=" font-style: normal;">2021</h2>
                                                </div>
                                                <div class="title-subtitle-box  vc_custom_1639980038304" style=" margin-bottom:90px; text-align: left;">
                                                    <p  style="">Current release</p>
                                                    <h1 style=" font-style: normal;">Cabernet Sauvignon Reserve</h1>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1457619221167" >
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            Coming Soon
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container vc_btn3-inline vc_custom_1617350478559" >
                                                    <a style="background-color:#b0976d; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="" title="Redamancy Cabernet Sauvignon">Discover</a>
                                                </div>
                                                <div class="vc_btn3-container vc_btn3-inline vc_custom_1617350497245">
                                                    <a style="background-color:#000000; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="{{route('shop.index')}}" title="Wines">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix">

                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1458035087061 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                        <div class="vc_column-inner vc_custom_1460628348165">
                                            <div class="wpb_wrapper">
                                                <div class="title-subtitle-box" style=" margin-bottom:5px; text-align: left;">
                                                    <h2 style=" font-style: normal;">2022</h2>
                                                </div>
                                                <div class="title-subtitle-box  vc_custom_1639980038304" style=" margin-bottom:90px; text-align: left;">
                                                    <p  style="">Current release</p>
                                                    <h1 style=" font-style: normal;">Olive Oil</h1>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element vc_custom_1457619221167">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            Coming Soon
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container vc_btn3-inline vc_custom_1617350478559" >
                                                    <a style="background-color:#b0976d; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="" title="Redamancy Cabernet Sauvignon">Discover</a>
                                                </div>
                                                <div class="vc_btn3-container vc_btn3-inline vc_custom_1617350497245">
                                                    <a style="background-color:#000000; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="{{route('shop.index')}}" title="Wines">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                        <div class="vc_column-inner vc_custom_1460628359633">
                                            <div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1617357504438">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">

                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>

{{--                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1457626757165 vc_row-has-fill">--}}
{{--                                    <div class="wpb_column vc_column_container vc_col-sm-12">--}}
{{--                                        <div class="vc_column-inner">--}}
{{--                                            <div class="wpb_wrapper">--}}
{{--                                                <div class="vc_widget vc_widget_instagram">--}}
{{--                                                    <div class="widget gg-instagram-feed">--}}
{{--                                                        <br />--}}

{{--                                                        <div class="media">--}}
{{--                                                            <div class="media-left">--}}
{{--                                                                <h2 class="widgettitle">Instagram</h2>--}}
{{--                                                                <p class="followers">10K <span>Instagram Followers</span>--}}
{{--                                                                </p>--}}

{{--                                                            </div> <!-- .media-left -->--}}

{{--                                                            <div class="media-body">--}}

{{--                                                                <div id="sb_instagram" class="sbi sbi_col_3  sbi_width_resp" style="width: 100%;" data-feedid="sbi_#6"--}}
{{--                                                                     data-res="auto" data-cols="3" data-num="6"--}}
{{--                                                                     data-shortcode-atts="{&quot;num&quot;:&quot;6&quot;,&quot;imagepadding&quot;:&quot;0&quot;,&quot;cols&quot;:&quot;3&quot;,&quot;hoverdisplay&quot;:&quot;likes&quot;,&quot;showheader&quot;:&quot;false&quot;,&quot;showbutton&quot;:&quot;false&quot;,&quot;showfollow&quot;:&quot;false&quot;}"  data-postid="193" data-locatornonce="831af2ae97" data-sbi-flags="favorLocal">--}}

{{--                                                                    <div id="sbi_images">--}}
{{--                                                                    </div>--}}

{{--                                                                    <div id="sbi_load">--}}



{{--                                                                    </div>--}}

{{--                                                                    <span class="sbi_resized_image_data" data-feed-id="sbi_#6" data-resized="[]">--}}
{{--	</span>--}}
{{--                                                                </div>--}}

{{--                                                            </div><!-- .media-body -->--}}
{{--                                                        </div><!-- .media -->--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div><!-- .entry-content -->


                        </article><!-- #post -->
                    </div><!-- end page container -->

                </div><!-- .row -->
            </div><!-- .container -->
        </section>



        @include('partials.footer')
        <livewire:side-cart/>
        <div class="click-capture"></div>


        <a href="#site-top" class="scrollup">
            <svg class="icon icon-scrollup" id="icon-scrollup" viewBox="0 0 45 45" width="100%" height="100%">
                <g fill="none" fill-rule="evenodd">
                    <path d="M22.966 14.75v18.242H22V14.86l-2.317 2.317-.683-.684 3-3v-.26h.261l.232-.233.045.045.045-.045.232.232h.151v.152l3.11 3.11-.683.683-2.427-2.427z" fill="#ffffff"></path>
                </g>
            </svg>
        </a>

    </div><!-- .site-wrapper -->
@endsection

@section('scripts')
@endsection
