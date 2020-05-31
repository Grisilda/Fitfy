<?php
    session_start();

    if(!isset($_SESSION["admin_name"]) && !isset($_SESSION["admin_password"])){
       header("Location: https://fitfy.000webhostapp.com/admin/login.html");      
    }
?>
<!DOCTYPE html>
<head>
 <title>Fitfy Fitness</title> 

<!-- shtime per data table server -->
<!-- Datatable CSS -->
 <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
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
  
<script>
function myFunction(){
  // window.location.href = "../../register/html/logimi2.html";
  for(var i=0;i<10;i++){
 window.location.replace('../../register/html/logimi2.html');
}
  // Page.ClientScript.RegisterStartupScript(this.GetType(),"clearHistory","ClearHistory();",true);
}
</script>
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/file-upload.js"></script>
</head>
<body >
	<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center" style="height: 123px;background: black;">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a href="https://fitfy.000webhostapp.com/index.php" style="margin-left: 45px;">
                <img src="../img/FitLogo.png" alt="FITFY" width="100px" height="100spx"></a>
          
         <!--  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button> -->
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <!-- <img src="images/faces/face5.jpg" alt="profile"/> -->
              <span class="nav-profile-name">Admin Profile</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            
              <a class="dropdown-item" href="logout.php">
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
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="margin-top: 60px;">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/user1.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">User informations</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/fitfyCoaches.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Coach informations</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/schedule1.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Schedule</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel" style="margin-top: 30px;">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <!-- <h2>Welcome back,</h2> -->
                    <?php
                        if(isset($_SESSION["admin_name"])){
                           echo '<div class="nav-right">
                           <h2>Welcome back, '.$_SESSION["admin_name"].'</h2>
                            </div>';       
                        }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <!-- <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i> -->
                          <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total users</small>
                            <div class="dropdown">
                              <?php
                                  if(isset($_SESSION["user_total"])){
                                     echo '<h5 class="mb-0 d-inline-block">'.$_SESSION["user_total"].' users</h5>';       
                                  }
                              ?>
                                <!-- <h5 class="mb-0 d-inline-block">26 Jul 2018</h5> -->
                              
                            </div>
                          </div>
                        </div>
                       <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          
                          <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total coach</small>
                            <?php
                                  if(isset($_SESSION["coach_total"])){
                                     echo '<h5 class="mb-0 d-inline-block">'.$_SESSION["coach_total"].' coach</h5>';       
                                  }
                            ?>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Current Users</small>
                            <?php
                                  if(isset($_SESSION["current_users"])){
                                     echo '<h5 class="mb-0 d-inline-block">'.$_SESSION["current_users"].' user</h5>';       
                                  }
                            ?>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
           </script>
 
 <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>
    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("charts.php",
                function (data)
                {
              debugger;
                    console.log(data);
                    data=JSON.parse(data);
                    var ussername= [];
                    var salary = [];

                    for (var i in data) {
                        ussername.push(data[i].username);
                        console.log(data[i].email);
                        salary.push(data[i].salary);
                    }

                    var chartdata = {
                        labels:ussername,
                        datasets: [
                            {
                                label: 'From top to least payed',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: salary
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget ,{
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>       
</body>
</html>
