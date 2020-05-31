<?php
    session_start();

    if(!isset($_SESSION["admin_name"]) && !isset($_SESSION["admin_password"])){
       header("Location: https://fitfy.000webhostapp.com/admin/login.html");      
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fitfy Fitness</title> 
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->

  <!-- shtime per data table server -->
<!-- Datatable CSS -->

<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- mbaron -->
<link rel="stylesheet" type="text/css" href="../../DataTable/datatables.min.css"/>
 
<script type="text/javascript" src="../../DataTable/datatables.min.js"></script>
<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
 
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>+ -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="registerSchedule.js"></script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
     <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="margin-bottom: -56px;">
      <div class="navbar-brand-wrapper d-flex justify-content-center" style="height: 123px;background: black;">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
         
         <a href="https://fitfy.000webhostapp.com/index.php" style="margin-left: 45px;">
                <img src="../../../img/FitLogo.png" alt="FITFY" width="100px" height="100spx"></a>
          <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button> -->
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">

          <li class="nav-item nav-profile dropdown">
          
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>


      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" >

      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav" style="width: 241px;">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php" >
              <i class="mdi mdi-home menu-icon" style="font-size: 1.5rem;"></i>
              <span class="menu-title" style="font-size: 1.5rem;">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="user1.php">
              <i class="mdi mdi-view-headline menu-icon" style="font-size: 1.5rem;"></i>
              <span class="menu-title" style="font-size: 1.5rem;">User informations</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fitfyCoaches.php">
              <i class="mdi mdi-view-headline menu-icon" style="font-size: 1.5rem;"></i>
              <span class="menu-title" style="font-size: 1.5rem;">Coach informations</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="schedule1.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title" style="font-size: 1.5rem;">Schedule</span>
            </a>
          </li>
        </ul>
      </nav>
        <div class="container" style="margin-top: -55px;"> 
        <br> 
                <h3 align="center">FITFY Users</h3>  
                <br />  
                <div class="table-responsive" > 
                
                     <table id="schedule_data" class="display" > 
                        <thead>
                            <tr>
                              <th>Id</th>
                              <th>Day</th>
                              <th>Start time</th>
                              <th>End time</th>
                              <th>Coach name</th>
                              <th>Coach surname</th>
                              <th>Class</th>        
                              <th>Edit</th>
                              <th>Delete</th>         
                            </tr>
                        </thead>
                     </table>  
                </div> 

                <div id="scheduleModal" class="modal fade">
  <div class="modal-dialog">
    <form method="post" id="employeeForm">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">×</button> -->
          <h4 class="modal-title" style="margin-right: 55px"><i class="fa fa-plus"></i> Edit User</h4>
        </div>
          <p id="errors" style="font-size: 13px;
    color: red;"></p>
        <div class="modal-body">
          <div class="form-group">
            <label for="day" class="control-label">Day</label>
            <input type="text" class="form-control" id="day" name="day" placeholder="Day" required>      
          </div>
          <div class="form-group">
            <label for="start_time" class="control-label">Start time</label>              
            <input type="text" class="form-control" id="start_time" name="start_time" placeholder="Start time">              
          </div>      
          <div class="form-group">
            <label for="end_time" class="control-label">End time</label>              
            <input type="text" class="form-control"  id="end_time" name="end_time" placeholder="End time" required>             
          </div>   
          <div class="form-group">
            <label for="c_name" class="control-label">Coach name</label>              
             <input type="text" class="form-control"  id="c_name" name="c_name" placeholder="Coach name" required>             
          </div>
          <div class="form-group">
            <label for="c_surname" class="control-label">Coach surname</label>             
            <input type="text" class="form-control" id="c_surname" name="c_surname" placeholder="Coach surname">      
          </div> 
          <div class="form-group">
            <label for="name" class="control-label">Class</label>             
            <input type="text" class="form-control" id="name" name="name" placeholder="Class">      
          </div>            
        </div>
        <div class="modal-footer">
          <input type="hidden" name="empId" id="empId" />
          <input type="hidden" name="action" id="action" value="" />
          <button type="button" name="save" id="save" class="btn btn-info" onclick="saveInfoSchedule()">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div> 

<div class="modal fade" id="deleteModalSchedule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <p style="font-size: 15px;">Are you sure you want to delete the user?</p>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id" id="id" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="deleteAction()">Delete </button>
      </div>
    </div>
  </div>
</div>
<br>
<!-- form to add a schedule -->
<h3 class="header" style="margin-left: 150px;"> New schedule? Add it here:</h3>
      <div class="main-panel">
         <div class="content-wrapper" style="background: transparent;">
            <div class="row">
               <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title">Enter schedule informations</h4>
                        <p id="responseSchedule" style="color: red;font-style: oblique;margin-top: 20px; font-size: 15px"> </p>
                        <form  action="registerSchedule.php" method="post" enctype="multipart/form-data" id="myform">
                          
                           <div class="input-group">
                              <label for="day">Day</label>
                              <input type="date" class="form-control" id="date1" name="date1" placeholder="Date" required>
                           </div>
                           <div class="input-group">
                              <label for="start_time">Start time</label>
                              <input type="time" class="form-control" id="start_time1" name="start_time1" placeholder="Start time" required>
                           </div>
                           <div class="input-group">
                              <label for="end_time">End time</label>
                              <input type="time" class="form-control" id="end_time1" name="end_time1" placeholder="End time"required>
                           </div>
                          
                           <div class="input-group">
                              <label for="coach_name">Coach name</label>
                              
                              <input type="text" class="form-control" id="coach_name1" name="coach_name1" placeholder="Coach name"required>
                                <!-- <p id="email_errors" style="color: red;font-style: oblique;"></p> -->
                           </div>
                           <div class="input-group">
                              <label for="coach_surname">Coach Surname</label>
                              
                              <input type="text" class="form-control" id="coach_surname1" name="coach_surname1" placeholder="Coach Surname"required>
                                <!-- <p id="email_errors" style="color: red;font-style: oblique;"></p> -->
                           </div>
                           <div class="input-group">
                              <label for="class">Class</label>
                              <input type="text" class="form-control" id="class_name1" name="class_name1" placeholder="Class"required>
                           </div>
                           <br>
                           <a type="submit" class="btn btn-primary mr-2" style="height: 45px; width: 90px;font-style: initial; color: white; padding: 12px" name="reg_user" onclick="registerSchedule()">Submit</a>
                           <!-- <a class="btn btn-primary" onclick="egisterActions()" style="background-color:#f34e3a;border-color:#f34e3a;">Continue to payment</a> -->
                           <button  class="btn btn-primary mr-2" style="width: 95px;"> <input type="reset" value="Cancel" style="height: 30px;background-color: #337ab7; border-color: #337ab7; font-family: initial; border: none;">
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- partial -->
            </div>
            <!-- main-panel ends -->
         </div>
      </div>
<!-- end adding schedule -->
           </div> 
      <!-- partial -->
      <!-- main-panel ends -->
    </div>

  </div>

 
 <script>  
$( document ).ready(function getJSON() {

  var employeeData = $('#schedule_data').DataTable({
                        "lengthChange": false,
                        "processing":true,
                        "serverSide":true,
                        "order":[],
                        "ajax":{
                          url:"/admin/pages/forms/schedule.php",
                          type:"POST",
                          // data:{action:'listEmployee'},
                          dataType:"json"
                        },
                        "columnDefs":[
                          {
                            "targets":[0, 6, 7],
                            "orderable":true,
                          },
                        ],
                        "pageLength": 10
  });
});

function update(id){
  // alert(id);
  var empId = id
  // var action = 'getEmployee';
  $.ajax({
    url:'/admin/pages/forms/getSchedule.php',
    method:"POST",
    data:{
      empId:empId
    },
    dataType:"json",
    success:function(data){
      // debugger;
      // alert(data[0][1]);
      $('#scheduleModal').modal('show');
      $('#empId').val(id);
      $('#day').val(data[0][1]);
      $('#start_time').val(data[0][2]);
      $('#end_time').val(data[0][3]);       
      $('#c_name').val(data[0][4]);
      $('#c_surname').val(data[0][5]);
      $('#name').val(data[0][6]);   
      $('.modal-title').html("<i class='fa fa-plus'></i> Edit schedule "+data[0][6]);
      $('#action').val('updateSchedule');
      $('#save').val('Save');
    }
  })
}
function saveInfoSchedule(){
  var id=$( "input[name=empId]" ).val();
  $('#errors').html();
  // alert(id);
  $.ajax({
    url:'/admin/pages/forms/updateSchedule.php',
    method:"POST",
    data:{
      id:id,
      day:$('#day').val(),
      start_time:$('#start_time').val(),
      end_time:$('#end_time').val(),       
      c_name:$('#c_name').val(),
      c_surname:$('#c_surname').val(),
      name:$('#name').val() 
    },
    // dataType:"json",
    success:function(data){
      // alert(data);
        if(data=='sucess'){
          location.reload();
        }
        if(data=='This coach dont exist!'){

          $('#errors').html('This coach dont exist!');
        }
        if(data=='This coach dont give this class!'){

          $('#errors').html('This coach dont give this class!');
        }
    }
  })
}

function deleteUser(id){
  $('#deleteModalSchedule').modal('show');
  $('#id').val(id);
}

function deleteAction(){
  var id=$('#id').val();
  $.ajax({
    url:'/admin/pages/forms/deleteSchedule.php',
    method:"POST",
    data:{
      id:id 
    },
    // dataType:"json",
    success:function(data){
      if(data=='sucess'){
          location.reload();
        }
    }
  })
}
 </script>
  <!-- <script src="../../vendors/base/vendor.bundle.base.js"></script> -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/file-upload.js"></script>
</body>

</html>
