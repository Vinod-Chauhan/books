<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>

        <!-- Fonts -->
        <link href="#" rel="stylesheet" type="text/css">
        
      
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            
                
                <h2> Please enter your name and password</h2>
                <div>
                    <form action="/insert" method="post">
                         {{ csrf_field() }}
                        Email: <input type="text" name="email"><br>
                        Password:  <input type="password" name="password"><br>
                        
                        <br>
                        <input type="submit" value="submit">
                        
                       
                        
                        
                    </form>
                    
                   
                </div>
            
    </body>
</html>
