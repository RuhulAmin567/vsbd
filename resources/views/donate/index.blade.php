@extends("layouts.custom")

@section("contents")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Here is your Index View</h1>
                <a href="{{route('post.index')}}" class="btn btn-success" style="margin-top: 15px;margin-bottom: 15px;">All Bank</a>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                     <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Type</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $sl = 1; @endphp
                    @foreach($rows as $row)
                        <tr>
                            <th scope="row">{{$sl++}}</th>
                            <td>{{$row->title}}</td>
                            <td>{{$row->type}}</td>
                            <td>{{$row->description}}</td>
                            <td>{{$row->image}}</td>
                            <td>
                            <a href="{{route('post.show',$row->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('post.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger" title="delete" href="" onclick="
                                                if (confirm('Are You Sure To Delete This?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form{{ $row->id }}').submit();
                                                }else {
                                                event.preventDefault();
                                                }
                                                ">Delete</a>
                            <form id="delete-form{{ $row->id }}" method="post" action="{{ route('post.destroy',$row->id) }}" style="display: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
