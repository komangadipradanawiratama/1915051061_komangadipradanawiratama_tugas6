<?php
include_once '../config/Config.php';
$con = new Config();
if($con->auth()){
    //panggil fungsi
    switch (@$_GET['mod']){
        case 'produk' :
            include_once 'controller/produk.php';
        break;
        default :
            include_once 'controller/home.php';
    }
}else{
    //panggil cont login
    include_once 'controller/login.php';
}
?>