<nav class="navbar navbar-default navbar-expand-lg">
    <div class="container navbar-header-wrapper">

        <div class="navbar-grid" id="main-navbar">

            <!-- primary-mobile-menu -->
            <div class="menu-button-container">
                <button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
                    <span class="dropdown-icon open">Menu
                        <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 6H19.5V7.5H4.5V6ZM4.5 12H19.5V13.5H4.5V12ZM19.5 18H4.5V19.5H19.5V18Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <span class="dropdown-icon close">Close
                        <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10.9394L5.53033 4.46973L4.46967 5.53039L10.9393 12.0001L4.46967 18.4697L5.53033 19.5304L12 13.0607L18.4697 19.5304L19.5303 18.4697L13.0607 12.0001L19.5303 5.53039L18.4697 4.46973L12 10.9394Z" fill="currentColor">

                            </path>
                        </svg>
                    </span>
                </button>
            </div>

            <div class="logo-wrapper">
                <a class="brand" href="" title="Redamancy" rel="home">
                    <img style=" max-width: 160px;" class="brand" src="" width="336" height="82" alt="Redamancy" />
                </a>
                <a class="sticky-brand" href="" title="Redamancy" rel="home">
                    <img style=" max-width: 50px;" src="" width="212" height="160" alt="Redamancy" />
                </a>
                <a class="mobile-brand" href="" title="Redamancy" rel="home">
                    <img style=" max-width: 50px;" src="" width="212" height="160" alt="Redamancy" />
                </a>
            </div><!-- .logo-wrapper -->

            <!-- Begin Main Navigation -->
            <ul id="main-menu" class="nav navbar-nav navbar-middle">
                <li id="menu-item-2397" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2397">
                    <a href="{{route('index')}}">Home</a>
                </li>
                <li id="menu-item-2374" class="menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-341  menu-item-2374">
                    <a href="{{route('our-story')}}" aria-current="page">Our story</a>
                </li>
                <li id="menu-item-2373" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2373">
                    <a href="{{route('shop.index')}}">Shop</a>
                </li>
{{--                <li id="menu-item-2386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2386"><a href="{{route('wine-club')}}">Wine Club</a></li>--}}
                <li id="menu-item-2372" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2372"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
            <!-- End Main Navigation -->

            <!-- Begin Second Navigation -->
            <ul class="nav navbar-nav secondary-nav">

                <li class="gg-woo-mini-cart dropdown">
                    <a id="quick_cart" data-target="open-cart" href="" title="View your shopping cart">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </span>
                    </a>

                </li>
                <li class="quick-my-account">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </a>
                </li>
                <li class="gg-header-search">
                    <a href="#fullscreen-searchform" title="Search products">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
            <!-- End Second Navigation -->

        </div>
        <!-- #main-navbar -->

    </div><!-- .container -->
</nav><!-- nav -->
