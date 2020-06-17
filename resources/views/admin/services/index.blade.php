@extends('layouts.master')

@section('title')

About Us
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Services Category
                    <a href="{{url('service-create')}} " class="btn btn-primary float-right py-2">Add</a>
                </h4>

            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $item)
                        <tr>
                          
                            <td>{{$item->id}}</td>
                            <td>{{$item->service_name}}</td>
                            <td>{{$item->service_description}}</td>
                            <td>
                                <a href="/service-cate-edit/{{$item->id}}" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                        <form action="/serdelete/{{$item->id}}" method="post">   
                        @csrf
              
                        <button class="btn btn-danger" type="submit">DELETE</button>

                         </form>  


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>

@endsection


@section('scripts')


@endsection