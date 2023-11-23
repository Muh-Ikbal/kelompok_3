<?php
    include "koneksi.php";

    if(isset($_POST['btnProses'])){
        $nama_kapal = $_POST["nama_kapal"];
        $muatan = $_POST["muatan"];
        $tujuan = $_POST["tujuan"];
        $harga = $_POST["harga"];

        if($_POST['btnProses']=='tambah'){
        $gambar = $_FILES["gambar"]["name"];
        $gambar_tmp = $_FILES["gambar"]["tmp_name"];
        move_uploaded_file($gambar_tmp,"gambar/".$gambar);
        
        $query="INSERT INTO tb_jadwal (`id_kapal`, `nama_kapal`, `muatan`, `tujuan`, `harga`, `kapal`) 
        VALUES (NULL, '$nama_kapal', '$muatan', '$tujuan', '$harga', '$gambar')";
        $sql=mysqli_query($conn,$query);

        if($sql){
            header("location:jadwal.php");
        }
        }else{
            if($_FILES['gambar']['name']!=""){
                $query=mysqli_query( $conn,"SELECT * FROM tb_jadwal WHERE `id_kapal` = '$_POST[id]'");
                $data=mysqli_fetch_array($query);
                unlink("gambar/". $data["name"]);

                $gambar = $_FILES["gambar"]["name"];
                $gambar_tmp = $_FILES["gambar"]["tmp_name"];
                move_uploaded_file($gambar_tmp,"gambar/".$gambar);

                mysqli_query( $conn,"UPDATE `tb_jadwal` SET nama_kapal = '$nama_kapal', muatan = '$muatan', tujuan = '$tujuan', `harga` = '$harga', kapal = '$gambar' WHERE `id_kapal` = '$_POST[id_kapal]'");
                header("location:jadwal.php");
            }else{
                mysqli_query( $conn,"UPDATE `tb_jadwal` SET nama_kapal = '$nama_kapal', muatan = '$muatan', tujuan = '$tujuan', `harga` = '$harga' WHERE `id_kapal` = '$_POST[id_kapal]'");
                header("location:jadwal.php");
            }
        }
    }elseif(isset($_GET["hapus"])){
        $querihapus="SELECT kapal FROM tb_jadwal WHERE `id_kapal` = $_GET[hapus]";
        $sqlhapus=mysqli_query($conn,$querihapus);
        $data=mysqli_fetch_array($sqlhapus);
        unlink("gambar/". $data["kapal"]);
    
        $query="DELETE FROM tb_jadwal WHERE id_kapal = $_GET[hapus]";
        $sql=mysqli_query($conn,$query);
        if($sql){
            header("location:jadwal.php");
        }
    }

?>