<?php
include '../../../../dbcon.php';
include_once '../../Session_employee/session_employee.php';

$emp_id = $_SESSION['emp_id'];

$sql = "SELECT * FROM task WHERE emp_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $emp_id);
$stmt->execute();
$result = $stmt->get_result();

$tasks = array();

while ($row = $result->fetch_assoc()) {
  $tasks[] = array(
      'id' => $row['id'],
      'date' => $row['date'],
      'location' => $row['location'],
      'task_description' => $row['task_description'],
      'task_status' => $row['task_status']
  );
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($tasks);
?>
