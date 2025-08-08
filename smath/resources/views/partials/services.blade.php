<!-- Services Section -->
<section id="services" class="py-16">

  <!-- Section Title -->
  <div class="container mx-auto text-center mb-12" data-aos="fade-up">
    <h2 class="text-3xl font-bold">PROGRAM UNGULAN</h2>
  </div><!-- End Section Title -->

  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($services as $service)
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <a href="#" class="block">
                        <h3 class="text-xl font-bold">{{ $service->title }}</h3>
                    </a>
                    <p class="mt-2">{{ $service->description }}</p>
                </div>
            </div><!-- End Service Item -->
        @endforeach
    </div>
  </div>

</section><!-- /Services Section -->
