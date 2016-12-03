<?php
if (!defined('BASEPATH'))
    exit("No direct scripts allowed");
include '../../config/config.php';
include '../../core/insert.php';

$agama = array("Islam", "Katolik", "Protestan", "Buddha", "Hindu", "Konghuchu");
$pendidikan = array("Tidak ada", "SD", "SMP", "SMA", "S1", "S2", "S3");
?>
<!-- multistep form -->
<div id="content-wrapper">
    <section class="content">
        <div class="col-md-6">
            <form>
                <ul id="progressbar">
                    <li>Kasus</li>
                    <li>Pelapor</li>
                    <li>Korban</li>
                    <li>Pelaku</li>
                    <li>Kronologi</li>
                    <li>Upaya</li>
                    <li>Permasalahan</li>
                    <li>Harapan</li>              
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Form Kasus</h2>
                    <h3 class="fs-subtitle">Keterangan Kasus</h3>
                    <input type="text" name="no_reg" placeholder="No. Registrasi">
                    <input type="text" name="tgl" placeholder="Tanggal">
                    <input type="text" name="kasus" placeholder="Jenis Kasus">
                    <input type="text" name="lokasi" placeholder="Lokasi">
                    <input type="button" name="next" class="next" value="Lanjut">
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Form Kasus</h2>
                    <h3 class="fs-subtitle">Keterangan Pelapor</h3>
                    <input type="text" name="id" placeholder="No. Identitas">
                    <input type="text" name="nama" placeholder="Nama">
                    <input type="text" name="alamat" placeholder="Alamat">
                    <input type="text" name="tpt_lahir" placeholder="Tempat Lahir">
                    <input type="date" name="tgl_lahir">
                    <input type="text" name="kontak" placeholder="Kontak">
                    <input type="text" name="hubungan" placeholder="Hubungan dengan Korban">        
                    <input type="button" name="previous" class="previous" value="Kembali">
                    <input type="button" name="next" class="next" value="Lanjut">
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Form Kasus</h2>
                    <h3 class="fs-subtitle">Keterangan Korban</h3>
                    <input type="text" name="id" placeholder="No. Identitas">
                    <input type="text" name="nama" placeholder="Nama">
                    <input type="text" name="alamat" placeholder="Alamat">
                    <input type="text" name="tpt_lahir" placeholder="Tempat Lahir">
                    <input type="date" name="tgl_lahir">
                    <input type="text" name="status" placeholder="Status Nikah">
                    <select name="pdk">
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
                    <select name="agama">
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
                    <input type="text" name="jml_anak" placeholder="Jumlah Anak"> 
                    <input type="text" name="kerja" placeholder="Pekerjaan">
                    <input type="text" name="kontak" placeholder="Kontak">
                    <input type="button" name="previous" class="previous" value="Kembali">
                    <input type="button" name="next" class="next" value="Lanjut">
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Form Kasus</h2>
                    <h3 class="fs-subtitle">Keterangan Pelaku</h3>
                    <input type="text" name="id" placeholder="No. Identitas">
                    <input type="text" name="nama" placeholder="Nama">
                    <input type="text" name="alamat" placeholder="Alamat">
                    <input type="text" name="tpt_lahir" placeholder="Tempat Lahir">
                    <input type="date" name="tgl_lahir">
                    <input type="text" name="alamat" placeholder="Alamat">
                    <select name="pdk">
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
                    <select name="pdk">
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
                    <input type="text" name="kerja" placeholder="Pekerjaan">
                    <input type="text" name="status" placeholder="Status">        
                    <input type="text" name="hubungan" placeholder="Hubungan dengan Korban">        
                    <input type="button" name="previous" class="previous" value="Kembali">
                    <input type="button" name="next" class="next" value="Lanjut">
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Form Kasus</h2>
                    <h3 class="fs-subtitle">Kronologi Kasus</h3>
                    <input type="text" name="krono" placeholder="Kronologi Kasus">
                    <input type="button" name="previous" class="previous" value="Kembali">
                    <input type="button" name="next" class="next" value="Lanjut">    </fieldset>
                <fieldset>
                    <h2 class="fs-title">Form Kasus</h2>
                    <h3 class="fs-subtitle">Upaya</h3>
                    <input type="text" name="upaya" placeholder="Upaya">
                    <input type="button" name="previous" class="previous" value="Kembali">
                    <input type="button" name="next" class="next" value="Lanjut">    </fieldset>
                <fieldset>
                    <h2 class="fs-title">Form Kasus</h2>
                    <h3 class="fs-subtitle">Permasalahan yang dialami</h3>
                    <input type="text" name="masalah" placeholder="Permasalahan">
                    <input type="button" name="previous" class="previous" value="Kembali">
                    <input type="button" name="next" class="next" value="Lanjut">    </fieldset>
                <fieldset>
                    <h2 class="fs-title">Form Kasus</h2>
                    <h3 class="fs-subtitle">Harapan</h3>
                    <input type="text" name="harapan" placeholder="Harapan">
                    <input type="button" name="next" class="submit" value="Simpan">
                </fieldset>
            </form>
        </div>
    </section>
</div>