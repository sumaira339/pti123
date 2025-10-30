<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbcsControllerx extends Controller
{
    public function add(){
        return view('welcome');

    }

        public function store(Request $request){
            $data = $request->all();
            Blog::create($data);
            return view('welcome');
        }

        public function index(){
            $abc = blog::all();
            return view('read',compact('abc'));
        }

        public function edit($id){
            $blog = Blog::findorfail($id);
            return view('edit',compact('blog'));
        }

        public function update(Request $request,$id){
            $blog = Blog::findorfail($id);
            $blog->update($request->all());
            return redirect('/');
        }

         public function delete($id){
         $blog = Blog::findOrFail($id);
         $blog->delete();
         return redirect('/')->with('success', 'Blog delete ho gaya!');
}

    
}

