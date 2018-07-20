@extends('layout.masterinstitute')


@section('style')


@endsection

@section('content')
 <!-- Content Header (Page header) -->

   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Dashboard
       <small></small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Dashboard</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>STUDENTS</h3>

              <h4>124 Students</h4>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>CLASS</h3>

              <h4>7 Classes</h4>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>REVENUES</h3>

              <h4>RM 13 000</h4>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>EXPENSES</h3>

              <p>RM 8 500</p>
            </div>
            <div class="icon">
              <i class="fa fa-cart-plus"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
     <!-- /.row -->
<div class="row">
  <div class="col-md-6">
             <!-- USERS LIST -->
             <div class="box box-danger">
               <div class="box-header with-border">
                 <strong class="box-title" >Absent Student This Week</strong>

                 <div class="box-tools pull-right">
                   
                   <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                   </button>
                 </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body no-padding">
                 <ol class="clearfix">
                   <li>
                     <h5 href="#">Arrayan Putra</h5>
                     <span class="users-list-date">Today</span>
                   </li>
                   <li>
                     <h5 href="#">Norman Hakim</h5>
                     <span class="users-list-date">15 Nov 2017</span>
                   </li>
                   <li>
                     <h5 href="#">Mariam Jane</h5>
                     <span class="users-list-date">12 Nov</span>
                   </li>
                 </ol>
                 <!-- /.users-list -->
               </div>
               <!-- /.box-body -->
               <div class="box-footer text-center">
                 <a href="javascript:void(0)" class="uppercase">View All Users</a>
               </div>
               <!-- /.box-footer -->
             </div>
             <!--/.box -->
           </div>

        <div class="col-md-6">
              <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <strong class="box-title">Teachers On Leave</strong>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                <li>
                  <!-- drag handle -->
                  <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text">Cikgu Faizal</span>
                  <!-- Emphasis label -->
                  <small class="label label-primary"><i></i> Cuti Kawin</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Cikgu Hidayah</span>
                  <small class="label label-success"><i></i> Bersalin</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              
            </div>
          </div>
           </div>
</div>
<div class="row">
  
  <div class="col-md-12">
    
     <div class="box box-info">
           <div class="box-header with-border">
             <strong class="box-title">Upcoming Events</strong> 

             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="table-responsive">
                <table class="table no-margin">
                 <thead>
                 <tr>
                   <th>Event Name</th>
                   <th>Organiser</th>
                   <th>Start Date</th>
                   <th>End Date</th>
                 </tr>
                 </thead>
                 <tbody>
                 
                 </tbody>
               </table> 
             </div>
             <!-- /.table-responsive -->
           </div>
           <!-- /.box-body -->
           <div class="box-footer clearfix">
             <a  class="btn btn-sm btn-info btn-flat pull-left">Add New Event</a> 
           </div>
           <!-- /.box-footer -->
         </div>
    
  </div>
</div>
     <div class="row">
       <div class="col-md-12">
         <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Monthly Recap Report</h3>

             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
               </button>
               <div class="btn-group">
                 <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                   <i class="fa fa-wrench"></i></button>
                 <ul class="dropdown-menu" role="menu">
                   <li><a href="#">Action</a></li>
                   <li><a href="#">Another action</a></li>
                   <li><a href="#">Something else here</a></li>
                   <li class="divider"></li>
                   <li><a href="#">Separated link</a></li>
                 </ul>
               </div>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col-md-8">
                 <p class="text-center">
                   <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                 </p>

                 <div class="chart">
                   <!-- Sales Chart Canvas -->
                   <canvas id="salesChart" style="height: 180px;"></canvas>
                 </div>
                 <!-- /.chart-responsive -->
               </div>
               <!-- /.col -->
               <div class="col-md-4">
                 <p class="text-center">
                   <strong>Goal Completion</strong>
                 </p>

                 <div class="progress-group">
                   <span class="progress-text">Add Products to Cart</span>
                   <span class="progress-number"><b>160</b>/200</span>

                   <div class="progress sm">
                     <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                   </div>
                 </div>
                 <!-- /.progress-group -->
                 <div class="progress-group">
                   <span class="progress-text">Complete Purchase</span>
                   <span class="progress-number"><b>310</b>/400</span>

                   <div class="progress sm">
                     <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                   </div>
                 </div>
                 <!-- /.progress-group -->
                 <div class="progress-group">
                   <span class="progress-text">Visit Premium Page</span>
                   <span class="progress-number"><b>480</b>/800</span>

                   <div class="progress sm">
                     <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                   </div>
                 </div>
                 <!-- /.progress-group -->
                 <div class="progress-group">
                   <span class="progress-text">Send Inquiries</span>
                   <span class="progress-number"><b>250</b>/500</span>

                   <div class="progress sm">
                     <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                   </div>
                 </div>
                 <!-- /.progress-group -->
               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- ./box-body -->
           <div class="box-footer">
             <div class="row">
               <div class="col-sm-3 col-xs-6">
                 <div class="description-block border-right">
                   <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                   <h5 class="description-header">$35,210.43</h5>
                   <span class="description-text">TOTAL REVENUE</span>
                 </div>
                 <!-- /.description-block -->
               </div>
               <!-- /.col -->
               <div class="col-sm-3 col-xs-6">
                 <div class="description-block border-right">
                   <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                   <h5 class="description-header">$10,390.90</h5>
                   <span class="description-text">TOTAL COST</span>
                 </div>
                 <!-- /.description-block -->
               </div>
               <!-- /.col -->
               <div class="col-sm-3 col-xs-6">
                 <div class="description-block border-right">
                   <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                   <h5 class="description-header">$24,813.53</h5>
                   <span class="description-text">TOTAL PROFIT</span>
                 </div>
                 <!-- /.description-block -->
               </div>
               <!-- /.col -->
               <div class="col-sm-3 col-xs-6">
                 <div class="description-block">
                   <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                   <h5 class="description-header">1200</h5>
                   <span class="description-text">GOAL COMPLETIONS</span>
                 </div>
                 <!-- /.description-block -->
               </div>
             </div>
             <!-- /.row -->
           </div>
           <!-- /.box-footer -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->

     <!-- Main row -->
     <div class="row">
       <!-- Left col -->
       <div class="col-md-8">
         <!-- MAP & BOX PANE -->
         
         <!-- /.box -->
         <div class="row">
           <div class="col-md-6">
             <!-- DIRECT CHAT -->
             
             <!--/.direct-chat -->
           </div>
           <!-- /.col -->

           
           <!-- /.col -->
         </div>
         <!-- /.row -->

         <!-- TABLE: LATEST ORDERS -->
        
         <!-- /.box -->
       </div>
       <!-- /.col -->

       
     <!-- /.row -->
   </section>
   <!-- /.content -->

    <!-- Content Header (Page header) -->
    
    <!-- /.content -->
  @endsection

  @section('script')
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script>
{!!Html::script('js/dashboard.js')!!}
  @endsection
