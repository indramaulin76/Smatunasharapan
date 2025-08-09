<!-- Guru kami Section -->
<section id="team" class="bg-gray-100 py-16">
  <!-- Section Title -->
  <div class="container mx-auto text-center mb-12" data-aos="fade-up">
    <h2 class="text-3xl font-bold">Guru Kami</h2>
  </div>

  <div class="container mx-auto">
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-center">

        @foreach ($teachers as $teacher)
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="w-full">
                    <div class="relative">
                        <img src="{{ asset('storage/' . $teacher->photo) }}" class="w-full" alt="{{ $teacher->name }}">
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                            <a href=""><i class="fab fa-twitter-square text-2xl text-white"></i></a>
                            <a href=""><i class="fab fa-facebook-square text-2xl text-white"></i></a>
                            <a href=""><i class="fab fa-instagram-square text-2xl text-white"></i></a>
                            <a href=""><i class="fab fa-linkedin text-2xl text-white"></i></a>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <h4 class="text-lg font-bold">{{ $teacher->name }}</h4>
                        <span>{{ $teacher->title }}</span>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
  </div>
</section>
