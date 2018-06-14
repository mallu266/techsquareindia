@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Slides</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form class="form-horizontal" action="{{url('admin/slides')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="logo" placeholder="Upload Logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="slide">Slide:</label>
                            <div class="col-sm-10">
                                <input type="file" name="slide" class="form-control" id="logo" placeholder="Upload Logo">
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
                            <td>{{$field->slide}}</td>
                            <td><a href="{{url('admin/slides/delete/'.$field->id)}}">Delete</a></td>
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
