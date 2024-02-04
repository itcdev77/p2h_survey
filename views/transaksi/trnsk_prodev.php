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
            <h1 class="h3 mb-0 text-gray-800">FORM P2H TOTAL STATION</h1>
        </div>

        <div class="row">

            <div class="col-md-6">

                <p>Sebuku Coal Group (Pemeliharaan dan Pemeriksaan Harian)</p>

                <form class="formcoba" action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">

                        <label for="text">Nama<font color="Red">*</font></label>

                        <input class="form-control" type="text" name="nama" value="Abelard Jovi John Pangalila (ITC)" readonly required />

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

                        <label for="dep">Tipe Alat<font color="Red">*</font> : </label>

                        <select class="form-control" name="tipe" required />

                        <option disabled selected value>-Pilih-</option>

                        <option>LV 001 - DA 8803 PV</option>

                        <option>LV 002 - DA 8058 PX</option>

                        <option>LV 003 - L 8035 USK</option>

                        <option>LV 004 - L 8034 USK</option>

                        <option>LV 005 - DA 8621 PW</option>

                        <option>LV 006 - DA 8531 PZ </option>

                        <option>LV 007 - DA 8499 PZ</option>

                        <option>LV 008 - L 8093 BE</option>

                        <option>LV 009 - L 8102 BE</option>

                        <option>LV 010 - DA 8775 PY</option>

                        <option>LV 011 - DA 8501 PZ</option>

                        <option>LV 012 - DA 8552 PZ</option>

                        <option>LV 013 - DA 8681 PV</option>

                        <option>LV 014 - DA 8551 PV</option>

                        <option>LV 015 - DA 8553 PV</option>

                        <option>LV 016 - DA 8554 PV</option>

                        <option>LV 017 - DA 8552 PV</option>

                        <option>LV 018 - DA 8520 GK</option>

                        <option>LV 019 - DA 8773 PY</option>

                        <option>LV 021 - DA 8050 GF</option>

                        <option>LV 022 - KT 8834 YC</option>

                        <option>LV 023 - DA 8926 CZ</option>

                        <option>LV 024 - DA 8352 PX</option>

                        <option>LV 025 - DA 8362 PX</option>

                        <option>LV 026 - DA 8361 PX</option>

                        <option>LV 027 TOYOTA INOVA - DA 1086 WJ </option>

                        <option>TOYOTA INOVA - DA 1595 GJ</option>

                        <option>TOYOTA RUSH MANUAL - DA 1712 PQ</option>

                        <option>TOYOTA RUSH MATIC - B 2228 UKW</option>

                        <option>TOYOTA RUSH SILVER - DA 1446 GX</option>

                        <option>TR 01 - DA 8931 PP</option>

                        <option>TR 02 - DA 8629 PS</option>

                        </select>

                    </div>

                    <div class="form-group">

                        <label for="text">KM Awal<font color="Red">*</font></label>

                        <input class="form-control" type="text" name="km_awal" placeholder="Jawaban Anda" required />

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
                                                <font color='green'>Mesin</font>
                                            </h4>
                                        </u></b></td>
                            </tr>

                            <td><label for="nik">1. Oil Engine</label></td>

                            <td align="center"><input type="radio" name="oil_engine" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="oil_engine" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket1" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">2. Air Radiator</label></td>

                                <td align="center"><input type="radio" name="air_radiator" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="air_radiator" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket2" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">3. Air Accu</label></td>

                                <td align="center"><input type="radio" name="air_accu" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="air_accu" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket3" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">4. Minyak Rem</label></td>

                                <td align="center"><input type="radio" name="minyak_rem" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="minyak_rem" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket5" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">5. Minyak Kopling</label></td>

                                <td align="center"><input type="radio" name="minyak_kopling" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="minyak_kopling" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket6" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">6. Oil Stering</label></td>

                                <td align="center"><input type="radio" name="oil_stering" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="oil_stering" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket7" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">7. Vanbelt Alternator & AC</label></td>

                                <td align="center"><input type="radio" name="vanbelt" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="vanbelt" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket8" /></td>

                            </tr>
                            <tr>
                                <td colspan="4"><b><u>
                                            <h4>
                                                <font color='green'>Kabin</font>
                                            </h4>
                                        </u></b></td>
                            </tr>

                            <tr>
                                <td><label for="nik">8. Kondisi Body Sarana</label></td>

                                <td align="center"><input type="radio" name="kondisi_body" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="kondisi_body" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket24" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">9. Kondisi Ban</label></td>

                                <td align="center"><input type="radio" name="kondisi_ban" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="kondisi_ban" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket25" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">10. Kekencangan Baut Roda</label></td>

                                <td align="center"><input type="radio" name="kekencangan_baut_roda" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="kekencangan_baut_roda" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket26" /></td>

                            </tr>

                            <tr>
                                <td colspan="4"><b><u>
                                            <h4>
                                                <font color='green'>Elektrikal</font>
                                            </h4>
                                        </u></b></td>
                            </tr>
                            <tr>

                                <td><label for="nik">11. Lampu Pendek & Panjang</label></td>

                                <td align="center"><input type="radio" name="lampu_pendek_panjang" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="lampu_pendek_panjang" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket11" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">12. Lampu Riting Depan</label></td>

                                <td align="center"><input type="radio" name="lampu_rating_depan" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="lampu_rating_depan" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket15" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">13. Lampu Riting Belakang</label></td>

                                <td align="center"><input type="radio" name="lampu_rating_belakang" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="lampu_rating_belakang" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket16" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">14. Lampu Mundur</label></td>

                                <td align="center"><input type="radio" name="lampu_mundur" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="lampu_mundur" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket13" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">15. Lampu Rem Tangan</label></td>

                                <td align="center"><input type="radio" name="lampu_rem_tangan" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="lampu_rem_tangan" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket9" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">16. Lampu Oil</label></td>

                                <td align="center"><input type="radio" name="lampu_oil" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="lampu_oil" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket10" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">17. Wiper</label></td>

                                <td align="center"><input type="radio" name="wiper" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="wiper" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket4" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">18. Klakson</label></td>

                                <td align="center"><input type="radio" name="klakson" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="klakson" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket18" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">19. Alarm Mundur</label></td>

                                <td align="center"><input type="radio" name="lampu_alarm_mundur" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="lampu_alarm_mundur" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket14" /></td>

                            </tr>


                            <tr>

                                <td><label for="nik">20. Lampu Rotari</label></td>

                                <td align="center"><input type="radio" name="lampu_rotari" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="lampu_rotari" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket12" /></td>

                            </tr>

                            <tr>
                                <td colspan="4"><b><u>
                                            <h4>
                                                <font color='green'>Lain-lain</font>
                                            </h4>
                                        </u></b></td>
                            </tr>
                            <tr>

                                <td><label for="nik">21. Fungsi Brake</label></td>

                                <td align="center"><input type="radio" name="brake" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="brake" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket19" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">22. Stering</label></td>

                                <td align="center"><input type="radio" name="stering" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="stering" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket20" /></td>

                            </tr>


                            <tr>

                                <td><label for="nik">23. Fungsi Handbrake</label></td>

                                <td align="center"><input type="radio" name="fungsi_handbrake" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="fungsi_handbrake" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket22" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">24. Fungsi Copling</label></td>

                                <td align="center"><input type="radio" name="fungsi_copling" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="fungsi_copling" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket21" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">25. Fungsi Double Gardan</label></td>

                                <td align="center"><input type="radio" name="fungsi_double" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="fungsi_double" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket23" /></td>

                            </tr>
                            <tr>
                                <td colspan="4"><b><u>
                                            <h4>
                                                <font color='green'>Kelengkapan</font>
                                            </h4>
                                        </u></b></td>
                            </tr>



                            <tr>

                                <td><label for="nik">26. Radio</label></td>

                                <td align="center"><input type="radio" name="Radio" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="Radio" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket17" /></td>

                            </tr>



                            <tr>

                                <td><label for="nik">27. Bendera LV</label></td>

                                <td align="center"><input type="radio" name="bendera_lv" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="bendera_lv" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket27" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">28. Kotak P3K</label></td>

                                <td align="center"><input type="radio" name="kotak_p3k" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="kotak_p3k" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket28" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">29. Kondisi Tool</label></td>

                                <td align="center"><input type="radio" name="kondisi_tool" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="kondisi_tool" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket29" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">30. Appar</label></td>

                                <td align="center"><input type="radio" name="appar" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="appar" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket30" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">31. Segitiga Pengaman</label></td>

                                <td align="center"><input type="radio" name="segitiga_pengaman" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="segitiga_pengaman" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket31" /></td>

                            </tr>



                        </table>

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