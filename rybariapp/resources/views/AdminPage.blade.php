<x-_headerP>
<div class="flex flex-row">
    <div>
<x-_nav>

</x-_nav>



<div class="p-4">
    <h2 class="m-2"> <strong class="bg-green-200 text-4xl"> Rezervace: </strong></h2>
   <table>
       <tbody class="bg-green-200 opacity-60">
     @foreach ($reservations as $reservation)
        <tr>
               <td class="m-2 p-4 border-blue-800 border-2 border:rounded-2xl"><strong class="underline"> Datum pro vyzvednutí povolenky:</strong><hr>{{ \Carbon\Carbon::parse($reservation->date)->format('d.m.Y') }} </td>
               <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> Druh povolenky:</strong><hr>{{ $reservation->title }} </td>
               <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> Brigády/Změny adres/apod: </strong><hr>{{ $reservation->description }} </td>
               <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> ID: </strong><hr>{{ $reservation->user->id }} </td>
               <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> E-mail: </strong><hr>{{ $reservation->user->email }} </td>
               <td class="m-2 p-4 border-blue-800 border-2"> <strong class="underline"> Jméno: </strong><hr>{{ $reservation->user->name }} </td>
        </tr>

       @endforeach

       </tbody>
    </table>


<br>
<br>

<table>
<h2 class="m-2"><strong class="bg-green-200 text-4xl"> Zájem o brigádu:</strong></h2>
<tbody class="bg-green-200 opacity-60">
    @foreach ($brigades as $brigade)
    <tr>



     <td class="m-2 p-4 border-violet-100 border-2"><strong class="underline">E-mail:</strong> <hr>{{ $brigade->user_email }}</td>
     <td class="m-2 p-4 border-violet-100 border-2"><strong class="underline"> Jméno:</strong> <hr>{{ $brigade->user_name}}</td>
     <td class="m-2 p-4 border-violet-100 border-2"><strong class="underline">Číslo telefonu:</strong><hr>{{ $brigade->phone }}</td>
     <td class="m-2 p-4 border-violet-100 border-2"><strong class="underline">Nepovinný Popisek pro zadavtele brigády:</strong><hr>{{ $brigade->title }}</td>

       </tr>
       @endforeach
   </tbody>

   </table>
</div>



</div>
</div>
</x-_headerP>

