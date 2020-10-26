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
    <h1 class="text-center text-4xl font-extrabold">New Todo</h1>
    <form action="{{ route('todos.store') }}" method="post">
      @csrf
      <div class="flex align-items-center flex-col my-5">
        <label for="title" class="mb-2">Title</label>
        <input disabled type="text" id="title" name="title" class="border py-1 px-3 rounded outline-none"
          value={{ $todo->title}}>
      </div>
      <div class="flex align-items-center flex-col">
        <label for="description" class="mb-2">Description</label>
        <textarea disabled name="description" id="description" cols="30" rows="5"
          class="border rounded outline-none py-1 px-3">{{ $todo->description}}</textarea>
      </div>
    </form>
    <div class="text-right mt-5">
      <a href="/" class="bg-gray-400 text-white p-2 rounded hover:bg-gray-500 mr-2">
        Back
      </a>
    </div>
  </div>
</body>

</html>