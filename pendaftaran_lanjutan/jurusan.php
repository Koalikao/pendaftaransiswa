<?php 
include 'koneksi.php'; 
if (isset($_POST['tambah'])) {
    $nama_jurusan = mysqli_real_escape_string($koneksi, $_POST['nama_jurusan']);
    mysqli_query($koneksi, "INSERT INTO tb_jurusan (nama_jurusan) VALUES ('$nama_jurusan')");
    header("Location: jurusan.php");
}
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM tb_jurusan WHERE id_jurusan='$id'");
    header("Location: jurusan.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Master Data Jurusan - db_siswa</title>
    <style>
        /* Navbar */
.navbar {
    width: 80%;
    height: 70px;
    padding: 0 8%;
    margin: 10px;
    
    display: flex;
    align-items: center;
    justify-content: space-between;

    background-color: #ffffff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
}

/* Logo */
.logo {
    font-size: 24px;
    font-weight: bold;
    color: #2563eb;
}

/* Navigation */
.nav-links {
    display: flex;
    gap: 30px;
    list-style: none;
}

.nav-links a {
    position: relative;
    text-decoration: none;
    color: #333;
    font-size: 16px;
    transition: 0.3s;
}

.nav-links a:hover,
.nav-links a.active {
    color: #2563eb;
}

/* Underline effect */
.nav-links a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -7px;

    width: 0;
    height: 2px;

    background-color: #2563eb;
    transition: 0.3s;
}

.nav-links a:hover::after,
.nav-links a.active::after {
    width: 100%;
}

/* Login Button */
.btn-login {
    display: flex;
    padding: 10px 20px;

    text-decoration: none;
    color: white;
    background-color: #2563eb;

    border-radius: 8px;
    transition: 0.3s;
}

.btn-login:hover {
    background-color: #1d4ed8;
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 768px) {
    .navbar {
        padding: 0 5%;
    }

    .nav-links {
        display: none;
    }

    .btn-login {
        padding: 8px 15px;
    }
}



        body { font-family: Arial, sans-serif; margin: 20px; background: #f4f4f9; }
        .container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #007bff; color: white; }
        .btn { padding: 6px 12px; border: none; border-radius: 4px; color: white; cursor: pointer; text
decoration: none; font-size: 12px; }
        .btn-green { background: #28a745; } .btn-danger { background: #dc3545; } .btn-nav { background: 
#6c757d; }

    </style>
</head>
<body>

 <nav class="navbar">
        <div class="logo">
            cihuy gacor
        </div>

        <ul class="nav-links">
            <li><a href="" class="active">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <a href="../dashboard/dashboard.php" class="btn-login">dasboard</a>
    </nav>
<div class="container">
    <a href="index.php" class="btn btn-nav">« Kembali ke Form Pendaftaran</a>
    <h2>Kelola Master Jurusan (db_siswa)</h2>
    <form method="POST">
        <input type="text" name="nama_jurusan" placeholder="Nama Jurusan Baru" required style="width: 70%; 
padding: 8px;">
        <button type="submit" name="tambah" class="btn btn-green">Tambah Jurusan</button>
    </form>
    <table>
        <tr><th>ID</th><th>Nama Jurusan</th><th>Aksi</th></tr>
        <?php
        $q = mysqli_query($koneksi, "SELECT * FROM tb_jurusan");
        while($r = mysqli_fetch_assoc($q)){
            echo "<tr>
                    <td>{$r['id_jurusan']}</td>
                    <td>{$r['nama_jurusan']}</td>
                    <td><a href='jurusan.php?hapus={$r['id_jurusan']}' class='btn btn-danger' onclick='return confirm(\"Hapus jurusan ini?\")'>Hapus</a></td>
                  </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>