<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ToDo;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::all();
        return view('todos.index', data: compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate(rules: [
            'title' => 'required|max:255',
        ]);

        ToDo::create($request->all());
        return redirect('/todos')->with('success', 'To-Do created successfully.');
    }

    public function edit($id)
    {
        $todo = ToDo::findOrFail($id);
        return view('todos.edit', data: compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $todo = ToDo::findOrFail($id);
        $todo->update($request->all());
        return redirect('/')->with('success', 'To-Do updated successfully.');
    }

    public function destroy($id)
    {
        $todo = ToDo::findOrFail($id);
        $todo->delete();
        return redirect('/')->with('success', 'To-Do deleted successfully.');
    }
    public function markCompleted(Request $request, $id)
    {
        $todo = ToDo::findOrFail($id);
        $todo->is_completed = $request->is_completed;  // Update based on checkbox status
        $todo->save();
        return response()->json(['success' => 'To-Do status updated successfully.']);
    }

}
