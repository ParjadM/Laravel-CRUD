@extends('admin')
@section('content')
    <div class="container">
        <h1 class="mt-5">All Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">ADD NEW COURSE</a>
        <ul class="list-group">
            @foreach ($courses as $course)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $course->name }} - {{ $course->description }}
                    <div>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('courses.destroy', $course->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
