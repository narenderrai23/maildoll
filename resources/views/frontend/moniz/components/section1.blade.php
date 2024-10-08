<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ filePath('frontend/moniz/assets/images/loader.png') }}" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper__left clearfix">
                        <div class="main-menu-wrapper__logo">
                            <a href="index.html"><img src="{{ filePath('frontend/moniz/assets/images/resources/logo.png') }}" alt=""></a>
                        </div>
                        <div class="main-menu-wrapper__search-box">
                            <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>
                        </div>
                        <div class="main-menu-wrapper__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="clr-dri"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__main-menu">
                        <a href="#" class="mobile-nav__toggler">
                            <span></span>
                        </a>
                        <ul class="main-menu__list">
                            <li class="dropdown">
                                <a href="index.html">Home</a>
                                <ul>
                                    <li>
                                        <a href="index.html">Home one</a>
                                    </li>
                                    <li><a href="index2.html">Home two</a></li>
                                    <li><a href="index3.html">Home three <span class="new-tag">new</span></a></li>
                                    <li><a href="index-one-page.html">Home one page</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Header styles</a>
                                        <ul>
                                            <li><a href="index.html">Header one</a></li>
                                            <li><a href="index2.html">Header two</a></li>
                                            <li><a href="index3.html">Header three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Services </a>
                                <ul>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="services-2.html">Services two <span class="new-tag">New</span></a></li>
                                    <li><a href="services-3.html">Services three <span class="new-tag">New</span></a>
                                    </li>
                                    <li><a href="web-development.html">Web development</a></li>
                                    <li><a href="website-design.html">Web design</a></li>
                                    <li><a href="web-application.html">Web application</a></li>
                                    <li><a href="content-writing.html">Content writing</a></li>
                                    <li><a href="ui-ux-design.html">UI/UX designing</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="about-me.html">About me <span class="new-tag">new</span></a></li>
                                    <li><a href="our-mission.html">Our mission <span class="new-tag">New</span></a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="testimonials.html">Testimonials <span class="new-tag">New</span></a>
                                    </li>
                                    <li><a href="testimonials-2.html">Testimonials two <span class="new-tag">New</span></a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Portfolio</a>
                                <ul>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="portfolio-detail.html">Portfolio details</a></li>
                                    <li><a href="portfolio-detail-fullwidth.html">Portfolio details full</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="products.html">Shop</a>
                                <ul>
                                    <li><a href="products.html">Shop</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="login.html">Login Page</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li class="dropdown">
                                        <a href="blog-sidebar.html">Blog sidebar <span class="new-tag">new</span></a>
                                        <ul>
                                            <li><a href="blog-sidebar-left.html">Blog left sidebar <span class="new-tag">new</span></a></li>
                                            <li><a href="blog-sidebar.html">Blog right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-details.html">Blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__right-contact-box">
                            <div class="main-menu-wrapper__right-contact-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="main-menu-wrapper__right-contact-number">
                                <a href="tel:92-666-888-0000">92 666 888 0000</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!-- Banner One Start -->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
     "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/main-slider-1-1.jpg') }});">
                        </div>

                        <div class="image-layer-overlay"></div>
                        <div class="main-slider-shape-1"></div>
                        <div class="main-slider-shape-2"></div>
                        <div class="main-slider-shape-3"></div>
                        <div class="main-slider-shape-4"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider__content">
                                        <p>welcome to Moniz Web agency</p>
                                        <h2>Smart web <br> design agency</h2>
                                        <a href="contact.html" class="thm-btn"><span>Free consultation</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/main-slider-1-2.jpg') }});">
                        </div>

                        <div class="image-layer-overlay"></div>
                        <div class="main-slider-shape-1"></div>
                        <div class="main-slider-shape-2"></div>
                        <div class="main-slider-shape-3"></div>
                        <div class="main-slider-shape-4"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider__content">
                                        <p>welcome to Moniz Web agency</p>
                                        <h2>Smart web <br> design agency</h2>
                                        <a href="contact.html" class="thm-btn"><span>Free consultation</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/main-slider-1-3.jpg') }});">
                        </div>

                        <div class="image-layer-overlay"></div>
                        <div class="main-slider-shape-1"></div>
                        <div class="main-slider-shape-2"></div>
                        <div class="main-slider-shape-3"></div>
                        <div class="main-slider-shape-4"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider__content">
                                        <p>welcome to Moniz Web agency</p>
                                        <h2>Smart web <br> design agency</h2>
                                        <a href="contact.html" class="thm-btn"><span>Free consultation</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="slider-bottom-box clearfix">

                    <div class="main-slider__nav">
                        <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="icon-right-arrow icon-left-arrow"></i>
                        </div>
                        <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="icon-right-arrow"></i>
                        </div>
                    </div>
                    <div class="swiper-pagination" id="main-slider-pagination"></div>
                </div>
            </div>
        </section>
        <!--Banner One End-->

        <!--Welcome One Start-->
        <section class="welcome-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-one__left wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="welcome-one__img-box">
                                <div class="welcome-one__img">
                                    <img src="{{ filePath('frontend/moniz/assets/images/resources/welcome-one-img-1.png') }}" alt="">
                                    <div class="welcome-one__shape-1"></div>
                                    <div class="welcome-one__shape-2"></div>
                                </div>
                                <div class="welcome-one__trusted">
                                    <p>Trusted by</p>
                                    <h2 class="odometer" data-count="4890">00</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">About company</span>
                                <h2 class="section-title__title">We provide the best web services</h2>
                            </div>
                            <div class="welcome-one__solutions">
                                <div class="welcome-one__solutions-single">
                                    <div class="welcome-one__solutions-icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="welcome-one__solutions-text-box">
                                        <p>Solution for small & <br> large businesses</p>
                                    </div>
                                </div>
                                <div class="welcome-one__solutions-single">
                                    <div class="welcome-one__solutions-icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="welcome-one__solutions-text-box">
                                        <p>Solution for small & <br> large businesses</p>
                                    </div>
                                </div>
                            </div>
                            <p class="welcome-one__right-text-1">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some form, by injected humour,
                                or randomised words.</p>
                            <p class="welcome-one__right-text-2">You need to be sure there isn't anything embarrassing
                                hidden in the middle of text. All the lorem ipsum generators on the Internet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome One End-->

        <!--Counter One Start-->
        <section class="counters-one">
            <div class="container">
                <ul class="counters-one__box list-unstyled">
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="counter-one__icon">
                            <span class="icon-recommend"></span>
                        </div>
                        <h3 class="odometer" data-count="860">00</h3>
                        <p class="counter-one__text">Projects completed</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-one__icon">
                            <span class="icon-recruit"></span>
                        </div>
                        <h3 class="odometer" data-count="50">00</h3>
                        <p class="counter-one__text">Active clients</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-one__icon">
                            <span class="icon-coffee"></span>
                        </div>
                        <h3 class="odometer" data-count="93">00</h3>
                        <p class="counter-one__text">Cups of coffee</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="400ms">
                        <div class="counter-one__icon">
                            <span class="icon-customer-review"></span>
                        </div>
                        <h3 class="odometer" data-count="970">00</h3>
                        <p class="counter-one__text">Happy clients</p>
                    </li>
                    <li class="counter-one__shape wow fadeInUp" data-wow-delay="500ms"></li>
                </ul>
            </div>
        </section>
        <!--Counter One End-->

        <!--We Change Start-->
        <section class="we-change">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="we-change__left-faqs">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Frequently asked questions</span>
                                <h2 class="section-title__title">We’re here to change your business look</h2>
                            </div>
                            <div class="we-change__faqs">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>Few resons why you should choose us</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                                    leo ligula, vitae commodo nisl.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Few resons why you should choose us</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                                    leo ligula, vitae commodo nisl.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4>Few resons why you should choose us</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                                    leo ligula, vitae commodo nisl.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="we-change__right">
                            <div class="we-change__right-img">
                                <img src="{{ filePath('frontend/moniz/assets/images/resources/we-change-right-img-1.jpg') }}" alt="">
                                <div class="we-change__agency">
                                    <div class="we-change__agency-icon">
                                        <span class="icon-development"></span>
                                    </div>
                                    <div class="we-change__agency-text">
                                        <h3>Our agency is one of the most <br> successful agency.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--We Change End-->

        <!--We Make Start-->
        <section class="we-make">
            <div class="we-make-bg" style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/we-make-bg.jpg') }})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="we-make__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Corporate business theme</span>
                                <h2 class="section-title__title">We make the quality design & developments</h2>
                            </div>
                            <div class="we-make__person">
                                <div class="we-make__person-img">
                                    <img src="{{ filePath('frontend/moniz/assets/images/resources/person-img-1.png') }}" alt="">
                                </div>
                                <div class="we-make__person-text">
                                    <p>John Smith</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="we-make__right">
                            <div class="we-make__progress">
                                <div class="we-make__progress-single">
                                    <h4 class="we-make__progress-title">Web design</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%">
                                            <div class="count-text">90%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="we-make__progress-single">
                                    <h4 class="we-make__progress-title">Web development</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="46%">
                                            <div class="count-text">46%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="we-make__progress-single">
                                    <h4 class="we-make__progress-title">Web application</h4>
                                    <div class="bar marb-0">
                                        <div class="bar-inner count-bar" data-percent="38%">
                                            <div class="count-text">38%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--We Make End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one-bg" style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/services-one-bg.jpg') }})">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our services list</span>
                    <h2 class="section-title__title">What we’re offering</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__icon">
                                <span class="icon-color-sample"></span>
                            </div>
                            <h3 class="services-one__title"><a href="website-design.html">Website design</a></h3>
                            <p class="services-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                elit sed do.</p>
                            <a href="website-design.html" class="service-one__arrow"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-one__title"><a href="web-development.html">Web development</a></h3>
                            <p class="services-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                elit sed do.</p>
                            <a href="web-development.html" class="service-one__arrow"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__icon">
                                <span class="icon-online-shopping"></span>
                            </div>
                            <h3 class="services-one__title"><a href="web-application.html">Web application</a></h3>
                            <p class="services-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                elit sed do.</p>
                            <a href="web-application.html" class="service-one__arrow"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Portfolio One Start-->
        <section class="portfolio-one">
            <div class="portfolio-one__container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Recent work completed</span>
                    <h2 class="section-title__title">Work showcase</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                            <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                            <li data-filter=".bra"><span class="filter-text">Branding</span></li>
                            <li data-filter=".illus"><span class="filter-text">illustration</span></li>
                            <li data-filter=".photo"><span class="filter-text">Photography</span></li>
                            <li data-filter=".web"><span class="filter-text last-pd-none">Web design</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row filter-layout masonary-layout">
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra illus web photo">
                        <!--Portfolio One Single-->
                        <div class="portfolio-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="portfolio-one__img">
                                <img src="{{ filePath('frontend/moniz/assets/images/resources/portfolio-1-1.jpg') }}" alt="">
                                <div class="portfolio-one__experience">
                                    <div class="portfolio-one__web-design">
                                        <p class="portfolio-one__web-design-title">Web design</p>
                                    </div>
                                    <div class="portfolio-one__fimlor">
                                        <p class="portfolio-one__fimlor-title"><a href="portfolio-detail.html">Fimlor
                                                Experience</a></p>
                                    </div>
                                </div>
                                <div class="portfolio-one__arrow">
                                    <a href="portfolio-detail.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra photo">
                        <!--Portfolio One Single-->
                        <div class="portfolio-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="portfolio-one__img">
                                <img src="{{ filePath('frontend/moniz/assets/images/resources/portfolio-1-2.jpg') }}" alt="">
                                <div class="portfolio-one__experience">
                                    <div class="portfolio-one__web-design">
                                        <p class="portfolio-one__web-design-title">Web design</p>
                                    </div>
                                    <div class="portfolio-one__fimlor">
                                        <p class="portfolio-one__fimlor-title"><a href="portfolio-detail.html">Fimlor
                                                Experience</a></p>
                                    </div>
                                </div>
                                <div class="portfolio-one__arrow">
                                    <a href="portfolio-detail.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra illus web">
                        <!--Portfolio One Single-->
                        <div class="portfolio-one__single mar-b-0 margin-bottom-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="portfolio-one__img">
                                <img src="{{ filePath('frontend/moniz/assets/images/resources/portfolio-1-3.jpg') }}" alt="">
                                <div class="portfolio-one__experience">
                                    <div class="portfolio-one__web-design">
                                        <p class="portfolio-one__web-design-title">Web design</p>
                                    </div>
                                    <div class="portfolio-one__fimlor">
                                        <p class="portfolio-one__fimlor-title"><a href="portfolio-detail.html">Fimlor
                                                Experience</a></p>
                                    </div>
                                </div>
                                <div class="portfolio-one__arrow">
                                    <a href="portfolio-detail.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item bra illus photo">
                        <!--Portfolio One Single-->
                        <div class="portfolio-one__single mar-b-0 wow fadeInUp" data-wow-delay="400ms">
                            <div class="portfolio-one__img">
                                <img src="{{ filePath('frontend/moniz/assets/images/resources/portfolio-1-4.jpg') }}" alt="">
                                <div class="portfolio-one__experience">
                                    <div class="portfolio-one__web-design">
                                        <p class="portfolio-one__web-design-title">Web design</p>
                                    </div>
                                    <div class="portfolio-one__fimlor">
                                        <p class="portfolio-one__fimlor-title"><a href="portfolio-detail.html">Fimlor
                                                Experience</a></p>
                                    </div>
                                </div>
                                <div class="portfolio-one__arrow">
                                    <a href="portfolio-detail.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Customer feedback</span>
                                <h2 class="section-title__title">What they are talking about moniz?</h2>
                            </div>
                            <div class="testimonial-one__btn-box">
                                <a href="about.html" class="thm-btn testimonial-one__btn"><span>All feedbacks</span></a>
                                <div class="testimonial-one__btn-shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="testimonial-one__slider">


                            <div class="swiper-container" id="testimonials-one__thumb">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-one__img-holder">
                                            <img src="{{ filePath('frontend/moniz/assets/images/testimonial/testimonials-1-1.png') }}" alt="">
                                            <div class="testimonial-one__quote">

                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-one__img-holder">
                                            <img src="{{ filePath('frontend/moniz/assets/images/testimonial/testimonials-1-2.png') }}" alt="">
                                            <div class="testimonial-one__quote">

                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-one__img-holder">
                                            <img src="{{ filePath('frontend/moniz/assets/images/testimonial/testimonials-1-3.png') }}" alt="">
                                            <div class="testimonial-one__quote">

                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                </div><!-- /.swiper-wrapper -->
                            </div><!-- /#testimonials-one__thumb.swiper-container -->

                            <div class="testimonials-one__main-content">
                                <div class="swiper-container" id="testimonials-one__carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__conent-box">
                                                <p class="testimonial-one__text">This is due to their excellent service,
                                                    competitive pricing and customer support. It’s throughly refresing
                                                    to
                                                    get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                                <div class="testimonial-one__client-details">
                                                    <h4 class="testimonial-one__client-name">Aleesha brown</h4>
                                                    <span class="testimonial-one__clinet-title">Satisfied
                                                        customers</span>
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__conent-box">
                                                <p class="testimonial-one__text">This is due to their excellent service,
                                                    competitive pricing and customer support. It’s throughly refresing
                                                    to
                                                    get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                                <div class="testimonial-one__client-details">
                                                    <h4 class="testimonial-one__client-name">Aleesha brown</h4>
                                                    <span class="testimonial-one__clinet-title">Satisfied
                                                        customers</span>
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__conent-box">
                                                <p class="testimonial-one__text">This is due to their excellent service,
                                                    competitive pricing and customer support. It’s throughly refresing
                                                    to
                                                    get such a personal touch. Duis aute lorem ipsum is simply.</p>
                                                <div class="testimonial-one__client-details">
                                                    <h4 class="testimonial-one__client-name">Aleesha brown</h4>
                                                    <span class="testimonial-one__clinet-title">Satisfied
                                                        customers</span>
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    </div><!-- /.swiper-wrapper -->
                                    <div id="testimonials-one__carousel-pagination"></div>
                                    <!-- /#testimonials-one__carousel-pagination -->
                                </div><!-- /#testimonials-one__thumb.swiper-container -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Two Boxes Start-->
        <section class="two-boxes">
            <div class="container">
                <div class="two-boxes__inner">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="two-boxes__single two-boxes__single-one">
                                <div class="two-boxes__content">
                                    <div class="two-boxes__icon">
                                        <span class="icon-web-design"></span>
                                    </div>
                                    <div class="two-boxes__text">
                                        <p>We’re committed to create <br> a change that matters</p>
                                    </div>
                                </div>
                                <div class="two-boxes__arrow">
                                    <a href="contact.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="two-boxes__single two-boxes__single-two">
                                <div class="two-boxes__content">
                                    <div class="two-boxes__icon">
                                        <span class="icon-graphic-design"></span>
                                    </div>
                                    <div class="two-boxes__text">
                                        <p>We’re committed to create <br> a change that matters</p>
                                    </div>
                                </div>
                                <div class="two-boxes__arrow">
                                    <a href="about.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Two Boxes End-->

        <!--Video One Start-->
        <section class="video-one">
            <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/video-one-bg.jpg') }})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__inner">
                            <div class="video-one__link">
                                <a href="https://www.youtube.com/watch?v=8DP4NgupAhI" class="video-one__btn video-popup">
                                    <div class="video-one__video-icon">
                                        <span class="icon-play-button"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <h2 class="video-one__text">We’re shaping the perfect <br> web solutions</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video One End-->

        <!--Reasons One Start-->
        <section class="reasons-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="reasons-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our benefits</span>
                                <h2 class="section-title__title">Reasons why we are best</h2>
                            </div>
                            <ul class="list-unstyled reasons-one__icon-box">
                                <li>
                                    <span class="icon-training"></span>
                                    <p class="reasons-one__text">The best user interfaces</p>
                                </li>
                                <li>
                                    <span class="icon-strategy"></span>
                                    <p class="reasons-one__text">Quick smooth web development</p>
                                </li>
                            </ul>
                            <p class="reasons-one__text-1">Tincidunt elit magnis nulla facilisis sagittis maecenas.
                                sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo
                                orci not dong right.</p>
                            <a href="about.html" class="thm-btn"><span>Discover more</span></a><!-- /.thm-btn -->
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="reasons-one__img-box">
                            <div class="reasons-one-img-box-bg"></div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="reasons-one__img-one">
                                        <img src="{{ filePath('frontend/moniz/assets/images/resources/reasons-one-img-1.jpg') }}" alt="">
                                        <div class="reasons-one__shape-1"></div>
                                        <div class="reasons-one__shape-2"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="reasons-one__img-two">
                                        <img src="{{ filePath('frontend/moniz/assets/images/resources/reasons-one-img-3.jpg') }}" alt="">
                                    </div>
                                    <div class="{{ filePath('frontend/moniz/reasons-one__img-three reasons-one__img-two') }}">
                                        <img src="{{ filePath('frontend/moniz/assets/images/resources/reasons-one-img-2.jpg') }}" alt="">
                                        <div class="reasons-one__shape-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Reasons One End-->

        <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Recent work completed</span>
                    <h2 class="section-title__title">Latest from the blog</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ filePath('frontend/moniz/assets/images/blog/blog-1-1.jpg') }}" alt="">
                                    <a href="blog-details.html">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date-box">
                                    <p><span>20</span> May</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> By admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title">
                                    <a href="blog-details.html">Basic rule of running web agency business</a>
                                </h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__bottom">
                                    <div class="blog-one__read-btn">
                                        <a href="blog-details.html">Read more</a>
                                    </div>
                                    <div class="blog-one__arrow">
                                        <a href="blog-details.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ filePath('frontend/moniz/assets/images/blog/blog-1-2.jpg') }}" alt="">
                                    <a href="blog-details.html">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date-box">
                                    <p><span>20</span> May</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> By admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title">
                                    <a href="blog-details.html">Leverage frameworks to provide a robust</a>
                                </h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__bottom">
                                    <div class="blog-one__read-btn">
                                        <a href="blog-details.html">Read more</a>
                                    </div>
                                    <div class="blog-one__arrow">
                                        <a href="blog-details.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ filePath('frontend/moniz/assets/images/blog/blog-1-3.jpg') }}" alt="">
                                    <a href="blog-details.html">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date-box">
                                    <p><span>20</span> May</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> By admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title">
                                    <a href="blog-details.html">Organically grow the holistic world view of</a>
                                </h3>
                                <p class="blog-one__text">Lorem ipsum is simply is text used by copytyping refreshing.
                                </p>
                                <div class="blog-one__bottom">
                                    <div class="blog-one__read-btn">
                                        <a href="blog-details.html">Read more</a>
                                    </div>
                                    <div class="blog-one__arrow">
                                        <a href="blog-details.html"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog One End-->

        <!--Brand Two-->
        <section class="brand-one">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ filePath('frontend/moniz/assets/images/brand/brand-1-1.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ filePath('frontend/moniz/assets/images/brand/brand-1-2.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ filePath('frontend/moniz/assets/images/brand/brand-1-3.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ filePath('frontend/moniz/assets/images/brand/brand-1-4.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ filePath('frontend/moniz/assets/images/brand/brand-1-5.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ filePath('frontend/moniz/assets/images/brand/brand-1-1.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ filePath('frontend/moniz/assets/images/brand/brand-1-2.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ filePath('frontend/moniz/assets/images/brand/brand-1-3.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ filePath('frontend/moniz/assets/images/brand/brand-1-4.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ filePath('frontend/moniz/assets/images/brand/brand-1-5.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section>
        <!--Brand Two End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="cta-one-bg" style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/cta-one-bg.jpg') }})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <p class="cta-one__tagline">We can help you stand out your business</p>
                            <h2 class="cta-one__title">Website design services for <br> your businesses</h2>
                            <a href="contact.html" class="thm-btn cta-one__btn thm-btn--dark--light-hover"><span>Free
                                    consultation</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <!--Site Footer One Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="site-footer-top-bg" style="background-image: url({{ filePath('frontend/moniz/assets/images/backgrounds/site-footer-bg.jpg') }})"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="index.html"><img src="{{ filePath('frontend/moniz/assets/images/resources/footer-logo.png') }}" alt=""></a>
                                </div>
                                <p class="footer-widget__about-text">Welcome to our website design agency. Lore ipsum
                                    simply text amet cing elit.</p>
                                <div class="footer-widget__about-social-list">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="clr-dri"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">Explore</h3>
                                <ul class="footer-widget__explore-list list-unstyled">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="team.html">Meet our team</a></li>
                                    <li><a href="#">Case stories</a></li>
                                    <li><a href="blog.html">Latest news</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="footer-widget__contact-text">66 Broklyn Street New York United States of
                                    America</p>
                                <div class="footer-widget__contact-info">
                                    <p>
                                        <a href="tel:92-666-888-0000" class="footer-widget__contact-phone">92 666 888
                                            0000</a>
                                        <a href="mailto:needhelp@company.com" class="footer-widget__contact-mail">needhelp@company.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">Sign up for newsletter</h3>
                                <form class="footer-widget__newsletter-form">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                        <button type="submit" class="footer-widget__newsletter-btn"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </form>
                                <div class="footer-widget__newsletter-bottom">
                                    <div class="footer-widget__newsletter-bottom-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="footer-widget__newsletter-bottom-text">
                                        <p>I agree to all terms and policies</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-bottom__inner">
                                <p class="site-footer-bottom__copy-right">© Copyright 2021 by <a href="#">Layerdrops.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ filePath('frontend/moniz/assets/images/resources/logo.png') }}" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@moniz.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>



</body>