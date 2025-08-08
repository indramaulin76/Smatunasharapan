@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Teachers</h1>
        <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary">Add Teacher</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->title }}</td>
                        <td><img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}" width="100"></td>
                        <td>
                            <a href="{{ route('admin.teachers.edit', $teacher) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.teachers.destroy', $teacher) }}" method="POST" style="display:inline-block;">
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
