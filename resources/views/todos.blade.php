<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased">
    <div class="container my-5 mx-auto">
        <h1 class="text-green-700 text-center text-4xl font-extrabold">Todos</h1>
        <ul class="mb-5">
            @foreach ($todos as $todo)
            <li class="p-3 my-2 flex align-items-center border justify-between">
                <h5>{{ $todo->title }}</h5>
                <div>
                    <a href="{{ route('todos.show', $todo) }}" class="bg-blue-400 text-white p-2 rounded hover:bg-blue-500">
                        Details
                    </a>
                </div>
            </li>
            @endforeach
        </ul>
        <a href="{{ route('todos.create') }}" class="bg-green-400 text-white p-2 rounded hover:bg-green-500 mt-3">
            New Todo
        </a>
    </div>
</body>

</html>