@extends('layout.masterclassroom')
@section('style')
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <b><span style="text-transform: uppercase">{{$classrooms->class_name}}'s Students</span></b>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">User profile</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            {{ Html::image('img/b.jpg', 'User Image',  array('class' => 'img-circle img-responsive profile-user-img')) }}


            <h3 class="profile-username text-center"></h3>

            <p class="text-muted text-center"></p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Followers</b> <a class="pull-right">1,322</a>
              </li>
              <li class="list-group-item">
                <b>Following</b> <a class="pull-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="pull-right">1,287</a>
              </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">About This Classroom</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <strong><i class="fa fa-book margin-r-5"></i> Subjects</strong>
            <p class="text-muted"></p>
            <hr>

            <strong><i class="fa fa-paper-plane margin-r-5"></i> Playtime</strong>
            <p class="text-muted"></p>
            <hr>

            <strong><i class="fa fa-birthday-cake margin-r-5"></i> Birthday</strong>
            <p class="text-muted"></p>
            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> Outdoor</strong>
            <p></p>
            <hr>

            <strong><i class="fa fa-file-text-o margin-r-5"></i> Batch</strong>
            <p></p>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->

      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Classroom's Member</a></li>
            <li><a href="#activity" data-toggle="tab">Classroom's Activity</a></li>
            <li><a href="#timeline" data-toggle="tab">Classroom's Gallery</a></li>
            <li><a href="#settings" data-toggle="tab">Teacher's Update</a></li>

          </ul>
          <div class="tab-content">
<!-- activity tab -->
            <div class="tab-pane" id="activity">
              <!-- Post -->
              <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                      <span class="username">
                        <a href="#">Jonathan Burke Jr.</a>
                        <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                      </span>
                  <span class="description">Shared publicly - 7:30 PM today</span>
                </div>
                <!-- /.user-block -->
                <p>
                  Lorem ipsum represents a long-held tradition for designers,
                  typographers and the like. Some people hate it and argue for
                  its demise, but others ignore the hate as they create awesome
                  tools to help create filler text for everyone from bacon lovers
                  to Charlie Sheen fans.
                </p>
                <ul class="list-inline">
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                  </li>
                  <li class="pull-right">
                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                      (5)</a></li>
                </ul>

                <input class="form-control input-sm" type="text" placeholder="Type a comment">
              </div>
              <!-- /.post -->

              <!-- Post -->
              <div class="post clearfix">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                      <span class="username">
                        <a href="#">Sarah Ross</a>
                        <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                      </span>
                  <span class="description">Sent you a message - 3 days ago</span>
                </div>
                <!-- /.user-block -->
                <p>
                  Lorem ipsum represents a long-held tradition for designers,
                  typographers and the like. Some people hate it and argue for
                  its demise, but others ignore the hate as they create awesome
                  tools to help create filler text for everyone from bacon lovers
                  to Charlie Sheen fans.
                </p>

                <form class="form-horizontal">
                  <div class="form-group margin-bottom-none">
                    <div class="col-sm-9">
                      <input class="form-control input-sm" placeholder="Response">
                    </div>
                    <div class="col-sm-3">
                      <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.post -->

              <!-- Post -->
              <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                      <span class="username">
                        <a href="#">Adam Jones</a>
                        <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                      </span>
                  <span class="description">Posted 5 photos - 5 days ago</span>
                </div>
                <!-- /.user-block -->
                <div class="row margin-bottom">
                  <div class="col-sm-6">
                    <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-6">
                        <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
                        <br>
                        <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-6">
                        <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                        <br>
                        <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <ul class="list-inline">
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                  </li>
                  <li class="pull-right">
                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                      (5)</a></li>
                </ul>

                <input class="form-control input-sm" type="text" placeholder="Type a comment">
              </div>
              <!-- /.post -->
            </div>
<!-- end activity tab -->
            <!-- /.tab-pane -->

