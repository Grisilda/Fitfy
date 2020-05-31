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
                
                     <table id="employee_data" class="display" > 
                        <thead>
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Surname</th>
                              <th>Age</th>
                              <th>Email</th>
                              <th>Gender</th>
                              <th>Username</th>        
                              <th>Edit</th>
                              <th>Delete</th>         
                            </tr>
                        </thead>
                     </table>  
                </div> 

                <div id="employeeModal" class="modal fade">
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
            <label for="name" class="control-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>      
          </div>
          <div class="form-group">
            <label for="surname" class="control-label">Surname</label>              
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">              
          </div>      
          <div class="form-group">
            <label for="age" class="control-label">Age</label>              
            <input type="number" class="form-control"  id="age" name="age" placeholder="Age" required>             
          </div>   
          <div class="form-group">
            <label for="email" class="control-label">Email</label>              
             <input type="email" class="form-control"  id="email" name="email" placeholder="Email" required>             
          </div>
          <div class="form-group">
            <label for="gender" class="control-label">Gender</label>             
            <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">      
          </div> 
          <div class="form-group">
            <label for="username" class="control-label">Username</label>             
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">      
          </div>            
        </div>
        <div class="modal-footer">
          <input type="hidden" name="empId" id="empId" />
          <input type="hidden" name="action" id="action" value="" />
          <button type="button" name="save" id="save" class="btn btn-info" onclick="saveInfo()">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div> 

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
           </div> 
      <!-- partial -->
      <!-- main-panel ends -->
    </div>

  </div>

 
 <script>  
$( document ).ready(function getJSON() {

  var employeeData = $('#employee_data').DataTable({
                        "lengthChange": false,
                        "processing":true,
                        "serverSide":true,
                        "order":[],
                        "ajax":{
                          url:"/admin/pages/forms/user.php",
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
    url:'/admin/pages/forms/getEmployee.php',
    method:"POST",
    data:{
      empId:empId
    },
    dataType:"json",
    success:function(data){
      // debugger;
      // alert(data[0][1]);
      $('#employeeModal').modal('show');
      $('#empId').val(id);
      $('#name').val(data[0][1]);
      $('#surname').val(data[0][2]);
      $('#age').val(data[0][3]);       
      $('#email').val(data[0][4]);
      $('#gender').val(data[0][5]);
      $('#username').val(data[0][6]);   
      $('.modal-title').html("<i class='fa fa-plus'></i> Edit user "+data[0][6]);
      $('#action').val('updateEmployee');
      $('#save').val('Save');
    }
  })
}
function saveInfo(){
  var id=$( "input[name=empId]" ).val();
  $('#errors').html();
  // alert(id);
  $.ajax({
    url:'/admin/pages/forms/updateEmployee.php',
    method:"POST",
    data:{
      id:id,
      name:$('#name').val(),
      surname:$('#surname').val(),
      age:$('#age').val(),       
      email:$('#email').val(),
      gender:$('#gender').val(),
      username:$('#username').val() 
    },
    // dataType:"json",
    success:function(data){
      // alert(data);
        if(data=='sucess'){
          location.reload();
        }
        if(data=='This username exists in another user'){

          $('#errors').html('This username exists in another user');
        }
        if(data=='This email exists in another user'){

          $('#errors').html('This email exists in another user');
        }
    }
  })
}

function deleteUser(id){
  $('#deleteModal').modal('show');
  $('#id').val(id);
}

function deleteAction(){
  var id=$('#id').val();
  $.ajax({
    url:'/admin/pages/forms/deleteUser.php',
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
