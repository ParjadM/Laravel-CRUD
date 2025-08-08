@extends('admin')
@section('content')
    <h1>Edit Course</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $course->name }}" required>
        <br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required>{{ $course->description }}</textarea>
        <br><br>
        <button type="submit">Update Course</button>
    </form>
@endsection
