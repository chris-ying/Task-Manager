<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- Aware -->
        <title>Taskist</title>
        <meta name="description" content="task management application">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/main.css') }}">
        
       @yield('styles')
       
    </head>
    
    <body>
        <div class="container-fluid"> <!-- End tag is below footer-->
            @if( session('success') )
                <div class="navbar navbar-fixed-top">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                        <div class="alert alert-success text-center" id="alert-box">
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            
            <nav class="navbar">
                <a id="logo" class="navbar-brand" href="{{ url('') }}"><span>Chris Ying</span></a>
            </nav>
            
            @yield('content')
            
            <footer>
                <hr id="my-line">
                <ul>
                    <li class="bdr">&copy; 2016 All Rights Reserved. </li>
                    <li>Designed By Chris Ying</li>
                </ul>
            </footer>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="{{ url('js/main.js') }}"></script>
    </body> <!-- Same problem due to unclosed tag -->
</html>
