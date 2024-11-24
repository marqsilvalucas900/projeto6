<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/css/app.js'])
</head>

<body class="bg-slate-100   text-slate-900">
    <header class="bg-slate-800 shadow-lg">
        <nav>
            <a href="{{route('home')}}" class="nav-link">Home</a>

            <div>
                <a href="#" class="nav-link">login</a>
                <a href="{{route('register')}}" class="nav-link">Register</a>
            </div>
        </nav>
    </header>

    <main   class="py-8 px-4 mx-auto max-w-s">
        {{$slot}}
    </main>

</body>

</html>
