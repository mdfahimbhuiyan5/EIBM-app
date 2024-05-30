<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@extends('layout')
@section('title', 'Reviews')

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
    <div class="mb-3 text-center">
    @if(auth()->user()->profile && auth()->user()->profile->role == 'teacher')
    <h1>Student Uploads</h1>
    @else 
    <h1>Your Uploads</h1>
    @endif

        @foreach ($posts as $post)
        @if(auth()->user()->profile && auth()->user()->profile->role == 'teacher')

            <div class="review-view">

                <p>{{ $post->name }} posted Updated:{{ $post->updated_at->diffForHumans()}}</p>
                <h4>{{ $post->caption }}</h4>
                @if ($post->content)
                    <figcaption><i class="fa-solid fa-paperclip"></i> {{ $post->content }}</figcaption>
                    <a href="{{ asset('upload/' . $post->content) }}" alt="" target="_blank">Download</a>
                @endif
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    
                    
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                        <form action="{{ route('review', ['post' => $post->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-secondary">Reviews</button>
                        </form>
                    </div>
                    
                </div>
            </div>
            @else
            @if(auth()->user()->email == $post->email)
            <div class="review-view">

                <p>{{ $post->name }} posted Updated:{{ $post->updated_at->diffForHumans()}}</p>
                <h4>{{ $post->caption }}</h4>
                @if ($post->content)
                    <figcaption><i class="fa-solid fa-paperclip"></i> {{ $post->content }}</figcaption>
                    <a href="{{ asset('upload/' . $post->content) }}" alt="" target="_blank">Download</a>
                @endif
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    
                    
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                        <form action="{{ route('review', ['post' => $post->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-secondary">Reviews </button>
                        </form>
                    </div>
                </div>
            </div>
            @endif

            @endif
        @endforeach
            </ul>
        </div>
    
    
@endsection()