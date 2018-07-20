@extends('layout.masterclassroom')
@section('style')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection
@section('content')

<section class="content-header">
      <h1><b>
        Event Management
        </b>
        <small>Control panel</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Event</li>
      </ol>
    </section>

      <div class="modal modal-info fade" id="add-event" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Event</h4>
          </div>
          
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-event-create" enctype ="multipart/form-data">
                  {!! csrf_field() !!}
                    <div class="row">

                      <div class="form-group">
                        <label for="event_name" class="col-sm-3 control-label">Event Name: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="event_name" id="event_name">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="organiser" class="col-sm-3 control-label">Organiser: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="organiser" id="organiser">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="start_date" class="col-sm-3 control-label">Start Date: </label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" name="start_date" id="start_date">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="end_date" class="col-sm-3 control-label">End Date: </label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" name="end_date" id="end_date">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="teacher_id" class="col-sm-3 control-label">Teacher's Name: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="teacher_id" id="teacher_id">
                        </div>
                      </div>                       

                      <div>
              <input type="hidden" name="class_id" value="{{$classrooms->class_id}}">
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
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-event">Add Event</button></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" id="event-table">
                
                          <thead>
  
                          <tr class="info">
                            <th><input type="checkbox"></th>
                            <th class="mailbox-subject"><center>Event Id</center></th>
                            <th class="mailbox-subject"><center>Event's Name</center></th>
                            <th class="mailbox-subject"><center>Organiser</center></th>
                            <th class="mailbox-subject"><center>Start Date</center></th>
                            <th class="mailbox-subject"><center>End Date</center></th>
                            <th class="mailbox-subject"><center>Teacher's Name</center></th>                           
                          </tr>
                          </thead>

                          <tbody>
                          @foreach($events as $event)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-subject"><center>{{$event->event_id}}</center></td>
                            <td class="mailbox-subject"><center>{{$event->event_name}}</center></td>
                            <td class="mailbox-subject"><center>{{$event->organiser}}</center></td>
                            <td class="mailbox-subject"><center>{{$event->start_date}}</center></td>
                            <td class="mailbox-subject"><center>{{$event->end_date}}</center></td>
                            <td class="mailbox-subject"><center>{{$event->teacher_id}}</center></td>
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
    $('#event-table').DataTable();
    $('#frm-event-create').on('submit',function(e)
    {
        e.preventDefault();
        console.log('pressed');
        var data = $(this).serialize();
        console.log(data);
        var formData = new FormData($(this)[0]);

        $.ajax(
        {
          url: "{{route('createEvent')}}",
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