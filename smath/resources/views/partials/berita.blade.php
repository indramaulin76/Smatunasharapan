<!-- /Berita Section -->
<section id="berita" class="py-16">
  <div class="container mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold">Berita</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($articles as $article)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-48 object-cover" alt="{{ $article->title }}">
                <div class="p-6">
                    <h5 class="text-xl font-bold">{{ $article->title }}</h5>
                    <p class="mt-2 text-gray-600">{{ Str::limit($article->content, 100) }}</p>
                    <a href="{{ route('articles.show', $article) }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>
  </div>
</section><!-- /Berita Section -->
