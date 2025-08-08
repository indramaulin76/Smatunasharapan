<!-- About Section -->
<section id="about" class="bg-gray-100 py-16">

  <!-- Section Title -->
  <div class="container mx-auto text-center mb-12" data-aos="fade-up">
    <h2 class="text-3xl font-bold">Tentang kami</h2>
  </div><!-- End Section Title -->

  <div class="container mx-auto">

    <div class="flex flex-wrap -mx-3">

      <div class="w-full lg:w-1/2 px-3" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('assets/img/aboutme1.jpeg') }}" alt="" class="w-full">
      </div>

      <div class="w-full lg:w-1/2 px-3 flex flex-col justify-center" data-aos="fade-up" data-aos-delay="200">
        <div class="pl-0 lg:pl-3">
          <h3 class="text-2xl font-bold">SMA TUNAS HARAPAN</h3>
          <p class="italic mt-2">
            {{ $profile->about }}
          </p>
          <ul class="mt-4 space-y-4">
            <li>
              <div>
                <h4 class="text-xl font-bold">VISI</h4>
                <p>{{ $profile->vision }}</p>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>

  </div>

</section><!-- /About Section -->
