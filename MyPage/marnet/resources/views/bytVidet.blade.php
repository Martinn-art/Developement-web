<x-BackgroundMarNet>
<x-NavMarNet>

</x-NavMarNet>

<h2 class="grid place-content-center text-white font-bold mb-2">V sociálních sítích nepracuji, ale domluvit lze ledascos</h2>
<!-- Blade formulář -->
<form class="max-w-md mx-auto p-4 space-y-6 bg-white rounded shadow-md" action="{{ route('form') }}" method="POST">
  @csrf

  <!-- Honeypot -->
  <div style="display: none;">
    <label for="website">Pro všechny:</label>
    <input type="text" name="email_confirmed" id="email_confirmed" style="display:none" tabindex="-1" autocomplete="off">
  </div>

  <h2 class="text-xl font-semibold text-gray-800">Kde bych chtěl mít firmu co nejvíce vidět?</h2>

  <!-- Meta -->
  <div>
    <label for="meta" class="block text-sm font-medium text-gray-700 mb-1">Meta/Facebook</label>
    <input type="range" id="meta" name="meta" min="0" max="100" value="50" class="w-full accent-blue-500">
    <div class="text-sm text-gray-500 mt-1">Hodnota: <span id="meta-output">50</span>/100</div>
  </div>

  <!-- Insta -->
  <div>
    <label for="insta" class="block text-sm font-medium text-gray-700 mb-1">Instagram</label>
    <input type="range" id="insta" name="insta" min="0" max="100" value="50" class="w-full accent-blue-500">
    <div class="text-sm text-gray-500 mt-1">Hodnota: <span id="insta-output">50</span>/100</div>
  </div>

  <!-- X -->
  <div>
    <label for="x" class="block text-sm font-medium text-gray-700 mb-1">X/Twitter</label>
    <input type="range" id="x" name="x" min="0" max="100" value="50" class="w-full accent-blue-500">
    <div class="text-sm text-gray-500 mt-1">Hodnota: <span id="x-output">50</span>/100</div>
  </div>

  <!-- Google -->
  <div>
    <label for="google" class="block text-sm font-medium text-gray-700 mb-1">Google</label>
    <input type="range" id="google" name="google" min="0" max="100" value="50" class="w-full accent-blue-500">
    <div class="text-sm text-gray-500 mt-1">Hodnota: <span id="google-output">50</span>/100</div>
  </div>

  <!-- Vlastní síť -->
  <div>
    <label for="vlastni_sit" class="block text-sm font-medium text-gray-700 mb-1">Pokud máš jinou síť kde by jsi chtěl se svým projektem zazářit:</label>
    <input type="text" id="vlastni_sit" name="vlastni_sit" class="w-full border-2">
  </div>

  <!-- Tlačítko -->
  <div>
    <button type="submit" class="w-full bg-blue-600 text-white font-medium py-2 px-4 rounded hover:bg-blue-700 transition">
      Odeslat hodnocení
    </button>
  </div>
</form>

<!-- Funkční JS pro aktualizaci sliderů -->
<script>
  const fields = ['meta', 'insta', 'x', 'google'];

  fields.forEach((id) => {
    const inputEl = document.getElementById(id);
    const outputEl = document.getElementById(`${id}-output`);
    outputEl.textContent = inputEl.value;

    inputEl.addEventListener('input', () => {
      outputEl.textContent = inputEl.value;
    });
  });
</script>

@if (session('success'))
  <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
    {{ session('success') }}
  </div>
@endif


</x-BackgroundMarNet>
