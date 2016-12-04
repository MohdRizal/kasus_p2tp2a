<html>
    <head>
        <title>
            Lapor Kasus Anda
        </title>
    </head>
    <body>
        <form action="" method="post">
            <h2>Isi data diri anda</h2>
            <table>
                <tr>
                    <td>Nama : </td>
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
                    <td>No Telepon / Hp : </td>
                    <td><input type="text" name="hp"></td>
                </tr>
                <tr>
                    <td>Hubungan dengan Korban : </td>
                    <td><input type="text" name="hubungan"></td>
                </tr>
   
            </table>
            
            <input type="submit" name="submit" value="KIRIM">
            
        </form>
    </body>
</html>

<?php

    if(@$_POST['submit']){

    //$id         = @$_POST['id_peg'];
    $nama       = @$_POST['nama'];
    $alamat     = @$_POST['alamat'];
    $tpt_lahir  = @$_POST['tpt_lahir'];
    $tgl_lahir  = @$_POST['tgl_lahir'];
    $hp         = @$_POST['hp'];
    $stat       = @$_POST['hubungan'];
    
    $data = array(
        "id_peg" => $id,
        "nama" => $nama,
        "alamat" => $alamat,
        "tempat_lahir" => $tpt_lahir,
        "tanggal_lahir" => $tgl_lahir,
        "telepon" => $hp,
        "status" => $stat
        );
    
    insert("pelapor", $data);
    header('Location:../view/pegawai');
    }
?>
