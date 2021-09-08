@extends('pages.main')

    


<!doctype html>
<html lang="en">

<head>
    <title>blog | Posts</title>
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
                                        class="mx-2 text-primary">&bullet;</span>by Nasibu Mahinya</span>
                                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">Nm Blog</h1>
                                
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
            <p class="lead text-uppercase"><b>{{$post->title}}</b></p>
            
            <img src="{{ asset("blogs_contents/". $post->image) }}" class=" img-fluid rounded" style="padding:px;"><br><br>
             <div class="font-size-14"> 
               <p class="">
                {{$post->body_1}}
              </p>

              <p class="">
                {{$post->body_2}}
              </p>
              <p class="">
                {{$post->body_3}}
              </p>
              <p class="">
                {{$post->body_4}}
              </p>
              <p class="">
                {{$post->body_5}}
              </p>
              <p class="">
                {{$post->body_6}}
              </p>
              <p class="">
                {{$post->body_7 }}
              </p>
             </div>
             
              {{-- <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident vero tempora aliquam excepturi labore, ad soluta voluptate necessitatibus. Nulla error beatae, quam, facilis suscipit quaerat aperiam minima eveniet quis placeat.</p></blockquote>

              <p>Eveniet deleniti accusantium nulla natus nobis nam asperiores ipsa minima laudantium vero cumque cupiditate ipsum ratione dicta, expedita quae, officiis provident harum nisi! Esse eligendi ab molestias, quod nostrum hic saepe repudiandae non. Suscipit reiciendis tempora ut, saepe temporibus nemo.</p>
              <p>Accusamus, temporibus, ullam. Voluptate consectetur laborum totam sunt culpa repellat, dolore voluptas. Quaerat cum ducimus aut distinctio sit, facilis corporis ab vel alias, voluptas aliquam, expedita molestias quisquam sequi eligendi nobis ea error omnis consequatur iste deleniti illum, dolorum odit.</p>
              <p>In adipisci corporis at delectus! Cupiditate, voluptas, in architecto odit id error reprehenderit quam quibusdam excepturi distinctio dicta laborum deserunt qui labore dignissimos necessitatibus reiciendis tenetur corporis quas explicabo exercitationem suscipit. Nisi quo nulla, nihil harum obcaecati vel atque quos.</p>
              <p>Amet sint explicabo maxime accusantium qui dicta enim quia, nostrum id libero voluptates quae suscipit dolor quam tenetur dolores inventore illo laborum, corporis non ex, debitis quidem obcaecati! Praesentium maiores illo atque error! Earum, et, fugit. Sint, delectus molestiae. Totam.</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa iste, repudiandae facere aperiam sapiente, officia delectus soluta molestiae nihil corporis animi quos ratione qui labore? Sint eaque perspiciatis minus illum.</p>
              <p>Consectetur porro odio quod iure quaerat cupiditate similique, dolor reprehenderit molestias provident, esse dolorum omnis architecto magni amet corrupti neque ratione sunt beatae perspiciatis? Iste pariatur omnis sed ut itaque.</p>
              <p>Id similique, rem ipsam accusantium iusto dolores sit velit ex quas ea atque, molestiae. Sint, sed. Quisquam, suscipit! Quisquam quibusdam maiores fugiat eligendi eius consequuntur, molestiae saepe commodi expedita nemo!</p> --}}
              <div class="pt-4">
                <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
              </div>


              <div class="pt-5">
                <p><a href="../blogposts">See All Posts</a></p>
                <h3 class="mb-5 " >Comments</h3>
                @foreach ($data as $data)
                <ul class="comment-list">
                  <li class="comment">
                    <div class="vcard bio">
                      {{-- <img src="images/person_2.jpg" alt="Image"> --}}
                    </div>
                    
                        
                    
                        
                    
                    <div class="comment-body">
                    <h3>{{$data->name}}</h3>
                      <div class="meta">{{$data->created_at}}</div>
                    <p>{{$data->message}}</p>
                    {{-- <p><a href="reply/{{$data->id}}" class="reply">Reply</a></p> --}}
                    </div>
                  </li>

                  @endforeach
                  
                    {{-- <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_5.jpg" alt="Image">
                        </div>
                        <div class="comment-body">
                          <h3>Chintan Patel</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>  
                      </li>
                    </ul>--}}
                  </li>

                  
                </ul>
                <!-- END comment-list -->

                <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">Leave a comment Here</h3>
                <form action="{{ route('comment.post', $post->id) }}" method="POST" required>
                  @csrf
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control"  name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" class="form-control" id="email" name='email'required>
                    </div>
                    <div class="form-group">
                      <label for="website">Phone Number</label>
                      <input type="text" class="form-control" id="website" name="phonenumber" required>
                    </div>

                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
                    </div>
                    @if (Session::has('comment_added'))
                            <div class="alert alert-success" role="alert">
                                <p>{{ Session::get('comment_added') }}</p>
                            </div>

                        @endif
                  </form>
                </div>
              </div>

            </div>
            <div class="col-md-4 sidebar">
              <!-- <div class="sidebar-box">
                <form action="#" class="search-form">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div> -->
              <div class="sidebar-box">
                <div class="categories">
                  <h3>Categories</h3>
                  @if ($techPosts > 0)
                    @endif
                    @if ($sciePosts > 0)
                    @endif
                    @if ($buisPosts > 0)
                    @endif
                    @if ($musicPosts > 0)
                    @endif
                    @if ($travelPosts > 0)
                    @endif
                    @if ($laughsPosts > 0)
                    @endif
                  <li><a href="/tech-posts/{{$post->id}}">Tech<span>({{$techPosts}})</span></a></li>
                  <li><a href="/science-posts/{{$post->id}}">Science<span>({{$sciePosts}})</span></a></li>
                  <li><a href="/busi-posts/{{$post->id}}">Business <span>({{$buisPosts}})</span></a></li>
                  <li><a href="/music-posts/{{$post->id}}">Music <span>({{$musicPosts}})</span></a></li>
                  <li><a href="/trav-posts/{{$post->id}}">Travel <span>({{$travelPosts}})</span></a></li>
                  <li><a href="/laughs-posts/{{$post->id}}">Laughs <span>({{$laughsPosts}})</span></a></li>
                </div>
              </div>
              @include('include.aboutAthor')

              {{-- <div class="sidebar-box">
                <h3>Paragraph</h3>
                <p>If you need any assistance to your company is better not to quit, since I'm here for you to ensure that you get in touch with your goal</p>
              </div> --}}
            </div>
          </div>
        </div>
      </section>


      @include('parts.footer')

    
     

    </div>


@endsection