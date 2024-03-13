<?php
include '../../dbcon.php';
include_once '../../Session_admin/session_admin.php';


$query = "SELECT * FROM employee JOIN task ON employee.id = task.emp_id";
$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);

mysqli_close($conn);
?>
