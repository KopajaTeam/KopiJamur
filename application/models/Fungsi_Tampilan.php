<?php
/**
 * Created by PhpStorm.
 * User: Andis
 * Date: 05/05/2018
 * Time: 17.38
 */

class Fungsi_Tampilan extends CI_Model
{

    function Fungsi_JS_Hapus()
    {
        return "<script type=\"text/javascript\">
                    $('document').ready(function() {
                        $(\"#alert\").show();
                        $(\"#modal\").hide();
                        // checkbox untuk mencentang semua
                        jQuery('#pilih_semua').on('click', function (e) {
                            if ($(this).is(':checked', true)) {
                                $(\".id_checkbox\").prop('checked', true);
                            }
                            else {
                                $(\".id_checkbox\").prop('checked', false);
                            }
                            // mengatur semua jumlah checkbox yang dicentang
                            $(\"#jumlah_pilih\").html($(\"input.id_checkbox:checked\").length + \" Dipilih\");
                            if ($(\"input.id_checkbox:checked\").length == 0) {
                                $(\"#alert\").show();
                                $(\"#modal\").hide();
                            } else {
                                $(\"#alert\").hide();
                                $(\"#modal\").show();
                            }
                        });
                        // mengatur jumlah checkbox tertentu yang dicentang
                        $(\".id_checkbox\").on('click', function (e) {
                            $(\"#jumlah_pilih\").html($(\"input.id_checkbox:checked\").length + \" Dipilih\");
                            if ($(\"input.id_checkbox:checked\").length == 0) {
                                $(\"#alert\").show();
                                $(\"#modal\").hide();
                            } else {
                                $(\"#alert\").hide();
                                $(\"#modal\").show();
                            }
                        });
                    });
                </script>
                ";
    }

    function Modal_Hapus($id)
    {
        return "<a class=\"waves-effect waves-grey btn btn-large btn-floating red modal-trigger\" href=\"#$id\" id='btn-hapus'><i class=\"large material-icons\">delete</i></a>
            <div id=\"$id\" class=\"modal\" style=\"z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 250.516304347826px;\">
                <div class=\"modal-content \">
                    <h4>Apakan Anda Yakin Untuk Menghapus ?</h4>
                </div>
                <div class=\"modal-footer  red darken-2\">
                    <button type='submit' class=\"modal-action waves-effect btn-flat white\"> Hapus</button>
                    <a href=\"#!\" class=\"modal-action modal-close waves-effect btn-flat white-text\"> Kembali</a>
                </div>
            </div>";
    }

    function Modal_Edit($id, $link)
    {
        return "<a class=\"waves-effect waves-light btn btn-xs btn-floating orange modal-trigger\" href=\"#update$id\" id='btn-hapus'><i class=\"material-icons\">edit</i></a>
            <div id=\"update$id\" class=\"modal\" style=\"z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 250.516304347826px;\">
                <div class=\"modal-content \">
                    <h4>Apakan Anda Yakin Untuk Mengedit ?</h4>
                </div>
                <div class=\"modal-footer  orange\">
                    <a href='" . base_url() . $link . "' class=\"modal-action waves-effect btn-flat white\"> Edit</a>
                    <a href=\"#!\" class=\"modal-action modal-close waves-effect btn-flat white-text\"> Kembali</a>
                </div>
            </div>";
    }

    function Modal_Default_Tenda($id, $link)
    {
        return "<a class=\"waves-effect waves-light btn btn-xs btn-floating blue modal-trigger\" href=\"#default$id\" id='btn-hapus'><i class=\"material-icons\">list</i></a>
            <div id=\"default$id\" class=\"modal\" style=\"z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 250.516304347826px;\">
                <div class=\"modal-content \">
                    <h4>Apakan Anda Yakin Untuk Mengedit Default Tenda ?</h4>
                </div>
                <div class=\"modal-footer  blue\">
                    <a href='" . base_url() . $link . "' class=\"modal-action waves-effect btn-flat white\"> Edit</a>
                    <a href=\"#!\" class=\"modal-action modal-close waves-effect btn-flat white-text\"> Kembali</a>
                </div>
            </div>";
    }

    function Alert_Hapus()
    {
        $button = "<a class=\"waves-effect waves-grey btn btn-large btn-floating white disabled alert\"><i class=\"large material-icons\">delete</i></a>";
        $alert = "<script type=\"text/javascript\">
                        $('document').ready(function() {
                            document.querySelector('.alert').onclick = function(){
                                swal({
                                    title: \"Silakan Pilih Data Terlebih Dahulu\",
                                    type: \"warning\",  });
                            };
                        });
                    </script>";
        return $button . $alert;
    }


}
