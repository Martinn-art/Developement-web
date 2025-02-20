<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="flex items-center justify-center">
 <form action="/register" method="POST">
    @csrf
    <h1 class="m-16 text-2xl text-center">Registrace</h1>
    @session('message')
    <p>Registrace proběhla v pořádku</p>

    @endsession
    <div class="flex flex-col">
    <label for="name" class="">Jméno:</label>
    <input type="text" name="name" class="border-2 border-black">
    <label for="email">Email:</label>
    <input type="email" name="email" class="border-2 border-black">
    <label for="password">Heslo:</label>
    <input type="password" name="password" class="border-2 border-black">
    <button type="submit" class="hover:underline">Registrovat</button>
    </div>
 </form>
</body>
</html>
