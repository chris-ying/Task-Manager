<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use URL;

class CategoryController extends Controller
{
    public function showAddCategory()
    {
        return view('category');
    }
    
    public function addCategory(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;      
        $category->save();
        
        return redirect('dashboard')->with('success', 'Category added successfully!');
    }
    
    public function deleteCategory($id)
    {
        $category = Category::where('id', $id)->first();
        $category->delete();
        
        return redirect('dashboard')->with('success', 'Category deleted successfully!');
    }
}
