<?php
include("koneksi.php");

class UserManager
{
    private $conn;
    private $password; // private property

    public $username; // public property
    public $fullname; // public property

    public function __construct($conn, $password, $username, $fullname)
    {
        $this->conn = $conn;
        $this->password = $password;
        $this->username = $username;
        $this->fullname = $fullname;
    }

    public function createUser()
    {
        $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO tb_user (username, password, fullname) VALUES ('$this->username', '$hashedPassword', '$this->fullname')";
        $result = mysqli_query($this->conn, $sql);

        return $result;
    }
}

if (isset($_POST['signup']) && $_POST['signup'] == 'Register') {
    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $password = $_POST['pass'];

    $userManager = new UserManager($conn, $password, $uname, $fname);
    $result = $userManager->createUser();

    if ($result) {
        echo "<script>window.alert('Selamat, Akun anda berhasil dibuat'); window.location.href='login.php';</script>";
    } else {
        echo "<script>window.alert('Oops!!, Terjadi kesalahan!!!'); window.location.href='register.php';</script>";
    }
}
