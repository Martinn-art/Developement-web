<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-[url('../../../../public/PIC/SUMCI.jpg')] bg-cover h-screen bg-bottom">



<div>


    <header class="p-4 lg:flex justify-center">

       <h1>

        <div class="bg-green-600">
            <Strong class="text-5xl text-underline tracking-wide text-left align-top">
                <img class="float-right" src="..\..\PIC\LOGO.png" alt="LOGO Rybáři Zruč n/S">
                Rezervační webové stránky
                MO Zruč nad Sázavou
            </Strong>
        </div>
        </h1>


    </header>

</body>

                            {{ $slot }}

 </div>
</html>
