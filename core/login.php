<?php
define('BASEPATH',true);
//if(!define(BASEPATH)) exit ('No direct script access allowed');
require_once '../config/config.php';
require_once 'retrieve.php';
try
{
    //ambil data dari login admin
    $user = $_POST['username'];
    $pass = $_POST['psw'];

    $hasil = get_all("operator");
    $hasil->setFetchMode(PDO::FETCH_OBJ);

    foreach($hasil as $key)
    {        
        if($key->username == $user && $key->password == $pass)
        {
            header('Location:../user/ngadimin');
        }else{
            header('Location:../page/login');
        }
        
    }
    
}catch(PDOException $ex){
    
    echo'Gagal, pesan : '.$ex->getMessage();
    //header('../admin/index.php');
    
}
