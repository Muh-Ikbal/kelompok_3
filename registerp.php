<?php
include("koneksi.php");
if (isset($_POST['signup']) && $_POST['signup'] == 'Register') {
    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO user (id_user,username, password, fullname) VALUES ('','$uname', '$pass', '$fname')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>window.alert('Selamat, Akun anda berhasil dibuat'); window.location.href='login.php';</script>";
    } else {
        echo "<script>window.alert('Oops!!, Terjadi kesalahan!!!'); window.location.href='register.php';</script>";
    }
}
