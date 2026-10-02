<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Akun</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background-image:url("sekolah.jpg");
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

.navbar{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    background:rgba(0,50,116,0.9);
    padding:15px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    z-index:1000;
}

.navbar .logo{
    color:white;
    font-size:22px;
    font-weight:bold;
}

.navbar ul{
    list-style:none;
    display:flex;
    gap:20px;
}

.navbar ul li a{
    color:white;
    text-decoration:none;
    font-size:15px;
    transition:0.3s;
}

.navbar ul li a:hover{
    color:#ffd700;
}

.register-box{
    width:320px;
    padding:22px;
    background:rgba(255,255,255,0.2);
    border-radius:12px;
    backdrop-filter:blur(5px);
}

.register-box h2{
    text-align:center;
    color:#050505;
    margin-bottom:6px;
    font-size:22px;
}

.register-box p{
    text-align:center;
    color:#050505;
    margin-bottom:18px;
    font-size:13px;
}

.input-group{
    margin-bottom:12px;
}

.input-group label{
    display:block;
    color:#070707;
    margin-bottom:4px;
    font-size:13px;
    font-weight:bold;
}

.input-group input{
    width:100%;
    padding:9px;
    border:1px solid #000;
    outline:none;
    border-radius:6px;
    font-size:13px;
}

.input-group input:focus{
    box-shadow:0 0 6px rgba(255,255,255,.6);
}

button{
    width:100%;
    padding:10px;
    border:none;
    border-radius:6px;
    background:#003274;
    color:white;
    font-size:14px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#0048a8;
}

.footer{
    margin-top:14px;
    text-align:center;
    color:#000;
    font-size:13px;
}

.footer a{
    color:#000;
    text-decoration:none;
    font-weight:bold;
}

.footer a:hover{
    text-decoration:underline;
}
</style>

</head>
<body>

<nav class="navbar">
    <div class="logo">cihuy gacor</div>

    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Daftar</a></li>
        <li><a href="pendaftaran/index.php">Login</a></li>
    </ul>
</nav>

<div class="register-box">

    <h2>Daftar Akun</h2>
    <p>Silakan isi data berikut</p>

    <form action="masuk.php" method="POST">

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>
        </div>

        <button type="submit">login</button>

    </form>

    <div class="footer">
        bikin akun?
        <a href="daftar.php">daftar</a>
    </div>

</div>

</body>
</html>