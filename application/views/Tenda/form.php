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
        <i class="material-icons prefix">photo</i>
        <input id="nama" value="<?php echo @$tenda['nama_tenda']?>" name="nama" type="text" class="validate">
        <label <?php if (isset($tenda['nama_tenda'])): ?>
             class="active"
         <?php endif ?>>Nama Tenda</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">transform</i>
        <input id="ukuran" name="ukuran" value="<?php echo @$tenda['ukuran_tenda']?>" type="text" class="validate">
        <label <?php if (isset($tenda['ukuran_tenda'])): ?>
             class="active"
         <?php endif ?>>Ukuran Tenda</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">comment</i>
        <textarea id="ket" name="ket" class="materialize-textarea"><?php echo @$tenda['keterangan']?></textarea>
        <label <?php if (isset($tenda['ukuran_tenda'])): ?>
             class="active"
         <?php endif ?>>Keterangan</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">photo</i>
        <input id="gambar" name="gambar" type="file" class="validate">
        <label class="active">GAMBAR</label>
    </div>
</div>