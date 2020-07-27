@extends("layouts.custom")

@section("contents")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Here is your Show View</h1>
                <a href="{{route('post.index')}}" class="btn btn-success" style="margin-top: 15px;margin-bottom: 15px;">All Post</a>
                <a href="{{route('post.edit', $row->id)}}" class="btn btn-warning" style="margin-top: 15px;margin-bottom: 15px;">Edit this Post</a>
                <a class="btn btn-danger" title="delete" href="" onclick="if (confirm('Are You Sure To Delete This?')){event.preventDefault();document.getElementById('delete-form{{ $row->id }}').submit();} else {event.preventDefault();}">Delete</a>
                <form id="delete-form{{ $row->id }}" method="post" action="{{ route('post.destroy',$row->id) }}" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>{{$row->title}}</th>
                </tr>  
    
                <tr>
                    <th>Type</th>
                    <th>{{$row->type}}</th>
                </tr>  
    
                <tr>
                    <th>Description</th>
                    <th>{{$row->description}}</th>
                </tr>  
    
                <tr>
                    <th>Image</th>
                    <th>{{$row->image}}</th>
                </tr>  
    
            </thead>
        </table>
    </div>
@endsection