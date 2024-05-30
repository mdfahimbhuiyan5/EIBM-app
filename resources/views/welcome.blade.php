<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@extends('layout')
@section('title', 'Home')

@section('content')

<div class="text-center home-intro-container">
    <!-- @auth
        <div class="hello-text">
            <h4>Hello, {{auth()->user()->name}}</h4>
        </div>
    @endauth -->
    <div class="home-intro-top">
        <div>
            <h2>Welcome To EIBM</h2>
        </div>
        <div class="d-flex">
            <div class="d-flex align-items-center" style="width: 50%;">
                <h2>We make your business different...</h2>
            </div>
            <div class="m-2 p-2" style="width: 50%;">
                <img src="https://cdn.vectorstock.com/i/2000v/72/31/business-teacher-vector-21587231.avif" alt="" width="100%">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-around home-intro-bottom">
        <div>Easy learning process</div>
        <div>1000+ Contents</div>
        <div>Expert help</div>
    </div>

</div>

<div class="d-flex eibm-intro">
    <div class="m-2 p-2" style="width: 60%;">
        <h6 class="text-center">Using Business Model Canvas to Launch a Technology Startup or Improve Established Operating Model</h6>
        <p class="m-2 p-2">Not so long ago, companies had to develop their business models, plan, and innovate using a variety of well-established methods. The 1980s and 1990s saw a drop in the use of business plans as we know them now because of their complexity and labor-intensive research process. Unsurprisingly, this fall has coincided with Silicon Valley's startup culture and the high-tech boom.</p>

        <iframe width="500" height="315" src="https://www.youtube.com/embed/IP0cUBWTgpY?si=B1q1Hb7j8KMfcWZi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div class="m-4 p-4" style="width: 40%; background-color: #e2eaea">
        <p>
            What is a Business Model Canvas? <br>

            1. Conduct Customer Segmentation<br>
            2. Choose Key Partnerships<br>
            3. Sketch Out Key Activities<br>
            4. Find Relevant Revenue Streams<br>
            5. Describe Your Value Propositions<br>
            6. Outline Distribution Channels<br>
            7. Identify Key Resources<br>
            8. Choose a Customer Relationships Strategy<br>
            9. Classify Cost Structure<br>
        </p>
    </div>
</div>

@endsection