<?php
define('BASEPATH',true);
include '../../config/config.php';
include '../../core/insert.php';

$agama = array("Islam","Katolik","Protestan","Buddha","Hindu","Konghuchu");
    
?>
<html>
    <head>
        <title>
            Lapor Kasus Anda
        </title>
    </head>
    <body>
        <form action="" method="post">
            <h2>Isi data pelaku</h2>
            <table>
                <tr>
                    <td>No. Identitas  </td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Nama  </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir  </td>
                    <td><input type="text" name="tpt_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir  </td>
                    <td><input type="date" name="tgl_lahir"></td>
                </tr>   
                <tr>
                    <td>Alamat  </td>
                    <td><input type="text" name="alamat"></td>
                </tr>                
                <tr>
                    <td>Pedidikan  </td>
                    <td><input type="text" name="pendidikan"></td>
                </tr>
                <tr>
                    <td>Agama  </td>
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
                    <td>Pekerjaan  </td>
                    <td><input type="text" name="kerja"></td>
                </tr>
                <tr>
                    <td>Status  </td>
                    <td><input type="text" name="stat"></td>
                </tr>
   
                <tr>
                    <td>Hubungan  </td>
                    <td><input type="text" name="hubungan"></td>
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
    $stat       = @$_POST['stat'];
    $pdk        = @$_POST['pendidikan'];
    $agama      = @$_POST['agama'];
    $kerja      = @$_POST['kerja'];     
    $hub        = @$_POST['hubungan'];
     
    $data = array(
        "id_pelaku" => $id,
        "nama" => $nama,        
        "tempat_lahir" => $tpt_lahir,
        "tanggal_lahir" => $tgl_lahir,
        "alamat" => $alamat,
        "pendidikan" => $pdk,
        "agama" => $agama,
        "pekerjaan" => $kerja,
        "status" => $stat,
        "hubungan" => $hub   
        );
    
    insert("pelaku", $data);
    header("Location:../../index");
    }
?>
