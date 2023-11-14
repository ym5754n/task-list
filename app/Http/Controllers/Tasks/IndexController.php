<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Task;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tasks = [];

        if (\Auth::check()) {
            $tasks = Task::all();
        }

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
}
