@extends('layout')
@section('title', 'Login')

@section('content')
<!-- {{auth()->user()->email}} -->
<!-- <div class="container">
    <div class="mt-5">
        @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif
    </div> -->
    <form action="{{route('completeprofile.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width:400px">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Role</label>
            <br>
            <!-- <input  class="form-control" id="exampleInputEmail1" name="role" aria-describedby="emailHelp"> -->
            <input type="radio" id="exampleInputEmail2" name="role" value="student" aria-describedby="emailHelp">
            <label for="exampleInputEmail2">Student</label><br>
            <input type="radio" id="exampleInputEmail3" name="role" value="teacher" aria-describedby="emailHelp">
            <label for="exampleInputEmail3">Teacher</label><br>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gender</label>
            <input  class="form-control" id="exampleInputEmail1" name="gender" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contact</label>
            <input  class="form-control" id="exampleInputEmail1" name="contact" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input  class="form-control" id="exampleInputEmail1" name="address" aria-describedby="emailHelp">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<!-- </div> -->
@endsection()