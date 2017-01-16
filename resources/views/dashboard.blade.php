<!DOCTYPE html>
@extends('layouts/app')
      
@section('styles')
   
    <style>
        .container {
            width: 60%;
        }
        
        h1 {
            margin-bottom: 10px;
        }
        
        h1 a {
            font-family: Playball, cursive;
            font-size: 1.7em;
            font-weight: 600;
            color: #ff5323;
            text-shadow: 1px 1px 1px #7000e8;
            transition: all 0.3s;
        }
        
        h1 a:hover {
            color: #ff0f37;
            text-decoration: none;
        }
        
        .my-panel-heading {
            padding: 10px 15px;
            font-size: 1.8em;
            font-family: Lato;
            font-weight: 600;
        }
        
        #heading-color-1 {
            background-color: #ccccff;
            color: #3c0cce;
        }
        
        #heading-color-2 {
            background-color: #ffd9d1;
            color: #c12900;
        }
        
        #heading-color-1  a {
            color: #3c0cce;
        }
        
        .delete-btn {
            padding: 1px 8px;
            color: white;
            border-radius: 5px;
            position: absolute;
            top: 7px;
            right: 10px;
            font-size: 1.1em;
            font-weight: 600;
            background: #ff4516;
            opacity: 0.7;
            box-shadow: 1px 1px 2px grey;
        }
        
        .delete-btn:hover {
            color: white;
            opacity: 0.9;
        }
        
        .my-list-style {
            font-size: 1.1em;
            font-family: Lato;
            font-weight: 600;
        }
        
        .my-list-style-1 {
            color: #5811db;
        }
        
        .my-list-style-2 {
            color: #e83d00;
        }
        
        .my-list-style-1:hover {
            color: #5811db;
        }
        
        .my-list-style-2:hover {
            color: #e83d00;
        }
        
        .my-btn {
            padding: 6px 12px;
            color: white;
            opacity: 0.75;
            box-shadow: 2px 2px 3px grey;
            transition: all 0.3s;
        }
        
        .my-btn:hover {
            opacity: 0.9;
            color: white;
            box-shadow: 1px 1px 2px grey;
        }
        
        .my-btn-1 {
            background-color: #481ccc;
        }
        
        .my-btn-2 {
            background-color: #e23800;
        }
        
    </style>
    
@endsection

@section('content')

<div class="container text-center">
    <h1>
        <a href="{{ url('dashboard') }}">Taskist</a>
    </h1>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-info">
                <div class="my-panel-heading" id="heading-color-1">
                    <a href="{{ url('dashboard') }}">Category</a>
                </div>
                <ul class="list-group">
                   @foreach($categories as $category)
                        <li class="list-group-item my-list-style">
                            <a href="{{ url('category/' . $category->id ) }}" class="my-list-style-1">
                                {{ $category->name }}
                            </a>
                            <form method="post" action="{{ url('delete-category/' . $category->id) }}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn delete-btn my-btn-1">&times;</button>
                            </form>
                        </li>
                    @endforeach
                        <li class="list-group-item my-list-style">
                            <a href="{{ url('add-category') }}" class="btn my-btn my-btn-1">Add Category</a>
                        </li>
                </ul>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-danger">
                <div class="my-panel-heading" id="heading-color-2">
                    Task
                </div>
                <ul class="list-group">
                   @foreach($tasks as $task)
                        <li class="list-group-item my-list-style">
                            <a href="{{ url('edit-task/' . $task->id ) }}" class="my-list-style-2">
                                {{ $task->title }}
                            </a>
                            <form method="post" action="{{ url('delete-task/' . $task->id) }}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn delete-btn">&times;</button>
                            </form>
                        </li>
                    @endforeach
                        <li class="list-group-item my-list-style">
                            <a href="{{ url('add-task') }}" class="btn my-btn my-btn-2">Add Task</a>
                        </li>
                </ul>
        </div>
    </div>           
</div>

@endsection