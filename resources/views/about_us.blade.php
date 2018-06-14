@extends('layouts.public')

@section('content')
<br><br>
<div class="clearfix"></div>
<div class="container">
    <div class="row">
       
        <div class="col-md-12">
          <?php echo  $response->about_us; ?>  
        </div>
    </div>
</div>
@endsection
