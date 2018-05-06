@extends('layouts.public')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Us</div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {!! Form::open(['route' => 'contact.store']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Your Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'E-mail Address') !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <!--            <div class="panel panel-default">
                            <div class="panel-heading">Address</div>-->
            <!--<div class="panel-body">-->
<!--                   <i class="fa fa-building"></i> Techsquare<br>
                <i class="fa fa-road" aria-hidden="true"></i>  #41/5,No 8,1st Main 2nd Cross,<br>
                <i class="fa fa-road" aria-hidden="true"></i> Muthurayaswamy Layout, D.B.Sandra<br>
                <i class="fa fa-road" aria-hidden="true"></i> Vidyaranyapura Post,<br>
                <i class="fa fa-map-marker" aria-hidden="true"></i> Bangalore 560097<br>
                <i class="fa fa-phone" aria-hidden="true"></i>: 080-23455484<br>
                <i class="fa fa-mobile" aria-hidden="true"></i>: +91-9900266937<br>
                Website:www.techsquareindia.com<br>
                <i class="fa fa-envelope" aria-hidden="true"></i>:query@techsquareindia.com<br>-->
            <img src="{{asset('system_images/card.jpg')}}" class="img-responsive">
            <!--</div>-->
        </div>
    </div>
</div>
@endsection
