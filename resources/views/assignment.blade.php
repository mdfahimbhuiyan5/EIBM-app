@extends('layout')
@section('title', 'Assignment')

@section('content')

    @if(auth()->user()->profile && auth()->user()->profile->role == 'teacher')
    <form action="{{route('assignment.post')}}" method="POST" enctype="multipart/form-data" class="ms-auto me-auto mt-auto assignment-post" style="width:400px">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><Caption>Title</label>
            <input  class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><Caption>Link</label>
            <input  class="form-control" id="exampleInputEmail1" name="link" aria-describedby="emailHelp">
        </div>



        <button type="submit" class="btn btn-primary">Upload</button>

        </form>
        <form  class="ms-auto me-auto mt-auto" style="width:400px">

</form>
@endif

<div class="ms-auto me-auto mt-auto all-assignments" style="width:400px">
    <h4 class="text-center">Recent Assignments</h4>
    <ul>
        @foreach ($assignments as $post)
            <ul class="single-assignment">
                <h6>{{ $post->teacherName }} posted an Assignment on: </h6>
                <h4>{{ $post->title }}</h4>
                <p> <a href="{{ $post->link }}" target="_blank">Click to View</a> </p>
            </ul>


        @endforeach
    </ul>
</div>


@endsection()