@extends('layouts.site')

@section('content')
    @include('partials.hero')
    @include('partials.about', ['profile' => $profile])
    @include('partials.services', ['services' => $services])
    @include('partials.berita', ['articles' => $articles])
    @include('partials.team', ['teachers' => $teachers])
    @include('partials.contact')
@endsection
