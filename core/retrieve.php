<?php

if ( ! defined('BASEPATH')) exit('Tidak boleh akses langsung');
    function get_all($table)
    {
        include '../config/config.php';
        $sql = "SELECT * FROM $table";

        $stmt = $koneksi->prepare($sql);
        $stmt->execute();
       
        return $stmt;
    }

    function get_all_where($table,$field,$kondisi)
    {
        include '../config/config.php';
        $sql = "SELECT * FROM $table WHERE $field = $kondisi";
            
        $stmt = $koneksi->prepare($sql);
        $stmt->execute();
            
        return $stmt;
    }
    
    function get_join($t1,$t2,$kolom,$key1,$key2)
    {
        $value = implode("', '",array_values($kolom));
        include '../config/config.php';
        $sql = "SELECT $value from $t1 join $t2 on $t1.$key1 = $t2.$key2";
        
        $stmt = $koneksi->prepare($sql);
        $stmt->execute();
            
        return $stmt;
    }

    function get_join_where($t1,$t2,$kolom,$key1,$key2,$kunci,$isi)
    {
        $value = implode(", ",$kolom);
        include '../config/config.php';
        $sql = "SELECT $value from $t1 join $t2 on $t1.$key1 = $t2.$key2 WHERE $kunci = '$isi'";
        
        $stmt = $koneksi->prepare($sql);
        $stmt->execute();
            
        return $stmt;
    }
