<!DOCTYPE HTML>
<?php
if(!defined("BASEPATH")) exit ("No direct scripts are allowed");
//define('BASEPATH',true);
include '../core/retrieve.php';

$hasil = get_all("pegawai");
$hasil->setFetchMode(PDO::FETCH_OBJ);

    foreach($hasil as $v)
    {

        echo $v->id_peg.', ';
        echo $v->nama.', ';
        echo $v->alamat.', ';
        echo $v->telepon.', ';
        echo '<br>';
        
    }


