
<x-_header>


<div class="flex items-center justify-center">
<form action="/register" method="POST" class="max-w-xs bg-green-400 bg-opacity-45">
    @csrf
    <h1 class="text-center text-3xl m-8" >Registrovat

    </h1>

   

<div class="flex flex-col">
    <label for="name">Jméno</label>
    <input type="text" name="name" value="{{ old('name') }}" class="border-2">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') }}" class="border-2">
    <label for="password">Heslo</label>
    <input type="password" name="password" class="border-2">
    <x-button>Registrovat</x-button>
    <a class="hover:underline" href="/login">Zde se přihlásíte...</a>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="text bg-red-700 text-xl">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
</div>
</x-_header>

