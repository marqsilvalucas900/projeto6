<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <body class="">
        <div>
            <ul>
                {{-- <li> <a href="{{route('contact')}}">Contact</a></li> --}}
                <li> <a href="{{url('contact2')}}">Contact</a></li>
            </ul>
            @if (session('message'))
                {{session('message')}}
                
            @endif
            
            <form method="post" action="/login">
                @csrf

                <input type="text" name="email" value="{{old('email')}}">
                <input type="text" name="password" value="{{old('password')}}">
                <button type="submit">login</button>

            </form>

        </div>
    </body>
</html>
