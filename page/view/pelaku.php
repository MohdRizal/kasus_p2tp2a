<?php
if(!defined("BASEPATH")) exit ("No direct scripts are allowed");
$r = get_all("pelaku");
$r->setFetchMode(PDO::FETCH_OBJ);
?>
<table>
    <tr>
        <td>Identitas Pelaku</td>
        <td>Nama</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>Alamat</td>
        <td>Pendidikan</td>
        <td>Agama</td>
        <td>Pekerjaan</td>
        <td>Status</td>
        <td>Hubungan</td>
    </tr>
    <?php
    foreach($r as $v){
    ?>
    <tr>
        <td><?php echo $v->id_peg; ?></td>
        <td><?php echo $v->nama; ?></td>
        <td><?php echo $v->tempat_lahir; ?></td>
        <td><?php echo $v->tanggal_lahir; ?></td>
        <td><?php echo $v->alamat; ?></td>
        <td><?php echo $v->pendidikan; ?></td>
        <td><?php echo $v->agama; ?></td>
        <td><?php echo $v->pekerjaan; ?></td>
        <td><?php echo $v->status; ?></td>
        <td><?php echo $v->hubungan; ?></td>
    </tr>
    <?php
    }
    ?>
</table>

