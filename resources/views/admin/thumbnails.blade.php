@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Thumbnails</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form class="form-horizontal" action="{{url('admin/thumbnails')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="logo" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="slide">Description:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name='description'></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="slide">Image:</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control" id="logo" placeholder="Upload Image">
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
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        @if($response)
                        @foreach($response as $field)
                        <tr>
                            <td>{{$field->title}}</td>
                            <td>{{$field->image}}</td>
                            <td>{{$field->description}}</td>
                            <td><a class="btn btn-danger" href="{{url('admin/thumbnails/delete/'.$field->id)}}">Delete</a></td>
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
