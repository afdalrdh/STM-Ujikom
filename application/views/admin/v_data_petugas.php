<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="margin-right:20px;">Data Petugas</h1>
            
        </div>
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                <h4>Tabel Petugas</h4>
                <div class="card-header-action">
                    <!-- <button class="btn btn-primary"><i class="fas fa-print"></i> Cetak</button> -->
            <button data-toggle="modal" data-target="#tambahModal" class="btn btn-success" style="margin-left:5px;"><i class="fas fa-plus"></i> Tambah Data</button>
                </div>
                </div>
                <div class="card-body">
                    <table  id="table_id" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama Petugas</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data_log as $r) { ?>
                        <tr>
                            <td><?= $r->id_petugas ?></td>
                            <td><?= $r->username ?></td>
                            <td><?= $r->password ?></td>
                            <td><?= $r->nama_petugas ?></td>
                            <td><?= $r->id_level ?></td>
                            <td>
                                <a data-toggle="modal" href="#editModal<?= $r->id_petugas; ?>"><button class="btn btn-outline-warning">Edit</button></a>
                                <a href="<?= base_url()."admin/delete_petugas/".$r->id_petugas ?>" class="tombol-hapus"><button class="btn btn-outline-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody> 
                    </table>
                </div>
            </div>



        <!-- MODAL EDIT DATA -->
        <?php foreach($data_log as $r) { ?>
        <div class="modal fade" tabindex="-1" role="dialog" id="editModal<?= $r->id_petugas; ?>">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                    <form method="POST" action="<?= base_url()."admin/proses_edit_petugas/" ?>">
                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">id</label>
                            <div class="col-sm-8">
                                <input type="text" name="id" class="form-control" value="<?= $r->id_petugas ?>" readonly/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" name="username" class="form-control" value="<?= $r->username ?>" readonly/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Password baru</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pass" placeholder="Minimum password adalah 7 karakter kombinasi password dan angka"  value="<?= $r->password ?>" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="Silahkan masukkan nama lengkap kamu" value="<?= $r->nama_petugas ?>" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Level</label>
                            <div class="col-sm-8">
                            <select class="form-control" name="level">
                            <?php if($r->id_level == '1'){ ?>
                                <option value="1">Administrator</option>
                                <option value="2">Petugas</option>
                            <?php }else{?>
                                <option value="2">Petugas</option>
                                <option value="1">Administrator</option>
                            <?php } ?>
                            </select>
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


        <!-- MODAL TAMBAH DATA -->
        <div class="modal fade" tabindex="-1" role="dialog" id="tambahModal">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                    <form method="POST" action="<?= base_url()."admin/proses_tambah_petugas/" ?>" onsubmit="return check()">
                        <!-- <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Id : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id" readonly value="<?php echo $kodeunik ?>">
                                <small class="form-text text-muted">Id tidak dapat dirubah.</small>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="username" placeholder="Silahkan masukkan username yang mudah diingat" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Minimum password adalah 7 karakter kombinasi password dan angka" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Ketik Ulang Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="pass_konfirm" id="pass_konfirm" placeholder="Ketik ulang password" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" placeholder="Silahkan masukkan nama lengkap kamu" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-9">
                            <select class="form-control" name="level">
                                <option value="1">Administrator</option>
                                <option value="2">Petugas</option>
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
        <!-- END MODAL TAMBAH DATA -->


        </div>
    </section>
</div>