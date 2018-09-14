@extends('layout.masterinstitute')
@section('style')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection
@section('content')

<section class="content-header">
  <h1><b>
    User Management</b>
    <small>Control panel</small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">User</li>
  </ol>
</section>

<div class="modal modal-info fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add User</h4>
      </div>

      <div class="modal-body">
        <!-- Custom Tabs (Pulled to the right) -->
        <form action="#" method="POST" id="frm-user-create" enctype ="multipart/form-data">
          {!! csrf_field() !!}
          <div class="row">

          


              <div class="form-group">
              <label for="class_name" class="col-sm-3 control-label">Class Name: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="class_name" id="class_name">
              </div>
            </div>   

      <div class="form-group">
             <label for="teacher_id" class="col-sm-3 control-label">Teacher's Name: </label>
             <div class="col-sm-9">
               <select class="form-control" name="teacher_id" id="teacher_id" data-placeholder="Select">
                 @foreach($teachers as $teacher)
                 <option value="{{$teacher->teacher_id}}">{{$teacher->teacher_name}}</option>
                 @endforeach
               </select>
             </div>
           </div>

                            

            <div>
              <input type="hidden" name="institute_id" value="{{$institutes->institute_id}}">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<section class="content">
  <div class="col-md-12">
    <!-- Custom Tabs (Pulled to the right) -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs ">
        <li class="active"><a href="#tab_1" data-toggle="tab">Active</a></li>
        <li class="pull-right"> 
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-user">Add User</button></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <div class="box">

              <!-- /.box-header -->
              <div class="box-body no-padding">

                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped" id="user-table">

                    <thead>

                      <tr class="info">
                        <th class="mailbox-subject"><center>Classroom Id</center></th>
                        <th class="mailbox-subject"><center>Classroom Name</center></th>
                        <th class="mailbox-subject"><center>Teacher Name</center></th>
                      </tr>
                    </thead>

                    <tbody>
                    
                      <tr class="info">
                        <td class="mailbox-subject"><center></center></td>
                        <td class="mailbox-subject"><center></center></td>
                        <td class="mailbox-subject"><center></center></td>
                      </tr>
                    

                    </tbody>

                  </table>
                  <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.tab-pane -->

        </div>
        <!-- /.tab-content -->
      </div>
      <!-- nav-tabs-custom -->
    </div>
    <!-- Main content -->
  </section>
  @endsection

  @section('script')
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

  <script>
    $(document).ready(function()
    {
      $('#user-table').DataTable();
      $('#frm-user-create').on('submit',function(e)
      {
        e.preventDefault();
        console.log('pressed');
        var data = $(this).serialize();
        console.log(data);
        var formData = new FormData($(this)[0]);

        $.ajax(
        {
          url: "#",
          type: "POST",
          data: formData,
          async: false,
          success: function(response)
          {
           console.log(response);
           $("[data-dismiss = modal]").trigger({type: "click"});
         },
         cache: false,
         contentType: false,
         processData: false

       });
      });
    });

  </script>
  @endsection