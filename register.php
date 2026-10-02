<?php
require "koneksi.php";

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO list (username, email, password)
VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Pendaftaran gagal: " . mysqli_error($conn);
}
?>