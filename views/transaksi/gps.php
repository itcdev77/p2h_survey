<?php hakAkses(['admin', 'user']);
?>


<script>
    function submit(x) {
        if (x == 'add') {
            // kosong
        } else {
            $('#detailModal .modal-title').html('Detail Transaksi Stok');
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

                <form class="formcoba" action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">

                        <label for="text">Nama<font color="Red">*</font></label>

                        <input class="form-control" type="text" name="nama" value="" readonly required />

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

                        <label for="dep">Nama GPS Geodetic<font color="Red">*</font> : </label>

                        <select class="form-control" name="nama_alat" required />

                        <option disabled selected value>-Pilih-</option>

                        <option>Total Station 01</option>

                        <option>Total Station 02</option>


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


                        </table>

                        <!-- end of table -->

                    </div>

                    <div class="form-group">

                        <label for="nik">Catatan</label>

                        <input class="form-control" type="text" name="catatan" placeholder="Jawaban Anda" />

                    </div>

                    <input type="submit" class="btn btn-success btn-block alert_notif" name="sub" value="Kirim" />

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