<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Task;

class CreateTasksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $task = new Task;

        return view('tasks.create', [
            'task' => $task,
        ]);
    }
}
