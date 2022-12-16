<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::get();
        //dd($todos);
        return view('index')->with('todos', $todos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('SAJID');
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'due' => 'required'
        ]
        );

        $todos = new Todo();
        $todos->title = $request->input('title');
        $todos->content = $request->input('content');
        $todos->due = $request->input('due');
        $todos->save();

        return redirect('/')->with('success', 'Todo created succuessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todos = Todo::find($id);
        return view('show')->with('todos', $todos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('edit')->with('todo', $todo);
        // dd($id);
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
        $todo = Todo::find($id);
        $todos = new Todo();
        $todos->title = $request->input('title');
        $todos->content = $request->input('content');
        $todos->due = $request->input('due');
        $todos->save();
        return 123;
        // return redirect('/')->with('success', 'Todo created succuessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/');
    }
}
