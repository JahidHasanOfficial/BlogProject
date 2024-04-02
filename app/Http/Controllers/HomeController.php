<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Psy\Exception\Exception;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
         
            $usertype = Auth()->user()->usertype;
            if($usertype == 'user'){
              
                $posts = Post::all();
                return view('frontend.pages.homepage', compact('posts'));
            }
           else if($usertype == 'admin'){
               // return view('admin.layout.app');
                return view('admin.pages.adminHomePage');
            }
            else{
                return redirect()->back();
            }
        }
    }

    // public function post(){
    //     return view('post');
    // }



    public function homepage(){
        $posts = Post::all();
       // return $posts;
        return view('frontend.pages.homepage', compact('posts'));
    }


    public function post_details($id){
        
        $post = Post::findOrFail($id);
        // return $posts;
        return view('frontend.pages.post_details', compact('post'));
  
    }



    

    
}
