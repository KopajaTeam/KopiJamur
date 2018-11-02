<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 14.26
 */
?>

<div class="row">
    <div class="input-field col s6 ">
        <i class="material-icons prefix">today</i>
        <input id="tgl_sewa" value="<?php echo @$penyewaan['tgl_sewa']?>" name="tgl_sewa" type="Date" class="validate">
        <label class="active">Tanggal Sewa</label>
    </div>
    <div class="input-field col s6">
        <i class="material-icons prefix">today</i>
        <input id="tgl_kembali" name="tgl_kembali" value="<?php echo @$penyewaan['tgl_kembali']?>" type="Date" class="validate">
        <label class="active">Tanggal Kembali</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">phone</i>
        <input id="alamat" name="alamat" value="<?php echo @$penyewaan['alamat']?>" type="text" class="validate">
        <label <?php if (isset($penyewaan['alamat'])): ?>
             class="active"
         <?php endif ?>>Alamat</label>
    </div>
</div>