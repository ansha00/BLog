<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function blog()
    {
        $blogs = Blog::all();
        return view('blog',compact('blogs'));
    }

    public function save(Request $request)
{
    $blog = new Blog();

    $blog->name = $request->name;
    $blog->description = $request->description;
    $blog->author = $request->author;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . $file->getClientOriginalName();
        $file->move('image', $filename);
        $blog->image = 'image/' . $filename;
    }

    $blog->save();
    return back();
}

    public function delete($id){
        $blog = Blog::find($id);
        $blog->delete();
        return back();
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('edit', compact('blog'));
    }

    public function update(Request $request, $id){
        
        $blog =  Blog::find($id);
        $blog->name =$request->name;
        $blog->description =$request->description;
        $blog->author =$request->author;
        
   
    if($request->hasfile('image')){
        $file=$request->file('image');
        $filename=time().$file->getClientOriginalName();
        $file->move('image',$filename);

        $blog->image='image/'.$filename;
     
    }
        $blog->update();
        return redirect('/')->with('success', ' updated successfully!');

    }


}
