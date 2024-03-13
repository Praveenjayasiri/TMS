<?php
require_once '../dbcon.php';
include_once '../Session_admin/session_admin.php';

function getSingleValue($conn, $sql) {
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row[key($row)];
  } else {
      return 0;
  }
}

$employeeCount = getSingleValue($conn, "SELECT COUNT(*) as employee_count FROM employee");

$taskCount = getSingleValue($conn, "SELECT COUNT(*) as task_count FROM task");

$pendingTaskCount = getSingleValue($conn, "SELECT COUNT(*) as pending_task_count FROM task WHERE task_status = 1");

$completedTaskCount = getSingleValue($conn, "SELECT COUNT(*) as completed_task_count FROM task WHERE task_status = 0");

$data = array(
    'employeeCount' => $employeeCount,
    'taskCount' => $taskCount,
    'pendingTaskCount' => $pendingTaskCount,
    'completedTaskCount' => $completedTaskCount
);

echo json_encode($data);
?>

