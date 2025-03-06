<x-_headerP>


    <div class="flex flex-row gap-40">

<div>
        <x-_nav>
    </x-_nav>

    @session('$message')
<p>('message')</p>
 @endsession
    <div class="flex flex-col">
    <form action="/dashboardView" method="POST">


        @csrf
        <div class=" flex flex-col">
        <label for="date" class="bg-green-400 text-xl">Vyber datum</label>
        <input type="date" name="date">
        <label for="title" class="bg-green-400 text-xl">Jakou povolenku?</label>
        <input type="text" name="title" class="w-full">
        <label for="description" class="bg-green-400 text-xl">Změna adresy/Brigády/úlevy a jiné:</label>
        <input type="text" name="description" class="w-full">
        <x-button>Odeslat rezervaci</x-button>
    </div>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
    <ul class="text bg-red-700 text-xl">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach

    </ul>
    </div>

    @endif
    </div>
</div>
</div>
</x-_headerP>
