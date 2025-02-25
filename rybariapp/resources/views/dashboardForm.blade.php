<x-_header>
<x-_nav>




    <form action="/dashboardForm" method="POST">

        @session('$message')
            <p>Rezervace proběhla v pořádku</p>
        @endsession

        @csrf
        <div class=" flex flex-col">
        <label for="date" class="bg-green-400 text-xl">Vyber datum</label>
        <input type="date" name="date">
        <label for="title" class="bg-green-400 text-xl">Jakou povolenku?</label>
        <input type="text" name="title" class="w-56">
        <label for="description" class="bg-green-400 text-xl">Změna adresy/Brigády/úlevy a jiné:</label>
        <input type="text" name="description" class="w-64">
        <x-button>Odeslat rezervaci</x-button>
    </div>
    </form>

</x-_nav>
</x-_header>
