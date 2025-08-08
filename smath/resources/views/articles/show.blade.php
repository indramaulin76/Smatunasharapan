@extends('layouts.site')

@section('content')
<div class="bg-gray-100 py-16">
    <div class="container mx-auto">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-auto rounded-lg mb-8">
            <div class="prose max-w-none">
                {!! $article->content !!}
            </div>
            <a href="{{ url('/') }}" class="mt-8 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">← Kembali ke Beranda</a>
        </div>
    </div>
</div>
@endsection
