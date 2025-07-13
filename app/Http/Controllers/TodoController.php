<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::where('user_id', 1)->get();
        return view('home', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required',
        ]);

        $todo = Todo::create([
            'todo' => $request->todo,
            'user_id' => 1,
        ]);
        return redirect()->route('home');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('home');
    }

    public function edit(Todo $todo)
    {
        return view('home-edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update([
            'todo' => $request->todo,
        ]);
        return redirect()->route('home');
    }
}
