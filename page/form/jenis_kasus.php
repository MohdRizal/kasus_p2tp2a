<?php
define ('BASEPATH',true);

include '../../config/config.php';
include '../../core/insert.php';
?>

<html>
    
</html>

<?php
if(@$_POST['submit']){
    $jenis = @$_POST['jenis'];
    $nama  = @$_POST['nama'];

    $data = array(
        "kode_kasus" => $jenis,
        "jenis_kasus" => $nama
    );

    insert("jenis_kasus",$data);
}
?>

