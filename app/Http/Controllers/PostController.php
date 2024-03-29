<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderby('id','desc')->paginate(3);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
            'title'=>'required|max:255',
            'body'=> 'required'
        ));

        //store in the database
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        Session::flash('Success','The blog post was successfully saved!');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and represent by a variable
        $post=Post::find($id);
        // return the view and pass in the var
        return view('posts.edit')->withPost($post);

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
        //validate the form
        $this->validate($request,array(
            'title'=>'required|max:255',
            'body'=> 'required'
        ));

        //save data into the database
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        //set flash data to post.show
        Session::flash('Success','The blog post was successfully updated!');

        //redirect with flash data to post.show
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Locates the post in the database
        $post=Post::find($id);

        //Deletes the post from the database
        $post->delete();

        //sets a flash message
        Session::flash('Success','The blog post was successfully Deleted!');

        //redirects with flash message to posts.index
        return redirect()->route('posts.index');
    }
}
