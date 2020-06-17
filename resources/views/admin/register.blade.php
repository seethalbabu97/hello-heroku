@extends('layouts.master')

@section('title')

register
@endsection


@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Roles</h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                 @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        usertype
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                    @foreach($users as $row)
                      <tr>
                        <td>
                         {{$row->name}}
                        </td>
                        <td>
                        {{$row->email}}
                        </td>
                        <td>
                        -{{$row->usertype}}
                        </td>
                        <td>
                         <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a> 
                        </td>
                        <td>
                        <form action="/role-delete/{{$row->id}}" method="post">   
                        @csrf
              
                        <button class="btn btn-danger" type="submit">DELETE</button>

                         </form>    
                        </td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
        </div>
@endsection


@section('scripts')

@endsection

