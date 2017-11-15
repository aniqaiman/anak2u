@extends('layout.master')
@section('style')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection
@section('content')

<section class="content-header">
      <h1>
        Student
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
                        <label for="parents_id" class="col-sm-3 control-label">Parent's Name: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="parents_id" id="parents_id">
                        </div>
                      </div>  

                      <div class="form-group">
                        <label for="class_id" class="col-sm-3 control-label">Classroom Name: </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="class_id" id="class_id">
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
                            <th class="mailbox-subject"><center><a>Student Id</a></center></th>
                            <th class="mailbox-subject"><center><a>Student Name</a></center></th>
                            <th class="mailbox-subject"><center><a>Age</a></center></th>
                            <th class="mailbox-subject"><center><a>Nickname</a></center></th>
                            <th class="mailbox-subject"><center><a>Hobby</a></center></th>
                            <th class="mailbox-subject"><center><a>Birthday</a></center></th>
                            <th class="mailbox-subject"><center><a>Ambition</a></center></th>
                            <th class="mailbox-subject"><center><a>Parent's ID</a></center></th>
                            <th class="mailbox-subject"><center><a>Class ID</a></center></th>
                            <th class="mailbox-subject"><center><a>MyKid Number</a></center></th>
                            <th class="mailbox-subject"><center><a>Allergies</a></center></th>
                            <th class="mailbox-subject"><center><a>Height</a></center></th>
                            <th class="mailbox-subject"><center><a>Weight</a></center></th>
                            <th class="mailbox-subject"><center><a>BMI</a></center></th>
                            <th class="mailbox-subject"><center><a>Blood Type</a></center></th>
                          </tr>
                          </thead>

                          <tbody>
                          @foreach($students as $student)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-subject"><center><a href="{{route('studentdashboard', ['student_id' => $student->student_id])}}">{{$student->student_id}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->student_name}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->age}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->nickname}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->hobby}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->birthday}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->ambition}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->parents_id}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->class_id}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->mykid_number}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->allergies}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->height}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->weight}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->bmi}}</a></center></td>
                            <td class="mailbox-subject"><center><a href="#">{{$student->blood_type}}</a></center></td>
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