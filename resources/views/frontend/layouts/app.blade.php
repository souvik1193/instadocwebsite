<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logo/logo2.png') }}">
    <!-- Other css -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/hc-offcanvas-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.css') }}">


    <style>
        .header-top {
            padding: 10px 0 !important;
        }

        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }
    </style>

    <title>Insta Doctor</title>
</head>

<body>
    <!-- preloader start here -->
    {{-- <div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div> --}}
    <!-- preloader ending here -->


    <!-- ========== Mobile-nav section start here ========== -->
    <div class="mobile-menu">
        <div class="container">
            <div class="mobile-menu-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img style="width: 120px !important; hieght: 81px !important"
                            src="{{ asset('/frontend/assets/images/logo/logo-4.png') }}" alt="Mukti">
                    </a>
                </div>
                <div class="open-menu"><i class="icofont-navigation-menu"></i></div>
            </div>
            <nav id="mobile-nav">
                <ul class="home-nav">
                    <li class="active">
                        <a href="/">Home</a>

                    </li>
                    <li><a href="#about">About</a></li>

                    <li><a href="#services">Services</a>

                    </li>
                    <li><a href="#contact">Contact</a>

                    </li>
                </ul>


            </nav>
        </div>
    </div>
    <!-- ========== Mobile-nav section end here ========== -->


    <!-- ==========Header Section Starts Here========== -->
    <header class="header-section d-none d-lg-block">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between align-items-center px-15">
                    <div class="header-logo">
                        <a href="/" style="width: 120px !important" class="logo"><img
                                src="{{ asset('frontend/assets/images/logo/logo-4.png') }}" alt="logo"></a>
                    </div>
                    <ul class="header-contact-info d-flex align-items-center">
                        <li class="item">
                            <div class="item-inner">
                                <div class="item-thumb">
                                    <img src="assets/images/header/1.png" alt="">
                                </div>
                                <div class="item-content">
                                    <span>{{__("msg.Contact")}}</span>
                                    <a href="tel:7865958508">
                                        <p>7865958508</p>
                                    </a>

                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="item-inner">
                                <div class="item-thumb">
                                    <img src="assets/images/header/1.png" alt="">
                                </div>
                                <div class="item-content">
                                    <span>{{__("msg.whatsapp")}}:</span>
                                    <a href="tel:7865958508">
                                        <p>8509648067</p>
                                    </a>

                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="item-inner">
                                <div class="item-thumb">
                                    <img src="assets/images/header/2.png" alt="">
                                </div>
                                <div class="item-content">
                                    <span>{{__("msg.Email")}} :</span>
                                    <a href="mail-to:support@instadoctor.co">
                                        <p>support@instadoctor.co</p>
                                    </a>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <nav class="container">
                <div class="primary-menu">
                    <div class="menu-area">
                        <div class="row justify-content-between px-15">
                            <ul class="main-menu d-flex">
                                <li class="active">
                                    <a href="/">Home</a>

                                </li>
                                <li><a href="#about">About</a></li>

                                <li><a href="#services">Services</a>

                                </li>
                                <li><a href="#contact">Contact</a>

                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <div id="google_translate_element"></div>
                                </li> --}}

                            </ul>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->


    <!-- ==========Banner Section Start Here========== -->
    <section class="banner-section"
        style="background-image: url('http://labartisan.net/demo/mukti/assets/images/banner/1.jpg');">
        <div class="container">
            <div class="banner-wrapper">
                <div class="banner-content">
                    <h2 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".1s">Get Best Medical
                        Consultations
                    </h2>
                    <h1 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s"><b>Medicine Order</b> And Help On Your Medical Visits...</h1>

                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Feature Section Start Here========== -->
    <section id="about" class="service-section style-1 padding-tb bg-color">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <!-- <h2><span>About Us</span></h2> -->
                <h2><span>{{__("msg.About")}}</span></h2>

            </div>
            <div class="section-wrapper">
                <div class="service-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="service-inner">
                        <div class="service-thumb">
                            <img src="http://labartisan.net/demo/mukti/assets/images/service/01.jpg" alt="service">
                        </div>
                        <div class="service-content">
                                <p>{{__("msg.AboutDescription")}}</p>
                            <!-- <p>Our services help patients where distance is a critical factor. We bridge the gap and
                                bring them in touch with the best medical facilities. Hence our services can help
                                patients coming from distant places with facilities such as providing them with
                                information for improved diagnosis and support for allopathic, homeopathic, and
                                ayurvedic treatment. Our specific facilities will enable patients to acquire both online
                                and offline consultations with our expert doctors, order medicine, request diagnostic
                                tests, and get support with visa or passport-related matters, all ticketing inside
                                India, pick up and drop services from the airport, train station and bus stop
                                accommodation, medical guide and many more.
                            </p> -->

                        </div>
                    </div>
                </div>
            </div>
            {{-- 
            <div class="container">
                <div class="feature-section-wrapper">
                    <div class="section-header wow fadeInUp" data-wow-delay="" data-wow-duration="1s">
                    </div>
                    <div class="section-content">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="lab-item feature-item wow fadeInLeft" data-wow-delay=".2s"
                                    data-wow-duration="1s">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="http://labartisan.net/demo/mukti/assets/images/feature/1.png"
                                                alt="feature img">
                                                <h4 class="mt-5" >Medical Treatment</h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="lab-item feature-item wow fadeInUp" data-wow-delay=".2s"
                                    data-wow-duration="1s">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjJBN0NCQzdDN0YwRDExRUI4MEM1RUE1RDZERkRFRDU0IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjJBN0NCQzdEN0YwRDExRUI4MEM1RUE1RDZERkRFRDU0Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MkE3Q0JDN0E3RjBEMTFFQjgwQzVFQTVENkRGREVENTQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MkE3Q0JDN0I3RjBEMTFFQjgwQzVFQTVENkRGREVENTQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz78qFQaAAAL10lEQVR42uxa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"
                                                alt="feature img">
                                                
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="lab-item feature-item wow fadeInUp" data-wow-delay=".2s"
                                    data-wow-duration="1s">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="http://labartisan.net/demo/mukti/assets/images/feature/3.png"
                                                alt="feature img">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="lab-item feature-item wow fadeInRight" data-wow-delay=".2s"
                                    data-wow-duration="1s">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="http://labartisan.net/demo/mukti/assets/images/feature/4.png"
                                                alt="feature img">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


        </div>
    </section>

    <!-- ==========Feature Section Ends Here========== -->


    <!-- ==========Department Section Start Here========== -->
    <section id="services" class="department-section padding-tb style-1">
        <div class="container">
            <div class="department-wrapper">
                <div class="section-header">
                    <!-- <h2><span>Our Services </span></h2> -->
                    <h2><span>{{__("msg.Services")}}</span></h2>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="">
                                <div class="department-top">
                                    <ul class="nav dep-tab" role="tablist">
                                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                            <a class="active" href="#one" role="tab" data-toggle="tab"><img
                                                    style="width: 60px !important; height: 60px !important"
                                                    src="https://cdn-icons-png.flaticon.com/512/5996/5996051.png"
                                                    alt="depart"></a>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                                            <a class="" href="#two" role="tab" data-toggle="tab"><img
                                                    src="http://labartisan.net/demo/mukti/assets/images/depart/icon/01.png"
                                                    alt="depart"></a>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                            <a class="" href="#three" role="tab" data-toggle="tab"><img
                                                    src="http://labartisan.net/demo/mukti/assets/images/depart/icon/07.png"
                                                    alt="depart"></a>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                            <a class="" href="#four" role="tab" data-toggle="tab"><img
                                                    style="width: 60px !important; height: 60px !important"
                                                    src="https://cdn-icons-png.flaticon.com/512/196/196578.png"
                                                    alt="depart"></a>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                            <a class="" href="#five" role="tab" data-toggle="tab"><img
                                                    style="width: 60px !important; height: 60px !important"
                                                    src="https://cdn-icons-png.flaticon.com/512/3595/3595848.png"
                                                    alt="depart"></a>
                                        </li>
                                        

                                    </ul>
                                </div>
                            </div>
                            <div class="department-bottom wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="one">
                                        <div class="row flex-row-reverse align-items-center">
                                            <div class="col-12 col-lg-6">
                                                <div class="post-thumb">
                                                    <img style="height: 350px !important; width:560px !important"
                                                        src="https://images.pexels.com/photos/4225920/pexels-photo-4225920.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                        alt="depart">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="post-content">
                                                    <!-- <h3>Medical Consultation</h3> -->
                                                    <h3>{{__("msg.Medical-Consultation")}}</h3>
                                                    <p>{{__("msg.MedicalDescription")}}</p>
                                                    <!-- <p>Are you looking to consult with trustworthy doctors and get
                                                        medical facilities at an affordable cost? We have the best
                                                        doctors registered with us who not only provide consultation
                                                        online but also can be visited offline. Call us at the below
                                                        number for further details.</p> -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="two">
                                        <div class="row flex-row-reverse align-items-center">
                                            <div class="col-12 col-lg-6">
                                                <div class="post-thumb">
                                                    <img style="height: 350px !important; width:560px !important"
                                                        src="https://images.pexels.com/photos/139398/thermometer-headache-pain-pills-139398.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                        alt="depart">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="post-content">
                                                    <!-- <h3>Medicine Order</h3> -->
                                                    <h3>{{__("msg.Medical-order")}}</h3>
                                                    <p>{{__("msg.medicalOrder-description")}}</p>
                                                    <!-- <p>Do you want to order some medicine and wish them to be delivered
                                                        in no time at a reasonable cost from outside India? We have a
                                                        wonderful chain of delivery that ensures that your medicines
                                                        reach you on time. Call us at the below number to order
                                                        medicine.</p> -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="three">
                                        <div class="row flex-row-reverse align-items-center">
                                            <div class="col-12 col-lg-6">
                                                <div class="post-thumb">
                                                    <img style="height: 350px !important; width:560px !important"
                                                        src="https://images.pexels.com/photos/2280571/pexels-photo-2280571.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                        alt="depart">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="post-content">
                                                    <!-- <h3>Lab Test</h3> -->
                                                    <h3>{{__("msg.labTest")}}</h3>
                                                    <p>{{__("msg.labTest-description")}}</P>
                                                    <!-- <p>Book your lab test with our InstaDoctor registered labs. Get all
                                                        your Lab tests done at a reasonable rate and get hassle-free
                                                        sample collection and report delivery. Call us at the below
                                                        number to book a test.</p> -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="four">
                                        <div class="row flex-row-reverse align-items-center">
                                            <div class="col-12 col-lg-6">
                                                <div class="post-thumb">
                                                    <img style="height: 350px !important; width:560px !important"
                                                        src="https://images.pexels.com/photos/346798/pexels-photo-346798.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                        alt="depart">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="post-content">
                                                    <h3>{{__("msg.Visa")}}:</h3>
                                                    <p>{{__("msg.Visa-Descreiption")}}</p>
                                                    <!-- <p>Our team in InstaDoctor helps you to prepare your visa
                                                        application to get a quick medical visa. We also help with
                                                        passport and cross-border travel for medical purposes. Call us
                                                        at the below number to get assistance on your medical visits.
                                                    </p> -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="five">
                                        <div class="row flex-row-reverse align-items-center">
                                            <div class="col-12 col-lg-6">
                                                <div class="post-thumb">
                                                    <img style="height: 350px !important; width:560px !important"
                                                        src="https://images.pexels.com/photos/7659567/pexels-photo-7659567.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                        alt="depart">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="post-content">
                                                    <!-- <h3>Travel Support for medical purposes:</h3> -->
                                                    <h3>{{__("msg.Travel")}}</h3>
                                                    <p>{{__("msg.Travel-description")}}</p>
                                                    <!-- <p>We provide all sorts of travel assistance by bus, train, and
                                                        flight. Don't bother about your lodging and fooding as we manage
                                                        that as well during your medical visits. If required we tag
                                                        along a medical attender to assist you 24*7.</p> -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Department Section Ends Here========== -->


    <!-- ==========Counter Section Start Here========== -->
    <div class="counter-section style-1 padding-60">
        <div class="container">
            <div class="section-wrapper">
                <div class="counter-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="counter-item-inner">
                        <div class="counter-thumb">
                            <img src="http://labartisan.net/demo/mukti/assets/images/counter/01.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h3 class="number"><span class="counter">450</span></h3>
                            <p class="post-content">number of patients served</p>
                        </div>
                    </div>
                </div>
                <div class="counter-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="counter-item-inner">
                        <div class="counter-thumb">
                            <img src="http://labartisan.net/demo/mukti/assets/images/counter/02.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h3 class="number"><span class="counter">27</span></h3>
                            <p class="post-content">number of doctors tied up</p>
                        </div>
                    </div>
                </div>
                <div class="counter-item wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="counter-item-inner">
                        <div class="counter-thumb">
                            <img style="height: 60px !important; width:47px !important"
                                src="http://labartisan.net/demo/mukti/assets/images/counter/03.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h3 class="number"><span class="counter">14</span></h3>
                            <p class="post-content">hospitals tied up</p>
                        </div>
                    </div>
                </div>
                <div class="counter-item wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="counter-item-inner">
                        <div class="counter-thumb">
                            <img src="http://labartisan.net/demo/mukti/assets/images/counter/04.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h3 class="number"><span class="counter">134</span></h3>
                            <p class="post-content">medical visits for patients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Counter Section Ends Here========== -->


    <!-- ==========Service Section Start Here========== -->

    <!-- ==========Service Section Ends Here========== -->


    <!-- ==========Doctor Section Start Here========== -->

    <!-- ==========Doctor Section Ends Here========== -->


    <!-- ==========Appointment Section Start Here========== -->

    <!-- ==========Appointment Section Ends Here========== -->


    <!-- ==========Blog Section Start Here========== -->

    <!-- ==========Blog Section Ends Here========== -->


    <!-- ==========Sponsor Section Start Here========== -->

    <!-- ==========Sponsor Section Ends Here========== -->


    <!-- ==========Newsletter Section Ends Here========== -->
    <!-- ==========Contact Section Start Here========== -->
    <section id="contact" class="contact-us padding-tb">
        <div class="container">
            <div class="section-header">
                <h2><span>Contact Us </span></h2>

            </div>
            <div class="section-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="contact-info">
                            <h3>Contact Information</h3>
                            <ul>
                                <li>
                                    <h6>Office Address:</h6>
                                    <p>Biman Saha
                                        C/o- Pradhan Mantri Bhartiya Janaushadhi Kendra
                                        Near Madarihat Rural Hospital entry gate
                                        Vill- Aswaninagar 2 no. Ward
                                        P.O+P.S- Madarihat
                                        Dist -Alipurduar
                                        West Bengal- 735220
                                    </p>
                                </li>
                                <li>
                                    <h6>Phone Number:</h6>
                                    <p>7865958508</p>

                                </li>
                                <li>
                                    <h6>Whatsapp:</h6>
                                    <p>8509648067</p>

                                </li>
                                <li>
                                    <h6>Email Address:</h6>
                                    <a href="#">support@instadoctor.co</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="here-form">
                            <h4>Do you have any queries, suggestions, or requests? Insta Doctor is a chain of patient
                                care facilities. To contact us, please fill out the form below.</h4>
                            <form method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <input type="text" id="fname" name="name" placeholder="Your Name">
                                <input type="email" id="fname" name="email" placeholder="Your Email">
                                <input type="text" id="lname" name="mobile" placeholder="Phone Number">

                                <textarea name="message" id="" cols="20" rows="5"></textarea>

                                <button class="lab-btn" type="submit"><span>Send <i
                                            class="icofont-double-right"></i></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Contact Section Ends Here========== -->

    <!-- ==========Footer Section Ends Here========== -->
    <!-- <section class="footer-section style-1">
        <div class="container">
            <div class="section-wrapper">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="contact-info">
                                <h3>Contact Info</h3>
                                <p>Rapidiously seize wireless strategic theme areas and corporate testing
                                    procedures.
                                    Uniquely</p>
                                <ul class="lab-ul">
                                    <li><i class="icofont-home"></i> Suite 02 New Elephant Road usa</li>
                                    <li><i class="icofont-phone"></i> +880 142 258 123, 02-96936</li>
                                    <li><i class="icofont-envelope"></i> <a href="#"> info@mukti.com</a></li>
                                    <li><i class="icofont-globe"></i> <a href="#"> info@mukti.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <div class="doctor-info mb-5 mb-sm-0">
                                <h3>Our Doctors</h3>
                                <ul class="lab-ul">
                                    <li><i class="icofont-double-right"></i><a href="#"> Dr. Nick Sims</a></li>
                                    <li><i class="icofont-double-right"></i><a href="#"> Dr. Michael Linden</a>
                                    </li>
                                    <li><i class="icofont-double-right"></i><a href="#"> Dr. Max Turner</a></li>
                                    <li><i class="icofont-double-right"></i><a href="#"> Dr. Amy Adams</a></li>
                                    <li><i class="icofont-double-right"></i><a href="#"> Dr. Julia Jameson</a>
                                    </li>
                                    <li><i class="icofont-double-right"></i><a href="#"> Dr. Michael Linden</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".3s">
                            <div class="service-info  mb-5 mb-sm-0">
                                <h3>Our Services</h3>
                                <ul class="lab-ul">
                                    <li><i class="icofont-double-right"></i><a href="#">Outpatient Surgery</a>
                                    </li>
                                    <li><i class="icofont-double-right"></i><a href="#">Cardiac Clinic</a></li>
                                    <li><i class="icofont-double-right"></i><a href="#">Ophthalmology Clinic</a>
                                    </li>
                                    <li><i class="icofont-double-right"></i><a href="#">Gynaecological
                                            Clinic</a>
                                    </li>
                                    <li><i class="icofont-double-right"></i><a href="#">Outpatient
                                            Rehabilitation</a>
                                    </li>
                                    <li><i class="icofont-double-right"></i><a href="#">Ophthalmology Clinic</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".4s">
                            <div class="time-info">
                                <h3>opening hours</h3>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Satarday</div>
                                        <div class="day-time">8:00 am-10:00 pm</div>
                                    </div>
                                </div>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Sunday</div>
                                        <div class="day-time">6:00 am-8:00 pm</div>
                                    </div>
                                </div>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Monday</div>
                                        <div class="day-time">6:00 am-2:00 pm</div>
                                    </div>
                                </div>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Tuesday</div>
                                        <div class="day-time">7:00 am-9:00 pm</div>
                                    </div>
                                </div>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Widnessday</div>
                                        <div class="day-time">10:00 am-12:00 pm</div>
                                    </div>
                                </div>
                                <div class="dep-item">
                                    <div class="dep-item-inner d-flex justify-content-between">
                                        <div class="day-name">Thirsday</div>
                                        <div class="day-time">2:00 am-6:00 pm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="copyright text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <span>Copyright &copy; 2021 <a href="index.html">Mukti</a>. Designed by <a
                                href="https://themeforest.net/user/labartisan">LabArtisan</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ==========Footer Section Ends Here========== -->

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>


    <!-- All Scripts -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/circularProgressBar.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/hc-offcanvas-nav.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/functions.j') }}s"></script>
</body>

</html>
