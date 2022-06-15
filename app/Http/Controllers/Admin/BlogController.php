<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    public function add(){
        $data['categories'] = Category::where('status',true)->get();
        return view('admin.home_elements.blog.add_blog',$data);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'summary' => 'required',
            // 'category' => 'required',
            'cover_image'=>'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        $slug = Str::slug($request->title);

        $file= $request->file('cover_image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('blog/'), $filename);

        $b = new Blog();
        $b->title = $request->title;
        $b->content = $request->content;
        $b->summary = $request->summary;
        $b->cat_id = $request->category;
        $b->slug = $slug;
        $b->cover_image = $filename;
        $b->save();


        return redirect()->back();

    }

    public function manage(){
        $data['blogs'] = Blog::get();
        return view('admin.home_elements.blog.manage');
    }
}
