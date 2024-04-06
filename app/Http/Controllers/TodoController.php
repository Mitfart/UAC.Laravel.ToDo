<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreate;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index', [
            'todos' => Todo::all()
        ]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit()
    {
        return view('todos.edit');
    }

    // |--------------------------------------------------------------------------

    public function store(TodoCreate $request)
    {
        $request->validated();
        Todo::create([
            'title' => $request['title'],
            'desc' => $request['desc'],
            'is_completed' => false
        ]);

        $request->session()->flash('todo-create-success', "Task \"{$request['title']}\" created!");

        return redirect()->route('todos.index');
    }

    public function change()
    {
        return view('todos.edit');
    }
}
