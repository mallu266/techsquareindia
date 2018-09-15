@extends('layouts.public')
@section('content')
<br><br>
<div class="clearfix"></div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Privacy Policy</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <?php echo @$response->pripolicy; ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection