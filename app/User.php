<?php

namespace App;

use App\Models\Friend;
use App\Models\Post;
use App\Models\UserProfile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          "name",
          "blood_group",
          "gender",
          "date_of_birth" ,
          "email" ,
          "contact_no",
          "city",
          "password"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile_pic(){
        $profile = UserProfile::where('user_id',$this->id)->first();
        if($profile){
            return $profile->image;
        } else {
            return 'binoculars.png';
        }
    }
    public function posts(){
        return Post::where('user_id',$this->id)->orderby('id','desc')->get();
    }

    public function friend($id){
        return Friend::where('user_id',Auth::user()->id)->where('friend_id',$id)->first();
    }
    public function friends(){
        return Friend::where('user_id',Auth::user()->id)->orWhere('friend_id',Auth::user()->id)->where('approved',true)->get();
    }

    public function friendReq(){
        return Friend::where('friend_id',Auth::user()->id)->where('approved',false)->get();
    }
}
