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
                                <li><a href="/tech-posts/{{$blogpost->id}}">Tech<span>({{$techPosts}})</span></a></li>
                                <li><a href="/science-posts/{{$blogpost->id}}">Science <span>({{$sciePosts}})</span></a></li>
                                <li><a href="/busi-posts/{{$blogpost->id}}">Business <span>({{$buisPosts}})</span></a></li>
                                <li><a href="/music-posts/{{$blogpost->id}}">Music <span>({{$musicPosts}})</span></a></li>
                                <li><a href="/trav-posts/{{$blogpost->id}}">Travel <span>({{$travelPosts}})</span></a></li>
                                <li><a href="/laughs-posts/{{$blogpost->id}}">Laughs <span>({{$laughsPosts}})</span></a></li>
                            </div>
                        </div>