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
        <input id="nama" value="<?php echo @$petugas['nama']?>" name="nama" type="text" class="validate">
        <label <?php if (isset($petugas['nama'])): ?>
             class="active"
         <?php endif ?>>Nama Petugas</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">mode_edit</i>
        <input id="alamat" name="alamat" value="<?php echo @$petugas['alamat']?>" type="text" class="validate">
        <label <?php if (isset($petugas['alamat'])): ?>
             class="active"
         <?php endif ?>>Alamat</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">phone</i>
        <input id="no" name="no" value="<?php echo @$petugas['no_telp']?>" type="number" class="validate">
        <label <?php if (isset($petugas['no_telp'])): ?>
             class="active"
         <?php endif ?>>NO. Telpon</label>
    </div>
</div>
