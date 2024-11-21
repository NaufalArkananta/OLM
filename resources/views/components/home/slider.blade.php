<div class="w-full mx-auto my-12 max-w-screen-2xl">
  <div id="carousel" class="relative w-full overflow-hidden">
    <!-- Slides -->
    <div class="flex w-full transition-transform duration-500 ease-in-out rounded-lg carousel-slides">
      <img src="{{ asset('img/image-carousel-1.png') }}" class="object-cover w-full h-[500px] rounded-rounded-3"
        alt="img 1">
      <img src="{{ asset('img/image-carousel-1.png') }}" class="object-cover w-full h-[500px] rounded-rounded-3"
        alt="img 2">
      <img src="{{ asset('img/image-carousel-1.png') }}" class="object-cover w-full h-[500px] rounded-rounded-3"
        alt="img 3">
    </div>
    <!-- Navigation buttons -->
    <button id="prev" class="absolute left-0 px-4 py-2 text-white -translate-y-1/2 bg-transparent top-1/2 group">
      <svg class="w-8 h-8 text-sky-300 group-hover:text-sky-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M5 12h14M5 12l4-4m-4 4 4 4" />
      </svg>
    </button>
    <button id="next" class="absolute right-0 px-4 py-2 text-white -translate-y-1/2 bg-transparent top-1/2 group">
      <svg class="w-8 h-8 text-sky-300 group-hover:text-sky-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M19 12H5m14 0-4 4m4-4-4-4" />
      </svg>
    </button>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const carousel = document.querySelector("#carousel");
    const slides = carousel.querySelector(".carousel-slides");
    const prevBtn = carousel.querySelector("#prev");
    const nextBtn = carousel.querySelector("#next");

    const totalSlides = slides.children.length;
    let currentIndex = 0;

    function updateCarousel() {
      const offset = -currentIndex * 100;
      slides.style.transform = `translateX(${offset}%)`;
    }

    nextBtn.addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateCarousel();
    });

    prevBtn.addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      updateCarousel();
    });
  });
</script>
