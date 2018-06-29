@extends('layout.master')
@section('style')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection
@section('content')

<section class="content-header">
      <h1>
        Parents
        <small>Control panel</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Parent</li>
      </ol>
    </section>

      <div class="modal modal-info fade" id="add-parent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Parent</h4>
          </div>
          
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-parent-create" enctype ="multipart/form-data">
                  {!! csrf_field() !!}
                    <div class="row">

                      <div class="form-group">
                        <label for="father_name" class="col-sm-3 control-label">Father's Name: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="father_name" id="father_name">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="mother_name" class="col-sm-3 control-label">Mother's Name: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="mother_name" id="mother_name">
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
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-parent">Add Parents</button></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" id="parent-table">
                
                          <thead>
  
                          <tr class="info">
                            <th><input type="checkbox"></th>
                            <th class="mailbox-subject"><center>Parent Id</center></th>
                            <th class="mailbox-subject"><center>Father's Name</center></th>
                            <th class="mailbox-subject"><center>Mother's Name</center></th>
                            <th class="mailbox-subject"><center>Address</center></th>
                            <th class="mailbox-subject"><center>Phone Number</center></th>
                            <th class="mailbox-subject"><center>Email</center></th>
                          </tr>
                          </thead>

                          <tbody>
                          @foreach($parents as $parent)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-subject"><center>{{$parent->parents_id}}</center></td>
                            <td class="mailbox-subject"><center>{{$parent->father_name}}</center></td>
                            <td class="mailbox-subject"><center>{{$parent->mother_name}}</center></td>
                            <td class="mailbox-subject"><center>{{$parent->address}}</center></td>
                            <td class="mailbox-subject"><center>{{$parent->phone_number}}</center></td>
                            <td class="mailbox-subject"><center>{{$parent->email}}</center></td>
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
    $('#parent-table').DataTable();
    $('#frm-parent-create').on('submit',function(e)
    {
        e.preventDefault();
        console.log('pressed');
        var data = $(this).serialize();
        console.log(data);
        var formData = new FormData($(this)[0]);

        $.ajax(
        {
          url: "{{route('createParent')}}",
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