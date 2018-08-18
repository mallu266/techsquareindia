@extends('layouts.public')

@section('content')
<br><br>
<div class="clearfix"></div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">About Us</div>
        <div class="panel-body">
            <?php echo @$response->about_us; ?>  
        </div>
    </div>

</div>
@endsection
