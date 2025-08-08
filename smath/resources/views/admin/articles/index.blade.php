@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Articles</h1>
        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Add Article</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ Str::limit($article->content, 50) }}</td>
                        <td><img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" width="100"></td>
                        <td>
                            <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
