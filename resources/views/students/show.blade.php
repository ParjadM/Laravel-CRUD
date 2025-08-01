@extends('admin')
@section('content')
    <h1>Student Detail</h1>
    <p>Name: {{ $student->name }}</p>
    <p>Email: {{ $student->email }}</p>
    <a href="{{ route('students.index') }}">Home Page</a>
@endsection