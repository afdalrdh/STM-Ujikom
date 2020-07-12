<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="container">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Kereta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pesawat</a>
                        </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                <form method="POST" action="<?= base_url()."admin/proses_tambah_rutekereta/" ?>">
                                    <!-- <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">id Rute </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="id_rute">
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">Tujuan </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="tujuan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">Rute Awal </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="rute_awal">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">Rute Akhir </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="rute_akhir">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Harga </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="harga">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Id Transportasi </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="id_transportasi">
                                                <?php foreach ($tipetransportasik->result() as $row) {
                                                    echo "<option value='".$row->id_transportasi."'>".$row->id_transportasi;?></option>";
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>  
                                    
                                    <div class="col-sm-11 text-right">
                                        <button class="btn btn-success" name="btn" value="submit"><i class="fas fa-plus"></i> Tambah Rute</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                                <div class="col-md-6">
                                <form method="POST" action="<?= base_url()."admin/proses_tambah_rutepesawat/" ?>">
                                    <!-- <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">id Rute </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="id_rute">
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">Tujuan </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="tujuan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">Rute Awal </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="rute_awal">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 offset-1 col-form-label">Rute Akhir </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="rute_akhir">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Harga </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="harga">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Id Transportasi </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="id_transportasi">
                                                <?php foreach ($tipetransportasik->result() as $row) {
                                                    echo "<option value='".$row->id_transportasi."'>".$row->id_transportasi;?></option>";
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>  
                                    
                                    <div class="col-sm-11 text-right">
                                        <button class="btn btn-success" name="btn" value="submit"><i class="fas fa-plus"></i> Tambah Rute</button>
                                        </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>


            <div class="card card-primary">
                <div class="card-header">
                    <h4>Tabel Rute Kereta Api</h4>
                    <div class="card-header-action">
                        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
                        <table  id="table_id" class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Tujuan</th>
                                <th>Rute Awal</th>
                                <th>Rute Akhir</th>
                                <th>Harga</th>
                                <th>id Transportasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data_log as $r) { ?>
                            <tr>
                                <td><?= $r->id_rute ?></td>
                                <td><?= $r->tujuan ?></td>
                                <td><?= $r->rute_awal ?></td>
                                <td><?= $r->rute_akhir ?></td>
                                <td><?= $r->harga ?></td>
                                <td><?= $r->id_transportasi ?></td>
                                <td>
                                    <a data-toggle="modal" href="#editModalk<?= $r->id_rute; ?>"><button class="btn btn-outline-warning">Edit</button></a>
                                    <a href="<?= base_url()."admin/delete_rutekereta/".$r->id_rute ?>" class="tombol-hapus"><button class="btn btn-outline-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody> 
                        </table>
                    </div>
                </div>
            </div>


            <div class="card card-primary">
                <div class="card-header">
                    <h4>Tabel Rute Pesawat</h4>
                    <div class="card-header-action">
                        <a data-collapse="#mycard-collapse2" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="mycard-collapse2">
                    <div class="card-body">
                        <table  id="table_id" class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Tujuan</th>
                                <th>Rute Awal</th>
                                <th>Rute Akhir</th>
                                <th>Harga</th>
                                <th>id Transportasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data_log2 as $r) { ?>
                            <tr>
                                <td><?= $r->id_rute ?></td>
                                <td><?= $r->tujuan ?></td>
                                <td><?= $r->rute_awal ?></td>
                                <td><?= $r->rute_akhir ?></td>
                                <td><?= $r->harga ?></td>
                                <td><?= $r->id_transportasi ?></td>
                                <td>
                                    <a data-toggle="modal" href="#editModalp<?= $r->id_rute; ?>"><button class="btn btn-outline-warning">Edit</button></a>
                                    <a href="<?= base_url()."admin/delete_rutepesawat/".$r->id_rute ?>" class="tombol-hapus"><button class="btn btn-outline-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody> 
                        </table>
                    </div>
                </div>
            </div>


        </div>

    <!-- MODAL EDIT DATA KERETA -->
    <?php foreach($data_log as $r) { ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="editModalk<?= $r->id_rute; ?>">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Rute Kereta</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="<?= base_url()."admin/proses_edit_rutekereta/" ?>">
                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">id Rute </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="id_rute" value="<?= $r->id_rute ?>" readonly>
                        <small class="form-text text-muted">id tidak dapat dirubah.</small>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Tujuan </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="tujuan" value="<?= $r->tujuan ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Rute Awal </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="rute_awal" value="<?= $r->rute_awal ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Rute Akhir </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="rute_akhir" value="<?= $r->rute_akhir ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Harga </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="harga" value="<?= $r->harga ?>">
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-2 offset-1 col-form-label">Id Transportasi </label>
                    <div class="col-sm-8">
                        <select class="form-control" name="id_transportasi">
                            <?php foreach ($tipetransportasik->result() as $row) {
                                echo "<option value='".$row->id_transportasi."'>".$row->id_transportasi;?></option>";
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


    <!-- MODAL EDIT DATA PESAWAT -->
    <?php foreach($data_log2 as $r) { ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="editModalp<?= $r->id_rute; ?>">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Rute Pesawat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="<?= base_url()."admin/proses_edit_rutepesawat/" ?>">
                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">id Rute </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="id_rute" value="<?= $r->id_rute ?>" readonly>
                        <small class="form-text text-muted">id tidak dapat dirubah.</small>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Tujuan </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="tujuan" value="<?= $r->tujuan ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Rute Awal </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="rute_awal" value="<?= $r->rute_awal ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Rute Akhir </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="rute_akhir" value="<?= $r->rute_akhir ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 offset-1 col-form-label">Harga </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="harga" value="<?= $r->harga ?>">
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-2 offset-1 col-form-label">Id Transportasi </label>
                    <div class="col-sm-8">
                        <select class="form-control" name="id_transportasi">
                            <?php foreach ($tipetransportasik->result() as $row) {
                                echo "<option value='".$row->id_transportasi."'>".$row->id_transportasi;?></option>";
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


