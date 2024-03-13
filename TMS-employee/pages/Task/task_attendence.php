<?php
include_once '../Session_employee/session_employee.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee - Dashboard</title>

  <link rel="icon" href="../../../loging/img/logo.png" type="image">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="../../../CResources/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="../../../CResources/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" role="button" id="dark-mode-toggle">
          <i class="fas fa-moon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../../logout.php" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../../index.php" class="brand-link">
      <img src="../../../CResources/dist/img/logo.png" alt="mobizz Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mobizz - TMS</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../CResources/dist/img/profile.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php
          // Assuming emp_id is stored in the session
          $empId = $_SESSION['emp_id'];
          echo '<a href="../Employees/employee_details.php" class="d-block">Employee ID: ' . $empId . '</a>';
          ?>
        </div>
      </div>

      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../pages/layout/top-nav.html" class="nav-link active">
                <i class="fas fa-tasks nav-icon"></i>
                  <p>Task Page</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../pages/Task/task_details.php" class="nav-link" >
                    <i class="fas fa-info-circle nav-icon"></i>
                      <p>Tasks Details</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../pages/Employees/employee_details.php" class="nav-link">
                <i class="fas fa-user nav-icon"></i>
                  <p>My Details</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../pages/Summary/summary_report.php" class="nav-link">
                <i class="fas fa-chart-bar nav-icon"></i>
                  <p>Summary Report</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Task Attendance</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Task Pages</li>
                        <li class="breadcrumb-item active">Task Attendance</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header"><?php
                // Retrieve taskId from the URL
                $taskId = isset($_GET['id']) ? $_GET['id'] : '';
                ?>
                <h1 class="text-center mt-2">TASK ID: <span id="taskId"><?php echo htmlspecialchars($taskId); ?></span></h1>
              </div>
              <div class="card-body">
                <div id="map-container">
                  <div id="map" style="height: 400px;"></div>
                </div>
                <div class="button-container mt-5 text-center mb-3">
                  <button id="checkIn" class="btn btn-primary mr-5" onclick="performCheckIn()"><i class="fa fa-calendar-plus"></i>&nbsp;Check In</button>
                  <button id="checkOut" class="btn btn-danger ml-5" onclick="performCheckOut()"><i class="fa fa-calendar-minus"></i>&nbsp;Check Out</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <aside class="control-sidebar control-sidebar-dark"></aside>

  <footer class="main-footer">
    <strong>Copyright &copy; 2011-2021 <a href="https://Mobizz.lk">Mobizz</a>.</strong>
    All rights reserved.
  </footer>
</div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="../../../CResources/plugins/jquery/jquery.min.js"></script>
  <script src="../../../CResources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <script src="../../../CResources/plugins/chart.js/Chart.min.js"></script>
  <script src="../../../CResources/dist/js/adminlte.js"></script>

  <script>
    $(document).ready(function () {
      // Check if the browser supports geolocation
      if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function (position) {
          var lat = position.coords.latitude;
          var lng = position.coords.longitude;

          // Set the Task ID in the card title
          $("#taskId").text("<?php echo htmlspecialchars($taskId); ?>");

          // Get emp_id from the session or wherever it's stored
          var empId = <?php echo json_encode($_SESSION['emp_id']); ?>;

          // Initialize the Leaflet map
          var map = L.map('map').setView([lat, lng], 13);

          // Add a tile layer
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
          }).addTo(map);

          // Add a marker at the current location
          L.marker([lat, lng]).addTo(map)
            .bindPopup('You are here!')
            .openPopup();

          $("#lat").val(lat);
          $("#lng").val(lng);
        });
      } else {
        alert("Geolocation is not supported by your browser");
      }
    });
</script>
<script>
  function performCheckIn() {
    // Get the task ID from the URL
    var taskId = '<?php echo htmlspecialchars($taskId); ?>';

    // Get emp_id from the session or wherever it's stored
    var empId = <?php echo json_encode($_SESSION['emp_id']); ?>;

    // Check if the browser supports geolocation
    if ("geolocation" in navigator) {
      navigator.geolocation.getCurrentPosition(function (position) {
        var latIn = position.coords.latitude;
        var lngIn = position.coords.longitude;

        // Use Ajax to send data to the server
        $.ajax({
          type: "POST",
          url: "task_process/process_attendance.php",
          data: {
            action: 'checkIn',
            taskId: taskId,
            empId: empId,  // Pass emp_id along with check-in
            latIn: latIn,
            lngIn: lngIn
          },
          success: function (response) {
            console.log(response);
            if (response === 'success') {
              // Show success message
              Swal.fire({
                icon: 'success',
                title: 'Successfully checked in!',
                showConfirmButton: false,
                timer: 1500
              }).then(function () {
                // Redirect to task_details.php
                window.location.href = '../../pages/Task/task_details.php';
              });
            } else {
              // Show error message
              Swal.fire({
                icon: 'error',
                title: 'Failed to check in!',
                showConfirmButton: false,
                timer: 1500
              });
            }
          }
        });
      });
    } else {
      alert("Geolocation is not supported by your browser");
    }
  }

function performCheckOut() {
    // Get the task ID from the URL
    var taskId = '<?php echo htmlspecialchars($taskId); ?>';

    // Check if the browser supports geolocation
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var latOut = position.coords.latitude;
            var lngOut = position.coords.longitude;

            // Use Ajax to send data to the server
            $.ajax({
                type: "POST",
                url: "task_process/process_attendance.php",
                data: {
                  action: 'checkOut',
                  taskId: taskId,
                  latOut: latOut,
                  lngOut: lngOut
                },
                success: function (response) {
                  console.log(response);
                  if (response === 'success') {
                    // Show success message
                    Swal.fire({
                      icon: 'success',
                      title: 'Successfully checked out!',
                      showConfirmButton: false,
                      timer: 1500
                    }).then(function () {
                        // Redirect to task_details.php
                        window.location.href = '../../pages/Task/task_details.php';
                    });
                  } else {
                    Swal.fire({
                      icon: 'error',
                      title: 'Failed to check out!',
                      showConfirmButton: false,
                      timer: 1500
                    });
                  }
                }
            });
        });
    } else {
        alert("Geolocation is not supported by your browser");
    }
}
</script>
</body>
</html>


