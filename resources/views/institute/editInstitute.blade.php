@extends('layout.master')
@section('style')
@endsection
@section('content')

<section class="content-header">
  <h1>
    INSTITUTE MANAGEMENT
    <small>Control Panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Institute</li>
  </ol>
</section>

<section class="content">
  <div class="col-md-12">
    <!-- Custom Tabs (Pulled to the right) -->
    <div class="nav-tabs-custom">

      <ul class="nav nav-tabs ">
        <li class="active"><a href="#tab_1" data-toggle="tab">Active</a></li> 
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          <div class="box">

            <!-- /.box-header -->
            <div class="modal-body">
              <!-- Custom Tabs (Pulled to the right) -->
              <form action="#" method="POST" id="frm-institute-edit" enctype ="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-horizontal">

                  <div class="form-group">
              <label for="institute_image" class="col-sm-3 control-label">Institute Image: </label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="institute_image" id="institute_image">
              </div>
            </div>

            <div class="form-group">
              <label for="institute_name" class="col-sm-3 control-label">Institute Name: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="institute_name" id="institute_name" value="{{$institute->institute_name}}">
              </div>
            </div>

            <div class="form-group">
              <label for="institute_address" class="col-sm-3 control-label">Institute Address: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="institute_address" id="institute_address" value="{{$institute->institute_address}}">
              </div>
            </div>

            <div class="form-group">
              <label for="location" class="col-sm-3 control-label">Location: </label>                      
              <div class="col-sm-9">
                <input type="date" class="form-control" name="location" id="location">
              </div>
            </div>

                </div>
                <input type="hidden" name="institute_id" value="{{$institute->institute_id}}">
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Save Change</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.box-body -->
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

<script>
  $('#frm-institute-edit').on('submit',function(e){
    e.preventDefault();
    console.log('pressed');
    var data = $(this).serialize();
    console.log(data);
    var formData = new FormData($(this)[0]);

    $.ajax({
      url:"{{route('updateInstitute')}}", 
      type: "POST",
      data: formData,
      async: false,
      success: function(response){
        console.log(response);
        $("[data-dismiss = modal]").trigger({type: "click"});

      },
      cache: false,
      contentType: false,
      processData: false
    });
  });

</script>
@endsection