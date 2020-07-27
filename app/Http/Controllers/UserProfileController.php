<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Image;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
    {
        $rows = UserProfile::orderBy("id","desc")->get();
        return view("profile.index",compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view("profile.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           "address"    => "required",
           "upazila"    => "required",
           "district"    => "required",
           "image"    => "required",
        ]);
        $fi = '';
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('image/' . $filename);
            Image::make($image)->save($location);
            $fi = $filename;
        }
        $data = [
            "user_id"    => Auth::user()->id,
            "address"    => $request->address,
            "upazila"    => $request->upazila,
            "district"    => $request->district,
            "image"    => $fi
        ];
        $userprofile = UserProfile::create($data);
        return back()->with("success","UserProfile was updated successfully");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = UserProfile::where("user_id",$id)->first();
        if($row){
            return view("profile.show",compact("row"));
        } else {
            return view("profile.create");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = UserProfile::where("user_id",$id)->firstOrFail();
        return view("profile.edit",compact("row"));
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
        $this->validate($request,[
            "address"    => "required",
            "upazila"    => "required",
            "district"    => "required"
        ]);
        $userprofile = UserProfile::where('id',$id)->firstOrFail();
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('image');
            //add new photo
            $image->move($location,$filename);
            $location = public_path('image/'.$filename);
            Image::make($location)->save($location);


            if(strlen($userprofile->image) > 5 && file_exists(base_path().'/public/image/'.$userprofile->image)) {
                unlink(base_path().'/public/image/'.$userprofile->image);
            }

            $userprofile->image = $filename;
            $userprofile->save();
        }
        $data = [
            "address"    => $request->address,
            "upazila"    => $request->upazila,
            "district"    => $request->district
        ];
        $userprofile = UserProfile::where("id",$id)->update($data);
        return back()->with("success","Your profile was updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = UserProfile::where("id",$id)->firstOrFail();
        $row->delete();
        return back()->with("success","Entry in UserProfile with ID ".$id." was deleted successfully");
    }
}
