<?php
namespace Carbon\Carbon;
namespace App\Http\Controllers;
use App\Models\Blogpost;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;

class BlogPostsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techPosts =Blogpost::where('category','technology')
                                ->count();
        $sciePosts =Blogpost::where('category','science')
                                ->count();
        $buisPosts =Blogpost::where('category','business')
                                ->count();
        $musicPosts =Blogpost::where('category','music')
                                ->count();
        $travelPosts =Blogpost::where('category','travel')
                                ->count();
        $laughsPosts =Blogpost::where('category','laughs')
                                ->count();
        //
        $blogposts = Blogpost::paginate(6);
        // return $blogposts
        Paginator::useBootstrap();          
        $time = \Carbon\Carbon::now()->toDateTimeString();
        return view('pages.postedblogs',compact('blogposts',
                                                'time',
                                                'techPosts',
                                                'sciePosts',
                                                'buisPosts',
                                                'musicPosts',
                                                'travelPosts',
                                                'laughsPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPosts()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function allPosts()
    {
        //
        $posts=Blogpost::get();
        // $number = Blogpost::findOrFail($id);
        // $row=$number->comments()
        //             ->get();
        // $total_comment=$row->count();
        return view('blogs.posts',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletePost($id)
    {
        //
        
        DB::table('blogposts')->where('id', $id)->delete();
        return back()->with('post_deleted', 'Tender has been deleted');
    }

    public function viewDashComment($id)
    {
        //
        
        
        $single_post=Blogpost::find($id);
                            
        $data= $single_post->comments()
                            ->get();
               
        return view('pages.dashcomments',compact('data'));
        
        
        

    }

    public function viewDashPosts($id){
        $data=Blogpost::findOrFail($id)
                        ->comments()
                        ->get();
        return view('pages.viewDashBlog',compact('data'));
    }


    public function showComment($id)
    {
        
        $comment=Comment::find($id);
        return view('pages.singleComment',compact('comment'));
        
    }
}
