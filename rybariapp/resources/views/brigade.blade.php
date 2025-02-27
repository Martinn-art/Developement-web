<x-_headerP>
<x-_nav>

    <form action="" method="post">
        @csrf
        <div class="flex flex-col">
        <label for="phone" class="bg-green-400">Zanechte nám zde svůj telefon:</label>
        <input type="text" name="phone">
        <label for="notes" class="bg-green-400">Vzkaz pro odpovědného člena za brigády:</label>
        <input type="text" name="notes">
        <x-button>Odeslat můj zájem o brigádu</x-button>
    </div>
    </form>
    @if (@session('message'))
    v pořádku kontakt na Vás máme a brzo se vám ozveme

        {{ session('message') }}
    @endif

</x-_nav>


</x-_headerP>
