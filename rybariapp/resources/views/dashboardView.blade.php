<x-_headerP>
<div class="grid grid-col gap-4">

    <x-_nav class="p-4">

    <div class="flex flex-col">

<table>
        @if ($user)

            <p class="text-green-950 bg-zinc-50 bg-opacity-75"> <strong class="underline"> Zdravíme Vás, pane {{ $user->name }}!</strong></p>
                    <hr>
            <p class="text-green-950 bg-zinc-50 bg-opacity-75"> <strong class="underline"> Tento email bude použit pro komunikaci s Vámi: </strong>{{ $user->email }}</p>

        @endif

</table>





    @if (session('$message'))
    <p>{{ session('message') }}</p>
    @endif

    <div class="p-4">
 <h2 class="m-2"> <strong class="bg-green-200 text-4xl"> Rezervace: </strong></h2>
<table>
    <tbody class="bg-green-200 opacity-60">
  @foreach ($reservations as $reservation)
    <tr class="">
            <td class="m-2 p-4 border-blue-800 border-2 border:rounded-2xl"><strong class="underline"> Datum pro vyzvednutí povolenky:</strong><hr>{{ \Carbon\Carbon::parse($reservation->date)->format('d.m.Y') }} </td>
            <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> Druh povolenky:</strong><hr>{{ $reservation->title }} </td>
            <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> Brigády/Změny adres/apod: </strong><hr>{{ $reservation->description }} </td>


    </tr>
  @endforeach
</tbody>

</table>




</div>
</div>
</x-_nav>

</div>



</x-_headerP>
