<?php hakAkses(['admin', 'user']);
?>


<script>
    function submit(x) {
        if (x == 'add') {
            // kosong
        } else {
            $('#detailModal .modal-title').html('Detail Transaksi Stok');

            // Detail awal..
            $('[name="nama"]').val("");
            $('[name="tanggal"]').val("");
            $('[name="lokasi_kerja"]').val("");
            $('[name="pilih_gps"]').val("");
            $('[name="no_seri"]').val("");
            $('[name="j_kalibrasi"]').val("");

            // titik yang ada keteranganya
            $('[name="b_reciever"]').val("");
            $('[name="led_jaringan"]').val("");
            $('[name="r_antena"]').val("");
            $('[name="extension"]').val("");
            $('[name="i_battery"]').val("");
            $('[name="c_battery"]').val("");
            $('[name="t_power"]').val("");
            $('[name="p_battery"]').val("");
            $('[name="t_port_usb"]').val("");
            $('[name="p_usb"]').val("");
            $('[name="b_slot"]').val("");
            $('[name="t_adapter"]').val("");
            $('[name="tmbl_adapter"]').val("");
            $('[name="b_remote"]').val("");
            $('[name="ld_remote"]').val("");
            $('[name="rc_ib"]').val("");
            $('[name="pen_remote"]').val("");
            $('[name="tk_remote"]').val("");
            $('[name="sf_controller"]').val("");
            $('[name="skrp_remote"]').val("");
            $('[name="rc_mikro_usb"]').val("");
            $('[name="rc_usb"]').val("");
            $('[name="rc_memory_card"]').val("");
            $('[name="rc_charger"]').val("");
            $('[name="tribach"]').val("");
            $('[name="sekrup_abc"]').val("");
            $('[name="clamp_pengunci"]').val("");
            $('[name="tribach_adptor"]').val("");
            $('[name="tb_nv_bulat"]').val("");
            $('[name="stick"]').val("");

            //catatan
            $('[name="catatan"]').val("");

            // keterangan 1 - 21
            $('[name="ket1"]').val("");
            $('[name="ket2"]').val("");
            $('[name="ket3"]').val("");
            $('[name="ket4"]').val("");
            $('[name="ket5"]').val("");
            $('[name="ket6"]').val("");
            $('[name="ket7"]').val("");
            $('[name="ket8"]').val("");
            $('[name="ket9"]').val("");
            $('[name="ket10"]').val("");
            $('[name="ket11"]').val("");
            $('[name="ket12"]').val("");
            $('[name="ket13"]').val("");
            $('[name="ket14"]').val("");
            $('[name="ket15"]').val("");
            $('[name="ket16"]').val("");
            $('[name="ket17"]').val("");
            $('[name="ket18"]').val("");
            $('[name="ket19"]').val("");
            $('[name="ket20"]').val("");
            $('[name="ket21"]').val("");
            $('[name="ket22"]').val("");
            $('[name="ket23"]').val("");
            $('[name="ket24"]').val("");
            $('[name="ket25"]').val("");
            $('[name="ket26"]').val("");
            $('[name="ket27"]').val("");
            $('[name="ket28"]').val("");
            $('[name="ket29"]').val("");
            $('[name="ket30"]').val("");

            $('[name="tambah"]').hide();
            $('[name="input_gps"]').show();

            $.ajax({
                type: "POST",
                data: {
                    id: x
                },
                url: '<?= base_url(); ?>process/view_prodev.php',
                dataType: 'json',
                success: function(data) {

                    // var formattedPrice = 'Rp. ' + data.price;

                    $('[name="idbarang"]').val(data.idbarang);
                    $('[name="merek_id"]').val(data.merek_id).trigger('change');
                    $('[name="kategori_id"]').val(data.kategori_id).trigger('change');
                    $('[name="deskripsi"]').val(data.deskripsi);
                    $('[name="price"]').val(data.price);
                    $('[name="stok"]').val(data.stok);
                    $('[name="kode_budget"]').val(data.kode_budget);
                    $('[name="ket"]').val(data.ket);
                    $('[name="departemen"]').val(data.departemen);
                    $('[name="stok_upd"]').val(data.stok_upd);
                    $('[name="di_ambil"]').val(data.di_ambil);
                    $('[name="waktu_trnsk"]').val(data.waktu_trnsk);

                    //split budget
                    // $('[name="split"]').val(data.split);
                    // $('[name="split-budget"]').val(data.split_budget);
                }
            });
        }
    }
