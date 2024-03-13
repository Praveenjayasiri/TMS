<?php
include '../../dbcon.php';
include_once '../../Session_admin/session_admin.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM employee";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $employees = array();

            while ($row = $result->fetch_assoc()) {
                $employees[] = $row;
            }

            echo json_encode($employees);
        } else {
            echo "No records found";
        }

        $stmt->close();
    } else {
        echo "Error in prepared statement";
    }
}

$conn->close();

?>
