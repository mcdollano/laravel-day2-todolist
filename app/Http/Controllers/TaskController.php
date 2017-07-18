<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Auth;

class TaskController extends Controller
{
    function showmain(){
    	$tasks = Task::all();
    	return view('todo_list', compact('tasks'));

    }

    function createNewTask(Request $create_task){
    	$new_task = new Task();
    	$new_task->name = $create_task->task_name;
    	$new_task->description = $create_task->task_description;
    	$new_task->save();

    	$create_task->session()->flash('message','Task added successfully!');
    	return back();
    } 

	
    function deleteTask($id){
    	$task_tbd = Task::find($id);
    	$task_tbd->delete();

    	return back();
    }



}
