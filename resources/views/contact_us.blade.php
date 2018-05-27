@extends('layouts.public')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Us</div>
                <div class="panel-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div data-server-error="{{ @session('servererror') }}" class="alert alert-danger">
                        {{ session('error') }}
                        
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
        <div class="col-md-3 text-center" style="font-size: 16px">
            <img src="{{asset('system_images/logo.jpg')}}" class="img-responsive">
               <span>Ganesh S</span><br>
                <span>Project Manager</span>
            <div style="font-size: 14px; border-top:2px solid black">
                #41/5,No 8,1st Main 2nd Cross,<br>
                Muthurayaswamy Layout, D.B.Sandra<br>
                Vidyaranyapura Post,<br>
                Bangalore 560097<br>
                080-23455484<br>
                +91-9900266937<br>
                query@techsquareindia.com<br>
            </div>
        </div>
    </div>
</div>
@endsection
