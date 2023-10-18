<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class EditTasksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $task = Task::find($request->id);

        return view('tasks.edit', [
            'task' => $task,
        ]);
    }
}
