<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Psy\CodeCleaner\UseStatementPass;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$posts = User::posts()->get();
        //return $posts;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('pages/events.blade');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ulozit do databazy

        $user = User::findOrFail(1);
        //najskor najst user
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'info' => 'required'
        ]);
        // need to create instane to save to user

        $post = new Post(['title' => $request->title, 'body' => $request->body,
                            'info' => $request->info,'user_id' => $user->id, 'is_main' => $request->is_main]);

        $user->posts()->save($post);


        // return back to page and set to session_variable succces for message
        return back()->with('success', 'Product successfully added.');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showIndex()
    {
        return view('index');
    }
}
