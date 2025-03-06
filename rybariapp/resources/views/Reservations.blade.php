<x-_headerP>
<div class="flex flex-row gap-4">
<div>
<x-_nav>
</x-_nav>
    <div class="grid grid-flow-cols">
        <div>
        <table>
        <tbody>

                @if (($brigades !== NULL))
                    <p class="text-green-700 bg-blue-400 h-min opacity-75 text-2xl m-4 p-2"><strong> Máš zájem o brigádu super!</strong></p>
                @else
                    <p class="text-red-600 bg-slate-100 h-min text-2xl"><strong class="m-8"> Neobdrželi jsme zájem o brigádu přes tuto app</strong></p>
                @endif

        </tbody>
        </table>
        </div>


    <div>
    <table class="grid grid-flow-col">

        <div class="p-4">
            <h2 class="m-2"> <strong class="bg-green-200 text-4xl"> Rezervace: </strong></h2>
        <tbody class="bg-green-200 h-min opacity-60 p-4 m-2">
      @foreach ($reservations as $reservation)
        <tr>
                <td class="border-blue-800 border-2 border:rounded-2xl"><strong class="underline"> Datum pro vyzvednutí povolenky:</strong><hr>{{ \Carbon\Carbon::parse($reservation->date)->format('d.m.Y') }} </td>
                <td class="border-blue-800 border-2"> <strong class="underline"> Druh povolenky:</strong><hr>{{ $reservation->title }} </td>
                <td class="border-blue-800 border-2"> <strong class="underline"> Brigády/Změny adres/apod: </strong><hr>{{ $reservation->description }} </td>


        </tr>
      @endforeach
    </tbody>
        </div>
    </table>

</div>

</div>
</div>

</div>



</x-_headerP>
