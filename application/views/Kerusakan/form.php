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
        <select name="brg" class="js-states browser-default" tabindex="-1" style="width: 100%" id="basic">
            <option>Pilih Barang</option>
            <?php foreach ($barang as $data_barang) { ?>
            <option 
            <?php if ($data_barang->id == @$kerusakan['tmst_barang_id']): ?>
                selected
            <?php endif ?>
            value="<?php echo $data_barang->id?>"><?php echo $data_barang->nama_barang?></option>
            <?php }?>
               
                </optgroup>
            </select>
            <label class="active">Pilih Barang</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">comment</i>
        <textarea id="biaya" name="biaya" class="materialize-textarea"><?php echo @$kerusakan['keterangan']?></textarea>
        <label
        <?php if (isset($kerusakan['keterangan'])): ?>
             class="active"
         <?php endif ?> >Keterangan Kerusakan</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">shopping_cart</i>
        <input id="biaya" name="biaya" value="<?php echo @$kerusakan['biaya']?>" type="number" class="validate">
        <label <?php if (isset($kerusakan['biaya'])): ?>
             class="active"
         <?php endif ?>>Biaya Kerusakan</label>
    </div>
</div>
<div class="row"> 
    <div class="input-field col s12">
        <i class="material-icons prefix">reorder</i>
        <input id="tipe" name="tipe" value="<?php echo @$kerusakan['tipe']?>" type="text" class="validate">
        <label <?php if (isset($kerusakan['tipe'])): ?>
             class="active"
         <?php endif ?>>Tipe Kerusakan</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">today</i>
        <input id="tanggal" name="tanggal" value="" type="Date" class="validate">
        <label class="active">Tanggal Kerusakan</label>
    </div>
</div>
