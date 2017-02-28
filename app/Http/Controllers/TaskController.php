<?php

namespace Todoparrot\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Todoparrot\Task;

class TaskController extends Controller
{
    function index() {
    	$tasks = []; //Task::orderBy('created_at', 'asc')->get();

        return view('tasks.index', [
        	'tasks' => $tasks
        ]);
    }

    function task(Request $request) {
    	// $validator = Validator::make($request->all(), [
    	//     'name' => 'required|max:255'
    	// ]);

    	// if($validator->fails()) {
    	//     return redirect('/')
    	//         ->withInput()
    	//         ->withErrors($validator);
    	// }

    	$task = new Task;
    	$task->name = $request->name;
    	$task->save();

    	return redirect('/');
    }

    function delete($id) {
    	Task::findOrFail($id)->delete();

    	return redirect('/');
    }
}
