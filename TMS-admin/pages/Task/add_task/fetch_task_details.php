<?php
include '../../dbcon.php';
include_once '../../Session_admin/session_admin.php';

// Fetch task details from the database
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM task";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $tasks = array();

            while ($row = $result->fetch_assoc()) {
                $tasks[] = $row;
            }

            echo json_encode($tasks);
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
