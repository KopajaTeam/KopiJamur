<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 14.26
 */
?>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input id="nama" value="<?php echo @$kurir['nama']?>" name="nama" type="text" class="validate">
        <label <?php if (isset($kurir['nama'])): ?>
             class="active"
         <?php endif ?>>Nama Kurir</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">directions_car</i>
        <input id="jenis_kendaraan" name="JenisKendaraan" value="<?php echo @$kurir['jenis_kendaraan']?>" type="text" class="validate">
        <label <?php if (isset($kurir['jenis_kendaraan'])): ?>
             class="active"
         <?php endif ?>>Jenis Kendaraan</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">label</i>
        <input id="plat_no" name="plat" value="<?php echo @$kurir['plat_no']?>" type="text" class="validate">
        <label <?php if (isset($kurir['plat_no'])): ?>
             class="active"
         <?php endif ?>>Plat Nomor Kendaraan</label>
    </div>
</div>
