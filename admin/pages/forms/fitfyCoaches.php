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
  <link rel="stylesheet" type="text/css" href="style.css">
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
  <script src="registerCoach.js"></script>
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
                <h3 align="center">FITFY Coaches</h3>  
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
                              <th>Description</th>
                              <th>Instagram</th>
                              <th>Specialism</th>
                              <th>Photo</th>
                              <th>Username</th>  
                              <th>Salary</th>      
                              <th>Edit</th>
                              <th>Delete</th>         
                            </tr>
                        </thead>
                     </table>  
                </div> 

                <div id="employeeModal1" class="modal fade">
  <div class="modal-dialog">
    <form method="post" id="employeeForm">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">×</button> -->
          <h4 class="modal-title" style="margin-right: 55px"><i class="fa fa-plus"></i> Edit Coach</h4>
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
            <label for="description" class="control-label">Description</label>             
            <input type="text" class="form-control" id="description" name="description" placeholder="Description">      
          </div> 
           <div class="form-group">
            <label for="instagram" class="control-label">Instagram</label>             
            <input type="url" class="form-control" id="instagram" name="instagram" placeholder="Instagram">      
          </div> 
           <div class="form-group">
            <label for="specialism" class="control-label">Specialism</label>             
            <input type="text" class="form-control" id="specialism" name="specialism" placeholder="Specialism">      
          </div> 
          <div class="form-group">
            <label for="username" class="control-label">Username</label>             
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">      
          </div> 
           <div class="form-group">
            <label for="salary" class="control-label">Salary</label>             
            <input type="number" class="form-control" id="salary" name="salary" placeholder="Salary">      
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
       
         <div class="modal fade" id="deleteModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel1"></h4>
                  </div>
                  <div class="modal-body">
                     <p style="font-size: 15px;">Are you sure you want to delete the coach?</p>
                  </div>
                  <div class="modal-footer">
                     <input type="hidden" name="id" id="id" />
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary" onclick="deleteAction()">Delete </button>
                  </div>
               </div>
            </div>
         </div>
      
      <!-- partial -->
      <br><br>
      <!-- partial -->
     <h3 class="header" style="margin-left: 150px;"> New coach? Add it to Fitfy team here:</h3>
      <div class="main-panel">
         <div class="content-wrapper" style="background: transparent;">
            <div class="row">
               <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title">Enter coach informations</h4>
                        <p id="response" style="color: red;font-style: oblique;margin-top: 20px; font-size: 15px"> </p>
                        <form  action="registerCoach.php" method="post" enctype="multipart/form-data" id="myform">
                          
                           <div class="input-group">
                              <label for="exampleInputName">Name</label>
                              <input type="text" class="form-control" id="name1" name="name" placeholder="Name" required>
                           </div>
                           <div class="input-group">
                              <label for="exampleInputSurname">Surname</label>
                              <input type="text" class="form-control" id="surname1" name="surname" placeholder="Surname" required>
                           </div>
                           <div class="input-group">
                              <label for="exampleInputAge">Age</label>
                              <input type="number" class="form-control" id="age1" name="age" placeholder="Age"required>
                           </div>
                          
                           <div class="input-group">
                              <label for="exampleInputEmail">Email address</label>
                              
                              <input type="email" class="form-control" id="email1" name="email" placeholder="Email"required>
                                <p id="email_errors" style="color: red;font-style: oblique;"></p>
                           </div>
                           <div class="input-group">
                              <label for="exampleSelectGender">Gender</label>
                              <select class="form-control" name="gender" id="gender1"required>
                                 <option>Male</option>
                                 <option>Female</option>
                              </select>
                           </div>
                           <div class="input-group">
                              <label for="description">Description</label>
                              <textarea class="form-control" id="description1" name="description" rows="4"required></textarea>
                           </div>
                           <div class="input-group">
                              <label for="exampleInputInstagram">Instagram</label>
                             
                           <input type="url" name="instagram" id="instagram1" placeholder="https://instagram.com" pattern="https://.*"required>

                           </div>
                           <div class="input-group">
                              <label for="exampleSelectSpecialism">Specialism</label>
                              <select class="form-control" id="specialism1" name="specialism" required>
                                 <option>Yoga</option>
                                 <option>Body</option>
                                 <option>Cardio</option>
                                 <option>Crossfit</option>
                                 <option>Box</option>
                              </select>
                           </div>
                           <!-- <div class="input-group">
                              <label>File upload</label>
                              <div class="input-group col-xs-12">
                                 <input type="file" class="form-control" id="file" name="file" style="height: 46px; border-radius: 6px;">
                              </div>
                           </div> -->
                           <div class="input-group">
                              <label for="exampleInputUsername">Username</label>
                              <input type="text" class="form-control" id="username1" name="username" placeholder="Username" required>
                           </div>
                           <div class="input-group">
                              <label for="exampleInputSalary">Salary</label>
                              <input type="number" class="form-control" id="salary1" name="salary" placeholder="Salary" required>
                           </div>
                           <div class="input-group">
                              <label for="exampleInputPassword5">Password</label>
                              <input type="password" class="form-control" id="password1" name="password" placeholder="Password" required>
                           </div>
                           <a type="submit" class="btn btn-primary mr-2" style="height: 45px; width: 90px;font-style: initial; color: white; padding: 12px" name="reg_user" onclick="registerActions()">Submit</a>
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
                                   url:"/admin/pages/forms/coach.php",
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
                                 "pageLength": 15
           });
         });
          debugger;
         
         function update(id){
            //alert(id);
           var empId = id
           // var action = 'getEmployee';
           $.ajax({
             url:'/admin/pages/forms/getCoach.php',
             method:"POST",
             data:{
               empId:empId
             },
             dataType:"json",
             success:function(data){
              
               // alert(data[0][1]);
               $('#employeeModal1').modal('show');
               $('#empId').val(id);
               $('#name').val(data[0][1]);
               $('#surname').val(data[0][2]);
               $('#age').val(data[0][3]);       
               $('#email').val(data[0][4]);
               $('#gender').val(data[0][5]);
               $('#description').val(data[0][6]);
               $('#instagram').val(data[0][7]);
               $('#specialism').val(data[0][8]);
              // $('#photo').val(data[0][9]);
               $('#username').val(data[0][10]);
               $('#salary').val(data[0][11]);   
               $('.modal-title').html("<i class='fa fa-plus'></i> Edit coach "+data[0][1]);
               $('#action').val('updateEmployee');
               $('#save').val('Save');
             }
           })
         }
         debugger;
         function saveInfo(){
           var id=$( "input[name=empId]" ).val();
           $('#errors').html();
           // alert(id);
           $.ajax({
             url:'/admin/pages/forms/updateCoach.php',
             method:"POST",
             data:{
               id:id,
               name:$('#name').val(),
               surname:$('#surname').val(),
               age:$('#age').val(),       
               email:$('#email').val(),
               gender:$('#gender').val(),
               description:$('#description').val(),
               instagram:$('#instagram').val(),
               specialism:$('#specialism').val(),
               //photo:$('#photo').val(),
               username:$('#username').val(),
               salary:$('#salary').val() 
             },
             // dataType:"json",
             success:function(data){
               alert(data);
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
          debugger;
           $('#deleteModal1').modal('show');
           $('#id').val(id);
         }
         debugger;
         
         function deleteAction(){
           var id=$('#id').val();
           $.ajax({
             url:'/admin/pages/forms/deleteCoach.php',
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
