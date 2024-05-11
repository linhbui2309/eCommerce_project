<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function show(){
        $blogs = Blog::all();
        return view('pages.top-page.index', compact('blogs'));
    }

    
    public function create(){
        
        return view('blog.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'is_active' => 'sometimes'
        ]);
        if($request->file('image')){
            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename= time().'.'.$extention;
            $path = 'public/Image/';
            $file->move($path,$filename);

        }

        Blog::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$filename,
            'is_active' => $request->is_active == true ? 1:0,
        ]);
        return redirect('blogs/create')->with('status','Blog created');
    }

    public function edit(int $id){
        $category = Blog::find($id);
        return view('blog.edit', compact('blog'));
    }
    
    public function update(Request $request, int $id){
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'is_active' => 'sometimes'
        ]);

        if($request->file('image')){
            $file=$request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename= time().'.'.$extention;
            $path = 'public/Image/';
            $file->move($path,$filename);

        }

        Blog::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$filename,
            'is_active' => $request->is_active == true ? 1:0,
        ]);
        return redirect()->back()->with('status','Blog updated');
    }
    public function destroy(int $id){
       $blog= Blog::find($id);
       $blog->delete();
       return redirect()->back()->with('status','Blog deleted');
    }
}
