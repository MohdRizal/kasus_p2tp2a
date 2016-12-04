<?php
if(!defined('BASEPATH')) exit("No direct scripts are allowed");
$r = get_all("klien");
$r->setFetchMode(PDO::FETCH_OBJ);
?>
<table>
    <tr>
        <td>Identitas Klien</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>Status Nikah</td>
        <td>Pendidikan</td>
        <td>Agama</td>
        <td>Jumlah Anak</td>
        <td>Pekerjaan</td>
        <td>Telepon</td>
    </tr>
    <?php
    foreach($r as $v){
    ?>
    <tr>
        <td><?php echo $v->id_klien; ?></td>
        <td><?php echo $v->nama; ?></td>
        <td><?php echo $v->alamat; ?></td>
        <td><?php echo $v->tempat_lahir; ?></td>
        <td><?php echo $v->tanggal_lahir; ?></td>
        <td><?php echo $v->status_nikah; ?></td>
        <td><?php echo $v->pendidikan; ?></td>
        <td><?php echo $v->agama; ?></td>
        <td><?php echo $v->jml_anak; ?></td>
        <td><?php echo $v->pekerjaan; ?></td>
        <td><?php echo $v->telepon; ?></td>       
    </tr>
    <?php
    }
    ?>
</table>

