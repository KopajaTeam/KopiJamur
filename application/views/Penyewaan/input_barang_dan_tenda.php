<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 13.59
 */
?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title"><h4>Data Input Barang dan Tenda</h4></div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Input Barang dan Tenda</span><br>
                    <div class="row">
                        <div class="col s12">
                            <?php echo form_open_multipart('Penyewaan/insert');?>
                            <?php echo @$error;?>


                                <div class="row">
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">view_list</i>
                                    <select name="barang" id="barang" class="js-states browser-default" tabindex="-1" style="width: 100%; margin-left: 3rem">
                                        <option>Pilih Barang</option>
                                        <?php foreach ($barang as $data_barang) { ?>
                                            <option value="<?php echo $data_barang->id?>"><?php echo $data_barang->nama_barang;?></option>
                                        <?php }?>

                                        </optgroup>
                                    </select>
                                    <label class="active">Pilih Barang</label>
                                </div>

                                <div class="input-field col s3">
                                    <i class="material-icons prefix">list</i>
                                    <input id="jumlah" name="jumlah" type="number" class="validate">
                                    <label>Jumlah Barang</label>
                                </div>

                                <div class="input-field col s3">
                                    <i class="material-icons prefix">list</i>
                                    <input id="harga" name="harga" type="number" class="validate">
                                    <label>Harga Barang</label>
                                </div>

                                <div class="input-field col s1">
                                    <button type="button" class="waves-effect waves-light btn btn-large btn-floating green z-depth-1 add-row"><i class="large material-icons">add</i></button>

                                </div>
                                <div class="row">
                                <div class="col s12">
                                    <table class="bordered highlight" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Barang</th>
                                            <th>Harga</th>
                                            <th width="10%">EDIT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                            <button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</>

                            <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">LANJUT</button>
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
            var barang = $("#barang").find(":selected").text();
            var jumlah = $("#jumlah").val();
            var harga = $("#harga").val();
            var markup = "<tr>" +
                "<td>"+ barang +"</td>" +
                "<td>"+ jumlah +"</td>" +
                "<td>"+ harga +"</td>" +
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

<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 13.59
 */
?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Input Barang dan Tenda</span><br>
                    <div class="row">
                        <div class="col s12">
                            <?php echo form_open_multipart('Penyewaan/insert');?>
                            <?php echo @$error;?>


                                <div class="row">
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">view_list</i>
                                    <select name="tenda" id="tenda" class="js-states browser-default" tabindex="-1" style="width: 100%; margin-left: 3rem">
                                        <option>Pilih Tenda</option>
                                        <?php foreach ($tenda as $data_tenda) { ?>
                                            <option value="<?php echo $data_barang->id?>"><?php echo $data_tenda->nama_tenda;?></option>
                                        <?php }?>

                                        </optgroup>
                                    </select>
                                    <label class="active">Pilih Tenda</label>
                                </div>

                                <div class="input-field col s3">
                                    <i class="material-icons prefix">list</i>
                                    <input id="jumlahtenda" name="jumlahtenda" type="number" class="validate">
                                    <label>Jumlah Tenda</label>
                                </div>

                                <div class="input-field col s3">
                                    <i class="material-icons prefix">list</i>
                                    <input id="hargatenda" name="hargatenda" type="number" class="validate">
                                    <label>Harga Tenda</label>
                                </div>

                                <div class="input-field col s1">
                                    <button type="button" class="waves-effect waves-light btn btn-large btn-floating green z-depth-1 add-row"><i class="large material-icons">add</i></button>

                                </div>
                                <div class="row">
                                <div class="col s12">
                                    <table class="bordered highlight" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>Nama Tenda</th>
                                            <th>Jumlah Tenda</th>
                                            <th>Harga</th>
                                            <th width="10%">EDIT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                            <button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</>

                            <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">LANJUT</button>
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
            var tenda = $("#tenda").find(":selected").text();
            var jumlahtenda = $("#jumlahtenda").val();
            var hargatenda = $("#hargatenda").val();
            var markup = "<tr>" +
                "<td>"+ tenda +"</td>" +
                "<td>"+ jumlahtenda +"</td>" +
                "<td>"+ hargatenda +"</td>" +
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