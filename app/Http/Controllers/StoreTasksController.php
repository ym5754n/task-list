<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class StoreTasksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $task = new Task;

        $task->content = $request->content;
        $task->save();

        return redirect('/');
    }
}
