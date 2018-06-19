<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class GalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Restrict certain pages from access, if not logged in
        $this->middleware('auth', ['except'=> ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('gallery.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Check that the file is an image
        $this->validate($request, [
            'image'=>'image|nullable|max:1999'
        ]);

        //Image upload
        if($request->hasFile('image')){
            $fullFilename = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fullFilename, PATHINFO_FILENAME);
            $extention = $request->file('image')->getClientOriginalExtension();
            $storeFilename = auth()->user()->username.'_'.time().'.'.$extention;
            $path = $request->file('image')->storeAs('public/Images/UserImages', $storeFilename);
        }
        
        //Create the new post
        $post = new Post;
        $post-> comment = $request->input('comment');
        $post->user = auth()->user()->username;
        $post->image = $storeFilename;
        $post->save();

        return redirect('/gallery')->with('success', 'Photo Uploaded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('gallery.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        //Check for the correct user
        if(auth()->user()->username !== $post->user){
            return redirect('/gallery')->with('error', 'Unauthorized access');
        }

        return view('gallery.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, []);
        
        $post = Post::find($id);
        $post-> comment = $request->input('comment');

        $post->save();

        return redirect('/gallery')->with('success', 'Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //Check for the correct user
        if(auth()->user()->username !== $post->user){
            return redirect('/gallery')->with('error', 'Unauthorized access');
        }

        $post->delete();
        return redirect('/gallery')->with('success', 'Post DELETED!');
    }
}
