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
        <input id="nama_depan" value="<?php echo @$user['nama_depan']?>" name="nama_depan" type="text" class="validate">
        <label for="Nama Depan">Nama Depan</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <textarea id="nama_belakang" name="nama_belakang" class="materialize-textarea"><?php echo @$user['nama_belakang']?></textarea>
        <label for="Nama Belakang">Nama Belakang</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_box</i>
        <input id="username" name="username" value="<?php echo @$user['username']?>" type="text" class="validate">
        <label for="Username">Username</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">vpn_key</i>
        <input id="password" name="password" value="<?php echo @$user['password']?>" type="text" class="validate">
        <label for="Pasword">Password</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">alarm_on</i>
        <input id="last_login" name="last_login" value="<?php echo @$user['last_login']?>" type="text" class="validate">
        <label for="Last Login">Last Login</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">format_list_numbered</i>
        <input id="level" name="level" value="<?php echo @$user['level']?>" type="text" class="validate">
        <label for="Level">Level</label>
    </div>
</div>