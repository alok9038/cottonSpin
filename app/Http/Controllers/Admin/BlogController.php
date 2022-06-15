<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function add(){
        $data['categories'] = Category::where('status',true)->get();
        return view('admin.home_elements.blog.add_blog',$data);
    }
}
