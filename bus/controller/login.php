<?php
require '../assets/partials/_functions.php';
$conn = db_connect();
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_password = mysqli_real_escape_string($conn, $_POST['password']);
    $hash = md5($user_password);

    $sql = "SELECT * FROM users WHERE user_name = '$user_name' AND user_password = '$hash'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['user_fullname'] = $row['user_fullname'];
        $user_sql = "SELECT * FROM customers WHERE user_id = '" . $row['user_id'] . "'";
        $user_result = mysqli_query($conn, $user_sql);
        $user_row = mysqli_fetch_array($user_result, MYSQLI_ASSOC);
        $_SESSION['customer_id'] = $user_row['customer_id'];
        if ($row['user_type'] == 0) {
            header("Location: ../customer/index.php ");
        } else {
            header("Location: ../admin/dashboard.php ");
        }
    } else {
        $_SESSION['message'] = "Invalid email or password";
        header("Location: ../login.php ");
    }

} else {
    $_SESSION['message'] = "Invalid email or password";
    header("Location: ../login.php ");
}
