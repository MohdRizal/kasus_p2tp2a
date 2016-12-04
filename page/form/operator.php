<?php
if(!defined('BASEPATH')) exit("No direct scripts are allowed");

$level = array('pimpinan','admin');
?>
<form id="msform" action="" method="post">
    <ul id="progressbar">
        <li>Tambah User</li>
    </ul>
    <fieldset>
        <h2 class="fs-title">Pengguna</h2>
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <input type="text" name="nama" placeholder="Nama Lengkap">
        <input type="text" name="hak" placeholder="Hak Akses">
        <input type="submit" name="submit" class="next" value="SIMPAN" onclick="selesai();">
    </fieldset>
</form>

<?php
if(@$_POST['submit']){
    $user  = @$_POST['username'];
    $pass  = @$_POST['password'];
    $nama  = @$_POST['nama'];
    $akses = @$_POST['hak'];

    $data = array(
        "username" => $user,
        "password" => $pass,
        "nama_lengkap" => $nama,
        "hak_akses" => $akses
    );

    insert("operator",$data);
}
?>
