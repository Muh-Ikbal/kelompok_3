<?php
include("koneksi.php");

class UserManager
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function createUser($username, $password, $fullname)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user (username, password, fullname) VALUES ('$username', '$hashedPassword', '$fullname')";
        $result = mysqli_query($this->conn, $sql);

        return $result;
    }
}

if (isset($_POST['signup']) && $_POST['signup'] == 'Register') {
    $fname = $_POST['fname'];
    $uname = $_POST['uname'];

    $userManager = new UserManager($conn);
    $result = $userManager->createUser($uname, $_POST['pass'], $fname);

    if ($result) {
        echo "<script>window.alert('Selamat, Akun anda berhasil dibuat'); window.location.href='login.php';</script>";
    } else {
        echo "<script>window.alert('Oops!!, Terjadi kesalahan!!!'); window.location.href='register.php';</script>";
    }
}
