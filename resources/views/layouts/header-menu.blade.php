        <header class="header mob-header cart-false nz-clearfix">

            <div class="mob-header-top nz-clearfix">

                <div class="container">


                    <div class="logo logo-mob">

                        <a href="index.html" title="Mukesh &amp; Associates">

                            <img style="max-width:51px;max-height:38px;" src="wp-content/uploads/2017/07/logo1.png"
                                alt="Mukesh &amp; Associates">

                        </a>

                    </div>


                    <span class="mob-menu-toggle"></span>

                </div>

            </div>

            <div class="mob-header-content nz-clearfix">



                <div class="container">



                    <nav class="mob-menu nz-clearfix">


                        <ul id="header-menu" class="menu">
                            <li id="menu-item-7668"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home" data-mm="false"
                                data-mmc="2"><a href="index.html"><span class="mi"></span><span
                                        class="txt">HOME</span><span class="di icon-arrow-right9"></span></a></li>
                            <li id="menu-item-7669"
                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3142 current_page_item"
                                data-mm="false" data-mmc="2"><a href="aboutus.html"><span class="mi"></span><span
                                        class="txt">ABOUT US</span><span class="di icon-arrow-right9"></span></a></li>
                            <li id="menu-item-8664" class="menu-item menu-item-type-post_type menu-item-object-page"
                                data-mm="false" data-mmc="2"><a href="services.html"><span class="mi"></span><span
                                        class="txt">SERVICES</span><span class="di icon-arrow-right9"></span></a></li>
                            <li id="menu-item-8627" class="menu-item menu-item-type-post_type menu-item-object-page"
                                data-mm="false" data-mmc="2"><a href="sectors/index.html"><span class="mi"></span><span
                                        class="txt">SECTORS</span><span class="di icon-arrow-right9"></span></a></li>
                            <li id="menu-item-8148" class="menu-item menu-item-type-post_type menu-item-object-page"
                                data-mm="false" data-mmc="2"><a href="clients.html"><span class="mi"></span><span
                                        class="txt">CLIENTS</span><span class="di icon-arrow-right9"></span></a></li>
                            <li id="menu-item-8158" class="menu-item menu-item-type-post_type menu-item-object-page"
                                data-mm="false" data-mmc="2"><a href="international-associates.html"><span
                                        class="mi"></span><span class="txt">INTERNATIONAL
                                        ASSOCIATES</span><span class="di icon-arrow-right9"></span></a></li>
                            <li id="menu-item-11336"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"
                                data-mm="false" data-mmc="2"><a href="#"><span class="mi"></span><span
                                        class="txt">CAREERS</span><span class="di icon-arrow-right9"></span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-7780" class="menu-item menu-item-type-post_type menu-item-object-page"
                                        data-mm="false" data-mmc="2"><a href="careers-division2.html"><span
                                                class="mi"></span><span class="txt">Division 2</span><span
                                                class="di icon-arrow-right9"></span></a></li>
                                    <li id="menu-item-11335" class="menu-item menu-item-type-post_type menu-item-object-page"
                                        data-mm="false" data-mmc="2"><a href="careers-division3.html"><span
                                                class="mi"></span><span class="txt">Division 3</span><span
                                                class="di icon-arrow-right9"></span></a></li>
                                </ul>
                            </li>
                            <li id="menu-item-7671" class="menu-item menu-item-type-post_type menu-item-object-page"
                                data-mm="false" data-mmc="2"><a href="contact.html"><span class="mi"></span><span
                                        class="txt">CONTACT</span><span class="di icon-arrow-right9"></span></a></li>
                        </ul>

                    </nav>












                </div>

            </div>

        </header>


        <header
            class="header desk version1 page-title-section-version1 one-page-top top-bar stuck-false stuck-boxed-false top-false full-width-false sl-false search-false cart-false iversion-dark effect-underline subeffect-ghost fixed-false fiversion-dark wiversion-dark">

            <div class="header-content">


                <div class="header-body" style="font-family:Oswald">

                    <div class="container nz-clearfix">


                        <div class="logo logo-desk">

                            <a href="index.html" title="Mukesh &amp; Associates">

                                <img class="normal-logo" style="max-width:214px;max-height:38px;"
                                    src="wp-content/uploads/2017/07/logo.png" alt="Mukesh &amp; Associates">

                                <img class="fixed-logo" style="max-width:214px;max-height:38px;margin-top:-19px"
                                    src="wp-content/uploads/2017/07/logo.png" alt="Mukesh &amp; Associates">

                            </a>

                        </div>



                        <nav class="header-menu desk-menu nz-clearfix">

                            <ul id="header-menu" class="menu">
                                <li class="menu-item {{ Request::is('/') ? 'current-menu-item current_page_item' : '' }}">
                                    <a href="{{ url('/') }}"><span class="mi"></span><span class="txt">HOME</span><span class="di icon-arrow-right9"></span></a>
                                </li>
                                <li class="menu-item {{ Request::is('aboutus') ? 'current-menu-item current_page_item' : '' }}">
                                    <a href="{{ url('/aboutus') }}"><span class="mi"></span><span class="txt">ABOUT US</span><span class="di icon-arrow-right9"></span></a>
                                </li>
                                <li class="menu-item {{ Request::is('services') ? 'current-menu-item current_page_item' : '' }}">
                                    <a href="{{ url('/services') }}"><span class="mi"></span><span class="txt">SERVICES</span><span class="di icon-arrow-right9"></span></a>
                                </li>
                                <li class="menu-item {{ Request::is('sectors') || Request::is('sectors/*') ? 'current-menu-item current_page_item' : '' }}">
                                    <a href="{{ url('/sectors') }}"><span class="mi"></span><span class="txt">SECTORS</span><span class="di icon-arrow-right9"></span></a>
                                </li>
                                <li class="menu-item {{ Request::is('clients') ? 'current-menu-item current_page_item' : '' }}">
                                    <a href="{{ url('/clients') }}"><span class="mi"></span><span class="txt">CLIENTS</span><span class="di icon-arrow-right9"></span></a>
                                </li>
                                <li class="menu-item {{ Request::is('international-associates') ? 'current-menu-item current_page_item' : '' }}">
                                    <a href="{{ url('/international-associates') }}"><span class="mi"></span><span class="txt">INTERNATIONAL ASSOCIATES</span><span class="di icon-arrow-right9"></span></a>
                                </li>
                                <li class="menu-item {{ Request::is('careers*') ? 'current-menu-item current_page_item' : '' }}">
                                    <a href="#"><span class="mi"></span><span class="txt">CAREERS</span><span class="di icon-arrow-right9"></span></a>
                                    <ul class="sub-menu">
                                        <li class="{{ Request::is('careers-division2') ? 'current-menu-item current_page_item' : '' }}">
                                            <a href="{{ url('/careers-division2') }}"><span class="mi"></span><span class="txt">Division 2</span><span class="di icon-arrow-right9"></span></a>
                                        </li>
                                        <li class="{{ Request::is('careers-division3') ? 'current-menu-item current_page_item' : '' }}">
                                            <a href="{{ url('/careers-division3') }}"><span class="mi"></span><span class="txt">Division 3</span><span class="di icon-arrow-right9"></span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item {{ Request::is('contact') ? 'current-menu-item current_page_item' : '' }}">
                                    <a href="{{ url('/contact') }}"><span class="mi"></span><span class="txt">CONTACT</span><span class="di icon-arrow-right9"></span></a>
                                </li>
                            </ul>
                            
                        </nav>


                    </div>

                </div>



            </div>

        </header>
