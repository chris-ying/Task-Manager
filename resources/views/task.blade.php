<!DOCTYPE html>
@extends('layouts/app')
      
@section('styles')
   
    <style>
        .container {
            width: 70%;
            margin-top: 10px;
        }
        
        h1 {
            font-family: Playball, cursive;
            font-size: 4em;
            font-weight: 600;
            color: #ff5323;
            text-shadow: 1px 1px 1px grey;
            margin-bottom: 0px;
        }
        
        .my-label-style {
            color: #e83d00;
            font-size: 1.1em;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .selected_category {
            padding-left: 2px;
            margin-bottom: 5px;
            font-family: Calibri;
            font-size: 1.5em;
            font-weight: 600;
        }
        
        .div-inline {
            display: inline-block;
        }
        
        .my-btn {
            padding: 6px 12px;
            margin: 2px 1px;
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
        
        .my-btn-2 {
            background-color: #e23800;
        }
        
    </style>
    
@endsection

@section('content')

<div class="container">
    <h1 class="text-center">{{ ucwords($page) }} Task</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <form method="post" action="{{ url('process-' . $page . '-task' . $id) }}">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <div class="my-label-style">Title:</div>
                    <input type="text" name="title" class="form-control" value="{{ $task->title or '' }}">
                </div>
                
                <div class="form-group">
                    <div class="my-label-style">Description:</div>
                    <textarea name="description" class="form-control" rows="4">{{ $task->description or '' }}</textarea>
                </div>
                
                <div>
                    <div class="my-label-style div-inline">Category:</div>
                    @if(isset($task->category->id))
                        <div class="div-inline selected_category">{{ $task->category->name }}</div>
                    @else
                        <div class="div-inline selected_category">None</div>
                    @endif
                </div>
                
                <div class="form-group">
                    <select name="category" id="category" class="form-control">
                        @if(isset($task->category->id))
                            <option value=""> Select a new category </option>
                        @else
                            <option> Select a category </option>
                        @endif
                            
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                   
                <div class="form-group text-center">
                    <button type="submit" class="btn my-btn my-btn-2">Submit</button>
                    <a href="{{ url('dashboard') }}" class="btn my-btn my-btn-2">Back</a>
                </div>
                    
            </form>
        </div>
        
    </div>            
</div>

@endsection