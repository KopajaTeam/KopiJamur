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
        <select name="kategori" class="js-states browser-default" tabindex="-1" style="width: 100%" id="basic">
            <option>Pilih Kategori</option>
            <?php foreach ($kategori as $data_kategori) { ?>
            <option 
            <?php if ($data_kategori->id == @$barang['tmst_kategori']): ?>
                selected
            <?php endif ?>
            value="<?php echo $data_kategori->id?>"><?php echo $data_kategori->nama_kategori;?></option>
            <?php }?>
               
                </optgroup>
            </select>
            <label class="active">Pilih Kategori</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">label</i>
        <input id="nama_barang" value="<?php echo @$barang['nama_barang']?>" name="nama_barang" type="text" class="validate">
        <label <?php if (isset($barang['nama_barang'])):?>
            class="active"
        <?php endif ?>>Nama Barang</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">layers</i>
        <input id="jenis_barang" value="<?php echo @$barang['jenis_barang']?>" name="jenis_barang" type="text" class="validate">
        <label <?php if (isset($barang['jenis_barang'])):?>
            class="active"
        <?php endif ?>>Jenis Barang</label>
        </label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">shopping_cart</i>
        <input id="harga" name="harga" value="<?php echo @$barang['harga']?>" type="number" class="validate">
        <label <?php if (isset($barang['harga'])):?>
            class="active"
        <?php endif ?>>Harga Barang</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">list</i>
        <input id="jumlah" name="jumlah" value="<?php echo @$barang['jumlah']?>" type="number" class="validate">
        <label <?php if (isset($barang['jumlah'])):?>
            class="active"
        <?php endif ?>>Jumlah Barang</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">spellcheck</i>
        <input id="satuan" name="satuan" value="<?php echo @$barang['satuan']?>" type="text" class="validate">
        <label <?php if (isset($barang['satuan'])):?>
            class="active"
        <?php endif ?>>satuan Barang</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">comment</i>
        <textarea id="keterangan" name="keterangan" class="materialize-textarea"><?php echo @$barang['keterangan']?></textarea>
        <label <?php if (isset($barang['keterangan'])): ?>
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