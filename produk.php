<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/produk/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $id_pegawai=$_SESSION['login']['id_login'];
            $sql = "INSERT INTO produk (nama_produk, harga_produk, deskripsi)
            VALUES ('$_POST[nama_produk]','$_POST[harga_produk]','$_POST[deskripsi]',$id_pegawai)";
                if ($conn->query($sql) === TRUE) {
                    header('Location: '.$con->site_url().'/admin/index.php?mod=produk');
                } else {
                    $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
                }
        }else{
            $err['msg']="Tidak diizinkan";
        }
        if(isset($err)){
            $content="views/produk/tambah.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
        echo 'edit';
        break;
    default:
    $sql = "SELECT * FROM produk";
    $produk=$conn->query($sql);
    $conn->close();
    $content="views/produk/tampil.php";
    include_once 'views/template.php';
}
?>