@extends('admin')
@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required>
        <br><br>
        <button type="submit">Update Student</button>
    </form>
@endsection



    