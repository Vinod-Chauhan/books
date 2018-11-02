<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>registration</title>

        <!-- Fonts -->
        <link href="#" rel="stylesheet" type="text/css">
<script>
    var a,b;
    function reg(){
        a=document.getElementById("t1").value;
        b=document.getElementById("t2").value;
        c=document.getElementById("t3").value;
        em="/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/"
        if(b==""){
            alert("please enter your email");
            return false;
        } 
    }
    </script>
       
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

            
                
                <h2>Please create your account</h2>
                <div>
                    <form action="/insert" method="post" onsubmit="return reg();">
                         {{ csrf_field() }}
                        Name: <input type="text" name="username" id="t1"><br>
                        Email: <input type="email" name="email" id="t2"><br>
                        Password:  <input type="password" name="password" id="t3"><br>
                        
                        <br>
                        <input type="submit" value="registration" name="registration">
                        
                        </form>
                   
                    
                   
                </div>
            
    </body>
</html>
