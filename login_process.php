<?php
include 'dbcon.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start([
    'cookie_lifetime' => 86400,
    'use_strict_mode' => true,
    'cookie_secure' => true,
]);

if (isset($_POST['email']) && isset($_POST['password'])) {
    $entered_email = $_POST['email'];
    $entered_password = $_POST['password'];

    $sql = "SELECT u.*, e.emp_status 
            FROM users u
            LEFT JOIN employee e ON u.emp_id = e.id
            WHERE u.email = ?";
            
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $entered_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($entered_password, $row['password'])) {
                $_SESSION['email'] = $entered_email;
                $_SESSION['emp_id'] = $row['emp_id'];

                if ($row['emp_id'] === NULL && $row['email'] === 'admin@gmail.com') {
                    echo "success-admin";
                    exit();
                } else {
                    if ($row['emp_status'] == 1) {
                        echo "success-employee";
                        exit();
                    } else {
                        echo "warning-inactive";
                        exit();
                    }
                }
            } else {
                echo "Invalid password";
                exit();
            }
        } else {
            echo "Invalid email";
            exit();
        }
    } else {
        echo "Database error";
        exit();
    }
} else {
    echo "Missing parameters";
    exit();
}

$conn->close();
?>
