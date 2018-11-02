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
        <i class="material-icons prefix">label</i>
        <input id="nama" value="<?php echo @$alat_tenda['nama']?>" name="nama" type="text" class="validate">
        <label <?php if (isset($alat_tenda['nama'])): ?>
             class="active"
         <?php endif ?>>Nama Alat Tenda</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">transform</i>
        <input id="ukuran" name="ukuran" value="<?php echo @$alat_tenda['ukuran']?>" type="text" class="validate">
        <label <?php if (isset($alat_tenda['ukuran'])): ?>
             class="active"
         <?php endif ?>>Ukuran</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">list</i>
        <input id="stok" name="stok" value="<?php echo @$alat_tenda['stok']?>" type="text" class="validate">
        <label <?php if (isset($alat_tenda['plat_no'])): ?>
             class="active"
         <?php endif ?>>Stock</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">spellcheck</i>
        <input id="satuan" name="satuan" value="<?php echo @$alat_tenda['satuan']?>" type="text" class="validate">
        <label <?php if (isset($alat_tenda['satuan'])): ?>
             class="active"
         <?php endif ?>>Satuan</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">comment</i>
        <textarea id="keterangan" name="keterangan" class="materialize-textarea"><?php echo @$alat_tenda['keterangan']?></textarea>
        <label
        <?php if (isset($alat_tenda['keterangan'])): ?>
             class="active"
         <?php endif ?> >Keterangan</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">photo</i>
        <input id="gambar" name="gambar" type="file" class="validate">
        <label class="active">GAMBAR</label>
    </div>
</div>