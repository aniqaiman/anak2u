@extends('layout.master')
@section('style')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection
@section('content')

<section class="content-header">
  <h1><b>
    INSTITUTE MANAGEMENT</b>
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Institute</li>
  </ol>
</section>

<!-- Modal -->
<div class="modal modal-info fade" id="add-institute" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Add Institute</h4>
      </div>
      <div class="modal-body">
        <!-- Custom Tabs (Pulled to the right) -->

        <form action="#" method="POST" id="frm-institute-create" enctype ="multipart/form-data">
          {!! csrf_field() !!}
          <div class="row">

            <div class="form-group">
              <label for="institute_image" class="col-sm-3 control-label">Institute Image: </label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="institute_image" id="institute_image">
              </div>
            </div>

            <div class="form-group">
              <label for="institute_name" class="col-sm-3 control-label">Institute Name: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="institute_name" id="institute_name">
              </div>
            </div>

            <div class="form-group">
              <label for="institute_address" class="col-sm-3 control-label">Institute Address: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="institute_address" id="institute_address">
              </div>
            </div>

            <div class="form-group">
              <label for="location" class="col-sm-3 control-label">Location: </label>                      
              <div class="col-sm-9">
                <input type="text" class="form-control" name="location" id="location">
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
</div>

<section class="content">
  <div class="col-md-12">
    <!-- Custom Tabs (Pulled to the right) -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs ">
        <li class="active"><a href="#tab_1" data-toggle="tab">INSTITUTE LIST</a></li>
        <li class="pull-right"> 
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-institute">Add Institute</button></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <div class="box">

              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-controls">

                </div>
                <div class="table-responsive mailbox-messages">
                  <table class="table table-bordered" id="institute-table">

                    <thead>
                      <tr class="info">
                        <th class="mailbox-star"><center>INSTITUTE ID</center></th>
                        <th class="col-sm-3"><center>INSTITUTE IMAGE</center></th>
                        <th class="mailbox-name"><center>INSTITUTE NAME</center></th>
                        <th class="mailbox-name"><center>INSTITUTE ADDRESS</center></th>
                        <th class="mailbox-name"><center>LOCATION</center></th>
                        <th class="mailbox-name"><center>OPERATION</center></th>
                      </tr>
                    </thead>

                    <tbody>        
                     @foreach($institutes as $institute)
                     <tr class="info">
                      <td class="mailbox-star"><center>{{$institute->institute_id}}</center></td>
                      <td class="col-sm-3"><center><img class="tableimage" src="{{ env('APP_PHOTO_URL') }}{{$institute->institute_image}}"></a></center></td>
                      <td class="mailbox-name"><a href="{{route('institutedashboard',['institute_id'=>$institute->institute_id])}}"><center>{{$institute->institute_name}}</a></center></td>
                      <td class="mailbox-name"><center>{{$institute->institute_address}}</center></td>
                      <td class="mailbox-name"><center>{{$institute->location}}</center></td>
                      <td class="mailbox-name"><center><div class="btn-group"><a class="button btn btn-success btn-sm" href="{{route('editInstitute', ['institute_id'=> $institute->institute_id])}}"></i> Edit</a>
                        {{ Form::open(array('url' => 'institute/' . $institute->institute_id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'button btn btn-warning btn-sm')) }}
                        {{ Form::close() }}
                      </center>
                    </td>
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
  $(document).ready(function(){
    $('#institute-table').DataTable();
    $('#frm-institute-create').on('submit',function(e)
    {
      e.preventDefault();
      console.log('pressed');
      var data = $(this).serialize();
      console.log(data);
      var formData = new FormData($(this)[0]);

      $.ajax(
      {
        url:"{{route('createInstitute')}}", 
        type: "POST",
        data: formData,
        async: false,
        success: function(response)
        {
          console.log(response);
          $("[data-dismiss = modal]").trigger({type: "click"});
          swal('SUCCESS', 'Institute Added', 'success').then(function() {
           window.location.reload();
         });
        },
        cache: false,
        contentType: false,
        processData: false,
      });
    });
  });

</script>
@endsection