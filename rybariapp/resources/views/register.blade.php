<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<x-_header>
</x-_header>
<x-_dashboard>
<body class="flex flex-items justify-center bg-[url('../../public/PIC/SUMCI.jpg')] bg-cover h-screen bg-bottom">

<form action="/register" method="POST">
    @csrf
    <h1 class="text-center text-3xl m-8" >Registrovat</h1>

    @session('message')
        <p>Registrace proběhla v pořádku</p>
    @endsession

<div class="flex flex-col">
    <label for="name">Jméno</label>
    <input type="text" name="name" value="{{ old('name') }}" class="border-2">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') }}"class="border-2">
    <label for="password">Heslo</label>
    <input type="password" name="password"class="border-2">
    <x-button>Registrovat</x-button>
    <a class="hover:underline" href="/login">Zde se přihlásíte...</a>
</div>
</form>

</body>
</x-_dashboard>
</html>
