@extends('admin')
@section('content')
    <h1>Course Detail</h1>
    <p>Name: {{ $course->name }}</p>
    <p>Description: {{ $course->description }}</p>
    <a href="{{ route('courses.index') }}">Back to Courses</a>
@endsection
