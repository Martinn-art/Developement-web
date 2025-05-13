<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Document</title>
</head>
<body class="flex items-center justify-center">
 <form action="/register" method="POST">
    <?php echo csrf_field(); ?>
    <h1 class="m-16 text-2xl text-center">Registrace</h1>
    <?php $__sessionArgs = ['message'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
    <p>Registrace proběhla v pořádku</p>

    <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
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
<?php /**PATH C:\DevelopementWeb\rybarizruc\resources\views/register.blade.php ENDPATH**/ ?>