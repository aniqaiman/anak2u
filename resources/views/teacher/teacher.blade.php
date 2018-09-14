@extends('layout.masterinstitute')
@section('style')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection
@section('content')

<section class="content-header">
  <h1><b>
    Teacher Management
  </b>
  <small>Control panel</small>
</h1>

<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
  <li class="active">Teacher</li>
</ol>
</section>

<div class="modal modal-info fade" id="add-teacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Teacher</h4>
      </div>

      <div class="modal-body">
        <!-- Custom Tabs (Pulled to the right) -->
        <form action="#" method="POST" id="frm-teacher-create" enctype ="multipart/form-data">
          {!! csrf_field() !!}
          <div class="row">

            <div class="form-group">
              <label for="teacher_name" class="col-sm-3 control-label">Teacher's Name: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="teacher_name" id="teacher_name">
              </div>
            </div>

            <div class="form-group">
              <label for="address" class="col-sm-3 control-label">Address: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="address" id="address">
              </div>
            </div>

            <div class="form-group">
              <label for="phone_number" class="col-sm-3 control-label">Phone Number: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="phone_number" id="phone_number">
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="col-sm-3 control-label">Email: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="email" id="email">
              </div>
            </div>

            <div class="form-group">
              <label for="class_id" class="col-sm-3 control-label">Classroom: </label>
              <div class="col-sm-9">
                <select class="form-control" name="class_id" id="class_id" data-placeholder="Select">
                        @foreach($classrooms as $classroom)
                        <option value="{{$classroom->class_id}}">{{$classroom->class_name}}</option>
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
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-teacher">Add Teacher</button></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <div class="box">

              <!-- /.box-header -->
              <div class="box-body no-padding">

                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped" id="teacher-table">

                    <thead>

                      <tr class="info">
                        <!-- <th class="mailbox-subject"><center>Teacher Id</center></th> -->
                        <th class="mailbox-subject"><center>Teacher's Name</center></th>
                        <th class="mailbox-subject"><center>Address</center></th>
                        <th class="mailbox-subject"><center>Phone Number</center></th>
                        <th class="mailbox-subject"><center>Email</center></th>
                        <th class="mailbox-subject"><center>Classroom</center></th>
                        <th class="mailbox-subject"><center>Operation</center></th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($teachers as $teacher)
                      <tr class="info">
                        <!-- <td class="mailbox-subject"><center>{{$teacher->teacher_id}}</center></td> -->
                        <td class="mailbox-subject"><center>{{$teacher->teacher_name}}</center></td>
                        <td class="mailbox-subject"><center>{{$teacher->address}}</center></td>
                        <td class="mailbox-subject"><center>{{$teacher->phone_number}}</center></td>
                        <td class="mailbox-subject"><center>{{$teacher->email}}</center></td>
                        <td class="mailbox-subject"><center>{{$teacher->class_id}}</center></td>
                        <td class="mailbox-subject"><center><div class="btn-group"><a class="button btn btn-success btn-sm" href="{{route('editTeacher', ['institute_id'=> $institutes->institute_id,'teacher_id'=> $teacher->teacher_id])}}"><i class="fa fa-edit"></i> Edit Details</a></center></td>
                      </tr>
                      @endforeach

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
      $('#teacher-table').DataTable();
      $('#frm-teacher-create').on('submit',function(e)
      {
        e.preventDefault();
        console.log('pressed');
        var data = $(this).serialize();
        console.log(data);
        var formData = new FormData($(this)[0]);

        $.ajax(
        {
          url: "{{route('createTeacher')}}",
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