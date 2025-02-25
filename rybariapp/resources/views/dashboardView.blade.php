<x-_header>

<x-_nav>
    @session('$message')
    <p>Rezervace proběhla v pořádku</p>
    @endsession


 <h2> <strong> Rezervace: </strong></h2>

  @foreach ($reservations as $reservation)
    <tr>
            <td>{{ \Carbon\Carbon::parse($reservation->date)->format('d.m.Y') }} </td>
            <td>{{ $reservation->title }} </td>
            <td> {{ $reservation->description }} </td>


    </tr>
  @endforeach









</x-_nav>

</x-_header>
