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
        <input id="nama" value="<?php echo @$customer['nama']?>" name="nama" type="text" class="validate">
        <label for="Nama Customer">Nama Customer</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="alamat" name="alamat" class="materialize-textarea"><?php echo @$customer['alamat']?></textarea>
        <label for="alamat">Alamat</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">phone</i>
        <input id="no" name="no" value="<?php echo @$customer['no_telp']?>" type="text" class="validate">
        <label for="No Telpon">NO. Telpon</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">photo</i>
        <input id="foto_ktp" name="foto_ktp" type="file" class="validate">
        <label class="active">Foto KTP</label>
    </div>
</div>