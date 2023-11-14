<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Task;

class DestroyTasksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $task = Task::find($request->id);

        $task->delete();

        return redirect('/');
    }
}
