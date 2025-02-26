<x-_header>
<div class="grid grid-cols-[200px_1fr] gap-4 ">

    <x-_nav class="p-4">
    </x-_nav>


    @if (session('$message'))
    <p>{{ session('message') }}</p>
    @endif

    <div class="p-4">
 <h2> <strong> Rezervace: </strong></h2>
<table>
    <tbody class="">
  @foreach ($reservations as $reservation)
    <tr>
            <td>{{ \Carbon\Carbon::parse($reservation->date)->format('d.m.Y') }} </td>
            <td>{{ $reservation->title }} </td>
            <td> {{ $reservation->description }} </td>


    </tr>
  @endforeach
</tbody>

</table>




</div>
</div>



</x-_header>
