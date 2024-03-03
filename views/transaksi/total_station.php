<?php hakAkses(['admin', 'user']); ?>


<script>
    function submit(x) {
        if (x == 'add') {
            // Detail awal..
            $('[name="nama"]').val("");
            $('[name="tanggal"]').val("");
            $('[name="lokasi_kerja"]').val("");
            $('[name="pilih_total_station"]').val("");
            $('[name="no_seri"]').val("");
            $('[name="j_kalibrasi"]').val("");

            // titik yang ada keteranganya
            $('[name="box_alat"]').val("");
            $('[name="internal_battery"]').val("");
            $('[name="charger_battery"]').val("");
            $('[name="extension"]').val("");
            $('[name="sumbuh_vertikal"]').val("");
            $('[name="sumbuh_horizontal"]').val("");
            $('[name="lensa_obyektif"]').val("");
            $('[name="lensa_okuler"]').val("");
            $('[name="p_fokus"]').val("");
            $('[name="c_v&h"]').val("");
            $('[name="ph_v&h"]').val("");
            $('[name="sc_lensa"]').val("");
            $('[name="sc_pf"]').val("");
            $('[name="nt_pl"]').val("");
            $('[name="nb_cl"]').val("");
            $('[name="s_abc"]').val("");
            $('[name="t_keypad"]').val("");
            $('[name="laser"]').val("");
            $('[name="m_roll"]').val("");
            $('[name="t_statif"]').val("");
            $('[name="t_aps"]').val("");
            $('[name="stick_pogo"]').val("");
            $('[name="prisma_topo"]').val("");

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

            // $('#barangModal .modal-title').html('Tambah Barang');
            $('[name="ubah"]').hide();
            $('[name="input_total_station"]').show();
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

                        <label for="dep">Pilih Total Station<font color="Red">*</font> : </label>


                        </select><select class="form-control" type="text" name="pilih_total_station" id="pilih_total_station" required>
                            <?php

                            $sau = "SELECT * FROM aset_survey ORDER BY nama_aset ASC";
                            $query2 = mysqli_query($con, "$sau") or die('mysql_error');

                            // Loop melalui hasil query dan membuat pilihan dropdown
                            echo '<option value="">-- Pilih Total Station --</option>';
                            while ($user_data = mysqli_fetch_array($query2)) {
                                if ($user_data['tipe_alat'] == 'Total Station') :
                                    echo '<option value="' . $user_data['nama_aset'] . '">' . $user_data['nama_aset'] . '</option>';
                                endif;
                            }

                            echo 'error';

                            ?>


                        </select>

                    </div>

                    <div class="form-group">

                        <label for="text">S/N Alat<font color="Red">*</font></label>

                        <input class="form-control" type="text" name="no_seri" id="no_seri" placeholder="Jawaban Anda" required readonly />

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
                                                <font color='green'>Total Station</font>
                                            </h4>
                                        </u></b></td>
                            </tr>

                            <td><label for="nik">1. Box Alat</label></td>

                            <td align="center"><input type="radio" name="box_alat" value="Layak " required /></td>

                            <td align="center"><input type="radio" name="box_alat" value="Tidak Layak / " /></td>

                            <td align="center"><input class="form-control" type="text" name="ket1" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">Battery:</h5>
                                </td>
                            </tr>

                            <tr>

                                <td><label for="nik">2. Internal Battery</label></td>

                                <td align="center"><input type="radio" name="internal_battery" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="internal_battery" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket2" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">3. Charger Battery</label></td>

                                <td align="center"><input type="radio" name="charger_battery" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="charger_battery" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket3" /></td>

                            </tr>
                            
                            <tr>

                                <td><label for="nik">3-B. Extension</label></td>

                                <td align="center"><input type="radio" name="extension" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="extension" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket3B" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">Sumbuh Putar:</h5>
                                </td>
                            </tr>

                            <tr>

                                <td><label for="nik">4. Vertikal</label></td>

                                <td align="center"><input type="radio" name="sumbuh_vertikal" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="sumbuh_vertikal" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket4" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">5. Horizontal</label></td>

                                <td align="center"><input type="radio" name="sumbuh_horizontal" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="sumbuh_horizontal" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket5" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">Lensa:</h5>
                                </td>
                            </tr>

                            <tr>

                                <td><label for="nik">6. Obyektif</label></td>

                                <td align="center"><input type="radio" name="lensa_obyektif" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="lensa_obyektif" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket6" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">7. Okuler</label></td>

                                <td align="center"><input type="radio" name="lensa_okuler" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="lensa_okuler" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket7" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">------------</h5>
                                </td>
                            </tr>

                            <tr>

                                <td><label for="nik">8. Pengatur Fokus</label></td>

                                <td align="center"><input type="radio" name="p_fokus" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="p_fokus" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket8" /></td>

                            </tr>

                            <tr>

                                <td><label for="nik">9. Clamp Vert & Horiz</label></td>

                                <td align="center"><input type="radio" name="c_v&h" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="c_v&h" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket9" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">10. Penggerak halus Vert & Horiz</label></td>

                                <td align="center"><input type="radio" name="ph_v&h" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="ph_v&h" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket10" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">Sistem Centering:</h5>
                                </td>
                            </tr>

                            <tr>

                                <td><label for="nik">11. Lensa</label></td>

                                <td align="center"><input type="radio" name="sc_lensa" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="sc_lensa" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket11" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">12. Pengatur Fokus</label></td>

                                <td align="center"><input type="radio" name="sc_pf" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="sc_pf" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket12" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">Sistem Levelling:</h5>
                                </td>
                            </tr>

                            <tr>

                                <td><label for="nik">13. Nivo Tabung(Plate Level)</label></td>

                                <td align="center"><input type="radio" name="nt_pl" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="nt_pl" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket13" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">14. Nivo Bulat(Circular Level)</label></td>

                                <td align="center"><input type="radio" name="nb_cl" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="nb_cl" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket14" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">------------</h5>
                                </td>
                            </tr>

                            <tr>

                                <td><label for="nik">15. Sekrup ABC</label></td>

                                <td align="center"><input type="radio" name="s_abc" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="s_abc" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket15" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">16. Tombol - Tombol Keypad</label></td>

                                <td align="center"><input type="radio" name="t_keypad" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="t_keypad" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket16" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">17. Laser</label></td>

                                <td align="center"><input type="radio" name="laser" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="laser" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket17" /></td>

                            </tr>
                            <tr>

                                <td><label for="nik">18. Meteran Roll</label></td>

                                <td align="center"><input type="radio" name="m_roll" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="m_roll" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket18" /></td>

                            </tr>

                            <tr>
                                <td>
                                    <h5 style="color: black;">------------</h5>
                                </td>
                            </tr>

                            <tr>
                                <td style="color: green;">
                                    <label for="nik"><b>19. Tipod(Statif)</b></label>
                                </td>

                                <td align="center"><input type="radio" name="t_statif" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="t_statif" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket19" /></td>
                            </tr>
                            <tr>
                                <td style="color: green;">
                                    <label for="nik"><b>20. Tribrach APS</b></label>
                                </td>

                                <td align="center"><input type="radio" name="t_aps" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="t_aps" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket20" /></td>
                            </tr>
                            <tr>
                                <td style="color: green;">
                                    <label for="nik"><b>21. Stick (Tongkat Pogo)</b></label>
                                </td>

                                <td align="center"><input type="radio" name="stick_pogo" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="stick_pogo" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket21" /></td>
                            </tr>
                            <tr>
                                <td style="color: green;">
                                    <label for="nik"><b>22. Prisma Topo</b></label>
                                </td>

                                <td align="center"><input type="radio" name="prisma_topo" value="Layak " required /></td>

                                <td align="center"><input type="radio" name="prisma_topo" value="Tidak Layak / " /></td>

                                <td align="center"><input class="form-control" type="text" name="ket22" /></td>
                            </tr>



                        </table>

                        <!-- end of table -->

                    </div>

                    <div class="form-group">

                        <label for="nik">Catatan</label>

                        <input class="form-control" type="text" name="catatan" placeholder="Jawaban Anda" />

                    </div>

                    <input type="submit" class="btn btn-success btn-block alert_notif" name="input_total_station" value="Kirim" />

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