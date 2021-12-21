@extends('layouts.main')
@section('assets')
@endsection

@section('content')
    <div class="site-wrapper">

        <header class="site-header default">

         @include('partials.nav')


            <!-- Page header image -->
            <!-- End Page header image -->


            <!-- Page meta -->
            <div class="page-meta style3-image-header" style="background-image: url({{asset('wp-content/uploads/2021/04/our-story-header-image-11-17.jpg')}});">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="page-meta-wrapper">


                                <h1>
                                    Contact

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


                        <article id="post-183" class="post-183 page type-page status-publish has-post-thumbnail hentry">


                            <div class="entry-content">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1617011745641 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div class="gg-infobox " style="text-align:left;">
                                                    <p class="subtitle" >Redamancy Wines</p>
                                                    <div class="description" style="color: #ffffff;"><p>Westlands Rhapta Road<br />
                                                            Nairobi Kenya<br />
                                                            <a href="#">Get directions</a></p>
                                                    </div>
                                                </div>
                                                <div class="gg-infobox " style="text-align:left;">
                                                    <p class="subtitle" >talk to us</p>
                                                    <div class="description" style="color: #ffffff;"><p><a href="mailto:hello@redamancy.com">hello@redamancy.com</a><br />
                                                            +254(712) 345678</p>
                                                    </div>
                                                </div> </div></div></div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="gg-horizontal-list "><p class="subtitle">Tastin room hours</p><dl class="horizontal">
                                                        <dt style="color: #ffffff;">MONDAY - THURSDAY</dt>
                                                        <dd style="color: #ffffff;">11AM - 5PM</dd>
                                                        <dt style="color: #ffffff;">FRIDAY - SUNDAY</dt>
                                                        <dd style="color: #ffffff;">10AM - 5PM</dd>
                                                        <dt style="color: #ffffff;">LAST POUR</dt>
                                                        <dd style="color: #ffffff;">4:30PM</dd></dl></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>
                            </div><!-- .entry-content -->


                        </article><!-- #post -->
                        <div class="clearfix"></div>

                        <div class="col-xs-12 col-md-6 col-md-offset-3 gg-view-map-wrapper">
                            <a class="lightbox-el gg-popup" data-effect="mfp-zoom-in" href="#gg-map-popup"> View map                </a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="contact-form-wrapper col-xs-12 col-md-6 col-md-offset-3">

                            <div class="contact-form-description">
                                If you have an inquiry about our wines or services fill out the contact form. Please fill out the form as detailed as possible in order to serve you the best. Thank you for sharing your comments and suggestions with us.
                            </div>

                            <form id="contact-form"
                                  data-fv-addons="mandatoryIcon"
                                  data-fv-addons-mandatoryicon-icon="fa fa-asterisk"

                                  data-fv-message="This value is not valid"
                                  data-fv-feedbackicons-valid="fa fa-check"
                                  data-fv-feedbackicons-invalid="fa fa-times"
                                  data-fv-feedbackicons-validating="fa fa-refresh">

                                <div id="cf-msg"></div><!-- Message display -->

                                <div class="form-group">
                                    <label class="hidden" for="name">Name</label>
                                    <input placeholder="Name" data-fv-notempty="true" data-fv-notempty-message="The name is required and cannot be empty" type="text" name="name" id="name" value="" class="form-control" data-fv-addons="mandatoryIcon" data-fv-addons-mandatoryicon-icon="glyphicon glyphicon-asterisk" />
                                </div>
                                <div class="form-group">
                                    <label class="hidden" for="email">Email</label>
                                    <input placeholder="Email" data-fv-notempty="true" data-fv-notempty-message="The email is required and cannot be empty" data-fv-emailaddress="true" data-fv-emailaddress-message="The input is not a valid email address" type="text" name="email" id="email" value="" class="form-control" data-fv-addons="mandatoryIcon" data-fv-addons-mandatoryicon-icon="glyphicon glyphicon-asterisk" />
                                </div>
                                <div class="form-group">
                                    <label class="hidden" for="phone">Phone number</label>
                                    <input placeholder="Phone number" data-fv-notempty="true" data-fv-notempty-message="The phone number is required and cannot be empty" type="text" name="phone" id="phone" value="" class="form-control" data-fv-addons="mandatoryIcon" data-fv-addons-mandatoryicon-icon="glyphicon glyphicon-asterisk" />
                                </div>
                                <div class="form-group">
                                    <label class="hidden" for="subject">Subject</label>
                                    <input placeholder="Subject" data-fv-notempty="true" data-fv-notempty-message="The subject is required and cannot be empty" type="text" name="subject" id="subject" value="" class="form-control" data-fv-addons="mandatoryIcon" data-fv-addons-mandatoryicon-icon="glyphicon glyphicon-asterisk" />
                                </div>
                                <div class="form-group">
                                    <label class="hidden" for="message">Message</label>
                                    <textarea placeholder="Message" data-fv-notempty="true" data-fv-notempty-message="The message is required and cannot be empty" name="message" id="message" rows="11" class="form-control" data-fv-addons="mandatoryIcon" data-fv-addons-mandatoryicon-icon="glyphicon glyphicon-asterisk"></textarea>
                                </div>


                                <input name="action" type="hidden" value="cf_action" />
                                <input name="post_id" type="hidden" value="183" />
                                <input type="hidden" id="_cf_nonce" name="_cf_nonce" value="0a5d62f923" /><input type="hidden" name="_wp_http_referer" value="/wordpress/contact/" />
                                <div class="form-group">
                                    <button type="submit" id="cfs" class="btn btn-default pull-left">Send</button>
                                </div>
                            </form>
                        </div><!--Close .contact-form-wrapper -->

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

    </div><!-- .site-wrapper -->

@endsection

@section('scripts')
@endsection
