@extends('layouts.homepage')
@section('content')

    <!-- STAR HEADER SEARCH -->
    <div id="map-container" class="fullwidth-home-map dark-overlay">
        <!-- Video -->
        <div class="video-container">
            <video poster="images/bg/video-poster2.png" loop autoplay muted>
                <source src="video/5.mp4" type="video/mp4">
            </video>
        </div>
        <div id="hero-area" class="main-search-inner search-2 vid">
            <div class="container vid" data-aos="zoom-in">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero-inner2">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <h1 class="mb-2"><span>Find Your Dream</span> Home</h1>
                                <p class="mb-0">We Have Over Million Properties For You.</p>
                            </div>
                            <!--/ End Welcome Text -->
                            <!-- Search Form -->
                            <div class="trip-search vid">
                                <form class="form">
                                    <!-- Form Location -->
                                    <div class="form-group location">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-map-marker"></i>Location</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected ">New York</li>
                                                <li data-value="2" class="option">Los Angeles</li>
                                                <li data-value="3" class="option">Chicago</li>
                                                <li data-value="3" class="option">Philadelphia</li>
                                                <li data-value="3" class="option">San Francisco</li>
                                                <li data-value="3" class="option">Miami</li>
                                                <li data-value="3" class="option">Houston</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/ End Form Location -->
                                    <!-- Form Property Type -->
                                    <div class="form-group">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Type</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected ">Family House</li>
                                                <li data-value="2" class="option">Apartment</li>
                                                <li data-value="3" class="option">Condo</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/ End Form Property Type -->
                                    <!-- Form Property Status -->
                                    <div class="form-group duration">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected ">For Sale</li>
                                                <li data-value="2" class="option">For Rent</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/ End Form Property Status -->
                                    <!-- Form Bedrooms -->
                                    <div class="form-group">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i>Any Bedrooms</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">1</li>
                                                <li data-value="2" class="option">2</li>
                                                <li data-value="3" class="option">3</li>
                                                <li data-value="3" class="option">4</li>
                                                <li data-value="3" class="option">5</li>
                                                <li data-value="3" class="option">6</li>
                                                <li data-value="3" class="option">7</li>
                                                <li data-value="3" class="option">8</li>
                                                <li data-value="3" class="option">9</li>
                                                <li data-value="3" class="option">10</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/ End Form Bedrooms -->
                                    <!-- Form Button -->
                                    <div class="form-group button">
                                        <button type="submit" class="btn">Search</button>
                                    </div>
                                    <!--/ End Form Button -->
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER SEARCH -->

    <!-- START SECTION FEATURED PROPERTIES -->
    <section class="featured portfolio bg-white">
        <div class="container">
            <div class="sec-title">
                <h2><span>Featured </span>Properties</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="row portfolio-items">
                <div class="item col-lg-4 col-md-4 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="zoom-in">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-1.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">$9,000/mo</div>
                                    <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-1.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                        NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2"> Lisa Jhonson
                                </a>
                                <span>
                                    <i class="fa fa-calendar"></i> 2 months ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-4 col-xs-12 people rent">
                    <div class="project-single" data-aos="zoom-in">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-1.html" class="homes-img">
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">$3,000/mo</div>
                                    <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-1.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                        NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-2.jpg" alt="" class="mr-2"> Karl Smith
                                </a>
                                <span>
                                    <i class="fa fa-calendar"></i> 2 months ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-4 col-xs-12 people landscapes sale">
                    <div class="project-single" data-aos="zoom-in">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-1.html" class="homes-img">
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">$9,000/mo</div>
                                    <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-1.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                        NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-3.jpg" alt="" class="mr-2"> katy Teddy
                                </a>
                                <span>
                                    <i class="fa fa-calendar"></i> 2 months ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-4 col-xs-12 people landscapes rent no-pb">
                    <div class="project-single no-mb" data-aos="zoom-in">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-1.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">$3,000/mo</div>
                                    <img src="images/feature-properties/fp-10.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                        NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-4.jpg" alt="" class="mr-2"> Jhon Malon
                                </a>
                                <span>
                                    <i class="fa fa-calendar"></i> 2 months ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-4 col-xs-12 people sale no-pb">
                    <div class="project-single no-mb" data-aos="zoom-in">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-1.html" class="homes-img">
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">$9,000/mo</div>
                                    <img src="images/feature-properties/fp-11.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-1.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                        NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-5.jpg" alt="" class="mr-2"> Susan Delman
                                </a>
                                <span>
                                    <i class="fa fa-calendar"></i> 2 months ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-4 it2 col-xs-12 web rent no-pb">
                    <div class="project-single no-mb last" data-aos="zoom-in">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-1.html" class="homes-img">
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">$3,000/mo</div>
                                    <img src="images/feature-properties/fp-12.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-1.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                        NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-6.jpg" alt="" class="mr-2"> Chan Lee
                                </a>
                                <span>
                                    <i class="fa fa-calendar"></i> 2 months ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-all">
                <a href="properties-full-grid-1.html" class="btn btn-outline-light">View All</a>
            </div>
        </div>
    </section>
    <!-- END SECTION FEATURED PROPERTIES -->

    <!-- START SECTION WHY CHOOSE US -->
    <section class="how-it-works bg-white-2">
        <div class="container">
            <div class="sec-title">
                <h2><span>Why </span>Choose Us</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="row service-1">
                <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <img src="images/icons/icon-4.svg" alt="">
                            <h3>Wide Renge Of Properties</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="images/icons/icon-5.svg" alt="">
                            <h3>Trusted by thousands</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-15">
                            <img src="images/icons/icon-6.svg" alt="">
                            <h3>Financing made easy</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- END SECTION WHY CHOOSE US -->

    <!-- START SECTION POPULAR PLACES -->
    <section class="popular-places home18 bg-white">
        <div class="container">
            <div class="sec-title">
                <h2><span>Popular </span>Places</h2>
                <p>Properties In Most Popular Places.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-right">
                    <!-- Image Box -->
                    <a href="properties-map.html" class="img-box hover-effect">
                        <img src="images/popular-places/12.jpg" class="img-responsive" alt="">
                        <!-- Badge -->
                        <div class="listing-badges">
                            <span class="featured">Featured</span>
                        </div>
                        <div class="img-box-content visible">
                            <h4>New York City </h4>
                            <span>203 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6" data-aos="fade-left">
                    <!-- Image Box -->
                    <a href="properties-map.html" class="img-box hover-effect">
                        <img src="images/popular-places/13.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>Los Angeles</h4>
                            <span>307 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6" data-aos="fade-right">
                    <!-- Image Box -->
                    <a href="properties-map.html" class="img-box hover-effect no-mb">
                        <img src="images/popular-places/14.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>San Francisco </h4>
                            <span>409 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left">
                    <!-- Image Box -->
                    <a href="properties-map.html" class="img-box hover-effect no-mb x3">
                        <img src="images/popular-places/15.jpg" class="img-responsive" alt="">
                        <!-- Badge -->
                        <div class="listing-badges">
                            <span class="featured">Featured</span>
                        </div>
                        <div class="img-box-content visible">
                            <h4>Miami</h4>
                            <span>507 Properties</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION POPULAR PLACES -->

    <!-- START SECTION RECENTLY PROPERTIES -->
    <section class="featured portfolio rec-pro disc">
        <div class="container-fluid">
            <div class="sec-title discover">
                <h2><span>Discover </span>Popular Properties</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                    <div class="agents-grid" data-aos="fade-right">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$9,000/mo</div>
                                            <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid" data-aos="fade-right">
                        <div class="people">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid" data-aos="fade-left">
                        <div class="people landscapes no-pb pbp-3">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$9,000/mo</div>
                                            <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid" data-aos="fade-left">
                        <div class="landscapes">
                            <div class="project-single no-mb">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="images/feature-properties/fp-10.jpg" alt="home-1"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people">
                            <div class="project-single no-mb">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$9,000/mo</div>
                                            <img src="images/feature-properties/fp-11.jpg" alt="home-1"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people landscapes no-pb pbp-3">
                            <div class="project-single no-mb last">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="images/feature-properties/fp-12.jpg" alt="home-1"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$9,000/mo</div>
                                            <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agents-grid">
                        <div class="people">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                            class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION RECENTLY PROPERTIES -->

    <!-- START SECTION BLOG -->
    <section class="blog-section">
        <div class="container">
            <div class="sec-title">
                <h2><span>Articles &amp; </span>Tips</h2>
                <p>Read the latest news from our blog.</p>
            </div>
            <div class="news-wrap">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item" data-aos="fade-up">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="images/blog/b-1.jpg" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html">
                                    <h3>Explore The World</h3>
                                </a>
                                <div class="dates">
                                    <span class="date">April 11, 2020 &nbsp;/</span>
                                    <ul class="action-list pl-0">
                                        <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span>
                                        </li>
                                        <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                        <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="news-item-descr big-news">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                        consectetur.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <div class="admin">
                                        <p>By, Karl Smith</p>
                                        <img src="images/testimonials/ts-6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item" data-aos="fade-up">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="images/blog/b-2.jpg" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html">
                                    <h3>Find Good Places</h3>
                                </a>
                                <div class="dates">
                                    <span class="date">May 20, 2020 &nbsp;/</span>
                                    <ul class="action-list pl-0">
                                        <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span>
                                        </li>
                                        <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                        <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="news-item-descr big-news">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                        consectetur.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <div class="admin">
                                        <p>By, Lis Jhonson</p>
                                        <img src="images/testimonials/ts-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item no-mb" data-aos="fade-up">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="images/blog/b-3.jpg" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html">
                                    <h3>All Places In Town</h3>
                                </a>
                                <div class="dates">
                                    <span class="date">Jun 30, 2020 &nbsp;/</span>
                                    <ul class="action-list pl-0">
                                        <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span>
                                        </li>
                                        <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                        <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="news-item-descr big-news">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                        consectetur.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Read more...</a>
                                    <div class="admin">
                                        <p>By, Ted Willians</p>
                                        <img src="images/testimonials/ts-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->

    <!-- STAR SECTION PARTNERS -->
    <div class="partners bg-white">
        <div class="container">
            <div class="sec-title">
                <h2><span>Our </span>Partners</h2>
                <p>The Companies That Represent Us.</p>
            </div>
            <div class="owl-carousel style2">
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/14.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/15.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/16.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/17.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
            </div>
        </div>
    </div>
    <!-- END SECTION PARTNERS -->
@endsection
