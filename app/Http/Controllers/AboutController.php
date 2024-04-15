<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    //

    public function createAbout(){
        return view('admin.pages.createAbouts');
    }


    public function aboutStore(Request $request){

    
        $data = new About();

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->experience = $request->experience;
        $data->address = $request->address;
        $data->description = $request->description;
        


        //==============image uploade in database ============================//
       $image = $request->image;
       if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('aboutimage',$imagename);
        $data->image = $imagename;
       }
        $data->save();
        return redirect()->back()->with('success','About created successfully');
    }


    public function aboutEdit($id){
        $data = About::findOrFail($id);
        return view('admin.pages.aboutEdit',compact('data'));
    }


    public function aboutUpdate(Request $request ,$id){

    
        $data = About::findOrFail($id);

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->experience = $request->experience;
        $data->address = $request->address;
        $data->description = $request->description;
        


        //==============image uploade in database ============================//
       $data->image = $request->image;
       if ($request->hasFile('image')) {
        // Get the uploaded image
        $image = $request->file('image');

        // Generate a unique filename
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Move the uploaded image to the public directory
        $image->move(public_path('postimage'), $imageName);

        // Delete the previous image if it exists
        if ($data->image) {
            $previousImagePath = public_path('aboutimage') . '/' . $data->image;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }

        // Update the post's image attribute
        $data->image = $imageName;
    }

    // Save the post
    $data->save();
        return redirect()->back()->with('success','About created successfully');
    }


    public function aboutShow(){
        $datas = About::orderBy('created_at','desc')->get();
      
        return view('admin.pages.aboutShow',compact('datas'));
    }


    public function aboutView($id){
        $data = About::findOrFail($id);
        return view('admin.pages.aboutDetails',compact('data'));
    }

}
