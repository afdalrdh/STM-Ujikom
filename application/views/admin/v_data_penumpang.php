<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Penumpang</h1>

            
        </div>
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                <h4>Tabel Penumpang</h4>
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
                                <th>Nama Penumpang</th>
                                <th>Alamat Penumpang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data_log as $r) { ?>
                            <tr>                    
                                <td><?= $r->id_penumpang ?></td>
                                <td><?= $r->username ?></td>
                                <td><?= $r->password ?></td>
                                <td><?= $r->nama_penumpang ?></td>
                                <td><?= $r->alamat_penumpang ?></td>
                                <td>
                                    <a data-toggle="modal" href="#detailModal<?= $r->id_penumpang; ?>"><button class="btn btn-outline-primary">Detail</button></a>
                                    <a data-toggle="modal" href="#editModal<?= $r->id_penumpang; ?>"><button class="btn btn-outline-warning">Edit</button></a>
                                    <a href="<?= base_url()."admin/delete_penumpang/".$r->id_penumpang ?>" class="tombol-hapus"><button class="btn btn-outline-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody> 
                    </table>
                </div>
            </div>
            

        </div>
        
        
        <!-- MODAL DETAIL DATA -->
        <?php foreach($data_log as $r) { ?>
        <div class="modal fade" tabindex="-1" role="dialog" id="detailModal<?= $r->id_penumpang; ?>">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Penumpang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">id</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?= $r->id_penumpang ?>" readonly/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?= $r->username ?>" readonly/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?= $r->password ?>" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?= $r->nama_penumpang ?>" readonly/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" readonly><?= $r->alamat_penumpang ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" value="<?= $r->tanggal_lahir ?>" readonly />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?php if($r->jenis_kelamin == 'l'){echo 'Laki-laki';}
                                elseif ($r->jenis_kelamin == 'p'){echo 'Perempuan';}?>" readonly/>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telephone</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" value="<?= $r->telefone ?>" readonly />
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
        <div class="modal fade" tabindex="-1" role="dialog" id="editModal<?= $r->id_penumpang; ?>">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Penumpang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                    <form method="POST" action="<?= base_url()."admin/proses_edit_penumpang/" ?>">
                        <div class="form-group row">
                            <label class="col-sm-2 offset-1 col-form-label">id</label>
                            <div class="col-sm-8">
                                <input type="text" name="id" class="form-control" value="<?= $r->id_penumpang ?>" readonly/>
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
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" placeholder="Silahkan masukkan nama lengkap kamu" value="<?= $r->nama_penumpang ?>" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="alamat" placeholder="Silahkan masukkan alamat rumah kamu"><?= $r->alamat_penumpang ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Silahkan masukkan alamat rumah kamu" value="<?= $r->tanggal_lahir ?>" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis kelamin</label>
                            <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="l" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Laki - laki
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="p">
                                <label class="form-check-label" for="exampleRadios2">
                                    Perempuan
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telephone</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" name="telefone" placeholder="Silahkan masukkan no telepon kamu" value="<?= $r->telefone ?>" />
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
                <h5 class="modal-title">Tambah Penumpang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                    <form method="POST" action="<?= base_url()."admin/proses_tambah_penumpang/" ?>" onsubmit="return check()">
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
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="alamat" placeholder="Silahkan masukkan alamat rumah kamu"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Silahkan masukkan alamat rumah kamu" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis kelamin</label>
                            <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="l" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Laki - laki
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="p">
                                <label class="form-check-label" for="exampleRadios2">
                                    Perempuan
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telephone</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" name="telefone" placeholder="Silahkan masukkan no telepon kamu" />
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

    </section>
</div>

<script>
    function check(){
        if(document.getElementById('pass').value != document.getElementById('pass_konfirm').value){
            alert('Password konfimasi tidak cocok');
            return false;
        }
    }
</script>
