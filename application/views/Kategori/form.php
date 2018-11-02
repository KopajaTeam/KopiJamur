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
        <input id="nama_kategori" value="<?php echo @$kategori['nama_kategori']?>" name="nama_kategori" type="text" class="validate">
        <label <?php if (isset($kategori['nama_kategori'])): ?>
             class="active"
         <?php endif ?>>Nama Kategori</label>
    </div>
</div>