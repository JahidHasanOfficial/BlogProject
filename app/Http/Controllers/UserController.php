<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function createPost()
    {
        return view('frontend.pages.userCreatePost');
    }


    public function store(Request $request){

        $user = Auth::user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;


        $post = new Post();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->name = $name;
        $post->user_id = $userid;
        $post->post_status = 'pending';
        $post->usertype = $usertype;


        //==============image uploade in database ============================//
       $image = $request->image;
       if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $post->image = $imagename;
       }
        $post->save();
        return redirect()->back()->with('success','Post created successfully');
    }



    public function myPost(){

        $user = Auth::user();
        $userid = $user->id;
        $posts = Post::where('user_id', $userid)->get();
        return view('frontend.pages.mypost', compact('posts'));
    }


}
