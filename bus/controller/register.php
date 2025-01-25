<?php
require '../assets/partials/_functions.php';
$conn = db_connect();
session_start();

$user_fullname = mysqli_real_escape_string($conn, $_POST['full_name']);
$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
$phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
$user_password = mysqli_real_escape_string($conn, $_POST['password']);
$hash = md5($user_password);
$address = mysqli_real_escape_string($conn, $_POST['address']);

$sql = "INSERT INTO users (user_fullname, user_name, phone_no, user_password, address) VALUES ('$user_fullname', '$user_name', '$phone_no', '$hash', '$address')";
$result = mysqli_query($conn, $sql);
if ($result) {
    $user_id = mysqli_insert_id($conn);
}

$code = rand(1, 99999);
// Generates the unique userid
$customer_id = "CUST-" . $code . $autoInc_id;
$sql = "INSERT INTO customers (user_id, customer_id, customer_name, customer_phone) VALUES ('$user_id','$customer_id','$user_fullname', '$phone_no')";
$result = mysqli_query($conn, $sql);


if ($result) {
    // $_SESSION['email'] = $email;
    header("Location: ../login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);