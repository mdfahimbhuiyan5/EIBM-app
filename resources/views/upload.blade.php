<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@extends('layout')
@section('title', 'Upload')

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
    
    <form action="{{route('content.post')}}" method="POST" enctype="multipart/form-data" class="ms-auto me-auto mt-auto" style="width:100%">
        @csrf


        <div class="d-flex justify-content-center text-center add-your-bmc">
            <div style="width: 60%">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label post-your-idea-caption"><Caption>Add your BMC</label>
                    <textarea rows="4" cols="50"  class="form-control" id="exampleInputEmail1" name="caption" aria-describedby="emailHelp"></textarea>
                </div>
            
                <div class="input-group">
                    <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    
                </div>
            </div>
        </div>
        
        <div id="bmc-form">
            <h4>The Business Model Canvas</h4>
            <div>
                <div class="d-flex justify-content-around top-container">
                    <div class="container-item long-container cont-item">
                        <h6>Key Partners</h6>
                        <p>Who are the key partners?</p>
                        <textarea  class="form-control" id="exampleInputEmail1" name="bmc1" aria-describedby="emailHelp" placeholder="type here..."></textarea>
                    </div>
                    <div class="container-item ">
                        <div class="cont-item">
                            <h6>Key Acitivities</h6>
                            <p>What key activities do our value proposition require?</p>
                            <textarea  class="form-control" id="exampleInputEmail1" name="bmc2" aria-describedby="emailHelp" placeholder="type here..."></textarea>
                        </div>
                        <div class="cont-item">
                            <h6>Key Resources</h6>
                            <p>What key resources do our value proposition require?</p>
                            <textarea  class="form-control" id="exampleInputEmail1" name="bmc3" aria-describedby="emailHelp" placeholder="type here..."></textarea>
                        </div>
                    </div>
                    <div class="container-item long-container cont-item">
                        <h6>Value Propostions</h6>
                        <p>What value do we deliver to our customers?</p>
                        <textarea  class="form-control" id="exampleInputEmail1" name="bmc4" aria-describedby="emailHelp" placeholder="type here..."></textarea>
                    </div>
                    <div class="container-item">
                        <div class="cont-item">
                            <h6>Customer Relationships</h6>
                            <p>What type of relationships does each of our customer segments expect us to establish and maintain with them?</p>
                            <textarea  class="form-control" id="exampleInputEmail1" name="bmc5" aria-describedby="emailHelp" placeholder="type here..."></textarea>
                        </div>
                        <div class="cont-item">
                            <h6>Channels</h6>
                            <p>Through which channels do our customer segments want to be reached?</p>
                            <textarea  class="form-control" id="exampleInputEmail1" name="bmc6" aria-describedby="emailHelp" placeholder="type here..."></textarea>
                        </div>
                    </div>
                    <div class="container-item long-container cont-item">
                        <h6>Customer Segments</h6>
                        <p>For whom are we creating value?</p>
                        <textarea  class="form-control" id="exampleInputEmail1" name="bmc7" aria-describedby="emailHelp" placeholder="type here..."></textarea>
                    </div>
                </div>
                <div  class="d-flex justify-content-around bottom-container">
                    <div class="container-item">
                        <h6>Cost Structure</h6>
                        <p>What are the most important costs inherent in our business model?</p>
                        <textarea  class="form-control" id="exampleInputEmail1" name="bmc8" aria-describedby="emailHelp" placeholder="type here..."></textarea>
                    </div>
                    <div class="container-item">
                        <h6 >Revenue Streams</h6>
                        <p>For what value are our customers really willing to pay?</p>
                        <textarea  class="form-control" id="exampleInputEmail1" name="bmc9" aria-describedby="emailHelp" placeholder="type here..."></textarea>
                    </div>
                </div>
            </div>

        </div>
                
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Upload</button>
        </div>
          
        </form>
        <form  class="ms-auto me-auto mt-auto" style="width:400px">
        
</form>
    
    
@endsection()