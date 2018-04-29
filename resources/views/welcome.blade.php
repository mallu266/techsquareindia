@extends('layouts.public')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="cycle-slideshow" 
                 data-cycle-fx=fadeout
                 data-cycle-timeout=1000
                 data-cycle-pause-on-hover="true"
                 >
                <img class="img-responsive" src="{{asset('system_images/slides/commercial.jpg')}}">
                <img class="img-responsive" src="{{asset('system_images/slides/industrial.jpg')}}">
                <img class="img-responsive" src="{{asset('system_images/slides/defence.jpg')}}">
            </div>
        </div>
        
        
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center company">
            <p>Electronic Control Systems and Automated Engineering</p>
            <p>Bangalore</p>
        </div>
        <div class="col-md-12">
            <h1>Company Profile</h1>
            <p><span class="first_letter">T</span><strong>echsquare</strong> was established in 2001 for development of industrial and commercial automated systems and electronic control units.</p>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <a class="btn btn-success btn-block" href="{{url('about_us')}}">Know More...</a>
            <br>
        </div>
    </div>
</div>


@endsection