</script>


<!-- Begin Page Content -->

<?php hakAkses(['admin', 'user']); ?>


<script>
    function submit(x) {
        if (x == 'add') {
            // kosong
        } else {
            $('#detailModal .modal-title').html('Detail Transaksi Price Per Unit');
            $('[name="tambah"]').hide();
            $('[name="ubah"]').show();

            $.ajax({
                type: "POST",
                data: {
                    id: x
                },
                url: '<?= base_url(); ?>process/view_prodev.php',
                dataType: 'json',
                success: function(data) {

                    // var formattedPrice = 'Rp. ' + data.price;

                    $('[name="idbarang"]').val(data.idbarang);
                    $('[name="merek_id"]').val(data.merek_id).trigger('change');
                    $('[name="kategori_id"]').val(data.kategori_id).trigger('change');
                    $('[name="deskripsi"]').val(data.deskripsi);
                    $('[name="price"]').val(data.price);
                    $('[name="stok"]').val(data.stok);
                    $('[name="kode_budget"]').val(data.kode_budget);
                    $('[name="ket"]').val(data.ket);
                    $('[name="departemen"]').val(data.departemen);
                    $('[name="stok_upd"]').val(data.stok_upd);
                    $('[name="di_ambil"]').val(data.di_ambil);
                    $('[name="waktu_trnsk"]').val(data.waktu_trnsk);

                    //split budget
                    // $('[name="split"]').val(data.split);
                    // $('[name="split-budget"]').val(data.split_budget);
                }
            });
        }
    }
