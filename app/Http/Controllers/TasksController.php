<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use Tymon\JWTAuth\JWTAuth;

class TasksController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        return response()->json($user->tasks);
    }

    public function store(Request $request)
    {
        $task = new Task($request->all());
        $task->user()->associate(\Auth::user());
        $task->save();
        return response()->json(['message' => 'Tarea creada exitosamente.', 'task' => $task]);
    }

    public function show(Task $task)
    {
        return response()->json($task);
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return response()->json(['message' => 'Tarea modificada exitosamente.']);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(['message' => 'Tarea borrada exitosamente.']);
    }
}
