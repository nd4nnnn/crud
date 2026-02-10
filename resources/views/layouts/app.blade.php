<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>SekolahApp</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    margin: 0;
    background: #f4f6f9;
    font-family: 'Segoe UI', sans-serif;
}

/* SIDEBAR */
.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 240px;
    height: 100vh;
    background: linear-gradient(180deg, #6c757d, #495057);
    padding: 30px 15px;
    box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
}

/* TITLE */
.logo {
    text-align: center;
}

/* NAMA APP */
.logo h4 {
    color: white;
    margin-bottom: 30px;
    font-weight: bold;
    font-size: 30px;
}

/* FOTO */
.logo img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid white;
    margin-bottom: 25px;
}

/* MENU WRAPPER */
.menu {
    margin-top: 30px;
}

/* MENU TITLE */
.menu-title {
    color: #ced4da;
    font-size: 12px;
    margin-bottom: 10px;
    text-transform: uppercase;
    padding-left: 10px;
}

/* LINK */
.sidebar a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px 15px;
    margin-bottom: 10px;
    border-radius: 8px;
    font-size: 15px;
    transition: 0.3s;
}

.sidebar a:hover {
    background: rgba(255,255,255,0.15);
    padding-left: 20px;
}

/* CONTENT */
.content {
    margin-left: 240px;
    padding: 25px;
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <!-- NAMA DULU -->
    <div class="logo">

        <h4>Web Sekolah</h4>

        <!-- FOTO -->
        <img src="{{ asset('logo1.png') }}" alt="logo">

    </div>

    <!-- MENU -->
    <div class="menu">

        <div class="menu-title">Menu Utama</div>

        <a href="/siswa">👨‍🎓 Data Siswa</a>
        <a href="/kelas">🏫 Data Kelas</a>

    </div>

</div>

<!-- CONTENT -->
<div class="content">
    @yield('content')
</div>

</body>
</html>
