@extends('layouts.public')

@section('custom_css')
<style>
    .cycle-pager {
        text-align: center;
        width: 100%;
        z-index: 500;
        color: #EEAC21;
        font-size: 70%;
    }
    .cycle-pager span {
        font-family: arial;
        font-size: 300%;
        width: 2%;
        display: inline-block;
        color: #ddd;
        cursor: pointer;
        bottom: 1%;
    }
    .cycle-pager span.cycle-pager-active { color: #EEAC21;}
    .cycle-pager > * { cursor: pointer;}
</style>
<link rel="stylesheet" href="{{asset('flexslider/css/demo.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('flexslider/css/flexslider.css')}}" type="text/css" media="screen" />
@endsection
@section('content')
<div class="container-fluid">
    <div class="flexslider">
        <ul class="slides">
            @if($response)
            @foreach($response as $field)
            <li>
                <img onclick="return loadpage(this)" alt="{{$field->title}}" data-product-id="{{$field->product_id}}" data-resource-id="{{$field->resource_id}}" src="{{asset('slides/'.$field->slide)}}" />
            </li>
            @endforeach
            @endif
        </ul>
    </div>
</div> 
<div class="container-fluid">
    <div class="row">
        @if($thumbnails)
        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <h1>Latest Products</h1>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slideshow" 
                 data-cycle-fx=carousel
                 data-cycle-timeout=1000
                 data-cycle-carousel-visible=5
                 data-cycle-carousel-fluid=true
                 data-cycle-next="#next"
                 data-cycle-prev="#prev"
                 data-cycle-pager="#pager"
                 >
                @foreach($thumbnails as $field)
                <img alt="{{$field->title}}" onclick="return loadpage(this)" data-product-id="{{$field->product_id}}" data-resource-id="{{$field->resource_id}}" class="img-responsive" src="{{asset('thumbnails/'.$field->image)}}">
                @endforeach

            </div>
            <div class=center>
                <a href=# id=prev class="btn btn-info btn-xs">Prev </a>
                <a href=# id=next class="pull-right btn btn-xs btn-info"> Next </a>
            </div>
            <div class="cycle-pager text-center" id=pager></div>
        </div>
        @endif
    </div>
    @if($description)
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <h1>Introduction</h1>
        </div>
        <div class="col-md-12">
            <?php echo @$description->default; ?>
        </div>
    </div>
    @endif
</div>
@endsection
@section('script')
<script src="http://malsup.github.io/jquery.cycle2.carousel.js"></script>
<script src="{{asset('flexslider/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('flexslider/js/jquery.easing.js')}}"></script>
<script src="{{asset('flexslider/js/jquery.mousewheel.js')}}"></script>
<script src="{{asset('flexslider/js/demo.js')}}"></script>
<script>
                    $('.slideshow').cycle();
                    $base_url = $('#base_url').attr('content');
                    function loadpage(event) {
                        $product_id = event.getAttribute('data-product-id');
                        $resource_id = event.getAttribute('data-resource-id');
                        window.location.href = $base_url + "/resources/" + $product_id + "/" + $resource_id;

                    }
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
                    $(window).load(function () {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            start: function (slider) {
                                $('body').removeClass('loading');
                            }
                        });
                    });
</script>
@endsection
