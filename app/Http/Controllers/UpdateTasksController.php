<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class UpdateTasksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $task = Task::find($request->id);

        $task->content = $request->content;
        $task->save();

        return redirect('/');
    }
}
