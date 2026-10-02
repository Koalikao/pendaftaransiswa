<?php
require 'koneksi.php';

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM list
              WHERE Username='$username'
              AND Email='$email'
              AND Password='$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: ../pendaftaran_siswa/dashboard/dashboard.php");
    exit();
} else {
    echo "<center>
            <h1>Username atau Password Anda salah.</h1>
            <button>
                <a href='pendaftaran_lanjutan/index.php'>Login</a>
            </button>
          </center>";
}
?>