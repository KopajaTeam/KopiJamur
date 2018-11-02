<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 15/05/2018
 * Time: 08.54
 */
?>

<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title"><h4>Data Tenda</h4></div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Input Tenda</span><br>
                    <div class="row">
                        <div class="col s12">
                            <?php echo form_open_multipart('Tenda/');?>
                            <?php echo @$error;?>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">photo</i>
                                    <input id="nama" disabled value="<?php echo @$tenda['nama_tenda']?>" name="nama" type="text" class="validate">
                                    <label class="active">Nama Tenda</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">view_list</i>
                                    <select name="alat" id="alat" class="js-states browser-default" tabindex="-1" style="width: 100%; margin-left: 3rem">
                                        <option>Pilih Alat - Alat Tenda</option>
                                        <?php foreach ($alat as $data_alat) { ?>
                                            <option value="<?php echo $data_alat->id?>"><?php echo $data_alat->nama;?></option>
                                        <?php }?>

                                        </optgroup>
                                    </select>
                                    <label class="active">Pilih Alat - Alat Tenda</label>
                                </div>
                                <div class="input-field col s3">
                                    <i class="material-icons prefix">list</i>
                                    <input id="jumlah" name="jumlah" type="number" class="validate">
                                    <label>Jumlah Barang</label>
                                </div>

                                <div class="input-field col s3">
                                    <button type="button" class="waves-effect waves-light btn btn-large btn-floating green z-depth-1 add-row"><i class="large material-icons">add</i></button>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col s12">
                                    <table class="bordered highlight" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>Nama Alat Tenda</th>
                                            <th>Jumlah</th>
                                            <th width="10%">EDIT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

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
<script type="text/javascript">
    $(document).ready(function(){
        $(".add-row").click(function(){
            var alat = $("#alat").find(":selected").text();
            var jumlah = $("#jumlah").val();
            var markup = "<tr>" +
                "<td>"+ alat +"</td>" +
                "<td>"+ jumlah +"</td>" +
                "<td><button type=\"button\" onclick=\"deleteRow(this)\" name=\"record\" class=\"hapus-row waves-effect waves-light btn btn-xs btn-floating red\"><i class=\"material-icons\">delete</i></button></td>" +
                "</tr>";
            $("table tbody").append(markup);
        });
    });

    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("myTable").deleteRow(i);
    }
</script>