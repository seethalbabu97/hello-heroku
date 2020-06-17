@extends('layouts.master')

@section('title')

Category Service List
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
                        <tr>
                          
                            <td>1</td>
                            <td>ghjk</td>
                            <td>hhjk</td>
                            <td>
                                <a href="" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                        <form action="/serdelete/{{$item->id}}" method="post">   
                        @csrf
              
                        <button class="btn btn-danger" type="submit">DELETE</button>

                         </form>  


                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>

@endsection
 @section('content')
