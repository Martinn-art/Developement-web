    <x-_header>



<div class="flex items-center justify-center">
    <form action="/login" method="POST" class="max-w-xs bg-green-400 bg-opacity-45">

    @csrf

    <h1 class="text-center text-3xl m-8">Přihlásit se</h1>
<div class="flex flex-col">
    <label for="email"> E-mail </label>
    <input type="email" name="email">

    <label for="password">Heslo</label>
    <input type="password" name="password">
    <x-button>Přihlásit se</x-button>
    <a class="hover:underline" href="/register">Ještě nemáte účet, klikněte pro založení</a>
</div>
@if ($errors->has('email'))
    <div class="text-red-500">
        {{ $errors->first('email') }}

    </form>

    </div>
@endif

</div>






</x-_header>
