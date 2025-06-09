<x-BackgroundMarNet>
<x-NavMarNet>

</x-NavMarNet>

<h2 class="grid place-content-center text-white font-bold mb-2">Jaký by jsi chtěl vlastnit obsah?</h2>
<!-- Blade formulář -->
<form class="max-w-md mx-auto p-4 space-y-6 bg-white rounded shadow-md" action="{{ route('formC') }}" method="POST">
  @csrf

  <!-- Honeypot -->
  <div style="display: none;">
    <label for="website">Pro všechny:</label>
    <input type="text" name="email_confirmed" id="email_confirmed" style="display:none" tabindex="-1" autocomplete="off">
  </div>

  <h2 class="text-xl font-semibold text-gray-800">Jaké máš sny o své nezávislosti?</h2>

 <div class="max-w-xl mx-auto mt-10 p-6 bg-white shadow rounded"
         x-data="{
            moznosti: [
                { id: 1, nazev: 'Vlastní e-shop', vybrano: false },
                { id: 2, nazev: 'Rezervační systém', vybrano: false },
                { id: 3, nazev: 'Kniha', vybrano: false },
                { id: 4, nazev: 'E-kniha', vybrano: false },
                { id: 5, nazev: 'Výrobní firma', vybrano: false }
            ],
            submituj() {
                const vybrane = this.moznosti
                    .filter(m => m.vybrano)
                    .map(m => m.nazev);

                $refs.hiddenInput.value = JSON.stringify(vybrane);
                $refs.form.submit();
            }
        }">

        <h2 class="text-2xl font-bold mb-4 text-gray-700">Vyber si možnosti</h2>

        <form x-ref="form" method="POST" action="{{ route('formC') }}">
            @csrf

            <template x-for="moznost in moznosti" :key="moznost.id">
                <label class="flex items-center space-x-2 mb-2 text-gray-800">
                    <input type="checkbox" x-model="moznost.vybrano" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring focus:ring-blue-300">
                    <span x-text="moznost.nazev"></span>
                      </label>
                       </template>

                      <label for="VlastniNapad">Mám jiný nápad:</label>
            <input class="border-2 mb-4" type="text" name="VlastniNapad">
            <!-- Skrytý input, kam se uloží výběr před odesláním -->
            <input type="hidden" name="vybrane_moznosti" x-ref="hiddenInput">

            <div class="mt-4">
                <h3 class="text-sm font-medium text-gray-600 mb-1">Vybrané:</h3>
                <template x-if="moznosti.filter(m => m.vybrano).length > 0">
                    <ul class="list-disc list-inside text-gray-800">
                        <template x-for="m in moznosti.filter(m => m.vybrano)" :key="m.nazev">
                            <li x-text="m.nazev"></li>
                        </template>
                    </ul>
                </template>
                <template x-if="moznosti.filter(m => m.vybrano).length === 0">
                    <p class="text-sm text-gray-400">Zatím nic nevybráno.</p>
                </template>

            </div>


            <button type="submit" @click="submituj"
                    class="mt-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                Odeslat
            </button>
        </form>
    </div>
@if (session('success'))
  <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
    {{ session('success') }}
  </div>
@endif


</x-BackgroundMarNet>
