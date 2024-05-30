<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@extends('layout')
@section('title', 'Content')

@section('content')

<div class="post-submit-container">
<form action="{{route('upload.post')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label post-your-idea-caption"><Caption>Post Your Idea</Caption></label><br>
            <textarea id="exampleInputEmail1" name="caption" rows="4" cols="50" aria-describedby="emailHelp"></textarea>
        </div>
        
        <div class="input-group">
            <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        </div>
            
                
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
          
        </form>
</div>
<div class="ms-auto me-auto mt-auto" style="width:400px">
<div class="feed-container">
    <h1>Recently Posted</h1>
    <div class="feed-post-scroller">
        @foreach ($posts as $post)
        <div class="post-container">

            <h4>{{ $post->name }}</h4>
            <small>posted {{ $post->updated_at->diffForHumans() }}</small>
            <h5>{{ $post->caption }}</h5>
            @if ($post->content)
            <div>
                    <img src="{{ asset('upload/' . $post->content) }}" alt="" class="content-image" accept="image/png, image/jpeg">
                    <figcaption class="text-truncate">{{ $post->content }}</figcaption> 
                </div>
            @endif

            <div class="btn-toolbar mt-5 reaction-buttons" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="First group">
                <form action="{{ route('like.post', $post) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-thumbs-up"></i> Like {{ $post->likes }}</button>
                </form>
            </div>

            <div class="btn-group me-2" role="group" aria-label="Second group">
                <form action="{{ route('comment', ['post' => $post->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-comment"></i> Comment {{ $post->comments }}</button>
                </form>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                
                <button type="button" class="btn btn-info"><i class="fa-solid fa-share"></i> Share {{ $post->shares }}</button>
                
            </div>
            </div>
            </div>
        @endforeach
    </div>
    </div>
</div>

@endsection
