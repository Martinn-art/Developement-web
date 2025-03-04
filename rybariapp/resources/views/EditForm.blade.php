<x-_headerP>
<div class="flex flex-row gap-40">
    <div>
 <x-_nav>
 </x-_nav>


 @if($reservations->isEmpty())
        <p class="text-center text-xl text-red-600">Žádné rezervace k dispozici.</p>
    @else




    <section>

           <h2 class="m-2"> <strong class="bg-green-200 text-4xl"> Změna rezervace je možná zde: </strong></h2>
<table>
    <tbody class="bg-green-200 opacity-60">
            @foreach ($reservations as $reservation)

        <tr>

        <form action="{{ route('edit.update',  $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class=" flex flex-col">
            <td class="m-2 p-4 border-blue-800 border-2 border:rounded-2xl"><strong class="underline"><label for="date" class="bg-green-400 text-xl">Vyber nové datum</label></strong><hr><input type="date" name="date" value="{{ $reservation->date }}"></td>
          <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> <label for="title" class="bg-green-400 text-xl">Jakou povolenku?</label></strong><hr>  <input type="text" name="title" class="w-full" value="{{ $reservation->title }}"></td>

        <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> <label for="description" class="bg-green-400 text-xl">Změna adresy/Brigády/úlevy a jiné:</label></strong><hr><input type="text" name="description" class="w-full" value="{{ $reservation->description }}"> <x-button> Ulož</x-button></td>



        </form>
    </tr>
        @endforeach

</table>

    </section>



    @endif

</div>


</div>
</x-_headerP>
