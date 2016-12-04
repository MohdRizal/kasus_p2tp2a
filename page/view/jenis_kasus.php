<?php
if(!defined("BASEPATH")) exit ("No direct scripts are allowed");
$r = get_all("jenis_kasus");
$r->setFetchMode(PDO::FETCH_OBJ);
?>
<table>
    <tr>
        <td>Kode Kasus</td>
        <td>Jenis Kasus</td>
    </tr>
    <?php
    foreach($r as $v){
    ?>
    <tr>
        <td><?php echo $v->kode_kasus; ?></td>
        <td><?php echo $v->jenis_kasus; ?></td>
    </tr>
    <?php
    }
    ?>
</table>
