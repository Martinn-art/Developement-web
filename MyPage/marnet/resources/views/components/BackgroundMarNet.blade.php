<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <title>Document</title>
</head>
<body class="bg-blue-950">
    <div>
    <h1 class="place self-start bg-blue-800 text-2xl text-white w-min h-min">MARTIN.NET</h1>





    {{ $slot }}

    </div>

</body>
</html>
