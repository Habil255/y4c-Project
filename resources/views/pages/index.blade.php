@extends('pages.main')


@section('content')
    {{-- @include('name') --}}

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
              
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
              <div class="row align-items-center position-relative">
      
      
                <div class="site-logo">
                    <a href="#"><img src="images\logoy4c1.png "style="height 5%; width:5%;"></a>
                </div>
                  
                  <div class="col-12">
                    <nav class="site-navigation text-right ml-auto " role="navigation">
      
                      <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="#home-section" class="nav-link">Home</a></li>
                        <li><a href="#services-section" class="nav-link">Services</a></li>
    
                          <li><a href="#about-section" class="nav-link">About Us</a></li>
                          
                              
                        
      
                        {{-- <li><a href="#press-section" class="nav-link">Press</a></li> --}}
      
                        <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                        <li><a href="#blog-section" class="nav-link active">Blog</a></li>
                        <li><a href="#contact-section" class="nav-link">Contact</a></li>
                      </ul>
                    </nav>
      
                  </div>
      
                  <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
      
                </div>
            </div>
        </header>
           
            
              
      
            

{{-- <nav class="navbar navbar-light bg-dark navbar-expand-lg fixed-top">
<a href="#"><img src="images\nm-logo.png "style="height 10%; width:10%;"></a>
  <button class="navbar-toggler mt-" data-toggle="collapse" data-target="#navbarCollapse" style="margin-left: 52%;">
    <span class="navbar-toggler-icon mt-1" ></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#" style="color: white; font-style: 20px; ">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services-section" style="color: white;">Services</a>
                            </li>

                            <li><a href="#about-nasibu-section" class="nav-link" style="color: white;">About</a></li>


                            <li><a href="#testimonials-section" class="nav-link" style="color: white;">Testimonials</a></li>

                            <li><a href="#blog-section" class="nav-link" style="color: white;">Blog</a>
                            </li>

                            <li><a href="#contact-section" class="nav-link" style="color: white;">Contact</a></li>
                        </ul>
    </ul>
  </div>
</nav> --}}


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        

        
            {{--Large screen nav bar--}}
            {{-- <nav>
            <div class="logo">
                logo
            </div>
            <div class="links">
            <ul>
                 <li><a href="#about-nasibu-section">Home</a></li>
                            <li><a href="#about-nasibu-section">About</a></li>
                            <li><a href="#about-nasibu-section"> services</a></li>
                            <li><a href="#about-nasibu-section">Testimonials</a></li>
                        <li><a href="#about-nasibu-section">Contacts</a></li>

                </ul>
            </div>
            </nav>

{{--Small screen nav bar--
            <div class="links">
            <ul>
                 <li><a href="#about-nasibu-section">Home</a></li>
                            <li><a href="#about-nasibu-section">About</a></li>
                            <li><a href="#about-nasibu-section"> services</a></li>
                            <li><a href="#about-nasibu-section">Testimonials</a></li>
                        <li><a href="#about-nasibu-section">Contacts</a></li>

                </ul>
            </div> --}}







        {{-- <div class="col-12">

            <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="height: auto;">
                <div><img src="images\nm-logo.png " class="m-md-auto" style="height:10%; width:10%;"> 
                    {{-- <a href="/" class="text-black"><span class="text-primary"><img
                                src="images\nm-logo.png" style="height: 8%; width:8%;"></a> --}}
                    {{-- <a style="text-align: left;" class="navbar-brand bold"
                        href="home.php"><i class="fas fa-cart"></i>&nbsp;&nbsp;Admin Dashboard</a>
                    --
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"
                        style="margin-left: 38%;">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">

                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#" style="color: white; font-style: 20px; ">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services-section" style="color: white;">Services</a>
                            </li>

                            <li><a href="#about-nasibu-section" class="nav-link" style="color: white;">About</a></li>


                            <li><a href="#testimonials-section" class="nav-link" style="color: white;">Testimonials</a></li>

                            <li><a href="https://linktr.ee/naxibu" class="nav-link" style="color: white;">Portifolio</a>
                            </li>

                            <li><a href="#contact-section" class="nav-link" style="color: white;">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div> --}}



        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">


            <div class="col-md-2">
                <a class="navbar-brand" href="#"><img src="images\nm-logo.png" class="image-fluid"
                        style="height: auto; width:50%;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-5">
                <div class="collapse navbar-collapse mt-3" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" style="color: white; font-style: 20px; ">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services-section" style="color: white;">Services</a>
                        </li>

                        <li><a href="#about-nasibu-section" class="nav-link" style="color: white;">About</a></li>

                        {{-- <li class="nav-item dropdown">
                                                    <a class="nav-link " href="#about-s" id="navbarDropdownMenuLink" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                        style="color: white;">
                                                        About
                                                    </a>
                                                    <div style="border-bottom:5px solid #F39C12;" class="dropdown-menu"
                                                        aria-labelledby="navbarDropdownMenuLink">
                                                     <a class="dropdown-item" href="#team-section">Team</a>
                                                            <a class="dropdown-item" href="#faq-section">FAQ</a>
                                                        </div>
                                                    </li> 
                                                    <li><a href="#testimonials-section" class="nav-link"
                                                            style="color: white;">Testimonials</a></li>
                                                     
                                                 <li><a href="https://linktr.ee/naxibu" class="nav-link" style="color: white;">Portifolio</a></li> 
            
                                                    <li><a href="#contact-section" class="nav-link" style="color: white;">Contact</a></li> 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                
                            
            
                            </nav>  --}}
          
                      {{-- </div>
          
                      <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          
                    </div> --}}
                
          



            {{-- <header class="mb-5">

                <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <a class="navbar-brand" href="#"><img src="images\nm-logo.png" class="image-fluid"
                                        style="height: auto; width:50%;"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-5">
                                <div class="collapse navbar-collapse mt-3" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#" style="color: white; font-style: 20px; ">Home <span
                                                    class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#services-section" style="color: white;">Services</a>
                                        </li>

                                        <li><a href="#about-nasibu-section" class="nav-link" style="color: white;">About</a></li>

                                        {{-- <li class="nav-item dropdown">
                                            <a class="nav-link " href="#about-s" id="navbarDropdownMenuLink" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                style="color: white;">
                                                About
                                            </a>
                                            <div style="border-bottom:5px solid #F39C12;" class="dropdown-menu"
                                                aria-labelledby="navbarDropdownMenuLink">
                                                {{-- <a class="dropdown-item" href="#team-section">Team</a>
                                                    <a class="dropdown-item" href="#faq-section">FAQ</a>
                                                </div>
                                            </li> 
                                            <li><a href="#testimonials-section" class="nav-link"
                                                    style="color: white;">Testimonials</a></li>
                                            {{-- <li><a href="#blog-section" class="nav-link"
                                                    style="color: white;">Blog</a></li> -
                                            <li><a href="https://linktr.ee/naxibu" class="nav-link" style="color: white;">Portifolio</a></li>

                                            <li><a href="#contact-section" class="nav-link" style="color: white;">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </nav>

                </header><br> --}}


                {{-- <header class="site-navbar js-sticky-header site-navbar-target">

                    <div class="container">
                        <div class="row align-items-center position-relative">


                            <div class="site-logo">
                                <a href="/" class="text-black"><span class="text-primary"><img src="images\nm-logo.png"
                                            style="height: 8%; width:8%;"></a>
                            </div>

                            <div class="col-12">
                                <nav class="site-navigation text-right ml-auto " role="navigation">

                                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">

                                        <li><a href="google.com" class="nav-link">Services</a></li>


                                        <li class="has-children">
                                            <a href="#about-section" class="nav-link">About</a>
                                            <ul class="dropdown arrow-top">
                                                <li><a href="google.com" class="nav-link">Team</a></li>
                                                <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                                                <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                                <li class="has-children">
                                                    <a href="#">More Links</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">Menu One</a></li>
                                                        <li><a href="#">Menu Two</a></li>
                                                        <li><a href="#">Menu Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>


                                        <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                                        <li><a href="#blog-section" class="nav-link">Blog</a></li>
                                        <li><a href="#contact-section" class="nav-link">Contact</a></li>
                                    </ul>
                                </nav>

                            </div>

                            <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                                    class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
                            </div>

                        </div>
                    </div>

                </header> --}}


                <div class="owl-carousel slide-one-item">



                    {{-- <img src="{{ asset('images') }}/{{ $product->product_image }}"
                        style="max-width:120px"></td> --}}

                        <div class="site-section-cover overlay img-bg-section"
                            style="background-image: url('images/y4c.jpg'); height:100%;">
                            <div class="container">
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col-md-12 col-lg-7">
                                        <h1 data-aos="fade-up" data-aos-delay="">Address Community challenges</h1>
                                        <h1 data-aos="fade-up" data-aos-delay="" style="font-size:35px;">With innovative solutions
                                        </h1>
                                        <p class="mb-5 w-75 mx-auto" data-aos="fade-up" data-aos-delay="100">
                                        </p>
                                        <p data-aos="fade-up" data-aos-delay="200"><a href="#about-section"
                                                class="btn btn-outline-white border-w-2 btn-md">Get in
                                                touch</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- <div class="row">
    @foreach ($sliders as $slider )
        
    
    <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
        <div>
        <a href="single.html" class="mb-4 d-block"><img src="blogs_contents/{{$slider->image}}" alt="Image"
                    class="img-fluid rounded" height="10%" width="80%"></a>
        <h2><a href="single.html">{{$slider->title}}</a></h2>
        <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">{{$slider->created_at}}</a></p>
            <p class="font-size-14">{{Illuminate\Support\Str::of($slider->body_1)->words(100)}}</p>
        <p><a href="blog/{{$slider->id}}">Read More</a></p>
        </div>
    </div>
    @endforeach
   
</div> -->

                        <div class="site-section-cover overlay img-bg-section"
                            style="background-image: url('images/20200922_122831.jpg'); ;">
                            <div class="container">
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col-md-12 col-lg-7">
                                        <h1 data-aos="fade-up" data-aos-delay="">Human-Centered Design Skills <br>For Creative and Strategic Solutions</h1>
                                        <p class="mb-5 w-75 mx-auto" data-aos="fade-up" data-aos-delay="100">
                                        </p>
                                        <p data-aos="fade-up" data-aos-delay="200"><a href="#services-section"
                                                class="btn btn-outline-white border-w-2 btn-md">Get in
                                                touch</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="site-section-cover overlay img-bg-section"
                            style="background-image: url('images/File_004.jpeg');">
                            <div class="container">
                                <div class="row align-items-center justify-content-center text-center">
                                    <div class="col-md-12 col-lg-7">
                                        <h1 data-aos="fade-up" data-aos-delay="">
                                            Actionable solutions to societal Challeges<br>to societal Challenges</h1>
                                        <p class="mb-5 w-75 mx-auto" data-aos="fade-up" data-aos-delay="100">
                                        </p>
                                        <p data-aos="fade-up" data-aos-delay="200"><a href="#about-section"
                                                class="btn btn-outline-white border-w-2 btn-md">Get in
                                                touch</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>






                </div>

                <div class="site-section" id="services-section">
                    <div class="container">
                        <div class="row mb-5 justify-content-center">
                            <div class="col-md-7 text-center">
                                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                                    <h2 style=""><u>Related Works</u></h2>



                                    <p>This is what I do.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="row">
                                {{-- <div class="col-md-6 col-lg-4 mb-4"
                                    data-aos="fade-up" data-aos-delay="">
                                    <div class="block__35630">
                                        <div class="icon mb-3">
                                            <span class="flaticon-skateboard-4"></span>
                                        </div>
                                        @foreach ($services as $service)


                                             <h3 class="mb-3"style=" color: #91F4DE;">{{ $service->sub_heading }}</h3>
                                            {{ $service->sub_description }}

                                    </div>
                                </div> --}}

                                @foreach ($services as $service)
                                    <div class=" col-md-6 col-lg-4 mb-4" data-aos="fade-up"
                                        data-aos-delay="200">
                                        <div class="block__35630">
                                            {{-- <div class="icon mb-3">
                                                <span class="flaticon-skateboard-1"></span>
                                            </div> --}}
                                            <h3 class="mb-3 p-2"style=" color: #5CAD9A;">{{ $service->sub_heading }}</h3>
                                            <h5 class="mb-3 p-2" style="font-size: 18px; color: #ff8b00;">
                                                {{ $service->services_description }}</h5>
                                            <p class="p-2 font-size-14">{{ $service->sub_description }}</p>
                                        </div>
                                        <a href="form" class="p-2">Ask For Quote</a>
                                    </div>
                                @endforeach 

                            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="block__35630">
                                    {{-- <div class="icon mb-3">
                                        <span class="flaticon-skateboard-1"></span>
                                    </div> --}}
                                    <h3 class="mb-3 p-2"style=" color: #5CAD9A;">Media Consultation</h3>
                                    <p class="p-2 font-size-14">Let’s talk about what will make both of us more knowledgeable
                                    and hopefully you could trust me
                                    with bridging the gap between you and your media partners and
                                    vendors to ensure quality of the
                                    service you are receiving.</p>
                                </div>
                                <a href="form" class="p-2">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($secondparts as $secondpart)
                <div class="site-section" id="about-nasibu-section">
                    <div class="block__73694 mb-2">
                        <div class="container">
                            <div class="row d-flex  align-items-stretch">

                                <div class="col-12 col-lg-6 block__73422"
                                    style="background-image: url('{{ asset('services') }}/{{ $secondpart->image1 }}');"
                                    data-aos="fade-right" data-aos-delay="">
                                </div>

                                


                                <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0"
                                    data-aos="fade-left" data-aos-delay="">
                                    <h2 class="mb-3 text-primary">{{ $secondpart->heading1 }}
                                    </h2>
                                    <p class="descr">{{ $secondpart->description1 }}</p>

                                    <p></p>

                                    <ul class="ul-check primary list-unstyled mt-5 font-size-14Four ">
                                        <li>{{ $secondpart->list1 }}</li>
                                        <li>{{ $secondpart->list2 }}</li>
                                        <li>{{ $secondpart->list3 }}</li>
                                        <li>{{ $secondpart->list4 }}</li>
                                    </ul>
                                    View full Portifolio&nbsp;&nbsp;<a href="https://linktr.ee/naxibu">HERE</a>

                                </div>



                            </div>
                        </div>
                    </div>


                    <div class="block__73694">
                        <div class="container">
                            <div class="row d-flex no-gutters align-items-stretch">

                                <div class="col-12 col-lg-6 block__73422 order-lg-2"
                                    style="background-image: url('{{ asset('image2') }}/{{ $secondpart->image2 }}');"
                                    data-aos="fade-left" data-aos-delay="">
                                </div>



                                <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1"
                                    data-aos="fade-right" data-aos-delay="">
                                    <h2 class="mb-3 text-primary">{{ $secondpart->heading2 }}
                                    </h2>
                                    <p class="descr">{{ $secondpart->description2 }}</p>

                                    <p></p>

                                    <ul class="ul-check primary list-unstyled mt-5 font-size-14">
                                        <li>{{ $secondpart->list_1 }}</li>
                                        <li>{{ $secondpart->list_2 }}</li>
                                        <li>{{ $secondpart->list_3 }}</li>
                                        <li>{{ $secondpart->list_4 }}</li>
                                    </ul>
                                    View full Portifolio&nbsp;&nbsp;<a href="https://linktr.ee/naxibu">HERE</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            @endforeach



                <div class="site-section" id="about-section">
                    <div class="container">
                        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
                            <div class="col-md-12 mb-5">
                                {{-- <figure class="block-img-video-1"
                                    data-aos="fade">
                                    <a href="https://vimeo.com/45830194" data-fancybox
                                        data-ratio="2">
                                        <span class="icon"><span class="icon-play"></span></span>
                                        <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
                                    </a>
                                </figure> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">

                                <div class="row">

                                    <table class="table col-md-12 no-line"  style="text-decoration-line: none;" >
                                        <tr>
                                            <td>
                                                <div class="col-6 col-md-4 mb-2 col-lg-0 col-lg-10"
                                                    data-aos="fade-up" data-aos-delay="">
                                                    <div class="block-counter-1">
                                                        <span class="number text-primary"><span
                                                                data-number="10">0</span></span>
                                                        <span class="caption">Years of
                                                            Experience</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style ="">
                                                <div class="col-6 col-md-4 mb-4 col-lg-0 col-lg-12"
                                                    data-aos="fade-up" data-aos-delay="100">
                                                    <div class="block-counter-1">
                                                        <span class="number text-primary"><span
                                                                data-number="153">0</span></span>
                                                        <span class="caption">Published
                                                            Articles</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="">
                                                <div class="col-6 col-md-4 mb-4 col-lg-0 col-lg-12"
                                                    data-aos="fade-up" data-aos-delay="200">
                                                    <div class="block-counter-1">
                                                        <span class="number text-primary"><span
                                                                data-number="14">0</span></span>
                                                        <span class="caption">Number of
                                                            Associates</span>
                                                    </div>
                                                </div>
                                            <td>

                                        </tr>
                                        <!-- <tr>
                                            <td>
                                                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-10"
                                                    data-aos="fade-up" data-aos-delay="300">
                                                    <div class="block-counter-1">
                                                        <span class="number text-primary"><span
                                                                data-number="2198">0</span></span>
                                                        <span class="caption">Photos Taken</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-12"
                                                    data-aos="fade-up" data-aos-delay="300">
                                                    <div class="block-counter-1">
                                                        <span class="number text-primary"><span
                                                                data-number="431">0</span></span>
                                                        <span class="caption"> Videos Created</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-12"
                                                    data-aos="fade-up" data-aos-delay="300">
                                                    <div class="block-counter-1">
                                                        <span class="number text-primary"><span
                                                                data-number="357">0</span></span>
                                                        <span class="caption"> Chickens
                                                            Slaughtered</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> -->
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                {{-- <div class="site-section" id="Portifolio-section">
                    <div class="container">
                        <div class="row mb-5 justify-content-center">
                            <div class="col-md-7 text-center">
                                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                                    <h2>Portifolio</h2>
                                    <p>Here is my portifolio for You</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                                <div class="block-team-member-1 text-center rounded">
                                    <figure>
                                        <img src="images/1602684852.jpeg" alt="Image"
                                            class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">My Cv</h3>
                                    <a href=""><span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">See
                                            more</span></a>
                                    <div class="block-social-1">


                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="block-team-member-1 text-center rounded">
                                    <figure>
                                        <img src="images/1602684772.jpeg" alt="Image"
                                            class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">Content Writer</h3>
                                    <a href=""><span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Explore
                                            More</span></a>
                                    <div class="block-social-1">
                                        {{-- <a href="#"
                                            class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                class="icon-facebook"></span></a>
                                        <a href="#"
                                            class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                class="icon-twitter"></span></a>
                                        <a href="#"
                                            class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                class="icon-instagram"></span></a>
                                        -
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="block-team-member-1 text-center rounded">
                                    <figure>
                                        <img src="images/1602684772.jpeg" alt="Image"
                                            class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">Journalist</h3>
                                    <a href=""><span
                                            class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Explore
                                            More</span></a>
                                    <div class="block-social-1">
                                        {{-- <a href="#"
                                            class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                class="icon-facebook"></span></a>
                                        <a href="#"
                                            class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                class="icon-twitter"></span></a>
                                        <a href="#"
                                            class="btn border-w-2 rounded primary-primary-outline--hover"><span
                                                class="icon-instagram"></span></a>
                                        }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
    </div>



    <section class="site-section" id="faq-section">
        <div class="container">

            <div class="row site-section" id="faq-section">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title text-primary">Frequently Ask Questions</h2>
                </div>
            </div>
            <div class="row">

                @foreach ($questions as $question)

                    <div class="col-12">
                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-primary h4 mb-4">{{ $question->question }}</h3>
                            <p style="font-size:14px;">{{ $question->answer }}</p>
                        </div>
                    </div>



                @endforeach
                
            </div>
        </div>






</div>

</div>
</div>
</section>








<div class="site-section block-13" id="testimonials-section" data-aos="fade">
<div class="container">

<div class="text-center mb-5">
    <div class="block-heading-1">
        <h2>Testimonials</h2>
    </div>
</div>

<div class="owl-carousel nonloop-block-13">
    {{-- <div>
        <div class="block-testimony-1 text-center">
            style="background-image: url('{{ asset('services') }}/{{ $secondpart->video }}');"
            <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit
                    excepturi
                    sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque
                    veritatis et
                    cupiditate, maiores cumque repudiandae explicabo tempora deserunt
                    consequuntur?&rdquo;</p>
            </blockquote>

            <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 text-black">Ricky Fisher</h3>
        </div>
    </div> --}}
    @foreach ($contents as $content)


        <div>
            <div class="block-testimony-1 text-center">

                <figure>
                    <img src="images/{{ $content->background_image }}" alt="Image"
                        class="img-fluid rounded-circle mx-auto" width="200px;" height='90px'>
                </figure>
                <h3 class="font-size-20 mb-4" style="color: #c47923;">{{ $content->heading }}</h3>
                <h5 class="font-size-15 mb-6 text-white">{{ $content->status }}</h5>
                <blockquote class="mb-4">
                    <p>{{ $content->description }}</p>
                </blockquote>


            </div>
        </div>
    @endforeach
    
    {{-- <div>
        <div class="block-testimony-1 text-center">


            <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit
                    excepturi
                    sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque
                    veritatis et
                    cupiditate, maiores cumque repudiandae explicabo tempora deserunt
                    consequuntur?&rdquo;</p>
            </blockquote>

            <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 text-black">Mellisa Griffin</h3>


        </div>
    </div>

    <div>
        <div class="block-testimony-1 text-center">

            <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
            </figure>
            <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>

            <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit
                    excepturi
                    sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque
                    veritatis et
                    cupiditate, maiores cumque repudiandae explicabo tempora deserunt
                    consequuntur?&rdquo;</p>
            </blockquote>


        </div>
    </div>


</div> --}}

</div>
</div>

<div class="site-section" id="blog-section">
<div class="container">
<div class="row">
    <div class="col-12 text-center mb-5">
        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
            <span>Latest Blog Posts</span>
            <h2>Our Blog</h2>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($latestposts as $latestpost )
        
    
    <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
        <div>
        <a href="blog/{{$latestpost->id}}" class="mb-4 d-block"><img src="blogs_contents/{{$latestpost->image}}" alt="Image"
                    class="img-fluid rounded col-md-12 "  height="10%" width="80%"></a>
        <h2><a href="single.html">{{$latestpost->title}}</a></h2>
        <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">{{$latestpost->created_at}}</a></p>
            <p class="font-size-14">{{Illuminate\Support\Str::of($latestpost->body_1)->words(100)}}</p>
        <p><a href="blog/{{$latestpost->id}}">Read More</a></p>
        </div>
    </div>
    @endforeach
   
</div>
</div>


<div class="site-section" id="contact-section">
<div class="container">
    <div class="row">
        <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1 font-size-14">
                <span>Get In Touch</span>
                <h2>Contact Me</h2>
                <p>If we haven’t answered your question in the FAQ then reach out here:</p>
            </div>
        </div>
    </div>
    <div class="row font-size-14">
        <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <form action="#" method="post">
                <p>Speak to my business associate if you're interested in doing business with the
                    man.<br>
                    Through Buisness Email: <a href="mailto:business@nasibumahinya.com<">
                        business@nasibumahinya.com</a>
                </p>

                <p>Drop a line to my technical associate if you're in for that tech talk.
                    Through Technical Email: <a
                        href="mailto:technical@nasibumahinya.com">technical@nasibumahinya.com</a>
                </p>
                <p>Speak to my legal associate if you have copyright and intellectual property
                    inquiries.<a href="mailto:legal@nasibumahinya.com">
                        legal@nasibumahinya.com</a>
                </p>

                <p>Speak to the editor for issues concerning content.<br>
                    Through: <a href="mailto:editor@nasibumahinya.com">
                        editor@nasibumahinya.com</a>
                </p>
            </form>
        </div>
        <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-primary"> Speak to the man himself</h2>
            <ul style="">
                <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: goldenrod;">
                        <path fill-rule="evenodd"
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                    </svg>&nbsp;&nbsp;&nbsp; P.O. Box 32082
                </li>
                <li><svg class="svg-icon" viewBox="0 0 20 20" style="width: 20px;height:20px; color:goldenrod; right:8%;" fill="currentColor">
                    <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                </svg>
                    Dar es salaam,Tanzania

                </li>
                <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-envelope-open-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" style="color: goldenrod">
                        <path
                            d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                    </svg>&nbsp;&nbsp;&nbsp;&nbsp;him@nasibumahinya.com</li>
                <li>
                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-envelope-open-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" style="color: goldenrod">
                        <path
                            d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                    </svg>&nbsp;&nbsp;&nbsp;&nbsp;Nasibu69@gmail.com</li>
                <li><svg style="color: goldenrod" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                  </svg >&nbsp;&nbsp;&nbsp; +255 714 108 317</li>
            </ul>

        </div>
    </div>
</div>
</div>

@include('parts.footer')



@endsection