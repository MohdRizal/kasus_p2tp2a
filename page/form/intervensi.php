<?php
if (!defined('BASEPATH')) exit("No direct scripts allowed");
//$kon = $_GET['kon'];
$s = array('proses', 'selesai');
$col = array('no_reg', 'jenis_kasus');
//table 1, table 2, kolom yg dipilih, key1, key2, where, kondisi
$hasil = get_join_where("kasus", "jenis_kasus", $col, "jenis", "kode_kasus", "no_reg", "reg");
$hasil2 = get_join_where("kasus", "jenis_kasus", $col, "jenis", "kode_kasus", "no_reg", "reg");
$hasil->setFetchMode(PDO::FETCH_OBJ);
?>
<h2>Form Intervensi</h2>
<!--Data Kasus-->
<form id="msform" action="" method="post">
    <ul id="progressbar">
        <li>Data Kasus</li>
        <li>Data Intervensi</li>
    </ul>
    <?php
    foreach ($hasil as $v) {
        ?>
        <fieldset>
            <h2 class="fs-title">Data Kasus</h2>
            <input type="text" name="no_reg" placeholder="No. Registrasi" readonly="readonly" value="<?php echo $v->no_reg; ?>">
            <input type="text" name="jenis" placeholder="Jenis Kasus" readonly="readonly" value="<?php echo $v->jenis_kasus; ?>">
            <input type="text" name="nama" placeholder="Nama Pelapor">
            <input type="text" name="korban" placeholder="Nama Korban">
            <input type="button" name="next" class="next" value="Lanjut">
        </fieldset>
    <?php } ?>
    <fieldset>
        <h2 class="fs-title">Data Intervensi</h2>
        <input type="text" name="layanan" placeholder="Jenis Pelayanan">
        <input type="date" name="tanggal">
        <input type="text" name="hasil" placeholder="Hasil">
        <select name="status">
            <?php
            foreach ($s as $as) {
                ?>
                <option><?php echo $as; ?></option>
                <?php
            }
            ?>
        </select>
        <input type="button" name="previous" class="previous" value="Kembali">
        <input type="button" name="submit" class="next" value="Simpan">
    </fieldset>
</form>

<?php
if (@$_POST['submit']) {
    //fieldset 1
    $id = @$_POST['no_reg'];
    $jenis = @$_POST['jenis'];
    $nama = @$_POST['nama'];
    $korban = @$_POST['korban'];
    //fieldset 2
    $layanan = @$_POST['layanan'];
    $tgl_lahir = @$_POST['tgl_lahir'];
    $hasil = @$_POST['hasil'];
    $stat = @$_POST['status'];

    $data = array(
        "id_peg" => $id,
        "nama" => $nama,
        "alamat" => $alamat,
        "tempat_lahir" => $tpt_lahir,
        "tanggal_lahir" => $tgl_lahir,
        "telepon" => $hp,
        "status" => $stat
    );

    insert("pegawai", $data);
    //header('Location:../view/pegawai');
}
?>



