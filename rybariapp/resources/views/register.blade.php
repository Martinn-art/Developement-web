<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>register</title>
</head>
<x-_header>
</x-_header>
<body class="bg-[url('../../public/PIC/SUMCI.jpg')] bg-cover h-screen bg-bottom">

<div class="flex items-center justify-center">
<form action="/register" method="POST" class="max-w-xs bg-green-400 bg-opacity-45">
    @csrf
    <h1 class="text-center text-3xl m-8" >Registrovat

    </h1>

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

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
</div>
</body>

</html>
