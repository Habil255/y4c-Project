<?php
namespace Carbon\Carbon;
namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Blogpost;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('pages.blog');
        
    }

    public function singlePost(Request $request)
    {
        //
        // Blogpost::create([
        //     'title'=>$request->title,
        //     'blog_description'=>$request->blog_description,
        //     $image=> $request->file('file'),
        // $imageName=>time().'.'.$image->extension(),
        // $image=>move(public_path('images'),$imageName),
        // $blog->image1=$imageName;

        // ]);

        $title=$request->title;
        $body_1=$request->body_1;
        $body_2=$request->body_2;
        $body_3=$request->body_3;
        $body_4=$request->body_4;
        $body_5=$request->body_5;
        $body_6=$request->body_6;
        $body_7=$request->body_7;
        $image= $request->file('file');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('blogs_contents'),$imageName);
        $category=$request->category;
        

        $blog=new Blogpost();
        $blog->title=$title;
        $blog->body_1=$body_1;
        $blog->body_2=$body_2;
        $blog->body_3=$body_3;
        $blog->body_4=$body_4;
        $blog->body_5=$body_5;
        $blog->body_6=$body_6;
        $blog->body_7=$body_7;
        $blog->image=$imageName;
        $blog->category=$category;

        $blog->save();
        return back();  
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request,$id)
    {
        
    $msg=Blogpost::findOrFail($id);
    $comment= new Comment();
    $comment->name = $request->name;
    $comment->email = $request->email;
    $comment->phonenumber = $request->phonenumber;
    $comment->message = $request->message;
    $msg->comments()->save($comment);
    return back();

        $data= new Comment();
    // $data->name ='Ibrahim';
    // $data ->email='Habil@c';
    // $data ->phonenumber='0712321';
    // $data ->message='Habil';
    // $msg ->comments()->save($data);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $techPosts =Blogpost::findOrFail($id)
                                ->where('category','technology')
                                ->count();
        $sciePosts =Blogpost::findOrFail($id)
                                ->where('category','science')
                                ->count();
        $buisPosts =Blogpost::findOrFail($id)
                                ->where('category','business')
                                ->count();
        $musicPosts =Blogpost::findOrFail($id)
                                ->where('category','music')
                                ->count();
        $travelPosts =Blogpost::findOrFail($id)
                                ->where('category','travel')
                                ->count();
        $laughsPosts =Blogpost::findOrFail($id)
                                ->where('category','laughs')
                                ->count();
        
        $post=Blogpost::find($id);
       
        // return $post->blog_description;
        $all_comment=Comment::get('id')->count();
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $info=Blogpost::findOrfail($id);
        $data=$info->comments()
                    ->orderBy('created_at','desc')
                    ->take(5)
                    ->get();
                    
                    
        return view('pages.blog',compact('data',
                                        'post',
                                        'time',
                                        'techPosts',
                                        'sciePosts',
                                        'buisPosts',
                                        'musicPosts',
                                        'travelPosts',
                                        'laughsPosts'));
        // $data=Comment::limit(5)
        //                 ->get();
        
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showComment()
    {
        //
        $data=Comment::get();
        return view('pages.dashcomments',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blogPost()
    {
        //
        return view("pages.dashblogpost");
          
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
    public function destroy($id)
    {
        //
        
    }

    
}
