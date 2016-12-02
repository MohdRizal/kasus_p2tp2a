<?php
if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

$host = 'localhost';
$db   = 'kasus';
$user = 'root';
$pass = '';

try{
    
    $koneksi = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    //set pdo mode to error exception
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$koneksi->
    
} catch (PDOException $ex) {
    echo 'koneksi gagal : '.$ex->getMessage();
}

?>