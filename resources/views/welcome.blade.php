<!DOCTYPE html>
@extends('layouts/app')
      
@section('styles')

    <style>
        #welcome {
            margin-top: 50px;
            font-family: Lato, sans-serif;
        }

        #welcome h1 {
            font-size: 3em;
            font-weight: 600;
            margin: 0;
        }

        #welcome span {
            font-family: Playball, cursive;
            font-size: 13em;
            font-weight: 550;
            color: #ff5323;
            text-shadow: 2px 2px 2px hotpink;
            margin-top: -30px;
        }

        #welcome h2 {
            font-size: 1.5em;
            font-weight: 600;
            margin-top: -20px;
        }

        #start-btn {
            margin-top: 40px;
            margin-bottom: 80px;
            padding: 10px 15px;
            font-size: 1.3em;
            background: #ff5323;
            box-shadow: 1px 1px 8px black;
            border: none;
            border-radius: 8px;
            transition: 0.3s all;
        }

        #start-btn:hover {
            background: #ff3b00;
            box-shadow: 1px 1px 3px black;
            transform:translateY(-6px); 
        }

    </style>

@endsection      
       
@section('content')
       
    <main>

       <div id="welcome" class="text-center">
            <h1>Welcome to</h1>
            <span>Taskist</span>
            <h2>One of the best task manager applications</h2>
            <a href="{{ url('dashboard') }}" class="btn btn-danger" id="start-btn">Get Start</a>
        </div>

    </main>

@endsection
        