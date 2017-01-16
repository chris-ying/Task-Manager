<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Task;

class DashboardController extends Controller
{
    public function show()
    {
        $tasks = Task::get(); 
        $categories = Category::get();
        
        return view('dashboard', [
            'tasks' =>  $tasks,
            'categories' => $categories
        ]);
    }
    
    public function showCategory($id)
    {
        $tasks = Task::where('category_id', $id)->get(); 
        $categories = Category::get();
        
        return view('dashboard', [
            'tasks' => $tasks,
            'categories' => $categories
        ]); 
    }
}