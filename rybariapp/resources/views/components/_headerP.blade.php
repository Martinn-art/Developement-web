<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-[url('../../../../public/PIC/NOC.jpg')] bg-cover h-screen bg-top lg:bg-bottom bg-no-repeat">



<div>


    <header class="p-4">


       <h1>

        <div>
            <Strong class="text-5xl text-underline tracking-wide text-left">

                        <div class="flex">
                            <div class="flex self-end justify-end">
                    <img src="..\..\PIC\LOGO.png" alt="LOGO Rybáři Zruč n/S">
                        </div>
                        <div class="flex self-center justify-center bg-green-600 m-4">
                Rezervační webové stránky
                MO Zruč nad Sázavou
                        </div>
                    </div>


            </Strong>

        </div>
        </h1>


    </header>

</body>

                            {{ $slot }}

 </div>
</html>
