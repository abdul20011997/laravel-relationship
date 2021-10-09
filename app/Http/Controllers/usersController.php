<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    //
    public function adduser(){
        $data=new User();
        $data->name='Hameed';
        $data->email='Hameed';
        $data->password=Hash::make('1234');
        $data->save();
        return 'user saved successfully';
    }

    public function addphoneno(){
        $data=new Phone();
        $data->user_id=4;
        $data->phone=7845587373;
        $data->save();
        return 'phone number saved successfully';
    }

    public function getuser(){
        $data=User::all();
        return view('allusers',['data'=>$data]);
    }
    public function getphoneno($id){
        $data=Phone::find($id);
        return view('allphoneno',['data'=>$data]);
    }
    public function getpost(){
        $data=Post::all();
        return view('allpost',['data'=>$data]);
    }
}
