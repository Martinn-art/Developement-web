<x-BackgroundMarNet>
<x-NavMarNet>

</x-NavMarNet>


<h1 class="text-white grid place-self-center">MŮJ PRVNÍ WEB S TÉMATIKOU NEVŠEDNÍ Aneb #SpojCoTěBavíSTímCoTěBaví</h1>

<div
  x-data="{
    active: 0,
    slides: [
      '{{ asset('PIC/web.png') }}',
      '{{ asset('PIC/web1.png') }}',
      '{{ asset('PIC/web2.png') }}',
      '{{ asset('PIC/web3.png') }}'
    ],
    next() { this.active = (this.active + 1) % this.slides.length },
    prev() { this.active = (this.active - 1 + this.slides.length) % this.slides.length },
    autoSlide() {
      setInterval(() => this.next(), 5000)
    }
  }"
  x-init="autoSlide"
  class="relative w-full max-w-4xl mx-auto mt-10 overflow-hidden rounded-lg shadow-lg bg-gray-900 flex items-center justify-center h-[600px]"
>
  <!-- Slides -->
  <template x-for="(slide, index) in slides" :key="index">
    <img
      :src="slide"
      x-show="active === index"
      x-transition:enter="transition-opacity duration-700"
      x-transition:leave="transition-opacity duration-700"
      class="absolute max-w-full max-h-full object-scale-down"
    />
  </template>

  <!-- Controls -->
  <div class="absolute inset-0 flex items-center justify-between px-4 z-10">
    <button @click="prev" class="text-white text-3xl font-bold hover:opacity-75">‹</button>
    <button @click="next" class="text-white text-3xl font-bold hover:opacity-75">›</button>
  </div>

  <!-- Dots (optional) -->
  <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
    <template x-for="(slide, index) in slides" :key="index">
      <div
        class="w-3 h-3 rounded-full"
        :class="active === index ? 'bg-white' : 'bg-white/30'"
        @click="active = index"
      ></div>
    </template>
  </div>
</div>




</x-BackgroundMarNet>
