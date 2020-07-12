<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transportasi Kereta</h1>
        </div>
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Tabel Transportasi Kereta</h4>
                    <div class="card-header-action">
                        <!-- <button class="btn btn-primary"><i class="fas fa-print"></i> Cetak</button> -->
                        <button data-toggle="modal" data-target="#tambahModal" class="btn btn-success" style="margin-left:5px;"><i class="fas fa-plus"></i> Tambah Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <table  id="table_id" class="table table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Kode</th>
                            <th>Jumlah Kursi</th>
                            <th>Keterangan</th>
                            <th>id Tipe Transportasi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data_log as $r) { ?>
                        <tr>
                            <td><?= $r->id_transportasi ?></td>
                            <td><?= $r->kode ?></td>
                            <td><?= $r->jumlah_kursi ?></td>
                            <td><?= $r->keterangan ?></td>
                            <td><?= $r->id_type_transportasi ?></td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td>
                                <a data-toggle="modal" href="#editModal<?= $r->id_transportasi; ?>"><button class="btn btn-outline-warning">Edit</button></a>
                                <a href="<?= base_url()."admin/delete_transportasikereta/".$r->id_transportasi ?>" class="tombol-hapus"><button class="btn btn-outline-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody> 
                    </table>
                </div>
            </div>
        </div>


    <!-- MODAL TAMBAH DATA -->
    <div class="modal fade" tabindex="-1" role="dialog" id="tambahModal">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pemesanan Tiket Kereta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url()."admin/proses_tambah_transportasikereta/" ?>">   
                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Kode </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="kode">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Jumlah Kursi </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="jumlah_kursi">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Keterangan </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="keterangan">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Id Tipe Transportasi </label>
                    <div class="col-sm-8">
                        <select class="form-control" name="id_tipe_transportasi">
                            <?php foreach ($tipetransportasi->result() as $row) {
                                echo "<option value='".$row->id_type_transportasi."'>".$row->id_type_transportasi;?></option>";
                            <?php } ?>
                        </select>
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

    <!-- END MODAL TAMBAH DATA -->


    <!-- MODAL EDIT DATA -->
    <?php foreach($data_log as $r) { ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="editModal<?= $r->id_transportasi; ?>">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Pemesanan Tiket Kereta</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="<?= base_url()."admin/proses_edit_transportasikereta/" ?>">   
        <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">id </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="id_transportasi" value="<?= $r->id_transportasi ?>" readonly>
                        <small class="form-text text-muted">id tidak dapat dirubah.</small>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Kode </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="kode" value="<?= $r->kode ?>" readonly>
                        <small class="form-text text-muted">Kode tidak dapat dirubah.</small>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Jumlah Kursi </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="jumlah_kursi" value="<?= $r->jumlah_kursi ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Keterangan </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="keterangan" value="<?= $r->keterangan ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Id Tipe Transportasi </label>
                    <div class="col-sm-8">
                        <select class="form-control" name="id_tipe_transportasi">
                            <?php foreach ($tipetransportasi->result() as $row) {
                                echo "<option value='".$row->id_type_transportasi."'>".$row->id_type_transportasi;?></option>";
                            <?php } ?>
                        </select>
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

