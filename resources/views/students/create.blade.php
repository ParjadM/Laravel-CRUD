@extends('admin')
@section('content')
    <h1>Add a Student</h1>
    <form action="{{route('students.store')}}" method="POST">
        {{csrf_field() }}
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Submit</button>
    </form>
@endsection