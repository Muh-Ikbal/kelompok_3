<?php
include("koneksi.php");
if (isset($_POST['signin'])) {
    $yourname = $_POST['your_name'];
    $yourpass = $_POST['your_pass'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$yourname'") or die(mysqli_error($con));
    $data = mysqli_fetch_array($query);
    $ai = mysqli_num_rows($query);
    if ($ai == 1) {
        if (password_verify($yourpass, $data["password"])) {
            header("location:tiket/index.php");
        } else {
            header("location:login.php?pesan=password salah");
        }
    } else {
        header("location:login.php?pesan=username salah");
    }
}
