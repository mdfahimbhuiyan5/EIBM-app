@extends('layout')
@section('title', 'Register')

@section('content')
<div class="container">
<form action="{{route('register.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width:400px">
    @csrf    
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input  class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control"  id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection()