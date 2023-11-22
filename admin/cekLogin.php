<?php
if (isset($_POST['signin'])) {
    $yourname = $_POST['your_name'];
    $yourpass = $_POST['your_pass'];
    if ($yourname == "admin") {
        if ($yourpass == "admin123") {
            header("location:admin.php");
        }else{
            header("location:login.php?pesan=password salah");
        }
    }else{
        header("location:login.php?pesan=username salah");
    }
}
