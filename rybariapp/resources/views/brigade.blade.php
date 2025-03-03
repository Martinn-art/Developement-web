<x-_headerP>

    <div class="flex flex-row gap-40">

        <div class="item">
             <x-_nav>

        </x-_nav>






<div class="item">
<section class="self-center justify-center">

    <form action="/brigade" method="POST">
        @csrf
        <div class="flex flex-col">
        <label for="phone" class="bg-green-400">Zanechte nám zde svůj telefon:</label>
        <input type="text" name="phone">
        <label for="notes" class="bg-green-400">Vzkaz pro odpovědného člena za brigády:</label>
        <input type="text" name="notes">
        <x-button>Odeslat můj zájem o brigádu</x-button>
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
</div>
   @endif
</section>
        </div>
</div>
</div>

</x-_headerP>
