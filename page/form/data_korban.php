<?php
define('BASEPATH',true);
include '../../config/config.php';
include '../../core/insert.php';

$agama = array("Islam","Katolik","Protestan","Buddha","Hindu","Konghuchu");
$pendidikan = array("Tidak ada","SD","SMP","SMA","S1","S2","S3");
?>
<html>
    <head>
        <title>
            Lapor Kasus Anda
        </title>
    </head>
    <body>
        <form action="" method="post">
            <h2>Isi data korban</h2>
            <table>
                <tr>
                    <td>No. Identitas : </td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Nama          : </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat : </td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir : </td>
                    <td><input type="text" name="tpt_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir : </td>
                    <td><input type="date" name="tgl_lahir"></td>
                </tr>
                <tr>
                    <td>Status Nikah :  </td>
                    <td><input type="text" name="status"></td>
                </tr>
                <tr>
                    <td>Pedidikan : </td>
                    <td><select name="status">
                            <?php
                            foreach($pendidikan as $a)
                            {
                            ?>
                            <option>
                                <?php
                                echo $a;
                                ?>
                            </option>
                            <?php
                            }   
                            ?>

                        </select></td>
                </tr>
                <tr>
                    <td>Agama : </td>
                    <td><select name="status">
                            <?php
                            foreach($agama as $a)
                            {
                            ?>
                            <option>
                                <?php
                                echo $a;
                                ?>
                            </option>
                            <?php
                            }   
                            ?>

                        </select></td>
                </tr>
                <tr>
                    <td>Jumlah Anak : </td>
                    <td><input type="text" name="anak"></td>
                </tr>
                <tr>
                    <td>Pekerjaan : </td>
                    <td><input type="text" name="kerja"></td>
                </tr>
                <tr>
                    <td>Telepon / HP : </td>
                    <td><input type="text" name="hp"></td>
                </tr>
   
            </table>
            
            <input type="submit" name="submit" value="Lanjut">
            
        </form>
    </body>
</html>

<?php

    if(@$_POST['submit']){

    $id         = @$_POST['id'];
    $nama       = @$_POST['nama'];
    $alamat     = @$_POST['alamat'];
    $tpt_lahir  = @$_POST['tpt_lahir'];
    $tgl_lahir  = @$_POST['tgl_lahir'];
    $stat       = @$_POST['status'];
    $pdk        = @$_POST['pendidikan'];
    $agama      = @$_POST['agama'];
    $anak       = @$_POST['anak'];
    $kerja      = @$_POST['kerja'];     
    $hp         = @$_POST['hp'];
     
    $data = array(
        "id_klien" => $id,
        "nama" => $nama,
        "alamat" => $alamat,
        "tempat_lahir" => $tpt_lahir,
        "tanggal_lahir" => $tgl_lahir,
        "status_nikah" => $stat,
        "pendidikan" => $pdk,
        "agama" => $agama,
        "jml_anak" => $anak,
        "pekerjaan" => $kerja,
        "telepon" => $hp    
        );
    
    insert("klien", $data);
    header("Location:data_pelaku");
    }
?>
