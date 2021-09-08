<?php
namespace Carbon\Carbon;
namespace App\Http\Controllers;
use App\Models\Blogpost;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
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
        //
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $blogposts = Blogpost::findOrFail($id)
                         ->where('category','Music')
                         ->paginate(6);       
                         Paginator::useBootstrap(); 
         return view('blogs.music',compact('blogposts',
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
    public function create()
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
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
