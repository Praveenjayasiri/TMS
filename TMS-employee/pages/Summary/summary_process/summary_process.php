<?php
include '../../dbcon.php';
include_once '../../Session_employee/session_employee.php';

$empId = $_SESSION['emp_id'];

$query = "SELECT * FROM employee JOIN task ON employee.id = task.emp_id WHERE emp_id = ?";
$stmt = $conn->prepare($query);

if (!$stmt) {
    die("Error in query: " . mysqli_error($conn));
}

$stmt->bind_param('s', $empId);
$stmt->execute();

$result = $stmt->get_result();

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$stmt->close();
$conn->close();
?>
