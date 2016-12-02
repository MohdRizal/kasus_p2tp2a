<?php
define('BASEPATH',true);
include '../../config/config.php';
include '../../core/insert.php';
?>
<html>
    <head>
        <title>
            Lapor Kasus Anda
        </title>
    </head>
    <body>
        <form action="" method="post">
            <h2>Isi data diri anda</h2>
            <table>
                <tr>
                    <td>No. Identitas : </td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat : </td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir : </td>
                    <td><input type="text" name="tpt_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir : </td>
                    <td><input type="date" name="tgl_lahir"></td>
                </tr>
                <tr>
                    <td>No Telepon / Hp : </td>
                    <td><input type="text" name="hp"></td>
                </tr>
                <tr>
                    <td>Hubungan dengan Korban : </td>
                    <td><input type="text" name="hubungan"></td>
                </tr>
   
            </table>
            
            <input type="submit" name="submit" value="Lanjut">
            
        </form>
    </body>
</html>

<?php

    if(@$_POST['submit']){

    $id         = @$_POST['id'];
    $nama       = @$_POST['nama'];
    $tpt_lahir  = @$_POST['tpt_lahir'];
    $tgl_lahir  = @$_POST['tgl_lahir'];
    $alamat     = @$_POST['alamat']; 
    $stat       = @$_POST['hubungan'];
    $hp         = @$_POST['hp'];
     
    $data = array(
        "id_pelapor" => $id,
        "nama" => $nama,
        "tempat_lahir" => $tpt_lahir,
        "tanggal_lahir" => $tgl_lahir,
        "alamat" => $alamat,
        "hubungan" => $stat,
        "kontak" => $hp    
        );
    
    insert("pelapor", $data);
    header("Location:data_korban");
    }
?>
