<?php

namespace App\Http\Controllers;

use App\Models\About;
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
              
                $posts = Post::where('post_status', '=', 'active')->get();
                $abouts = About::orderBy('created_at','desc')->get();
                return view('frontend.pages.homepage', compact('posts','abouts'));
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
        $posts = Post::where('post_status', '=', 'active')->get();
        $abouts = About::orderBy('created_at','desc')->get();
        return view('frontend.pages.homepage', compact('posts', 'abouts'));
    }
    


    public function post_details($id){
        
        $post = Post::findOrFail($id);
        // return $posts;
        return view('frontend.pages.post_details', compact('post'));
  
    }


    public function about_details($id){
        
        $about = About::findOrFail($id);

        // dd($about);
        return view('frontend.pages.about_details', compact('about'));
  
    }
  
    
    

    
}
