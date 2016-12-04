<?php
//define('BASEPATH',true);
if(!defined('BASEPATH')) exit("No direct scripts are allowed");
?>
<form id="msform" action="" method="post">
    <ul id="progressbar">
        <li>Tambah Data Pegawai</li>
    </ul>
    <fieldset>
        <h2 class="fs-title">Pegawai</h2>
        <input type="text" name="id" placeholder="ID Pegawai">
        <input type="text" name="nama" placeholder="Nama Lengkap">
        <input type="text" name="alamat" placeholder="Alamat">
        <input type="text" name="tempat" placeholder="Tempat Lahir">
        <input type="text" name="tgl" placeholder="Tanggal Lahir">
        <input type="text" name="hp" placeholder="No. Telepon / HP">
        <input type="text" name="stat" placeholder="Status">
        <input type="submit" name="submit" class="next" value="SIMPAN" onclick="selesai();">
    </fieldset>
</form>
<?php

    if(@$_POST['submit']){

    $id         = @$_POST['id_peg'];
    $nama       = @$_POST['nama'];
    $alamat     = @$_POST['alamat'];
    $tpt_lahir  = @$_POST['tpt_lahir'];
    $tgl_lahir  = @$_POST['tgl_lahir'];
    $hp         = @$_POST['hp'];
    $stat       = @$_POST['status'];
    
    $data = array(
        "id_peg" => $id,
        "nama" => $nama,
        "alamat" => $alamat,
        "tempat_lahir" => $tpt_lahir,
        "tanggal_lahir" => $tgl_lahir,
        "telepon" => $hp,
        "status" => $stat
        );
    
    insert("pegawai", $data);
    //header('Location:../view/pegawai');
    }
?>
