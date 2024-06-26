<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Auth::user()->roles);
        // dd(Auth::id());
        // echo "todo called"; 
        $title = "Todo List <b>testing</b>";
        return view("todo.index",['title'=>$title, 'todos'=>Todo::with('topics')->get()]);
        // return view("todo.index",['title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $topics = Topic::pluck('title', 'id');
        // dd($topics);
        return view ("todo.create",compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo "store called";
        // dd($request->all());
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->is_completed = $request->is_completed ?? 0;
        $todo->save();

        $todo->topics()->sync($request->topics);

        return redirect()->route('todo.index')->with('success', 'Todo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }

        //createuser
        public function createtodo(){
            $todos = Todo::factory()->count(3)->create();
            dd($todos);
        }
        public function checkdelete(){
            echo "delete method working";
        }
}
