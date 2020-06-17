@extends('layouts.master')

@section('title')

register
@endsection


@section('content')
<div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                    <div style="text-align:left;padding-bottom:2px;">
    

    <h4><i class="fa fa-bell-o" aria-hidden="true" style="color:red"></i><b>Edit user</b></h4><br>
    </div>
   <div class="row">
   <div class="col-md-6">
   <form action="/role-register-update/{{$users->id}}" method="POST">
   {{csrf_field()}}
   {{method_field('PUT')}}
        <div class="form-group">
    <label>Name</label>
    <input type="text" name=" username" value="{{$users->name}}" class="form-control">
  </div>
  <div class="form-group">
    <label>Give Role</label>
    <select name="usertype" class="form-control">
        <option value="admin">Admin</option>
        <option value="vendor">Vendor</option>
        <option value="">none</option>


    </select>
  </div> 
  <button type="submit" class="btn btn-success">Update</button>  
  <a href="/roleregister" class="btn btn-danger">Cancel</a>  

  </form> 
   </div>
   </div>
                            
                        </div>
                    </div>


@endsection


@section('scripts')

@endsection