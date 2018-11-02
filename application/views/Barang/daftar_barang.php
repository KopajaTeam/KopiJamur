<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.31
 */
?>
<?php echo form_open('Barang/delete');?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title page-center"><h4>Data Barang</h4></div>

        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <div class="menu-atas">
                    <span id="modal"><?php echo $this->Fungsi_Tampilan->Modal_Hapus("hapus"); ?></span>
                    <span id="alert"><?php echo $this->Fungsi_Tampilan->Alert_Hapus(); ?></span>
                    <div class="chip z-depth-1 pilih-del" style="">
                        <span class="baris_dipilih" id="jumlah_pilih">0 Dipilih</span>
                    </div>
                    <a href="<?php echo base_url()?>Barang/input" class="waves-effect waves-light btn btn-large btn-floating green z-depth-1 btn-tambah"><i class="large material-icons">add</i></a>
                    </div>
                    <br>
                    <table id="example" class="display responsive-table datatable-example ">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="pilih_semua" class="checkbox"><label for="pilih_semua">#</label> </th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Keterangan</th>
                            <th>Gambar</th>
                            <th width="10%">OPSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($barang as $data){ ?>
                        <tr>
                            <td><input class="checkbox id_checkbox" type="checkbox" name="id[]" id="<?php echo $data->id ?>" value="<?php echo $data->id ?>">
                                <label for="<?php echo $data->id ?>"><?php echo $no ?></label>
                            <td><?php echo $data->nama_barang?></td>
                            <td><?php echo $data->jenis_barang?></td>
                            <td><?php echo $data->harga?></td>
                            <td><?php echo $data->jumlah?></td>
                            <td><?php echo $data->satuan?></td>
                            <td><?php echo $data->keterangan?></td>
                            <td><?php echo $data->gambar?></td>
                            <td>
<!--                                <a class="waves-effect waves-light btn btn-xs btn-floating red"><i class="material-icons">delete</i></a>-->
<!--                                <a href="--><?php //echo base_url().'Customer/edit/'.$data->id?><!--" class="waves-effect waves-light btn btn-xs btn-floating orange"><i class="material-icons">edit</i></a>-->
                                <?php echo $this->Fungsi_Tampilan->Modal_Edit($data->id, "Barang/edit/".$data->id); ?>
                            </td>
                        </tr>
                        <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php echo form_close();?>
<?php echo $this->Fungsi_Tampilan->Fungsi_JS_Hapus(); ?>