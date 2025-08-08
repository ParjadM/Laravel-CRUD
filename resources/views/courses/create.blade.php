@extends('admin')
@section('content')
    <h1>Add a Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <span style="color:red">{{ $error }}</span><br>
            @endforeach
        @endif
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Name">
        <br>
        @error('name')
            <span style="color:red">{{ $message }}</span><br>
        @enderror
        <br>
        <textarea name="description" placeholder="Description"></textarea>
        <br>
         @error('description')
            <span style="color:red">{{ $message }}</span><br>
        @enderror
        <button type="submit">Submit</button>
    </form>
@endsection
