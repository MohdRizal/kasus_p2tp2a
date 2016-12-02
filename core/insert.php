<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function insert($table,$data)
    {
        //include file konfigurasi
        include '../../config/config.php';
        //memisahkan isi array dengan tanda koma
        $value = implode("', '",array_values($data));
        $key = implode(', ', array_keys($data));

        $sql = "INSERT INTO $table($key) VALUES ('$value')";
        //eksekusi kueri
        $exec = $koneksi->prepare($sql);
        $exec->execute();

    }

    function insert_trigger()
    {

    }

    function update($table, $data, $field, $kondisi)
    {
        include '../../config/config.php';

        $value = implode("', '",array_values($data));
        $key = implode(', ', array_keys($data));

        $sql = "UPDATE $table SET $value = $key , WHERE $field = $kondisi";

        $exec = $koneksi->prepare($sql);
        $exec->execute();
    }
