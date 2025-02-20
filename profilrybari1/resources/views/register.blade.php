<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>

    <form action="/register" method="GET">

        @csrf
        <h1 class="text-green-900">Registrovat</h1>

         @session('message')
         <p>Registrace proběhla v pořádku</p>
         @endsession

        <label for="name" class="bg-red-600">Jméno</label>
        <input type="text" class="border-2 border-black-900" name="name">
         <label for="email">E-mail</label>
         <input type="email" name="email">
        <label for="password">Heslo</label>
        <input type="password" name="password">
         <button type="submit">Potvrď</button>

    </form>
</body>
</html>
