<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function view(){
        return view('admin.home_elements.add_testimonial');
    }

    public function add(Request $request){
        $request->validate([
            'image'=>'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'name' => 'required',
            'position' => 'required',
            'content' => 'required',
        ]);

        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('testimonial/'), $filename);

        $s = new Testimonial();
        $s->image = $filename;
        $s->name = $request->name;
        $s->position = $request->position;
        $s->content = $request->content;
        $s->save();

        return redirect()->back();
    }

    public function delete(Request $request){
        $request->validate([
            'id'=>'required',
        ]);

        $query = Testimonial::where('id',$request->id)->delete();

        if($query){
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function manage(){
        $data['testimonials'] = Testimonial::get();
        return view('admin.home_elements.manage_testimonial',$data);
    }

    public function status(Request $request){
        $id = $request->id;

        $s = Testimonial::find($id);

        if($s->status == true){
            $s->status = false;
        }
        else{
            $s->status = true;
        }

        $s->save();

        return redirect()->back();
    }
}
