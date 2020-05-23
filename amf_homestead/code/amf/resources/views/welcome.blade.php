<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #E39280;
                margin: 0;
                font-family: "Nunito", sans-serif;
                font-size: 0.9rem;
                font-weight: 400;
                line-height: 1.6;
            }

            .full-height {
                height: auto;
                padding-top: 0.5em;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                height: 1em;
            
            }

            .content {
                text-align: center;

            }

            .title {
                position: absolute;
                height: 1em;
            }

            .links > a {
                color: #636b6f;
                font-family: "Nunito", sans-serif;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 3px;
            }

            .topnav {
                background-color: #333;
                overflow: hidden;

                padding: 0.5rem 1rem;
                font-size: 1.125rem;
                line-height: inherit;
            }

            /* Style the links inside the navigation bar */
            .topnav a {
            float: right;
            color: #a6a9ad;            
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            }
                    </style>
                </head>
                <body>


<div class="topnav">


               
                
            @if (Route::has('login'))
            
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                            <a style="float: left; font-size:0.9em;" href="http://192.168.10.10">IIT Drone Autonomous Movement Framework</a>
                        @endif
                    @endauth        
            @endif
</div>

        <div class="flex-center position-ref full-height">
            

            <div class="content">
                
                <p>Users (bill is the admin):
                @foreach(App\User::get('email')->pluck('email') as $user)
                    <pre>{{ $user }}</pre>
                @endforeach
                <br/>
                Passwords: <pre>password</pre>
                </p>
            </div>
        </div>
    </body>
</html>
