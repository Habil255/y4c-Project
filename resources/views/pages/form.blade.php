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
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
              <div class="row align-items-center position-relative">
      
      
                <div class="site-logo">
                    <a href="#"><img src="images\nm-logo.png "style="height 5%; width:5%;"></a>
                </div>
                  
                  <div class="col-12">
                    <nav class="site-navigation text-right ml-auto " role="navigation">
      
                      <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        
                        <li><a href="/" class="nav-link">Home</a></li>
                      </ul>
                    </nav>
      
                  </div>
      
                  <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
      
                </div>
            </div>
        </header>

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
                                   
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="#services-section" style="color: white;">Services</a>
                                    </li>

                                    <li><a href="#about-section" class="nav-link" style="color: white;">About</a></li> --}}

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
                                        </li> --}}
                                        {{-- <li><a href="#testimonials-section" class="nav-link"
                                                style="color: white;">Testimonials</a></li>
                                        {{-- <li><a href="#blog-section" class="nav-link"
                                                style="color: white;">Blog</a></li>
                                        <li><a href="#Portifolio-section" class="nav-link" style="color: white;">Portifolio</a></li>

                                        <li><a href="#contact-section" class="nav-link" style="color: white;">Contact</a></li> -
                                                <li class="nav-item active" style=" left: 50%;">
                                            <a class="nav-link" href="/" style="color: white; font-style: 20px; left: 150%;">Home<span
                                                    class="sr-only">(current)</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </nav>

            </header><br> --}}



            <div class="container" >
                <div class="row" style="margin-top: 5%; margin-bottom: 4%; margin-left:10%;">
                    <div class="col-md-8">
                        <div class="card" >
                            <div class="card-header dark">
                                <center>TELL US YOUR ISSUE</center>
                            </div>
                            <div class="card-body">
                                {{-- @if (Session::has('success'))
                                <div class="alert alert-success" role="alert" style="font-size:25px;">
                                    <p ><center>{{ Session::get('success') }}</center></p>
                                </div> --}}

                                @if (Session::has('issue_added'))
                                
                                <div class="alert alert-success" role="alert" style="font-size:17px;">
                                    <p ><center>{{ Session::get('issue_added') }}</center></p>
                              </div>

                            @endif
                            <form method="POST" action="{{ route('issue.post') }}" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="company_name">Name:</label>
                                    <input type="text" name="name" class="form-control" value="" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">Email:</label>
                                    <input type="text" name="email" class="form-control" value="" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">Phone Number(Optional):</label>
                                    <input type="text" name="phonenumber" class="form-control" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">What's your Issue:</label>
                                    <textarea name="issue" id="" class="col-md-12" required></textarea>
                                    </div>

                                    <div style="margin-left: 60%;">
                                        <input type="submit" name="Submit" class="btn btn-success" />
                                        </div>
                                </form>
                            </div>
                              
                        </div>
                    </div>
                </div>
            </div>

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


            

            

            



            



            
        </div>



        







        

        {{-- <div class="site-section" id="blog-section">
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
                    <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="single.html" class="mb-4 d-block"><img src="images/hero_2.jpg" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h2><a href="single.html">How To Find Gold In Mining</a></h2>
                            <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a
                                    href="single.html" class="by">James Cooper</a></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque.
                                Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis
                                culpa quis!</p>
                            <p><a href="single.html">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <a href="single.html" class="mb-4 d-block"><img src="images/hero_3.jpg" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h2><a href="single.html">How To Find Gold In Mining</a></h2>
                            <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a
                                    href="single.html" class="by">James Cooper</a></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque.
                                Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis
                                culpa quis!</p>
                            <p><a href="single.html">Read More</a></p>
                        </div>
                    </div>

                </div>
            </div> --}}


            

            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="footer-heading mb-4">About Us</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam
                                        voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                                </div>
                                <div class="col-md-4 ml-auto">
                                    <h2 class="footer-heading mb-4">Features</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Press Releases</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">

                            <div class="mb-5">
                                <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                                <form action="#" method="post" class="footer-suscribe-form">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border-secondary text-white bg-transparent"
                                            placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary text-white" type="button"
                                                id="button-addon2">Subscribe</button>
                                        </div>
                                    </div>
                            </div>


                            <h2 class="footer-heading mb-4">Follow Me on:</h2>
                            <a href="https://www.facebook.com/nasibuthevibe" class="smoothscroll pl-0 pr-3"><span
                                    class="icon-facebook"></span></a>
                            <a href="https://www.twitter.com/nasibuthevibe" class="pl-3 pr-3"><span
                                    class="icon-twitter"></span></a>
                            <a href="https://www.instagram.com/nasibuthevibe" class="pl-3 pr-3"><span
                                    class="icon-instagram"></span></a>
                            <a href="https://www.linkedin.com/in/nasibu-mahinya-09848b108" class="pl-3 pr-3"><span
                                    class="icon-linkedin"></span></a>
                            </form>
                        </div>
                    </div>
                    <div class="row pt-5 mt-5 text-center">
                        <div class="col-md-12">
                            <div class="border-top pt-5">
                                <p class="copyright"><small>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());

                                        </script> All rights reserved </a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </small></p>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>



    @endsection
