<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 01/05/2018
 * Time: 12.31
 */
?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title"><h4>Data User</h4></div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <a href="<?php echo base_url()?>User/input" class="waves-effect waves-light btn green"><i class="material-icons left">add</i>Tambah</a>
                    <br>
                    <br>
                    <br>
                    <table id="example" class="display responsive-table datatable-example ">
                        <thead>
                        <tr>
                            <th>Nama Depan</th>
                            <th>Ukuran Belakang</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Last Login</th>
                            <th>Level</th>
                            <th width="10%">OPSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($user as $data){?>
                        <tr>
                            <td><?php echo $data->nama_depan?></td>
                            <td><?php echo $data->ukuran_belakang?></td>
                            <td><?php echo $data->username?></td>
                            <td><?php echo $data->password?></td>
                            <td><?php echo $data->last_login?></td>
                            <td><?php echo $data->level?></td>
                            <td>
                                <a class="waves-effect waves-light btn btn-xs btn-floating red"><i class="material-icons">delete</i></a>
                                <a href="<?php echo base_url().'Tenda/edit/'.$data->id?>" class="waves-effect waves-light btn btn-xs btn-floating orange"><i class="material-icons">edit</i></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

