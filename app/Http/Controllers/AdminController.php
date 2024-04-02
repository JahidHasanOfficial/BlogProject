<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    //==========================================//
    public function createPost(){

        return view('admin.pages.createPost');
    }


    //==========================================//
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
        $post->post_status = 'active';
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


    //==========================================//
    public function edit($id){

        $post = Post::findOrFail($id);
        return view('admin.pages.edit',compact('post'));
    }


    //==========================================//
    public function showPost(Request $request ){
        $posts = Post::orderBy('created_at','desc')->get();
        return view('admin.pages.showPost',compact('posts'));
    }


    //==========================================//
  
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
    
        return redirect()->route('show.post')->with('success', 'Post Updated Successfully');
    }
    
 

    // This method will  delete products page
    public function destroy($id)
    {
       $post = Post::findOrFail($id);

      // delete old image
      File::delete(public_path('postimage/'.$post->image));


      //delete product from database
       $post->delete();
       return redirect()->route('show.post')->with('success', 'Post Deleted Successfully');
    }
    



    public function view($id)
    {
      $post = Post::findOrFail($id);
      return view('admin.pages.postDetails', compact('post'));
    }



    public function acceptPost($id)
    {
        $post = Post::findOrFail($id);
        $post->post_status = 'active';
        $post->save();
        return redirect()->route('show.post')->with('success', 'Post Accepted Successfully');
    }

    public function rejectPost($id){
        $post = Post::findOrFail($id);
        $post->post_status = 'rejected';
        $post->save();
        return redirect()->route('show.post')->with('success', 'Post Rejected Successfully');
    }


}
