<x-_header>
<x-_nav>
    <table>
        <tbody class="bg-green-200 opacity-60">
      @foreach ($reservations as $reservation)
        <tr>
                <td class="m-2 p-4 border-blue-800 border-2 border:rounded-2xl"><strong class="underline"> Datum pro vyzvednutí povolenky:</strong><hr>{{ \Carbon\Carbon::parse($reservation->date)->format('d.m.Y') }} </td>
                <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> Druh povolenky:</strong><hr>{{ $reservation->title }} </td>
                <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> Brigády/Změny adres/apod: </strong><hr>{{ $reservation->description }} </td>


        </tr>
      @endforeach
    </tbody>

    </table>

<table>
    <tbody class="flex justify-center">

            @if (($brigade))
                <p class="text-green-700 bg-blue-400 opacity-75 text-2xl m-4 p-2 h-64"><strong> Máš zájem o brigádu super!</strong></p>
            @else
                <p class="text-red-600 bg-slate-100 text-2xl"><strong class="m-8"> Neobdrželi jsme zájem o brigádu přez tuto app</strong></p>
            @endif

    </tbody>
</table>






</x-_nav>
</x-_header>
