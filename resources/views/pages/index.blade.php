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
                                    <img src="wp-content/uploads/2016/03/slide-1-background.jpg" title="slide-1-background" width="1440" height="763" class="rev-slidebg tp-rs-img" data-no-retina>
                                    <!--
                                                                --><rs-layer
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
                                    ><img src="{{asset('images/wine-bottles/slider-bottle.png')}}" class="tp-rs-img" width="794" height="754" data-no-retina>
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
                                        style="z-index:5;font-family:Playfair Display;font-style:italic;font-weight:300;"
                                    >Refinement
                                    </rs-layer><!--

							--><rs-layer
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
                                        style="z-index:6;font-family:Lato;text-transform:uppercase;font-weight:500;"
                                    >Introducing Redamancy Wines
                                    </rs-layer><!--

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
                                        style="z-index:7;font-family:Playfair Display;"
                                    >in a bottle
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
                            if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11 ) { once_revslider11 = true; revinit_revslider11();}});} else {once_revslider11 = true; revinit_revslider11();}
                        </script>
                    </rs-module-wrap>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
            <div class="clearfix"></div>



        </header>
        <!-- End Header. Begin Template Content -->
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">


                        <article id="post-193" class="post-193 page type-page status-publish hentry">


                            <div class="entry-content">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid gg-force-background-left vc_custom_1617302572453 vc_row-has-fill vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1617353560917">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="633" height="980" src="{{asset('images/our-story/man-woman-dogs.jpg')}}" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="images/our-story/man-woman-dogs.jpg 633w, images/our-story/man-woman-dogs.jpg 200w" sizes="(max-width: 633px) 100vw, 633px" /></div>
                                                    </figure>
                                                </div>
                                            </div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1460549807462"><div class="wpb_wrapper">
                                                <div class="title-subtitle-box  vc_custom_1639980014165" style=" margin-bottom:90px; text-align: left;">
                                                    <p  style="">Message from Redamancy</p>
                                                    <h1 style=" font-style: normal;">A New Generation of Winemakers</h1>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element " >
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            The journey began in 2010 frequenting the same distinctive spot in Devon Valley, this ritual inspired an imagined life of making wine,
                                                            sharing it with family and friends, taking long walks with our Golden Retrievers, and ending the day with our own glass of wine.
                                                            We are Marc and Antoinette the founders of Redamancy Vineyards.
                                                        </p>
                                                       <p>
                                                           Redamancy means a love returned in full; an act of loving the one who loves you. Our wines are the ultimate expression of our relationship -
                                                           this reciprocal love for each other extends to our land, and the grapes.  Reared from the spirit of companionship, poetry,
                                                           commitment and our ideal wine making philosophy, Redamancy wines seeks to fill your experience with love
                                                       </p>

                                                    </div>
                                                </div>

                                                <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1617357445182">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="302" height="99" src="wp-content/uploads/2021/04/signature-black-171.png" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="wp-content/uploads/2021/04/signature-black-171.png 302w, wp-content/uploads/2021/04/signature-black-171-300x98.png 300w" sizes="(max-width: 302px) 100vw, 302px" /></div>
                                                    </figure>
                                                </div>
                                            </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1458035087061 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1460628359633"><div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1617357504438">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1500" height="2299" src="{{asset('images/wine-bottles/Chardonnay Redamancy_Bottles_Branding_Front_2021.jpg')}}" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="wp-content/uploads/2021/04/current-release-181.png 1500w, wp-content/uploads/2021/04/current-release-181-196x300.png 196w, wp-content/uploads/2021/04/current-release-181-668x1024.png 668w, wp-content/uploads/2021/04/current-release-181-768x1177.png 768w, wp-content/uploads/2021/04/current-release-181-1002x1536.png 1002w, wp-content/uploads/2021/04/current-release-181-1336x2048.png 1336w" sizes="(max-width: 1500px) 100vw, 1500px" /></div>
                                                    </figure>
                                                </div>
                                            </div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1460628348165"><div class="wpb_wrapper">
                                                <div class="title-subtitle-box  " style=" margin-bottom:5px; text-align: left;">
                                                    <h2 style=" font-style: normal;">2015</h2>
                                                </div>
                                                <div class="title-subtitle-box  vc_custom_1639980038304" style=" margin-bottom:90px; text-align: left;">
                                                    <p  style="">Current release</p>
                                                    <h1 style=" font-style: normal;">Cabernet Sauvignon</h1>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1457619221167" >
                                                    <div class="wpb_wrapper">
                                                        <p>Served well-chilled our authentically made Redamancy Cabernet Sauvignon is a refreshingly delicate dry wine with hints of strawberry, citrus, and peach laced fruit.</p>

                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container vc_btn3-inline vc_custom_1617350478559" ><a style="background-color:#b0976d; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="" title="Redamancy Cabernet Sauvignon">Discover</a></div><div class="vc_btn3-container vc_btn3-inline vc_custom_1617350497245" ><a style="background-color:#000000; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="http://okthemes.com/villenoirdemonew/wines/" title="Wines">View all</a></div>
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1458032377294" >
                                                    <div class="wpb_wrapper">
                                                        <p>Speak to a customer care specialist at:<br />
                                                            <a href="#"></a>.</p>

                                                    </div>
                                                </div>
                                            </div></div></div></div>
                                <div class="vc_row-full-width vc_clearfix">

                                </div>

                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1617302641081 vc_row-has-fill vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-8 vc_col-md-8"><div class="vc_column-inner vc_custom_1460370683208"><div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_left   force-90-width-large-screen">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="807" height="253" src="wp-content/uploads/2021/04/red-bottle-171.png" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="wp-content/uploads/2021/04/red-bottle-171.png 807w, wp-content/uploads/2021/04/red-bottle-171-300x94.png 300w, wp-content/uploads/2021/04/red-bottle-171-768x241.png 768w" sizes="(max-width: 807px) 100vw, 807px" /></div>
                                                    </figure>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                                <div class="counter-holder media  " style="text-align:center;   ">
                                                                    <div class="counter-content media-body">
                                                                        <span style=" font-size:60px;" class="counter" data-number="5" data-interval="100" data-speed="1500">5</span>
                                                                        <p >Varietals</p>
                                                                    </div>
                                                                </div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                                <div class="counter-holder media  " style="text-align:center;   ">
                                                                    <div class="counter-content media-body">
                                                                        <span style=" font-size:60px;" class="counter" data-number="162" data-interval="100" data-speed="1500">162</span>
                                                                        <p >Wine produced</p>
                                                                    </div>
                                                                </div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                                <div class="counter-holder media  " style="text-align:center;   ">
                                                                    <div class="counter-content media-body">
                                                                        <span style=" font-size:60px;" class="counter" data-number="48" data-interval="100" data-speed="1500">48</span>
                                                                        <p >Awards won</p>
                                                                    </div>
                                                                </div> </div></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-4 vc_col-md-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1617358182464"><div class="wpb_wrapper">
                                                <div class="title-subtitle-box  " style=" text-align: left;">
                                                    <p  style="">Varieties</p>
                                                    <h2 style=" font-style: normal;">The Reds</h2>
                                                </div>
                                                <div class="gg_list list_style_line  ">
                                                    <ul>
                                                        <li>Cabernet Sauvignon</li>
                                                        <li>Merlot</li>
                                                        <li>Pinot Noir</li>
                                                    </ul>
                                                </div><div class="vc_btn3-container vc_btn3-inline vc_custom_1617350580088" ><a style="background-color:#000000; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="http://okthemes.com/villenoirdemonew/product-category/red-wines/" title="">Shop now</a></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1617302742710 reverse_columns_mobile vc_row-has-fill vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-4 vc_col-md-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1617358237740"><div class="wpb_wrapper">
                                                <div class="title-subtitle-box  " style=" text-align: left;">
                                                    <p  style="">Varieties</p>
                                                    <h2 style=" font-style: normal;">The Whites</h2>
                                                </div>
                                                <div class="gg_list list_style_line  ">
                                                    <ul>
                                                        <li>Chardonnay</li>
                                                        <li>Sauvignon Blanc</li>
                                                        <li>Riesling</li>
                                                    </ul>
                                                </div><div class="vc_btn3-container vc_btn3-inline vc_custom_1617350592249" ><a style="background-color:#000000; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href=" title="">Shop now</a></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-8 vc_col-md-8"><div class="vc_column-inner vc_custom_1460370664276"><div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_right   force-90-width-large-screen">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                            <img width="807" height="291" src="wp-content/uploads/2021/04/white-bottle-171.png" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="wp-content/uploads/2021/04/white-bottle-171.png 807w, wp-content/uploads/2021/04/white-bottle-171-300x108.png 300w, wp-content/uploads/2021/04/white-bottle-171-768x277.png 768w" sizes="(max-width: 807px) 100vw, 807px" /></div>
                                                    </figure>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                                <div class="counter-holder media  " style="text-align:center;   ">
                                                                    <div class="counter-content media-body">
                                                                        <span style=" font-size:60px;" class="counter" data-number="5" data-interval="100" data-speed="1500">5</span>
                                                                        <p >Varietals</p>
                                                                    </div>
                                                                </div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                                <div class="counter-holder media  " style="text-align:center;   ">
                                                                    <div class="counter-content media-body">
                                                                        <span style=" font-size:60px;" class="counter" data-number="162" data-interval="100" data-speed="1500">162</span>
                                                                        <p >Wine produced</p>
                                                                    </div>
                                                                </div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                                <div class="counter-holder media  " style="text-align:center;   ">
                                                                    <div class="counter-content media-body">
                                                                        <span style=" font-size:60px;" class="counter" data-number="48" data-interval="100" data-speed="1500">48</span>
                                                                        <p >Awards won</p>
                                                                    </div>
                                                                </div> </div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1617302734517 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1460370846525"><div class="wpb_wrapper">
                                                <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1617353596057">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                            <img width="1170" height="1400" src="wp-content/uploads/2021/04/estate-tasting-11-17.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="wp-content/uploads/2021/04/estate-tasting-11-17.jpg 1170w, wp-content/uploads/2021/04/estate-tasting-11-17-251x300.jpg 251w, wp-content/uploads/2021/04/estate-tasting-11-17-856x1024.jpg 856w, wp-content/uploads/2021/04/estate-tasting-11-17-768x919.jpg 768w" sizes="(max-width: 1170px) 100vw, 1170px" />
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div></div></div>
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1466409537918">
                                            <div class="wpb_wrapper">
                                                <div class="title-subtitle-box" style=" margin-bottom:90px; text-align: center;">
                                                    <p  style="">The estate</p>
                                                    <h1 style=" font-style: normal;">Tasting &amp; Tours</h1>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1457626016290" >
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing. Cras vel iaculis urna. Cras bibendum ex id dolor facilisis, in tempor lacus dapibus.</p>

                                                    </div>
                                                </div>
                                                <div class="vc_btn3-container vc_btn3-center" >
                                                    <a style="background-color:#000000; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom" href="" title="The estate">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1617302663690 reverse_columns_mobile vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"><div class="order-1 wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1566978619501"><div class="wpb_wrapper"></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1457626757165 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_widget vc_widget_instagram"><div class="widget gg-instagram-feed"><br />

                                                        <div class="media">
                                                            <div class="media-left">
                                                                <h2 class="widgettitle">Instagram</h2>
                                                                <p class="followers">24K     <span>Instagram Followers</span>
                                                                </p>

                                                            </div> <!-- .media-left -->

                                                            <div class="media-body">

                                                                <div id="sb_instagram" class="sbi sbi_col_3  sbi_width_resp" style="width: 100%;" data-feedid="sbi_#6" data-res="auto" data-cols="3" data-num="6" data-shortcode-atts="{&quot;num&quot;:&quot;6&quot;,&quot;imagepadding&quot;:&quot;0&quot;,&quot;cols&quot;:&quot;3&quot;,&quot;hoverdisplay&quot;:&quot;likes&quot;,&quot;showheader&quot;:&quot;false&quot;,&quot;showbutton&quot;:&quot;false&quot;,&quot;showfollow&quot;:&quot;false&quot;}"  data-postid="193" data-locatornonce="831af2ae97" data-sbi-flags="favorLocal">

                                                                    <div id="sbi_images">
                                                                    </div>

                                                                    <div id="sbi_load">



                                                                    </div>

                                                                    <span class="sbi_resized_image_data" data-feed-id="sbi_#6" data-resized="[]">
	</span>
                                                                </div>

                                                            </div><!-- .media-body -->
                                                        </div><!-- .media -->

                                                    </div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid center-text vc_custom_1458048524081 vc_row-has-fill vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1458045278797"><div class="wpb_wrapper">
                                                <div class="title-subtitle-box  " style=" text-align: center;">
                                                    <p  style="">Be connected</p>
                                                    <h1 style=" font-style: normal;">Join Our Newsletter</h1>
                                                </div> <div class="vc_widget vc_widget_mailchimp "><div class="widget widget_mc4wp_form_widget"><h2 class="widgettitle">Newsletter</h2></div></div></div></div></div></div>
                            </div><!-- .entry-content -->


                        </article><!-- #post -->
                    </div><!-- end page container -->

                </div><!-- .row -->
            </div><!-- .container -->
        </section>



        @include('partials.footer')

        <nav id="side-cart" class="side-panel">
            <header>
                <h6>Shopping cart</h6>
                <a href="#" class="thb-close" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="12" height="12" viewBox="1.1 1.1 12 12" enable-background="new 1.1 1.1 12 12" xml:space="preserve"><path d="M8.3 7.1l4.6-4.6c0.3-0.3 0.3-0.8 0-1.2 -0.3-0.3-0.8-0.3-1.2 0L7.1 5.9 2.5 1.3c-0.3-0.3-0.8-0.3-1.2 0 -0.3 0.3-0.3 0.8 0 1.2L5.9 7.1l-4.6 4.6c-0.3 0.3-0.3 0.8 0 1.2s0.8 0.3 1.2 0L7.1 8.3l4.6 4.6c0.3 0.3 0.8 0.3 1.2 0 0.3-0.3 0.3-0.8 0-1.2L8.3 7.1z"></path></svg></a>
            </header>
            <div class="side-panel-content">
                <div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div>            </div>
        </nav>
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

    </div><!-- .site-wrapper -->
@endsection

@section('scripts')
@endsection
