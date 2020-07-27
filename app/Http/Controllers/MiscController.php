<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Friend;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MiscController extends Controller
{
    public function donors(){
        $donors = User::orderBy('id','asc')->paginate(10);
        return view('donors',compact('donors'));
    }
    public function search(Request $request){
        $posts = Post::where('city',$request->city)->where('type','like',$request->type)->get();
        return view('home',compact('posts'));
    }
    public function user($id){
        $user = User::where('id',$id)->firstOrFail();
        return view('userProfile',compact('user'));
    }
    public function postBbyUser($id){
        $user = User::where('id',$id)->firstOrFail();
        $posts = $user->posts();
        return view('home',compact('posts'));
    }
    public function friendRequest($id){
        $data = [
            'user_id' => Auth::user()->id,
            'friend_id' => $id,
            'approved' => false
        ];
        Friend::create($data);
        return back()->with('success','Friend request sent.');
    }
    public function cancelRequest($id){
        $req = Friend::where('user_id',Auth::user()->id)->where('friend_id',$id)->where('approved',false)->firstOrFail();
        $req->delete();
        return back()->with('success','Friend request canceled.');
    }
    public function deleteRequest($id,$fi){
        $req = Friend::where('user_id',$id)->where('friend_id',$fi)->firstOrFail();
        $req->delete();
        return back()->with('success','Friend request deleted.');
    }
    public function unfriend($id){
        $req = Friend::where('user_id',Auth::user()->id)->where('friend_id',$id)->where('approved',true)->firstOrFail();
        $req->delete();
        return back()->with('success','Unfriending successful.');
    }
    public function doUnfriend($id){
        $req = Friend::where('id',$id)->firstOrFail();
        $req->delete();
        return back()->with('success','Unfriending successful.');
    }
    public function confirmRequest($id){
        $req = Friend::where('user_id',$id)->where('friend_id',Auth::user()->id)->where('approved',false)->firstOrFail();
        $req->approved = true;
        $req->save();
        return back()->with('success','Friend successful confirmed.');
    }
    public function friends(){
        $requests = Friend::where('friend_id',Auth::user()->id)->where('approved',false)->get();
        $friends = Friend::where('user_id',Auth::user()->id)->orWhere('friend_id',Auth::user()->id)->where('approved',true)->get();
        return view('friends',compact('requests','friends'));
    }
    public function comment(Request $request){
        $this->validate($request, [
            'comment' => 'required'
        ]);
        $data = [
            'post_id' => $request->post_id,
            'user_id' => Auth::user()->id,
            'comment' => $request->comment
        ];
        $comment = Comment::create($data);

        return back();
    }
}
