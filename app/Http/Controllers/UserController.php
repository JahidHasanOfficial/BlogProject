<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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

    public function edit($id){

        $post = Post::findOrFail($id);
        return view('frontend.pages.UserEditPage',compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
    
        // Update other attributes
        $post->title = $request->title;
        $post->description = $request->description;
        $post->name = $request->name;
    
        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Get the uploaded image
            $image = $request->file('image');
    
            // Generate a unique filename
            $imageName = time() . '.' . $image->getClientOriginalExtension();
    
            // Move the uploaded image to the public directory
            $image->move(public_path('postimage'), $imageName);
    
            // Delete the previous image if it exists
            if ($post->image) {
                $previousImagePath = public_path('postimage') . '/' . $post->image;
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }
    
            // Update the post's image attribute
            $post->image = $imageName;
        }
    
        // Save the post
        $post->save();
    
        return redirect()->route('my.post')->with('success', ' User Post Updated Successfully');
    }


    public function destroy($id)
    {
       $post = Post::findOrFail($id);

      // delete old image
      File::delete(public_path('/postimage/'.$post->image));


      //delete product from database
       $post->delete();
       return redirect()->route('my.post')->with('success', 'Post Deleted Successfully');
    }

}
