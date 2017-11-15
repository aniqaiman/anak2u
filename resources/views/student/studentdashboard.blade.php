@extends('layout.master')


@section('style')


@endsection

@section('content')
 
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Student Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Student</a></li>
        <li class="active">Student Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
               {{ Html::image('img/baby.jpg', 'User Image',  array('class' => 'profile-user-img img-responsive img-circle')) }}


              <h3 class="profile-username text-center">{{$student->student_name}}</h3>

              <p class="text-muted text-center">{{$student->parents->father_name}}/{{$student->parents->mother_name}}</p>

              <a href="#" class="btn btn-primary btn-block"><b>View Details</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <strong><i class="fa fa-book margin-r-5"></i>  Full Name</strong>
              <p class="text-muted">{{$student->student_name}}</p>
              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Ambition</strong>
              <p class="text-muted">{{$student->ambition}}</p>
              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Hobby</strong>
              <p class="text-muted">{{$student->hobby}}</p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Birthday</strong>
              <p class="text-muted">{{$student->birthday}}</p>
              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Nickname</strong>
              <p class="text-muted">{{$student->nickname}}</p>
              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Allergies</strong>
              <p class="text-muted">{{$student->allergies}}</p>
              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> BMI</strong>
              <p class="text-muted">{{$student->bmi}}</p>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#fees" data-toggle="tab">Fees</a></li>
              <li><a href="#reports" data-toggle="tab">Reports</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="fees">
                <!-- Post -->
                <div class="post">

                <table class="table table-hover table-striped" id="student-table">
                          <thead>
  
                              <tr class="info">
                                <th><input type="checkbox"></th>
                                <th class="mailbox-subject"><center><a>Invoice Id</a></center></th>
                                <th class="mailbox-subject"><center><a>Due Date</a></center></th>
                                <th class="mailbox-subject"><center><a>Payment Date</a></center></th>
                                <th class="mailbox-subject"><center><a>Status</a></center></th>
                              </tr>
                              </thead>

                              <tbody>
                              
                              <tr class="info">
                                <td><input type="checkbox"></td>
                                <td class="mailbox-subject"><center>EZ12345</center></td>
                                <td class="mailbox-subject"><center>11/12/2017</center></td>
                                <td class="mailbox-subject"><center>09/12/2017</center></td>
                                <td class="mailbox-subject"><center>paid</center></td>
                            </tr>
                            <tr class="info">
                                <td><input type="checkbox"></td>
                                <td class="mailbox-subject"><center>EZ8796</center></td>
                                <td class="mailbox-subject"><center>30/12/2017</center></td>
                                <td class="mailbox-subject"><center>23/12/2017</center></td>
                                <td class="mailbox-subject"><center>paid</center></td>
                            </tr>
                          </tbody>

                        </table>
                  
             
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="reports">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline item -->
                  @foreach($studentreports as $report)    
                  <li>
                    <i class="fa fa-envelope bg-red"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i>{{$report->created_at}}</span>

                      <h3 class="timeline-header"><a href="#">{{$report->student->student_name}}</a> (Cikgu)</h3>

                      <div class="timeline-body">
                        {{$report->message}}
                      </div>
                      <div class="timeline-footer">
                      
                      </div>
                    </div>
                  </li>
                  @endforeach
                  <!-- END timeline item -->
          
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  @endsection

  @section('script')
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script>
{!!Html::script('js/dashboard.js')!!}
  @endsection
