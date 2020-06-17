@extends('layouts.master')

@section('title')

About Us edit
@endsection


@section('content')
<div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                    <div style="text-align:left;padding-bottom:2px;">
    

    <h4><i class="fa fa-bell-o" aria-hidden="true" style="color:red"></i><b>About Us-Edit data </b></h4><br>
    </div>
    <div class="row">
   <div class="col-md-6">
   <form action="/aboutus-update/{{$aboutus->id}}" method="POST">

    
    {{csrf_field()}}
   {{method_field('PUT')}}

      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{$aboutus->title}}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub-Title:</label>
            <input type="text" name="subtitle" class="form-control" value="{{$aboutus->subtitle}}">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" name="description" rows="5" cols="6">{{$aboutus->description}}</textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <a href="/abouts" class="btn btn-danger">CANCEL</a>  

      </div>
      </div>

      </form>
      </div>
      </div>

@endsection


@section('scripts')

@endsection