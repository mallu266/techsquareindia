@extends('layouts.public')

@section('custom_css')
<style>
    .thumbnail,textarea{
        border-radius: 0;
        overflow: hidden;
    }
    .caption {
        position:absolute;
        bottom:0;
        right:0;
        background: rgba(0, 0, 0, 0.57);
        width:100%;
        height:45%;
        padding:2%;
        display: none;
        text-align:center;
        color:#fff !important;
        z-index:2;
    }

    textarea{
        resize:none;
    }
    .thumbnail{
        position: relative;
        border: 1px solid #BDC3C7;

        padding: 10px;
        margin: 5px;
        background-color: #EAEDF2;
    }
    .frow{
        position: relative;

    }
    .frow,.secrow,.thirdrow{
        margin: 5px 0;
    }

    .secrow{
        position: relative;
    }
</style>
@endsection
@section('content')
<div class="cycle-slideshow" 
     data-cycle-fx=fadeout
     data-cycle-timeout=5000
     data-cycle-pause-on-hover="true"
     >
    @if($response)
    @foreach($response as $field)
    <a href="{{url('resources/'.$field->product_id.'/'.$field->resource_id)}}">
        <img class="img-responsive" src="{{asset('slides/'.$field->slide)}}">
    </a>
    @endforeach
    @endif

</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
<!--            <div class="slideshow" 
                 data-cycle-fx=carousel
                 data-cycle-timeout=0
                 data-cycle-carousel-visible=4
                 data-cycle-next="#th_next"
                 data-cycle-prev="#th_prev"
                 data-cycle-pager="#thumb_pager"
                 >
                @if($thumbnails)
                @foreach($thumbnails as $field)
                <a href="{{url('resources/'.$field->product_id.'/'.$field->resource_id)}}">
                    <img class="img-thumbnail" src="{{asset('thumbnails/'.$field->image)}}">
                </a>
                @endforeach
                @endif
            </div>
            <div class=center>
                <a href=# id=th_prev>&lt;&lt; Prev </a>
                <a href=# id=th_next> Next &gt;&gt; </a>
            </div>
            <div class="cycle-pager" id=thumb_pager></div>-->
                       @if($thumbnails)
                        @foreach($thumbnails as $field)
                        <a href="{{url('resources/'.$field->product_id.'/'.$field->resource_id)}}">
                            <div class="col-sm-3 col-xs-6">
                                <div class="thumbnail">
                                    <div class="secrow">
                                        <div class="caption">
                                            {{$field->title}}
                                        </div>
                                        <img class="img-responsive" src="{{asset('thumbnails/'.$field->image)}}">
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo @$description->default; ?>
        </div>
    </div>
</div>
<br>
@endsection
@section('script')
<script src="http://malsup.github.io/jquery.cycle2.carousel.js"></script>
<script>
$('.slideshow').cycle();
$(document).ready(function () {

    $(function () {
        $('.mm_tooltip').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        })
    });

    $('.thumbnail').hover(
            function () {
                $(this).find('.caption').slideDown(300); //.fadeIn(250)
            },
            function () {
                $(this).find('.caption').slideUp(200); //.fadeOut(205)
            }
    );

    $('#btndel').on('click', function () {
        alert('Are you sure you want to delete');

    });

});
</script>
@endsection