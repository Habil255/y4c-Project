<?php

namespace App\Http\Controllers;
use App\Models\HomeContent;
use App\Models\Question;
use App\Models\SecondPart;
use App\Models\Blogpost;
use App\Models\ServicesContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.dashservices');
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
        $services_description=$request->services_description;
        $sub_heading=$request->sub_heading;
        $sub_description=$request->sub_description;
        $icon= $request->file('file');
        $iconName=time().'.'.$icon->extension();
        $icon->move(public_path('services'),$iconName);

        $service=new ServicesContent();
        $service->services_description=$services_description;
        $service->sub_heading=$sub_heading;
        $service->sub_description=$sub_description;
        $service->icon=$iconName;
        $service->save();

        return back()->with('content_added','Content has added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        // $string = "Habil is the student at the university of Das es salaam";
        // dd(Str::of($string)->words(10));
        $latestposts=Blogpost::orderBy('created_at','desc')
                            ->take(2)
                            ->get();
        $sliders=Blogpost::orderBy('created_at','desc')
                            ->take(2)
                            ->get();
$questions=Question::all();
        $secondparts=SecondPart::all();
        $contents= HomeContent::all();
        $services= ServicesContent::all();
        return view('pages.index',compact('services','contents','secondparts','questions','latestposts','sliders'));
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
    public function dashShow()
    {
        //
        $services=SecondPart::get();
                 return view('pages.postedservices',compact('services'));               
    }


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
    public function dashView($id)
    {
        //
        $service=SecondPart::find($id);
        return view('pages.view-service',compact('service'));
    }


    public function destroy($id)
    {
        //
        DB::table('second_parts')->where('id', $id)->delete();
             return back()->with('post_deleted', 'Tender has been deleted');
    }

    
    
    public function secondPart(Request $request){
        $heading1=$request->heading1;
        $description1=$request->description1;
        $image= $request->file('file');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('services'),$imageName);
        $list1=$request->list1;
        $list2=$request->list2;
        $list3=$request->list3;
        $list4=$request->list4;

        $heading2=$request->heading2;
        $description2=$request->description2;
        $image2= $request->file('file2');
        $image2Name=time().'.'.$image2->extension();
        $image2->move(public_path('image2'),$image2Name);
        $list_1=$request->list_1;
        $list_2=$request->list_2;
        $list_3=$request->list_3;
        $list_4=$request->list_4;

        $service=new SecondPart();
        $service->heading1=$heading1;
        $service->description1=$description1;
        $service->image1=$imageName;
        $service->list1=$list1;
        $service->list2=$list2;
        $service->list3=$list3;
        $service->list4=$list4;

        $service->heading2=$heading2;
        $service->description2=$description2;
        $service->image2=$image2Name;
        $service->list_1=$list_1;
        $service->list_2=$list_2;
        $service->list_3=$list_3;
        $service->list_4=$list_4;

        $service->save();

        return back()->with('second_added','Second Content has added');
    } 


}
