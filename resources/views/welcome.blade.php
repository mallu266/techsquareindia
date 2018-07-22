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
     >@if($response)
    @foreach($response as $field)
    <img onclick="return loadpage(this)" data-product-id="{{$field->product_id}}" data-resource-id="{{$field->resource_id}}" class="img-responsive" src="{{asset('slides/'.$field->slide)}}">

    @endforeach
    @endif

</div>
<div class="container">
    <div class="container">
        <div class="row">
            @if($thumbnails)
            @foreach($thumbnails as $field)
            <div class="col-sm-3 col-xs-6">
                <div class="thumbnail">
                    <div class="secrow">
                        <div class="caption">
                            {{$field->title}}
                        </div>
                        <img  class="img-responsive" src="{{asset('thumbnails/'.$field->image)}}">
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php echo @$description->default; ?>
            </div>
        </div>
    </div>
</div>
<br>

@endsection
@section('script')
<script src="http://malsup.github.io/jquery.cycle2.carousel.js"></script>
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
</script>
@endsection