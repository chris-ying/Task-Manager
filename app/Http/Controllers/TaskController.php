<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Task;
use App\Category;
use URL;

class TaskController extends Controller
{
    public function showAddTask()
    {   
        $categories = Category::get();
        
        return view('task', [
            'task' => null,
            'page' => 'add',
            'id' => ' ',
            'categories' => $categories
        ]); 
    }
    
    public function showEditTask($id) 
    {
        $task = Task::where('id', $id)->first(); 
        $categories = Category::get();
        
        return view('task', [
            'task' => $task,
            'page' => 'edit',
            'id' => '/' . $id,
            'categories' => $categories
        ]); 
    }
    
    public function addTask(Request $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        
        if (!empty($request->category)) 
        {
            $task->category_id = $request->category;
        }
        
        if (!empty($request->title))
        {
            $task->save();  
            
            return redirect('dashboard')->with('success', 'Task created successfully!');
        }
        else
        {
            return redirect(URL::previous())->with('success', 'No Task Title!');
        }
    }
    
    public function editTask(Request $request, $id)
    {
        $task = Task::where('id', $id)->first();
        
        $task->title = $request->title;
        $task->description = $request->description;
        
        if (!empty($request->category)) 
        {
            $task->category_id = $request->category;
        }
        
        if(!empty($request->title))
        {
            $task->save();  
            
            return redirect(URL::previous())->with('success', 'Task edited successfully!');
        }
        else
        {
            return redirect(URL::previous())->with('success', 'No Task Title!');
        } 
    }
    
    public function deleteTask($id)
    {
        $task = Task::where('id', $id)->first();
        
        $task->delete();
        
        return redirect(URL::previous())->with('success', 'Task successfully deleted!');
    }
}



