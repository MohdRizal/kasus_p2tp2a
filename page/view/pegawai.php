<!DOCTYPE HTML>
<?php
if(!defined("BASEPATH")) exit ("No direct scripts are allowed");
$r = get_all("pegawai");
$r->setFetchMode(PDO::FETCH_OBJ);
?>
<table>
    <tr>
        <td>Identitas Pegawai</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>Telepon</td>
        <td>Status</td>
    </tr>
    <?php
    foreach($r as $v){
    ?>
    <tr>
        <td><?php echo $v->id_peg; ?></td>
        <td><?php echo $v->nama; ?></td>
        <td><?php echo $v->alamat; ?></td>
        <td><?php echo $v->tempat_lahir; ?></td>
        <td><?php echo $v->tanggal_lahir; ?></td>
        <td><?php echo $v->telepon; ?></td>
        <td><?php echo $v->status; ?></td>
    </tr>
    <?php
    }
    ?>
</table>


