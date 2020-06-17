@extends('layouts.master')

@section('title')

About Us
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add About Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <form method = "POST" action= "/save">
      

    @csrf
      

      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub-Title:</label>
            <input type="text" name="subtitle" class="form-control" id="recipient-name">
          </div>          
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" name="description" id="message-text"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SAVE</button>
      </div>
      </form>

    </div>
  </div>
</div>
<!-- {{--delete modal--}}  -->
<!-- <div class="modal fade" id="deletemodalpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="delete_modal_Form" method="POST">   
          @csrf

      <div class="modal-body">
        <input type="text" id="delete-aboutus_id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Yes. Delete it.</button>
      </div>
      </form>

    </div>
  </div>
</div> -->
<!-- {{--End elete modal--}}  -->


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> About Us
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>
                </h4>
               
                    <style>
                    .w-10p{
                        width: 10% !important;
                    }
                    </style>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="dataTable" class="table table-stripped">
                    <thead class=" text-primary">
                      <th class="w-10p">
                        Id
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Sub-title
                      </th>
                      <th >
                        Description
                      </th>
                      <th>
                        EDIT
                      </th>
                      <th>
                        DELETE
                      </th>
                    </thead>
                    <tbody>
                    @foreach($aboutus as $data)
                      <tr>
                      <td>
                          {{$data->id}}
                        </td>
                        <td>
                          {{$data->title}}
                        </td>
                        <td>
                        {{$data-> subtitle}}
                        </td>
                        <td>
                        <div style="height:80px; overflow: hidden;">
                        {{$data->description}} 
                        </div>                        
                        </td>
                        <td>
                         <a href="/aboutus-edit/{{$data->id}}" class="btn btn-success">EDIT</a> 
                        </td>
                        <td>
                        <form action="/aboutusdelete/{{$data->id}}" method="post">   
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
<script>
$(document).ready( function () {
    $('#dataTable').DataTable();

    // $('#dataTable').on('click','.deletebtn',function() {
    //   $tr =$(this).closest('tr');
    //   var data = $tr.children("td").map(function() {
    //     return $(this).text();

    //   }).get();
    //    // console.log(data); 

    //   $('#delete-aboutus_id').val(data[0]);
    //   $('#delete_modal_Form').attr('action','/aboutusdelete/'+data[0]);
    //   $('#deletemodalpop').modal('show');
      

    //     });
    
});
</script>

@endsection

