@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Profile</h1>
        <form action="{{ route('admin.profile.update', $profile) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" class="form-control" id="about" rows="5" required>{{ $profile->about }}</textarea>
            </div>
            <div class="form-group">
                <label for="vision">Vision</label>
                <textarea name="vision" class="form-control" id="vision" rows="5" required>{{ $profile->vision }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