</script>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">FORM P2H GPS GEODETIC</h1>
        </div>

        <div class="row">

            <div class="col-md-6">

                <p>Sebuku Coal Group (Pemeliharaan dan Pemeriksaan Harian)</p>

                <form class="formcoba" action="<?= base_url(); ?>process/act_p2h.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">

                        <label for="text">Nama<font color="Red">*</font></label>

                        <input class="form-control" type="text" name="nama" value="" required />

                    </div>

                    <div class="form-group">

                        <label for="text">Tanggal<font color="Red">*</font></label>

                        <input class="form-control" type="datetime-local" name="tanggal" placeholder="Jawaban Anda" required />

                    </div>

                    <div class="form-group">

                        <label for="text">Lokasi Kerja<font color="Red">*</font></label>

                        <input class="form-control" type="text" name="lokasi_kerja" placeholder="Jawaban Anda" required />

                    </div>

                    <div class="form-group">

                        <label for="dep">Pilih GPS Geodetic<font color="Red">*</font> : </label>

                        <select class="form-control" name="pilih_gps" required />

                        <option disabled selected value>-Pilih-</option>

                        <!-- ganti dengan nama gps!!! -->
                        <option>GPS 01</option>

                        <option>GPS 02</option>


                        </select>

                    </div>

                    <div class="form-group">

                        <label for="text">S/N Alat<font color="Red">*</font></label>

                        <input class="form-control" type="text" name="no_seri" placeholder="Jawaban Anda" required />

                    </div>

                    <div class="form-group">

                        <label for="text">Jadwal Kalibrasi<font color="Red">*</font></label>

                        <input class="form-control" type="datetime-local" name="j_kalibrasi" placeholder="Jawaban Anda" required />

                    </div>

                    <div class="form-group">

                        <label for="nik">Kondisi Alat<font color="Red">*</font> :</label>

                        <table class="table">

                            <tr valign="middle">

                                <th></th>

                                <th>Layak</th>

                                <th>Tidak<br>Layak</th>

                                <th>Keterangan</th>

                            </tr>

                            <tr>
                                <td colspan="4"><b><u>
                                            <h4>
                                                <font color='green'>Reciever GR5</font>
                                            </h4>
                                        </u></b></td>
                            </tr>

                            <td><label for="nik">1. Body Reciever</label></td>

                            <td align="center"><input type="radio" name="b_reciever" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="b_reciever" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket1" /></td>

                            </tr>

                            </tr>

                            <td><label for="nik">2. LED Jaringan</label></td>

                            <td align="center"><input type="radio" name="led_jaringan" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="led_jaringan" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket2" /></td>

                            </tr>

                            </tr>

                            <td><label for="nik">3. Radio Antena</label></td>

                            <td align="center"><input type="radio" name="r_antena" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="r_antena" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket3" /></td>

                            </tr>

                            </tr>

                            <td><label for="nik">4. Extension</label></td>

                            <td align="center"><input type="radio" name="extension" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="extension" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket4" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">5. Internal Battery</label></td>

                            <td align="center"><input type="radio" name="i_battery" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="i_battery" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket5" /></td>

                            </tr>

                            </tr>

                            <td><label for="nik">6. Charger Battery</label></td>

                            <td align="center"><input type="radio" name="c_battery" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="c_battery" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket6" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">Tombol:</h5>
                                </td>
                            </tr>


                            </tr>

                            <td><label for="nik">7. Power</label></td>

                            <td align="center"><input type="radio" name="t_power" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="t_power" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket7" /></td>

                            </tr>

                            </tr>

                            <td><label for="nik">8. Port Battery</label></td>

                            <td align="center"><input type="radio" name="p_battery" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="p_battery" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket8" /></td>


                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">Port:</h5>
                                </td>
                            </tr>

                            </tr>

                            <td><label for="nik">9. Tutup Port USB</label></td>

                            <td align="center"><input type="radio" name="t_port_usb" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="t_port_usb" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket9" /></td>

                            </tr>

                            <td><label for="nik">10. USB</label></td>

                            <td align="center"><input type="radio" name="p_usb" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="p_usb" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket10" /></td>

                            </tr>

                            </tr>

                            <td><label for="nik">11. Battery Slot</label></td>

                            <td align="center"><input type="radio" name="b_slot" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="b_slot" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket11" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">Quick Release Adapter:</h5>
                                </td>
                            </tr>

                            </tr>

                            <td><label for="nik">12. Tutup Adapter</label></td>

                            <td align="center"><input type="radio" name="t_adapter" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="t_adapter" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket12" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">13. Tombol Adapter</label></td>

                            <td align="center"><input type="radio" name="tmbl_adapter" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="tmbl_adapter" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket13" /></td>

                            </tr>

                            <tr>
                                <td colspan="4"><b><u>
                                            <h4>
                                                <font color='green'>Remote Controller</font>
                                            </h4>
                                        </u></b></td>
                            </tr>

                            </tr>

                            <td><label for="nik">14. Body Remote</label></td>

                            <td align="center"><input type="radio" name="b_remote" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="b_remote" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket14" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">15. Layar Display Remote</label></td>

                            <td align="center"><input type="radio" name="ld_remote" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="ld_remote" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket15" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">16. Internal Battery</label></td>

                            <td align="center"><input type="radio" name="rc_ib" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="rc_ib" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket16" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">17. Pen Remote</label></td>

                            <td align="center"><input type="radio" name="pen_remote" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="pen_remote" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket17" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">18. Tombol Keypad Remote</label></td>

                            <td align="center"><input type="radio" name="tk_remote" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="tk_remote" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket18" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">19. Software Controller</label></td>

                            <td align="center"><input type="radio" name="sf_controller" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="sf_controller" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket19" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">20. Sekrup Remote</label></td>

                            <td align="center"><input type="radio" name="skrp_remote" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="skrp_remote" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket20" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">Port:</h5>
                                </td>
                            </tr>

                            </tr>

                            <td><label for="nik">21. Mikro USB</label></td>

                            <td align="center"><input type="radio" name="rc_mikro_usb" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="rc_mikro_usb" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket21" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">22. USB</label></td>

                            <td align="center"><input type="radio" name="rc_usb" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="rc_usb" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket22" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">23. Memory Card</label></td>

                            <td align="center"><input type="radio" name="rc_memory_card" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="rc_memory_card" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket23" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">24. Charger Internal Battery</label></td>

                            <td align="center"><input type="radio" name="rc_charger" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="rc_charger" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket24" /></td>

                            </tr>


                            <tr>
                                <td colspan="4"><b><u>
                                            <h4>
                                                <font color='green'>Tribach</font>
                                            </h4>
                                        </u></b></td>
                            </tr>

                            <td><label for="nik">25. Tribach</label></td>

                            <td align="center"><input type="radio" name="tribach" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="tribach" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket25" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">26. Sekrup ABC</label></td>

                            <td align="center"><input type="radio" name="sekrup_abc" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="sekrup_abc" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket26" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">27. Clamp / Pengunci</label></td>

                            <td align="center"><input type="radio" name="clamp_pengunci" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="clamp_pengunci" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket27" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">28. Adaptor</label></td>

                            <td align="center"><input type="radio" name="tribach_adptor" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="tribach_adptor" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket28" /></td>

                            </tr>
                            </tr>

                            <td><label for="nik">29. Nivo Bulat</label></td>

                            <td align="center"><input type="radio" name="tb_nv_bulat" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="tb_nv_bulat" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket29" /></td>

                            </tr>

                            <tr>
                                <td style="color: green;">
                                    <label for="nik"><b>30. Stick</b></label>
                                </td>

                                <td align="center"><input type="radio" name="stick" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="stick" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket30" /></td>
                            </tr>



                        </table>

                        <!-- end of table -->

                    </div>

                    <div class="form-group">

                        <label for="nik">Catatan</label>

                        <input class="form-control" type="text" name="catatan" placeholder="Jawaban Anda" />

                    </div>

                    <input type="submit" class="btn btn-success btn-block alert_notif" name="input_gps" value="Kirim" />

                    <br><br><br><br><br>

                </form>

            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal View Detail -->

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?= base_url(); ?>process/act_prodev.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <input type="hidden" name="idbarang" class="form-control">
                                <input type="hidden" name="kode_budget" class="form-control">


                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="deskripsi">Kode Budget:</label>
                                        <input width="20" type="text" class="form-control" name="kode_budget" id="kode_budget" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="deskripsi">Deskripsi:</label>
                                        <input width="20" type="text" class="form-control" name="deskripsi" id="deskripsi" readonly>
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="price"><span style="color: red;">Budget :</span></label>
                                        <input type="number" class="form-control" name="price" id="ambil-price" readonly>
                                    </div>

                                    <div class="col-md-3 mt-3">
                                        <label for="stok">Qty Sebelumnya:</label>

                                        <input type="number" class="form-control text-center" name="stok_upd" id="ambil-stok" readonly>

                                    </div>
                                    <div class="col-md-2 mt-3">
                                        <label for="stok">Qty Update:</label>

                                        <input type="number" class="form-control text-center" name="stok" id="ambil-stok" readonly>

                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="stok">Jumlah Transaksi:</label>

                                        <input type="number" class="form-control text-center" name="di_ambil" id="di_ambil" readonly>

                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="stok">Waktu Transaksi:</label>

                                        <input type="text" class="form-control text-center" name="waktu_trnsk" id="waktu_trnsk" readonly>

                                    </div>


                                </div>

                            </div>
                        </div>


                    </div>


                </div>
            </form>
        </div>
    </div>
