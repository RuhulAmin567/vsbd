<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Image;

class PostController extends Controller
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
        $rows = Post::orderBy("id","desc")->get();
        return view("donate.index",compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view("donate.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fi = '';
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('image/' . $filename);
            Image::make($image)->save($location);
            $fi = $filename;
        }
        $data = [
            "title"    => $request->title,
            "type"    => $request->type,
            "description"    => $request->description,
            "image"    => $fi,
            'user_id' => Auth::user()->id,
            'city'  => Auth::user()->city
        ];
        $post = Post::create($data);
        return back()->with("success","Post was created successfully");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Post::where("id",$id)->firstOrFail();
        return view("donate.show",compact("row"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Post::where("id",$id)->firstOrFail();
        return view("donate.edit",compact("row"));
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
        $post = Post::where('id',$id)->firstOrFail();
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('image');
            //add new photo
            $image->move($location,$filename);
            $location = public_path('image/'.$filename);
            Image::make($location)->save($location);


            if(strlen($post->image) > 5 && file_exists(base_path().'/public/image/'.$post->image)) {
                unlink(base_path().'/public/image/'.$post->image);
            }

            $post->image = $filename;
            $post->save();
        }
        $data = [
            "title"    => $request->title,
            "type"    => $request->type,
            "description"    => $request->description,
            'user_id' => Auth::user()->id,
            'city'  => Auth::user()->city
        ];
        $post = Post::where("id",$id)->update($data);
        return back()->with("success","Entry in Post with ID ".$id." was updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where("id",$id)->firstOrFail();
        if(strlen($post->image) > 5 && file_exists(base_path().'/public/image/'.$post->image)) {
            unlink(base_path().'/public/image/'.$post->image);
        }
        $post->delete();
        return back()->with("success","Post deleted successfully");
    }
}
