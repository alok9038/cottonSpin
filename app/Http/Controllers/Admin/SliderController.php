<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function view(){
        return view('admin.home_elements.add_slider');
    }

    public function add(Request $request){
        $request->validate([
            'image' => 'required',
            'title' => 'required',
        ]);

        $image = "demo.png";

        $s = new Slider();
        $s->image = $image;
        $s->title = $request->title;
        $s->save();

        return redirect()->back();
    }

    public function delete(Request $request){
        $request->validate([
            'id'=>'required',
        ]);

        $query = Slider::where('id',$request->id)->delete();

        if($query){
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function manage(){
        $data['sliders'] = Slider::get();
        return view('admin.home_elements.manage_slider',$data);
    }

    public function status(Request $request){
        $id = $request->id;

        $s = Slider::find($id);

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
