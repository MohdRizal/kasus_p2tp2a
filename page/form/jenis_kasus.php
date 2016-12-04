<form id="msform" action="" method="post">
    <ul id="progressbar">
        <li>Data Kasus</li>
        <li>Data Surat Tugas</li>
    </ul>
    <fieldset>
        <h2 class="fs-title">Data Kasus</h2>
        <input type="text" name="id" placeholder="ID Kasus">
        <input type="text" name="jenis" placeholder="Jenis Kasus">
        <input type="submit" name="submit" class="next" value="SIMPAN" onclick="selesai();">
    </fieldset>
</form>
<?php
if(@$_POST['submit']){
    $jenis = @$_POST['id'];
    $nama  = @$_POST['jenis'];

    $data = array(
        "kode_kasus" => $jenis,
        "jenis_kasus" => $nama
    );

    insert("jenis_kasus",$data);
    //include '../page/view/berhasil.php';
}
?>

<script>
function selesai(){
    alert('Data telah disimpan');
    Location('../user/ngadimin.php');
}
</script>
