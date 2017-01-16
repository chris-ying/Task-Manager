<!DOCTYPE html>
@extends('layouts/app')
      
@section('styles')
   
    <style>
        .container {
            margin-top: 50px;
        }
        
        h1 {
            font-family: Playball, cursive;
            font-size: 4em;
            font-weight: 600;
            color: #6b1cff;
            text-shadow: 1px 1px 1px grey;
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
        
        .my-btn-1 {
            background-color: #481ccc;
        }
        
        .my-label-style {
            color: #481ccc;
            font-size: 1.1em;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
</style>
    
@endsection

@section('content')

<div class="container">
    <h1 class="text-center">Add Category</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <form method="post" action="{{ url('process-add-category') }}">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <div class="my-label-style">Name:</div>
                    <input type="text" name="name" class="form-control">
                </div>
                   
                <div class="form-group text-center">
                    <button type="submit" class="btn my-btn my-btn-1">Submit</button>
                    <a href="{{ url('dashboard') }}" class="btn my-btn my-btn-1">Back</a>
                </div>
                    
            </form>
        </div>
        
    </div>            
</div>

@endsection