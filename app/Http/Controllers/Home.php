<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::all();
        return view('home', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home_form', ['form_type' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required'
        ]);
        $articles              = new Articles;
        $articles->title       = $request->input('title');
        $articles->description = $request->input('description');
        $articles->save();
        return redirect('/')->with('info', 'Article Save Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Articles::find($id);
        return view('home_read', ['articles' => $articles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Articles::find($id);
        return view('home_form', ['articles' => $articles, 'form_type' => 'edit']);
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
        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'title'       => $request->input('title'),
            'description' => $request->input('description')
        );
        Articles::where('id', $id)
        ->update($data);
        return redirect('/')->with('info', 'Article Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articles::where('id', $id)
        ->delete();
        return redirect('/')->with('info', 'Article Deleted Successfully!');
    }
}