</div>

<!-- /.container-fluid -->

<!-- Modal View Detail -->

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?= base_url(); ?>process/act_prodev.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">


                                <input type="hidden" name="idbarang" class="form-control">
                                <input type="hidden" name="kode_budget" class="form-control">


                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="deskripsi">Kode Budget:</label>
                                        <input width="20" type="text" class="form-control" name="kode_budget" id="kode_budget" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="deskripsi">Deskripsi:</label>
                                        <input width="20" type="text" class="form-control" name="deskripsi" id="deskripsi" readonly>
                                    </div>

                                    <?php if ($_SESSION['level'] == 'admin') : ?>
                                        <div class="col-md-6 mt-3">
                                            <label for="price"><span style="color: red;">Budget :</span></label>
                                            <input type="number" class="form-control" name="price" id="ambil-price" readonly>
                                        </div>
                                    <?php endif; ?>

                                    <div class="col-md-3 mt-3">
                                        <label for="stok">Qty Sebelumnya:</label>

                                        <input type="number" class="form-control text-center" name="stok_upd" id="ambil-stok" readonly>

                                    </div>
                                    <div class="col-md-2 mt-3">
                                        <label for="stok">Qty Update:</label>

                                        <input type="number" class="form-control text-center" name="stok" id="ambil-stok" readonly>

                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="stok">Jumlah Transaksi:</label>

                                        <input type="number" class="form-control text-center" name="di_ambil" id="di_ambil" readonly>

                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <label for="stok">Waktu Transaksi:</label>

                                        <input type="text" class="form-control text-center" name="waktu_trnsk" id="waktu_trnsk" readonly>

                                    </div>


                                </div>

                            </div>
                        </div>


                    </div>


                </div>
            </form>
        </div>
    </div>
</div>