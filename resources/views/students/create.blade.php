@extends('admin')
@section('content')
    <h1>Add a Student</h1>
    <form action="{{route('students.store')}}" method="POST">
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <span style="color:red">{{ $error }}</span><br>
            @endforeach
        @endif
        {{csrf_field() }}
        <input type="text" name="name" placeholder="Name">
        <br>
            @error('name')
                <span style="color:red">{{ $message }}</span><br>
            @enderror
        <br>
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Submit</button>
    </form>
@endsection