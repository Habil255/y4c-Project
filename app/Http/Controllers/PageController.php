<?php

namespace App\Http\Controllers;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

    class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('pages.index');
    }


    public function formView()
    {
        //
        
        
        return view('pages.form');
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
    public function storeIssue(Request $request)
    {
        //

       
            //
            $name=$request->name;
            $email=$request->email;
            $phonenumber=$request->phonenumber;
            $issue= $request->issue;
           
    
            $data=new Issue();
            $data->name= $name;
            $data->email=$email;
            $data->phonenumber=$phonenumber;
            $data->issue=$issue;
            $data->save();
    
            return back()->with('issue_added','Your issue has been received');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showIssue()
    {
        //
        $datas= Issue::all();
        return view('pages.receivedissues',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $issue=Issue::find($id);
        return view('pages.showissue',compact('issue'));
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

     public function deleteIssue($id)
        {
        //     //
             DB::table('issues')->where('id', $id)->delete();
             return back()->with('post_deleted', 'Tender has been deleted');
        }
}
