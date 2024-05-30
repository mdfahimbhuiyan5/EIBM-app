<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@extends('layout')
@section('title', 'Content')

@section('content')
<div class="review-view">
    <p>{{ $post->name }} posted Updated: {{ $post->updated_at->diffForHumans() }}</p>
    <h4>{{ $post->caption }}</h4>
    <figcaption><i class="fa-solid fa-paperclip"></i> {{ $post->content }}</figcaption>
    <a href="{{ asset('upload/' . $post->content) }}" alt="" target="_blank">Download</a>

</div>
<div id="bmc-form">
    <h4>The Business Model Canvas</h4>
    <div>
        <div class="d-flex justify-content-around top-container">
            <div class="container-item long-container cont-item">
                <h6>Key Partners</h6>
                <p>Who are the key partners?</p>
                <textarea  class="form-control" id="exampleInputEmail1" name="bmc1" aria-describedby="emailHelp" readonly>{{ $post->bmc1 }}</textarea>
            </div>
            <div class="container-item ">
                <div class="cont-item">
                    <h6>Key Acitivities</h6>
                    <p>What key activities do our value proposition require?</p>
                    <textarea  class="form-control" id="exampleInputEmail1" name="bmc2" aria-describedby="emailHelp" readonly>{{ $post->bmc2 }}</textarea>
                </div>
                <div class="cont-item">
                    <h6>Key Resources</h6>
                    <p>What key resources do our value proposition require?</p>
                    <textarea  class="form-control" id="exampleInputEmail1" name="bmc3" aria-describedby="emailHelp" readonly>{{ $post->bmc3 }}</textarea>
                </div>
            </div>
            <div class="container-item long-container cont-item">
                <h6>Value Propostions</h6>
                <p>What value do we deliver to our customers?</p>
                <textarea  class="form-control" id="exampleInputEmail1" name="bmc4" aria-describedby="emailHelp" readonly>{{ $post->bmc4 }}</textarea>
            </div>
            <div class="container-item">
                <div class="cont-item">
                    <h6>Customer Relationships</h6>
                    <p>What type of relationships does each of our customer segments expect us to establish and maintain with them?</p>
                    <textarea  class="form-control" id="exampleInputEmail1" name="bmc5" aria-describedby="emailHelp" readonly>{{ $post->bmc5 }}</textarea>
                </div>
                <div class="cont-item">
                    <h6>Channels</h6>
                    <p>Through which channels do our customer segments want to be reached?</p>
                    <textarea  class="form-control" id="exampleInputEmail1" name="bmc6" aria-describedby="emailHelp" readonly>{{ $post->bmc6 }}</textarea>
                </div>
            </div>
            <div class="container-item long-container cont-item">
                <h6>Customer Segments</h6>
                <p>For whom are we creating value?</p>
                <textarea  class="form-control" id="exampleInputEmail1" name="bmc7" aria-describedby="emailHelp" readonly>{{ $post->bmc7 }}</textarea>
            </div>
        </div>
        <div  class="d-flex justify-content-around bottom-container">
            <div class="container-item">
                <h6>Cost Structure</h6>
                <p>What are the most important costs inherent in our business model?</p>
                <textarea  class="form-control" id="exampleInputEmail1" name="bmc8" aria-describedby="emailHelp" readonly>{{ $post->bmc8 }}</textarea>
            </div>
            <div class="container-item">
                <h6 >Revenue Streams</h6>
                <p>For what value are our customers really willing to pay?</p>
                <textarea  class="form-control" id="exampleInputEmail1" name="bmc9" aria-describedby="emailHelp" readonly>{{ $post->bmc9 }}</textarea>
            </div>
        </div>
    </div>

</div>


<!-- Display comments -->
<form action="{{ route('review.post', $post->id) }}" method="POST" enctype="multipart/form-data" class="ms-auto me-auto mt-auto" style="width:400px">
    @csrf



    @if(auth()->user()->profile && auth()->user()->profile->role == 'teacher')
    <div class="teacher-comment-input">

        <div class="mb-3">
            <h4>Add Your Review</h4>
            <!-- <label for="exampleInputEmail1" class="form-label">Review</label> -->
            <textarea class="form-control" rows="5" cols="10" id="exampleInputEmail1" aria-describedby="emailHelp" name="review"></textarea>
        </div>
        
        <div class="input-group mb-2">
            <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Review</button>
    </div>
    @endif

    <div class="review-comment-view">
    @if($comments->isNotEmpty())
        <h4>Comments</h2>
        <div>
            @foreach($comments as $comment)
                @if($comment->post == $post->id)
                    <div class="indie-comment">
                        <div>
                            {{ $comment->name }}: <b>{{ $comment->content }}
                        </div>
                        <div>
                            <figcaption><i class="fa-solid fa-paperclip"></i> {{ $comment->filename }}</figcaption>
                            <a href="{{ asset('upload/' . $comment->filename) }}" alt="" target="_blank">Download</a>
                        </div>
                        <small>
                            {{ $comment->updated_at->diffForHumans() }}.
                        </small>
                    </div>
                @endif
            @endforeach
        </div>
    @else
        <h4>No comments yet.</h4>
        @endif
</div>
</form>

@endsection
