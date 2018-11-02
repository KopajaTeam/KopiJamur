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
            <i class="material-icons prefix">view_list</i>
        <select name="ptgs" class="js-states browser-default" tabindex="-1" style="width: 100%;margin-left: 3rem !important;" id="basic">
            <option>Pilih Petugas Survei</option>
            <?php foreach ($petugas as $petugas_survei) { ?>
            <option 
            <?php if ($petugas_survei->id == @$data_survei['tmst_petugas_survei_id']): ?>
                selected
            <?php endif ?>
            value="<?php echo $petugas_survei->id?>"><?php echo $petugas_survei->nama?></option>
            <?php }?>
               
                </optgroup>
            </select>
            <label class="active">Pilih Petugas</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">label</i>
        <input id="tgl_survei" value="<?php echo @$data_survei['tgl_survei']?>" name="tgl_survei" type="Date" class="validate">
        <label class="active">Tanggal Survei</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">transform</i>
        <input id="lokasi" name="lokasi" value="<?php echo @$data_survei['lokasi']?>" type="text" class="validate">
        <label <?php if (isset($data_survei['lokasi'])): ?>
             class="active"
         <?php endif ?>>Lokasi</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">list</i>
        <input id="luas_lokasi" name="luas_lokasi" value="<?php echo @$data_survei['luas_lokasi']?>" type="text" class="validate">
        <label <?php if (isset($data_survei['luas_lokasi'])): ?>
             class="active"
         <?php endif ?>>Luas Lokasi</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">comment</i>
        <textarea id="keterangan" name="keterangan" class="materialize-textarea"><?php echo @$data_survei['keterangan']?></textarea>
        <label
        <?php if (isset($data_survei['keterangan'])): ?>
             class="active"
         <?php endif ?> >Keterangan</label>
    </div>
</div>