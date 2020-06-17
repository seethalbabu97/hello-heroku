@extends('layouts.master')

@section('title')

About Us
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title"> Services Category - Add
                <a href="{{url('service-category')}} " class="btn btn-primary float-right py-2">Back</a>
            </h4>

            
            </div>
            <div class="card-body">
            <form action="{{url('category-store')}}" method="POST">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Services Cate Name</label>
                            <input type="text" name="service_name" class="form-control" placeholder="enter service name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Services Cate Description</label>
                            <textarea type="text" name="service_description" class="form-control" placeholder="enter service description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info">SAVE</button>
                    </div>
                </div>
                </form>
            </div>
        
        </div>

    </div>

</div>

@endsection


@section('script')

@endsection

