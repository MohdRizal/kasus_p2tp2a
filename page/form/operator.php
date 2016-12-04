<?php
if(!defined('BASEPATH')) exit("No direct scripts are allowed");

$level = array('pimpinan','admin');
?>
<html>
</html>

<?php
if(@$_POST['submit']){
    $user  = @$_POST['username'];
    $pass  = @$_POST['password'];
    $nama  = @$_POST['nama'];
    $akses = @$_POST['akses'];

    $data = array(
        "username" => $user,
        "password" => $pass,
        "nama_lengkap" => $nama,
        "hak_akses" => $akses
    );

    insert("operator",$data);
}
?>
