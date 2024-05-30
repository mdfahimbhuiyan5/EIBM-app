@extends('layout')
@section('title', 'Post')

@section('content')


<!-- <h3>{{ $post->name }} posted Updated:{{ $post->updated_at->diffForHumans()}}</h3>
<h1>{{ $post->caption }}</h1>
<h1>{{ $post->content }}</h1> -->


<div class="d-flex justify-content-center">

    <div  style="width: 500px">
        
        <div class="post-container" >
            
            <h4>{{ $post->name }}</h4>
            <small>posted {{ $post->updated_at->diffForHumans() }}</small>
            <h5>{{ $post->caption }}</h5>
            @if ($post->content)
            <div>
                <img src="{{ asset('upload/' . $post->content) }}" alt="" class="content-image" accept="image/png, image/jpeg">
                <figcaption class="text-truncate">{{ $post->content }}</figcaption> 
            </div>
            @endif
        </div>
    </div>
</div>


<!-- Display comments -->
<form action="{{ route('comment.post', $post->id) }}" method="POST" class="ms-auto me-auto mt-auto" style="width:400px">
    @csrf


    <div>
        <h4>Comments</h4>

        @if($comments->isNotEmpty())
            <div class="comment-on-content">
                @foreach($comments as $comment)
                @if( $comment->post == $post->id)
                <div class="indie-comment-on-content">
                    <p>{{ $comment->name }}: <b> {{ $comment->content }} </b> </p>
                    <small>{{ $comment->updated_at->diffForHumans()}}.</small>
                </div>
                @endif
                @endforeach
            </div>
        @else
            <p>No comments yet.</p>
        @endif
    </div>

        <div class="comment-input-container">

            <div class="mb-3">
                <!-- <label for="exampleInputEmail1" class="form-label">Comment</label> -->
                <textarea  class="form-control" id="exampleInputEmail1" name="comment" aria-describedby="emailHelp" rows="5" cols="20" placeholder="Comment here..."></textarea>
            </div>
            
            
            <button type="submit"  class="btn btn-primary">Comment</button>
        </div>

</form>



@endsection