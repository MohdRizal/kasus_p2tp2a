<?php
if(!defined("BASEPATH")) exit ("No direct scripts are allowed");
$r = get_all("operator");
$r->setFetchMode(PDO::FETCH_OBJ);
?>
<table>
    <tr>
        <td>Username</td>
        <td>Nama Lengkap</td>
        <td>Login Terakhir</td>
        <td>Hak Akses</td>
    </tr>
    <?php
    foreach($r as $v){
    ?>
    <tr>
        <td><?php echo $v->username; ?></td>
        <td><?php echo $v->nama_lengkap; ?></td>
        <td><?php echo $v->login_terkahir; ?></td>
        <td><?php echo $v->hak_akses; ?></td>
    </tr>
    <?php
    }
    ?>
</table>