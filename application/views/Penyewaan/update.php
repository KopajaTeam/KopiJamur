<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 14.41
 */
?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title"><h4>Data Penyewaan</h4></div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Edit Data Penyewaan</span><br>
                    <div class="row">
                        <div class="col s12">
                            <?php echo form_open('Penyewaan/update');
                            echo form_hidden('id', $this->uri->segment(3));?>

                            <?php $this->load->view($form)?>
                            <button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</>

                            <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>