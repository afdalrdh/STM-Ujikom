<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pemesanan Tiket Pesawat</h1>
        </div>
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Tabel Pemesanan Tiket Pesawat</h4>
                    <div class="card-header-action">
                        <!-- <button class="btn btn-primary"><i class="fas fa-print"></i> Cetak</button> -->
                        <button data-toggle="modal" data-target="#tambahModal" class="btn btn-success" style="margin-left:5px;"><i class="fas fa-plus"></i> Tambah Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <table  id="table_id" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Kode Pemesanan</th>
                            <th>Tanggal</th>
                            <th>Tempat</th>
                            <th>Tujuan</th>
                            <th>Tanggal Berangkat</th>
                            <th>Jam Berangkat</th>
                            <th>Action</th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data_log as $r) { ?>
                        <tr>
                            <td><?= $r->kode_pemesanan ?></td>
                            <td><?= $r->tanggal_pemesanan ?></td>
                            <td><?= $r->tempat_pemesanan ?></td>
                            <td><?= $r->tanggal_berangkat ?></td>
                            <td><?= $r->jam_berangkat ?></td>
                            <td><?= $r->id_petugas ?></td>
                            <td>
                                <a data-toggle="modal" href="#detailModal<?= $r->id_pemesanan; ?>"><button class="btn btn-outline-primary">Detail</button></a>
                                <a data-toggle="modal" href="#editModal<?= $r->id_pemesanan; ?>"><button class="btn btn-outline-warning">Edit</button></a>
                                <a href="<?= base_url()."admin/delete_pesawat/".$r->id_pemesanan ?>" class="tombol-hapus"><button class="btn btn-outline-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody> 
                    </table>
                </div>
            </div>
        </div>


    <!-- MODAL TAMBAH DATA -->
    <?php foreach($data_log as $r) { ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="tambahModal">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tambah Pemesanan Tiket Pesawat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
            <form method="POST" action="<?= base_url()."admin/proses_tambah_pesawat/" ?>">
                
                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Kode Pemesanan </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="kode_pemesanan" value="<?= $r->kode_pemesanan ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Tanggal Pemesanan </label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="tanggal_pemesanan">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Tempat Pemesanan </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="tempat_pemesanan">
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-2 offset-1 col-form-label">Id Penumpang </label>
                    <div class="col-sm-8">
                        <select class="form-control" name="id_penumpang">
                            <?php foreach ($penumpang->result() as $row) {
                                echo "<option value='".$row->id_penumpang."'>".$row->id_penumpang;?></option>";
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Kode Kursi </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="kode_kursi">
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-2 offset-1 col-form-label">Id Rute </label>
                    <div class="col-sm-8">
                        <select class="form-control" name="id_rute">
                            <?php foreach ($rute->result() as $row) {
                                echo "<option value='".$row->id_rute."'>".$row->id_rute;?></option>";
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-2 offset-1 col-form-label">Tujuan </label>
                    <div class="col-sm-8">
                        <select class="form-control" name="tujuan">
                            <option value="Bandung">Bandung</option>
                            <option value="Cimahi">Cimahi</option>
                            <option value="Jakarta">Jakarta</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Tanggal Berangkat </label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="tanggal_berangkat">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Jam Cekin </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="jam_cekin">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Jam Berangkat </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="jam_berangkat">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Total Bayar </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="total_bayar">
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-2 offset-1 col-form-label">Id Petugas </label>
                    <div class="col-sm-8">
                        <select class="form-control" name="id_petugas">
                            <?php foreach ($petugas->result() as $row) {
                                echo "<option value='".$row->id_petugas."'>".$row->id_petugas;?></option>";
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success" name="btn" value="submit">Tambah</button>
            </form>
        </div>
        </div>
        </div>
    </div>
    </div>
    <?php } ?>

    <!-- END MODAL TAMBAH DATA -->
    

    <!-- MODAL DETAIL DATA -->
    <?php foreach($data_log as $r) { ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="detailModal<?= $r->id_pemesanan; ?>">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Detail Pemesanan Tiket Pesawat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">id Pemesanan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->id_pemesanan ?>" readonly/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">Kode Pemesanan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->kode_pemesanan ?>" readonly/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">Tanggal Pemesanan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->tanggal_pemesanan ?>" readonly/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">Tempat Pemesanan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->tempat_pemesanan ?>" readonly/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">id Penumpang</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?= $r->id_penumpang ?>" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">Kode Kursi</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->kode_kursi ?>" readonly />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">id Rute</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->id_rute ?>" readonly />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">Tujuan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->tujuan ?>" readonly />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">Tanggal Berangkat</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->tanggal_berangkat ?>" readonly />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">Jam Cekin</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->jam_cekin ?>" readonly />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">Jam Berangkat</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->jam_berangkat ?>" readonly />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">Total Bayar</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->total_bayar ?>" readonly />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-1 col-form-label">id Petugan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?= $r->id_petugas ?>" readonly />
                        </div>
                    </div>
                </div>
            </div>
            

            
        </form>
        </div>
        </div>
    </div>
    </div>
    <?php } ?>
    <!-- END MODAL DETAIL DATA -->


    <!-- MODAL EDIT DATA -->
    <?php foreach($data_log as $r) { ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="editModal<?= $r->id_pemesanan; ?>">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Pemesanan Tiket Pesawat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                    <form method="POST" action="<?= base_url()."admin/proses_edit_pesawat/" ?>">
                        
                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Id </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id" readonly value="<?= $r->id_pemesanan ?>">
                                <small class="form-text text-muted">Id pemesanan tidak dapat dirubah.</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Kode Pemesanan </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kode_pemesanan" readonly value="<?= $r->kode_pemesanan ?>">
                                <small class="form-text text-muted">Kode pemesanan tidak dapat dirubah.</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Tanggal Pemesanan </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_pemesanan" value="<?= $r->tanggal_pemesanan ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Tempat Pemesanan </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tempat_pemesanan" value="<?= $r->tempat_pemesanan ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Id Penumpang </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_penumpang" value="<?= $r->id_penumpang ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Kode Kursi </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kode_kursi" value="<?= $r->kode_kursi ?>">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-2 offset-1 col-form-label">Id Rute </label>
                            <div class="col-sm-8">
                                <select class="form-control" name="id_rute">
                                    <?php foreach ($rute->result() as $row) {
                                        if($row->id_rute == $r->id_rute){
                                            echo "<option value='".$row->id_rute."' selected>".$row->rute_awal." - ".$row->rute_akhir."</option>";
                                        }else{
                                            echo "<option value='".$row->id_rute."'>".$row->rute_awal." - ".$row->rute_akhir."</option>";
                                        }
                                        
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Tujuan </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tujuan" value="<?= $r->tujuan ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Tanggal Berangkat </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_berangkat" value="<?= $r->tanggal_berangkat ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Jam Cekin </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="jam_cekin" value="<?= $r->jam_cekin ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Jam Berangkat </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="jam_berangkat" value="<?= $r->jam_berangkat ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Total Bayar </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="total_bayar" value="<?= $r->total_bayar ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Id Petugas </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_petugas" value="<?= $r->id_petugas ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning" name="btn" value="submit">Edit</button>
                    </form>
                </div>
        </div>
        </div>
    </div>
    </div>
    <?php } ?>
    <!-- END MODAL EDIT DATA -->

    </section>
</div>

