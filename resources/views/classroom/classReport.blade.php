@extends('layout.master')
@section('style')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection
@section('content')

<section class="content-header">
      <h1>
        Classroom Report
        <small>Control panel</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Classroom Report</li>
      </ol>
    </section>

      <div class="modal modal-info fade" id="add-classroomreport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Classroom Report</h4>
          </div>
          
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-classroomreport-create" enctype ="multipart/form-data">
                  {!! csrf_field() !!}
                    <div class="row">

                      <div class="form-group">
                        <label for="class_id" class="col-sm-3 control-label">Class Name: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="class_id" id="class_id">
                        </div>
                      </div>  

                      <div class="form-group">
                        <label for="message" class="col-sm-3 control-label">Message: </label>
                        <div class="col-sm-9">
                        <textarea class="form-control" name="message" id="message"></textarea>
                        </div>
                      </div>  

                      <div class="form-group">
                        <label for="report_picture" class="col-sm-3 control-label">Report Picture: </label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" name="report_picture" id="report_picture">
                        </div>
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
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-classroomreport">Add Classroom Report</button></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" id="classroomreport-table">
                
                          <thead>
  
                          <tr class="info">
                            <th><input type="checkbox"></th>
                            <th class="mailbox-subject"><center><a>Report Id</a></center></th>
                            <th class="mailbox-subject"><center><a>Class Name</a></center></th>
                            <th class="mailbox-subject"><center><a>Message</a></center></th>
                            <th class="col-sm-3"><center><a>Report Picture</a></center></th>
                          </tr>
                          </thead>

                          <tbody>
                          @foreach($classroomreports as $classreport)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-subject"><center><a href="#">{{$classreport->report_id}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$classreport->class->class_name}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$classreport->message}}</a></center></td>
                            <td class="col-sm-3"><center><img style="width: 50%" class="img-responsive" src="{{$classreport->report_picture}}"/></center></td>
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
    $('#classroomreport-table').DataTable();
    $('#frm-classroomreport-create').on('submit',function(e)
    {
        e.preventDefault();
        console.log('pressed');
        var data = $(this).serialize();
        console.log(data);
        var formData = new FormData($(this)[0]);

        $.ajax(
        {
          url: "{{route('createClassroomReport')}}",
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