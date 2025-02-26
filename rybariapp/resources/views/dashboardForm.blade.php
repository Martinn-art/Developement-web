<x-_header>
<x-_nav>


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

</x-_nav>
</x-_header>