<!-- timeline tab -->
            <div class="tab-pane" id="timeline">
              <!-- The timeline -->

              <div class="row justify-content-center">
    <div class="col-md-9">
        <div class="col-md-4"><p>
            <a href="#" data-toggle="lightbox">
                <img src="http://pinocchioplay.com/wp-content/uploads/2014/02/kindergarten-1.jpg" style="width: 100%">
            </a></p>
            </div>

            <div class="col-md-4"><p>
            <a href="#" data-toggle="lightbox">
                <img src="https://mywolfforthnews.com/wp-content/uploads/2017/09/Jakstas-Kindergarten-Class-12.jpg" style="width: 100%">
            </a></p>
            </div>

            <div class="col-md-4"><p>
            <a href="#" data-toggle="lightbox">
                <img src="https://onlinelearningtips.com/wp-content/uploads/sites/15/2015/12/thumbnail-5b0d4aec80ef6f6d5a391592787ff834.jpeg" style="width: 100%">
            </a></p>
        </div>

        <div class="col-md-4"><p>
            <a href="#" data-toggle="lightbox">
                <img src="https://1.cdn.edl.io/iVaAftfMjdtrYtJqwFkbh9QK04F0TUJBopbwr3CqaJ4hN2YL.jpg" style="width: 100%">
            </a></p>
            </div>

            <div class="col-md-4"><p>
            <a href="#" data-toggle="lightbox">
                <img src="https://bloximages.chicago2.vip.townnews.com/tahlequahdailypress.com/content/tncms/assets/v3/editorial/7/b1/7b1080cc-8bb3-560e-99b8-1e24043db1a7/5993ea18dbc6c.image.jpg?resize=1200%2C800" style="width: 100%">
            </a></p>
            </div>

            <div class="col-md-4"><p>
            <a href="#" data-toggle="lightbox">
                <img src="http://church.fairhavenbaptist.org/wp-content/uploads/2017/06/Fairhaven-Baptist-Academy-Kindergarten-Graduation-2017-29-of-60-1200x800.jpg" style="width: 100%">
            </a></p>
        </div>

        <div class="col-md-4"><p>
            <a href="#" data-toggle="lightbox">
                <img src="http://family.cityweekend.com.cn/sites/default/files/imce/users/531/20170810/kindergarten_preschool_children_laughing.jpg" style="width: 100%">
            </a></p>
            </div>

            <div class="col-md-4"><p>
            <a href="#" data-toggle="lightbox">
                <img src="https://mariamontessoriacademy.net/wp-content/uploads/2016/10/MMA_K2.jpg" style="width: 100%">
            </a></p>
            </div>

            <div class="col-md-4"><p>
            <a href="#" data-toggle="lightbox">
                <img src="https://1.cdn.edl.io/9KJFzzcgFc34rC8jadRKODG3eMYBZ1dj9Uy7IbswJTel4nXY.jpg" style="width: 100%">
            </a></p>
        </div>
    </div>
</div>

            </div>
<!-- end timeline tab -->
            <!-- /.tab-pane -->

<!-- setting tab-->
            <div class="tab-pane" id="settings">
              <div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading" id="accordion">
                    <span class="glyphicon glyphicon-comment"></span> Important Notice
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Parent 1</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=Mr." alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">Teacher Rudy</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Parent 2</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=Mr." alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                    <strong class="pull-right primary-font">Teacher Rudy</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

            </div>
<!-- end setting tab -->

            <!-- /.tab-pane -->
 <!-- enrolled -->
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" id="studentreport-table">
                
                          <thead>
  
                          <tr class="info">
                            <th><input type="checkbox"></th>
                            <th class="mailbox-subject"><center><a>Student Name</a></center></th>
                            <th class="mailbox-subject"><center><a>Father's Name</a></center></th>
                            <th class="mailbox-subject"><center><a>Emergency Contact</a></center></th>
                          </tr>
                          </thead>

                          <tbody>
                          @foreach($students as $student)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-subject"><center>{{$student->student_name}}<a href="#"></a></center></td>
                            <td class="mailbox-subject"><center>{{$student->parents->father_name}}<a href="#"></a></center></td>
                            <td class="mailbox-subject"><center>{{$student->parents->phone_number}}<a href="#"></a></center></td>
                            <td class="mailbox-subject"><center><a href="#"></a></center></td>
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
            
<!-- end enrolled tab -->
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->

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