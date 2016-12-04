<?php
if (!defined('BASEPATH'))
    exit("No direct scripts allowed");

$agama = array("Islam", "Katolik", "Protestan", "Buddha", "Hindu", "Konghuchu");
$pendidikan = array("-PILIH-", "SD", "SMP", "SMA", "S1", "S2", "S3");
?>
<!-- multistep form -->

<script src="../style/js/jquery-2.1.4.min.js"></script>
<script src="../style/js/bootstrap.min.js"></script>
<script src="../style/js/jquery.wizard-builder.js"></script>
<script src="../style/js/bootstrap-datetimepicker.min.js"></script>


<link href="../style/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../style/css/jquery.wizard-builder.css" rel="stylesheet">

<body>
    <div id="content-wrapper">
        <section class="content">

            <div class="example-container-demo">
                <div class="container-fluid">
                    <div id="my-wizard_1" data-wizard-builder >
                        <ul class="steps">
                            <li data-step="1">Kasus</li>
                            <li data-step="2">Pelapor</li>
                            <li data-step="3">Korban</li>
                            <li data-step="4">Pelaku</li>
                            <li data-step="5">Kronologi</li>
                            <li data-step="6">Upaya</li>
                            <li data-step="7">Permasalahan</li>
                            <li data-step="8">Harapan</li>
                        </ul>
                        <div class="steps-content">
                            <div data-step="1">
                                <form>
                                    <!-- fieldsets -->
                                    <h1 class="fs-title">Form Kasus</h1>
                                    <h3 class="fs-subtitle">Keterangan Kasus</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="no_reg" placeholder="No. Registrasi">
                                    </div>

                                    <div class="form-group">
                                        <input type='text' class="form-control" name="tgl" id='datetimepicker4' />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="kasus" placeholder="Jenis Kasus">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
                                    </div>
                                </form>
                            </div>
                            <div data-step="2">
                                <form>
                                    <fieldset>
                                        <h2 class="fs-title">Form Kasus</h2>
                                        <h3 class="fs-subtitle">Keterangan Pelapor</h3>

                                        <div class="form-group">
                                            <input type="text" name="id" class="form-control" placeholder="No. Identitas">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="alamat" class="form-control" rows="8" cols="80" placeholder="Alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="tpt_lahir" class="form-control" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tgl_lahir">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="kontak" class="form-control" maxlength="12" placeholder="Kontak">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="hubungan" class="form-control" maxlength="12" placeholder="Hubungan Dengan Korban">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>

                            <div data-step="3">

                                <form>
                                    <h2 class="fs-title">Form Kasus</h2>
                                    <h3 class="fs-subtitle">Keterangan Korban</h3>
                                    <div class="form-group">
                                        <input type="text" name="id" class="form-control" placeholder="No. Identitas">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="alamat" class="form-control" rows="8" cols="80" placeholder="Alamat"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="tpt_lahir" class="form-control" placeholder="Tempat Lahir">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="status" placeholder="Status Nikah">
                                    </div>
                                    <div class="form-group">
                                        <select name="pdk" class="form-control">
                                            <?php
                                            foreach ($pendidikan as $p) {
                                                ?>
                                                <option value="<?php echo $p; ?>">
                                                    <?php echo $p; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="agama" class="form-control">
                                            <?php
                                            foreach ($agama as $a) {
                                                ?>
                                                <option value="<?php echo $a; ?>">
                                                    <?php echo $a; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="jml_anak" class="form-control" placeholder="Jumlah Anak">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="kerja" placeholder="Pekerjaan" class="form-control">
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="kontak" class="form-control" placeholder="Kontak">
                                    </div>
                                </form>
                            </div>

                            <div data-step="4">
                                <form>


                                    <h2 class="fs-title">Form Kasus</h2>
                                    <h3 class="fs-subtitle">Keterangan Pelaku</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="id" placeholder="No. Identitas">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tpt_lahir" placeholder="Tempat Lahir">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="tgl_lahir">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                    </div>

                                    <div class="form-group">
                                        <select name="pdk" class="form-control">
                                            <?php
                                            foreach ($pendidikan as $p) {
                                                ?>
                                                <option value="<?php echo $p; ?>">
                                                    <?php echo $p; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="pdk" class="form-control">
                                            <?php
                                            foreach ($agama as $a) {
                                                ?>
                                                <option value="<?php echo $a; ?>">
                                                    <?php echo $a; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="kerja" class="form-control" placeholder="Pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="status" placeholder="Status">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="hubungan" class="form-control" placeholder="Hubungan dengan Korban">
                                    </div>
                                </form>
                            </div>
                            <div data-step="5">
                                <form>
                                    <h2 class="fs-title">Form Kasus</h2>
                                    <h3 class="fs-subtitle">Kronologi Kasus</h3>
                                    <div class="form-group">
                                        <textarea name="krono" class="form-control" placeholder="Kronologi Kasus" cols="80" rows="8"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div data-step="6">
                                <form>
                                    <h2 class="fs-title">Form Kasus</h2>
                                    <h3 class="fs-subtitle">Upaya</h3>
                                    <div class="form-group">
                                        <textarea name="upaya" placeholder="Upaya" class="form-control" cols="80" rows="8"></textarea>
                                    </div>
                                    <!--<input type="text" name="upaya" placeholder="Upaya">-->
<!--                                    <input type="button" name="previous" class="previous" value="Kembali">
                                    <input type="button" name="next" class="next" value="Lanjut"> -->
                                </form>
                            </div>
                            <div data-step="7">
                                <form>
                                    <h2 class="fs-title">Form Kasus</h2>
                                    <h3 class="fs-subtitle">Permasalahan yang dialami</h3>
                                    <textarea class="form-control" rows="8" cols="80" placeholder="Permasalahan"></textarea>
                                    <!--<input type="text" name="masalah" placeholder="Permasalahan">-->
                                </form>
                            </div>
                            <div data-step="8">
                                <form>
                                    <h2 class="fs-title">Form Kasus</h2>
                                    <h3 class="fs-subtitle">Harapan</h3>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="8" cols="80" placeholder="Harapan"></textarea>
                                        <input type="button" name="next" class="submit" value="Simpan">
                                    </div>
                                    
<!--                                    <input type="text" name="harapan" placeholder="Harapan">-->
                                    
                                </form>

                            </div>

                        </div>

                    </div>
                    <!-- ini steps -->
                </div>
            </div>
    </div>

    <!-- <div class="col-md-6"> -->



    <!--<fieldset>-->
    <!--</fieldset>-->
    <!--<fieldset>-->

    <!--        
    <input type="button" name="previous" class="previous" value="Kembali">-->
    <!--<input type="button" name="next" class="next" value="Lanjut">    </fieldset>-->
    <!--<fieldset>-->
<!--    <h2 class="fs-title">Form Kasus</h2>
    <h3 class="fs-subtitle">Harapan</h3>
    <input type="text" name="harapan" placeholder="Harapan">
    <input type="button" name="next" class="submit" value="Simpan">
    </fieldset>-->

<script type="text/javascript">
    $(function(){
        $('#datetimepicker4').datetimepicker();
    });
</script>

</body>

<?php

?>