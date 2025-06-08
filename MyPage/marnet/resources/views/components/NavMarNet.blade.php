<div>

    <div class="bg-violet-500 z-50">


        <div class="flex border-b-2 border-b-cyan-600 m-8 p-2">
                    <a href="/"><div class="flex self-start justify-start"><img class="rounded-5xl w-20 h-auto" src="{{ asset('PIC/Ja.jpg') }}" alt="Moje Foto"></div></a>

    <div class="hidden md:hidden lg:block">
<nav class="bg-black p-4 ml-auto">

    <div class="flex justify-between items-center z-50">

            <li class="relative" x-data="{ open: false }">
                <a href="#" class="text-white z-20 hover:bg-gray-600 px-4 py-2 rounded-b lg:border-t-2 lg:border-y-white border-" @mouseenter="open = true" @mouseleave="open = false" >Produkce</a>
                <ul x-show="open" x-transition class="absolute left-0 w-48 z-50 bg-gray-800 text-white rounded shadow-lg">
                    <li><a @mouseenter="open = true" @mouseleave="open = false" href="UvodMarNet" class="block px-4 py-2 z-20 hover:bg-gray-600">Co a jak</a></li>
                    <li><a @mouseenter="open = true" @mouseleave="open = false" href="VCemPracuji" class="block px-4 py-2 hover:bg-gray-600">V čem pracuji</a></li>

                </ul>
            </li>
        </li>
        <li class="relative" x-data="{ open: false }">
            <a href="#" class="text-white hover:bg-gray-600 px-4 py-2 rounded-b lg:border-t-2 lg:border-t-white" @mouseenter="open = true" @mouseleave="open = false">Ukázky</a>
            <!-- Dropdown menu -->
            <ul x-show="open" x-transition class="absolute left-0 z-50 w-48 bg-gray-800 text-white rounded shadow-lg">
                <li><a @mouseenter="open = true" @mouseleave="open = false" href="/NapadumSeMezeNekladou" class="block px-4 py-2 hover:bg-gray-600 z-10">Nápadům se meze nekladou</a></li>
                <li><a @mouseenter="open = true" @mouseleave="open = false" href="/GuestPage2" class="block px-4 py-2 hover:bg-gray-600 z-10">I Živnostníci mohou být vidět</a></li>
                 </ul>
        </li>
        <li class="relative" x-data="{ open: false }">
            <a href="#" class="text-white hover:bg-gray-600 px-4 py-2 rounded-b lg:border-t-2 lg:border-t-white" @mouseenter="open = true" @mouseleave="open = false">Chci web v laravelu</a>

            <!-- Dropdown menu -->
            <ul x-show="open" x-transition class="absolute left-0 w-48 z-50 bg-gray-800 text-white rounded shadow-lg">
                <li><a @mouseenter="open = true" @mouseleave="open = false" href="/Moznosti" class="block px-4 py-2 hover:bg-gray-600 z-10">Jaké jsou možnosti?</a></li>
                <li><a @mouseenter="open = true" @mouseleave="open = false" href="/bytVidet" class="block px-4 py-2 hover:bg-gray-600 z-10">Kde chceš #býtvidět?</a></li>
                 </ul>
        </li>

              <li class="relative">
            <a href="/Kontakty" class="text-white hover:bg-gray-600 px-4 py-2 rounded-b lg:border-t-2 lg:border-t-white">Kontakty</a>
        </li>
    </ul>
</div>
</div>
</div>

<div class="lg:hidden">
    <div class="place-items-center">
    <div class="block lg:hidden">
        <li x-data="{ open: false }">
        <a @click="open = !open" class="text-white hover:text-blue-400 absolute">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </a>


    <ul x-show="open" x-transition>

    <h3 class="text-white px-4 py-2 rounded-b border">Produkce</h3>
            <ul class="mt-2 w-48 z-50 bg-gray-800 text-white rounded shadow-lg">
                <p><a href="/UvodMarNet" class="block px-4 py-2 hover:bg-gray-600">Co a jak</a></p>
                <p><a href="/VCemPracuji" class="block px-4 py-2 hover:bg-gray-600">V čem pracuji</a></p>

            </ul>
        </li>

        <li class="" >
            <h3 class="text-white px-4 py-2 rounded-b border">Ukázky</h3>
            <ul x-show="open" x-transition class="mt-2 z-50 w-48 bg-gray-800 text-white rounded shadow-lg">
                <p><a href="/NapadumSeMezeNekladou" class="block px-4 py-2 hover:bg-gray-600 z-10">Nápadům se meze nekladou</a></p>
                <p><a href="/GuestPage2" class="block px-4 py-2 hover:bg-gray-600 z-10">I Živnostníci mohou být vidět</a></p>
            </ul>
        </li>

        <li>
            <h3 href="#" class="text-white px-4 py-2 rounded-b border">Chci web v laravelu</h3>
            <ul class=" mt-2 w-48 z-50 bg-gray-800 text-white rounded shadow-lg">
                <li><a href="/Moznosti" class="block px-4 py-2 hover:bg-gray-600 z-10">Jaké jsou možnosti?</a></li>
                <li><a href="/bytVidet" class="block px-4 py-2 hover:bg-gray-600 z-10">Kde chceš #býtVidět?</a></li>
            </ul>
        </li>

         <li>
            <a href="/Kontakty" class="block px-4 py-2 bg-gray-800 text-white hover:bg-gray-600 z-10 rounded-b border">Kontakty</a>
        </li>

    </ul>
</div>
</li>
</div>
</nav>
{{ $slot }}

    </div>
</div>
