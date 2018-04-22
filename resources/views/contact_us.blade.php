@extends('layouts.public')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-8">
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
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Address</div>
                <div class="panel-body">
                    Techsquare<br>
                    #41/5,No 8,1st Main 2nd Cross,<br>
                    Muthurayaswamy Layout, D.B.Sandra<br>
                    Vidyaranyapura Post,<br>
                    Bangalore 560097<br>
                    Phone No: 080-23455484<br>
                    Mobile No: +91-9900266937<br>
                    Website:www.techsquareindia.com<br>
                    Email.id:query@techsquareindia.com<br>
                    <img src="{{asset('system_images/contacts.png')}}" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
