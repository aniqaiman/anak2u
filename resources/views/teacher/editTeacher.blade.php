@extends('layout.master')
@section('style')
@endsection
@section('content')

<section class="content-header">
  <h1>
    TEACHER MANAGEMENT
    <small>Control Panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Teacher</li>
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
              <form action="#" method="POST" id="frm-teacher-edit" enctype ="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-horizontal">

                  <div class="form-group">
                    <label for="teacher_name" class="col-sm-3 control-label">Teacher Name: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="teacher_name" id="teacher_name" value="{{$teacher->teacher_name}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="address" id="address" value="{{$teacher->address}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="phone_number" class="col-sm-3 control-label">Phone Number: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{$teacher->phone_number}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email: </label>                      
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="email" id="email" value="{{$teacher->email}}">
                    </div>
                  </div>

                </div>
                <input type="hidden" name="teacher_id" value="{{$teacher->teacher_id}}">
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
  $('#frm-teacher-edit').on('submit',function(e){
    e.preventDefault();
    console.log('pressed');
    var data = $(this).serialize();
    console.log(data);
    var formData = new FormData($(this)[0]);

    $.ajax({
      url:"{{route('updateTeacher')}}", 
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