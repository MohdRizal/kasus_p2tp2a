<?php

if ( ! defined('BASEPATH')) exit('Tidak boleh akses langsung');
    function get_all($table)
    {
        include '../../config/config.php';
        $sql = "SELECT * FROM $table";

        $stmt = $koneksi->prepare($sql);
        $stmt->execute();
       
        return $stmt;
    }

    function get_all_where($table,$field,$kondisi)
    {
        include '../../config/config.php';
        $sql = "SELECT * FROM $table WHERE $field = $kondisi";
            
        $stmt = $koneksi->prepare($sql);
        $stmt->execute();
            
        return $stmt;
    }

