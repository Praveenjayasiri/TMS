<?php
require_once '../dbcon.php';
include_once '../Session_employee/session_employee.php';

function getSingleValue($conn, $sql, $params = []) {
  $stmt = $conn->prepare($sql);

  if ($stmt === false) {
    return 0;
  }

  if (!empty($params)) {
    $stmt->bind_param(...$params);
  }

  $stmt->execute();

  $result = $stmt->get_result();

  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row[key($row)];
  } else {
    return 0;
  }
}

$empId = $_SESSION['emp_id'];

$employeeCount = getSingleValue($conn, "SELECT COUNT(*) as employee_count FROM employee WHERE id = ?", ['s', $empId]);

$taskCount = getSingleValue($conn, "SELECT COUNT(*) as task_count FROM task WHERE emp_id = ?", ['s', $empId]);

$pendingTaskCount = getSingleValue($conn, "SELECT COUNT(*) as pending_task_count FROM task WHERE task_status = 1 AND emp_id = ?", ['s', $empId]);

$completedTaskCount = getSingleValue($conn, "SELECT COUNT(*) as completed_task_count FROM task WHERE task_status = 0 AND emp_id = ?", ['s', $empId]);

$data = array(
    'employeeCount' => $employeeCount,
    'taskCount' => $taskCount,
    'pendingTaskCount' => $pendingTaskCount,
    'completedTaskCount' => $completedTaskCount
);

echo json_encode($data);
?>
