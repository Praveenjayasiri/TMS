<?php
include '../../../../dbcon.php';
include_once '../../Session_employee/session_employee.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check the action type
  $action = $_POST["action"];
  $taskId = $_POST["taskId"];
  $empId = $_SESSION['emp_id'];  // Assuming you have stored emp_id in the session

  switch ($action) {
    case 'checkIn':
      $latIn = $_POST["latIn"];
      $lngIn = $_POST["lngIn"];

      // Insert check-in record with emp_id
      $sql = "INSERT INTO task_attendance (task_id, emp_id, check_in, lat_in, lng_in) VALUES ('$taskId', '$empId', NOW(), '$latIn', '$lngIn')";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo 'success';
      } else {
        echo 'error';
      }
      break;

    case 'checkOut':
      $latOut = $_POST["latOut"];
      $lngOut = $_POST["lngOut"];

      // Update task_attendance table
      $sqlUpdateAttendance = "UPDATE task_attendance SET check_out = NOW(), lat_out = '$latOut', lng_out = '$lngOut' WHERE task_id = '$taskId' AND check_out IS NULL";
      $resultUpdateAttendance = mysqli_query($conn, $sqlUpdateAttendance);

      // Update task table
      $sqlUpdateTaskStatus = "UPDATE task SET task_status = 0 WHERE id = '$taskId'";
      $resultUpdateTaskStatus = mysqli_query($conn, $sqlUpdateTaskStatus);

      if ($resultUpdateAttendance && $resultUpdateTaskStatus) {
        echo 'success';
      } else {
        echo 'error';
      }
      break;
  }
}
?>
