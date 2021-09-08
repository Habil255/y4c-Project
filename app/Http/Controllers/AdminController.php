<?php

namespace App\Http\Controllers;
use App\Models\Issue;
use App\Models\Blogpost;
use App\Models\Comment;
use App\Models\Question;
use App\Models\HomeContent;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        
        $this->middleware('auth');
    }


    public function index()
    {
        //
        
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashView()
    {
        //
        $posts=Blogpost::get('id');
        $all_posts= $posts->count();
        $all_comment =Comment::get('id')->count();
        $all_issues =Issue::get('id')->count();
        $questions =Question::get('id')->count();
        $time = \Carbon\Carbon::now()->toDateTimeString();
        return view('admin.dashboard',compact('all_posts','all_comment','all_issues','questions','time'));
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
        // public function deleteIssue($id)
        // {
        //     //
        //     DB::table('issues')->where('id', $id)->delete();
        //     return back()->with('post_deleted', 'Tender has been deleted');
        // }

    // 

    public function showIssue()
    {
        //
        
    }

    public function viewIssue($id)
    {
        //
         

    }
    
}
