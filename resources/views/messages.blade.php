@extends('layout')
@section('title', 'Messages')

@section('content')
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
    
        <form  class="ms-auto me-auto mt-auto" style="width:800px">
        <div class="mb-3">
            <div class="text-center">
                <h1>Contacts</h1>
            </div>
        

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Messaege</th>
                <th scope="col">Posted</th>
                </tr>
            </thead>
            <tbody>


                

                @foreach ($messages as $key=>$post)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{ $post->firstname }} {{ $post->lastname }}</td>
                    <td>{{ $post->email }}</td>
                    <td>{{ $post->help }}</td>
                    <td>{{ $post->updated_at->diffForHumans()}}</td>
                </tr>
                
                
                
                @endforeach

            </tbody>
        </table>
        </div>
</form>
    
    
@endsection()