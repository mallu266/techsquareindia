@extends('layouts.public')

@section('content')
<br><br>
<div class="clearfix"></div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo @$response->title ?></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <?php echo @$response->specifications ?>
                </div>
                <div class="col-md-8">
                    <?php echo @$response->description ?>
                </div>
                <div class="col-md-4">
                    @if(@$response->brouchers)
                    <a download="" href="{{asset('asset/resources/brouchers/'.@$response->brouchers)}}" class="btn btn-primary">Broucher</a>
                    @endif
                    <img src="{{asset('resources/'.@$response->image)}}" class="img-responsive">
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
