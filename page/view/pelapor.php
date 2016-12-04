<?php
if(!defined("BASEPATH")) exit ("No direct scripts are allowed");
$r = get_all("pelapor");
$r->setFetchMode(PDO::FETCH_OBJ);
?>
<table>
    <tr>
        <td>Identitas Pelapor</td>
        <td>Nama</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>Alamat</td>
        <td>Hubungan</td>
        <td>Kontak</td>
    </tr>
    <?php
    foreach($r as $v){
    ?>
    <tr>
        <td><?php echo $v->id_pelapor; ?></td>
        <td><?php echo $v->nama; ?></td>
        <td><?php echo $v->tempat_lahir; ?></td>
        <td><?php echo $v->tanggal_lahir; ?></td>
        <td><?php echo $v->alamat; ?></td>
        <td><?php echo $v->hubungan; ?></td>
        <td><?php echo $v->kontak; ?></td>
    </tr>
    <?php
    }
    ?>
</table>

