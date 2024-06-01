<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|numeric',
        ]);

        // Create a new task with the validated data
        Task::create([
            'name' => $request->name,
            'password' => $request->password,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with(['msg'=>'Task created successfully!','class' => 'success']);
    }   
}
