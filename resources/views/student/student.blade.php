@extends('layout.masterclassroom')
@section('style')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection
@section('content')

<section class="content-header">
      <h1><b>
        Student Management</b>
        <small>Control panel</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Student</li>
      </ol>
    </section>

      <div class="modal modal-info fade" id="add-student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Student</h4>
          </div>
          
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-student-create" enctype ="multipart/form-data">
                  {!! csrf_field() !!}
                    <div class="row">

                      <div class="form-group">
                        <label for="student_name" class="col-sm-3 control-label">Student Name: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="student_name" id="student_name">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="age" class="col-sm-3 control-label">Age: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="age" id="age">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="nickname" class="col-sm-3 control-label">Nickname: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nickname" id="nickname">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="hobby" class="col-sm-3 control-label">Hobby: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="hobby" id="hobby">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="birthday" class="col-sm-3 control-label">Birthday: </label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" name="birthday" id="birthday">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="ambition" class="col-sm-3 control-label">Ambition: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="ambition" id="ambition">
                        </div>
                      </div>


               <div class="form-group">
             <label for="parents_id" class="col-sm-3 control-label">Father Name: </label>
             <div class="col-sm-9">
               <select class="form-control" name="parents_id" id="parents_id" data-placeholder="Select">
                 @foreach($parents as $parent)
                 <option value="{{$parent->parents_id}}">{{$parent->father_name}}</option>
                 @endforeach
               </select>
             </div>
           </div>



            

                      <div class="form-group">
                        <label for="mykid_number" class="col-sm-3 control-label">MyKid Number: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="mykid_number" id="mykid_number">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="allergies" class="col-sm-3 control-label">Allergies: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="allergies" id="allergies">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="height" class="col-sm-3 control-label">Height: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="height" id="height">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Weight: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="weight" id="weight">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="bmi" class="col-sm-3 control-label">BMI: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="bmi" id="bmi">
                        </div>
                      </div>                    

                      <div class="form-group">
                        <label for="blood_type" class="col-sm-3 control-label">Blood Type: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="blood_type" id="blood_type">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="image_url" class="col-sm-3 control-label">Student Image: </label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" name="image_url" id="image_url">
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
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-student">Add Student</button></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" id="student-table">
                          <thead>
  
                          <tr class="info">
                            <th><input type="checkbox"></th>
                            <th class="mailbox-subject"><center>Student Name</center></th>
                            <th class="mailbox-subject"><center>Age</center></th>
                            <th class="mailbox-subject"><center>Hobby</center></th>
                            <th class="mailbox-subject"><center>Birthday</center></th>
                            <th class="mailbox-subject"><center>Ambition</center></th>
                            <th class="mailbox-subject"><center>Parents</center></th>
                            <th class="mailbox-subject"><center>MyKid Number</center></th>
                          </tr>
                          </thead>

                          <tbody>
                          @foreach($students as $student)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-subject"><center><a href="{{route('studentdashboard', ['class_id' => $classrooms->class_id,'student_id' => $student->student_id])}}">{{$student->student_name}}</a></center></td>
                            <td class="mailbox-subject"><center>{{$student->age}}</center></td>
                            <td class="mailbox-subject"><center>{{$student->hobby}}</center></td>
                            <td class="mailbox-subject"><center>{{$student->birthday}}</center></td>
                            <td class="mailbox-subject"><center>{{$student->ambition}}</center></td>
                            <td class="mailbox-subject"><center>{{$student->parents->father_name}}</center></td>
                            <td class="mailbox-subject"><center>{{$student->mykid_number}}</center></td>
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
    $('#student-table').DataTable();
    $('#frm-student-create').on('submit',function(e)
    {
        e.preventDefault();
        console.log('pressed');
        var data = $(this).serialize();
        console.log(data);
        var formData = new FormData($(this)[0]);

        $.ajax(
        {
          url: "{{route('createStudent')}}",
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