@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Resources</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form class="form-horizontal" action="{{url('admin/resources')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" value="{{@$resources->id}}" name="id">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="products">Products:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="product_id" required="">
                                    <option value="">Select</option>
                                    @foreach($products as $field)
                                    <option <?php echo ($field->id == $resources->product_id) ? "selected" : "" ?> value="{{$field->id}}">{{$field->product}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" value="{{@$resources->title}}" class="form-control" id="title" placeholder="Upload Logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="slide">Specification:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name='specifications'>{{@$resources->specifications}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="slide">Image:</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control" id="image" placeholder="Upload Logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="slide">Broucher:</label>
                            <div class="col-sm-10">
                                <input type="file" name="broucher" value="{{@$resources->broucher}}" class="form-control" id="broucher" placeholder="Upload Logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="slide">Features:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name='description' id="summary-ckeditor">{{@$resources->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered">
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @if($response)
                        @foreach($response as $field)
                        <tr>
                            <td>{{$field->title}}</td>
                            <td>{{$field->image}}</td>
                            <td><a class="btn btn-primary" href="{{url('admin/resources/edit/'.$field->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{url('admin/resources/delete/'.$field->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    CKEDITOR.replace('summary-ckeditor');
</script>

@endsection
