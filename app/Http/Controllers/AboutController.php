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


    public function aboutUpdate(Request $request, $id)
    {
        $data = About::findOrFail($id);
    
        // Update the fields from the request
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->experience = $request->input('experience');
        $data->address = $request->input('address');
        $data->description = $request->input('description');
    
        // Check if image is being updated
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('aboutimage'), $imageName);
    
            // Delete the previous image if it exists
            if ($data->image && file_exists(public_path('aboutimage') . '/' . $data->image)) {
                unlink(public_path('aboutimage') . '/' . $data->image);
            }
    
            // Update the image attribute
            $data->image = $imageName;
        }
    
        // Save the updated data
        $data->save();
    
        return redirect()->back()->with('success', 'About updated successfully');
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
