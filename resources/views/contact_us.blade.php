@extends('layouts.public')

@section('content')
<div class="container">
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
                </div>
            </div>
        </div>
         <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Address</div>
                <div class="panel-body">
                  Techsquare
                  #41/5,No 8,1st Main 2nd Cross,
                  Muthurayaswamy Layout, D.B.Sandra
                  Vidyaranyapura Post,
                  Bangalore 560097
                  Phone No: 080-23455484
                  Mobile No: +91-9900266937
                  Website:www.techsquareindia.com
                  Email.id:query@techsquareindia.com
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
