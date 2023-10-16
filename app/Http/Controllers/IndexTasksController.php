<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class IndexTasksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tasks = Task::all();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
}
