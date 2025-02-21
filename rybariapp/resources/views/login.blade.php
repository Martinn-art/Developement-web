<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<x-_dashboard>
<body class="flex flex-items justify-center bg-[url('../../public/PIC/SUMCI.jpg')] bg-cover h-screen bg-bottom">

    <form action="/login" method="POST">

    @csrf

    <h1 class="text-center text-3xl m-8">Přihlásit se</h1>
<div class="flex flex-col">
    <label for="email">E-mail</label>
    <input type="email" name="email" value="">

    <label for="password">Heslo</label>
    <input type="password" name="password">
    <x-button>Přihlásit se</x-button>
    <a class="hover:underline" href="/register">Ještě nemáte účet, klikněte pro založení</a>
</div>
    </form>







</body>
</x-_dashboard>
</html>
