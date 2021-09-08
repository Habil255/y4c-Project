@extends('pages.main')

    


<!doctype html>
<html lang="en">

<head>
    <title>Posts | Technology</title>
    @section('content')

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        @include('include.othernav')

        <div class="site-section-cover overlay inner-page bg-light h-100%"
        style="background-image: url('{{ asset("images/n67.jpg")}}');" data-aos="fade">

            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-10">

                        <div class="box-shadow-content">
                            <div class="block-heading-1">
                                <span class="d-block mb-3 text-white" data-aos="fade-up">{{$time}}<span
                                class="mx-2 text-primary">&bullet;</span>by Nasibu Mahinya<br> &bullet;Technology</span>
                                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">Nm Blog</h1>
                                <!-- <p class="text-white lower" data-aos="fade-up" >Technology</p> -->
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>



        <section class="site-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 blog-content">
                        <div class="row">
                            {{-- @if(!empty($posts) && $posts->count()) --}}
                            @foreach ($blogposts as $blogpost)
                                
                           
                            <div class="col-md-6 mb-2" data-aos="fade-up" data-aos-delay="200">
                                    <h3>{{$blogpost->title}}</h3>
                                <a href="single.html" class="mb-4 d-block "><img src="{{ asset("blogs_contents/". $blogpost->image) }}" height="100%" width="100%" alt="Image"
                                    class="img-fluid rounded"></a>
                                <p>{{Illuminate\Support\Str::of($blogpost->body_1)->words(100)}}<a href="../blog/{{$blogpost->id}}">Read More</a></p>
                            </div>
                            @endforeach
                            {{-- @else
                            <tr>
                                <td colspan="10">There are no data.</td>
                            </tr>
                        @endif --}}
                            {{-- <div class="col-md-6 mb-2" data-aos="fade-up" data-aos-delay="200">
                                <h3>Why Girrafe likes to Travel</h3>
                                <a href="single.html" class="mb-4 d-block "><img src="blogs_contents/1607977534.jpeg " height="1000%" width="100%" alt="Image"
                                    class="img-fluid rounded"></a>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, deleniti inventore! Amet cumque vel enim soluta, sit doloribus porro temporibus, eos mollitia laboriosam accusantium libero vitae aspernatur quaerat, omnis labore excepturi quo nihil repellat consectetur praesentium exercitationem fugiat possimus molestiae. Iusto libero nam sunt commodi fugit? Maiores enim distinctio amet!
                            </div>

                             <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <h3>Why Girrafe likes to Travel</h3>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, deleniti inventore! Amet cumque vel enim soluta, sit doloribus porro temporibus, eos mollitia laboriosam accusantium libero vitae aspernatur quaerat, omnis labore excepturi quo nihil repellat consectetur praesentium exercitationem fugiat possimus molestiae. Iusto libero nam sunt commodi fugit? Maiores enim distinctio amet!
                            </div> --}}
                            
    
                        </div>
                        
                        <span class="d-flex justify-content-center p-3">
                            {{$blogposts->links()}}
                        </span>
                        <style>
                            .w-5{
                                display: none;
                            }

                        </style>
                        
                        <p><a href="../blogposts">See All Posts</a></p>
                    </div>
                    <div class="col-md-4 sidebar ">
                        {{-- <div class="sidebar-box">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon fa fa-search"></span>
                                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div> --}}
                        @include('include.categories')
                        @include('include.aboutAthor')

                        {{-- <div class="sidebar-box">
                            <h3>Paragraph</h3>
                            <p>If you need any assistance to your company is better not to quit, since I'm here for you
                                to ensure that you get in touch with your goal</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>


        @include('parts.footer')

    </div>


@endsection
