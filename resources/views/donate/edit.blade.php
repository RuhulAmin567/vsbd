@extends("layouts.custom")

@section("contents")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Here is your Edit View</h1>
                <a href="{{route('post.index')}}" class="btn btn-success" style="margin-top: 15px;margin-bottom: 15px;">All Post</a>
                <a class="btn btn-danger" title="delete" href="" onclick="if (confirm('Are You Sure To Delete This?')){event.preventDefault();document.getElementById('delete-form{{ $row->id }}').submit();} else {event.preventDefault();}">Delete</a>
                <form id="delete-form{{ $row->id }}" method="post" action="{{ route('post.destroy',$row->id) }}" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </div>
        </div>
        <form action="{{route('post.update',$row->id)}}" method="post">
        @csrf
        {{method_field("PATCH")}}
        
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$row->title}}">
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{$row->type}}">
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="5">{{$row->description}}</textarea>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" value="{{$row->image}}">
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </div>
        
        </form>
    </div>
@endsection