@extends('admin')
@section('content')
    <h1>All Students</h1>
    <a href="{{route('students.create')}}">ADD NEW STUDENTS</a>
    <br><br>
    @foreach ($students as $student)
        {{$student -> name}} - {{$student -> email}}
        <a href="{{route('students.show', $student -> id)}}">View</a>
        <a href="{{route('students.edit', $student -> id)}}">Edit</a>
        <a href="{{route('students.destroy', $student -> id)}}">Delete</a><br>
    @endforeach
@endsection