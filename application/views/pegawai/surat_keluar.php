<div class="content" data-color="green" data-background-color="white" data-image="<?= base_url(); ?>assets/img/sidebar-2.jpg">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg">
                <div class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header card-header-success">
                                <h3 class="card-title"><?= $title ?></h3>
                            </div>
                            <div class="card-body">
                                <?= form_error('surat', '<div class="text-danger" surat="alert">', '</div>'); ?>
                                <?= $this->session->flashdata('message'); ?>
                                <?php if ($this->session->flashdata('success') == TRUE) : ?>
                                    <div class="alert alert-success">
                                        <span><?= $this->session->flashdata('success'); ?></span>
                                    </div>
                                <?php endif; ?>
                                <a href="" class="btn btn-success" data-toggle="modal" data-target="#newsuratModal">Tambah Surat</a>
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="myTable">
                                                <thead class="text-success">

                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col">Nomor Surat</th>
                                                        <th scope="col">Nama Pengaju</th>
                                                        <th scope="col">Jenis</th>
                                                        <th scope="col">Surat</th>
                                                        <th scope="col">Tanggal</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Keterangan</th>
                                                        <!-- <th scope="col">File</th> -->
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($surat_keluar as $s) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $i ?></th>
                                                            <td><?= $s['no_surat']; ?></td>
                                                            <td><?= $s['nm_surat_keluar']; ?></td>
                                                            <td><?= $s['jenis']; ?></td>
                                                            <td><?= $s['nm_surat']; ?></td>
                                                            <td><?= $s['tgl']; ?></td>
                                                            <td><?= $status[$s['status']]; ?></td>
                                                            <td><?= $s['keterangan']; ?></td>
                                                            <!-- <td>
                                                                <button class="btn btn-simple btn-info btn-sm" data-toggle="modal" data-target="#lihatSurat<?= $s['id']; ?>"><i class="material-icons">remove_red_eye</i></button>
                                                            </td> -->
                                                            <td>
                                                                <a href="<?= base_url('pegawai/edit_surat_keluar/') . $s['id']; ?>" class="btn btn-success btn-sm">Lengkapi Isi surat </a>
                                                                <a href="<?= base_url('pegawai/hapusSuratKeluar/') . $s['id']; ?>" class="btn btn-danger btn-sm"><i class="material-icons">delete</i> </a>

                                                            </td>
                                                            <?php $i++; ?>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Modal -->
<div class=" modal fade" id="newsuratModal" tabindex="-1" aria-labelledby="newsuratModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsuratModalLabel">Tambahkan Surat Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart(); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label class="bmd-label-floating">Nomor Surat</label>
                    <input type="text" class="form-control" id="no_surat" name="no_surat">
                </div>
                <div class="form-group">
                    <label class="bmd-label-floating">Nama Surat</label>
                    <input type="text" class="form-control" id="nm_surat_keluar" name="nm_surat_keluar">
                </div>
                <div class="form-group">
                    <label class="bmd-label-floating">Jenis Surat</label>
                    <input type="text" class="form-control" id="jenis" name="jenis">
                </div>
                <div class="form-group">
                    <label class="bmd-label-floating">Tanggal</label>
                    <input type="text" class="form-control" id="tgl" name="tgl">
                </div>
                <div class="form-group">
                    <label class="bmd-label-floating">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                </div>

                <div class="form-group">
                    <label class="label-control">File Surat</label>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                            <!-- <img src="<?= base_url() ?>assets/save.png" alt="..."> -->
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                            <span class="btn btn-danger btn-file">
                                <i class="material-icons">cloud_upload</i>
                                <span class="fileinput-new">Select File</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="file_surat" id="file_surat" />
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <?= form_error('file_surat', '<div class="text-danger">', '</div>'); ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="Submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($surat_keluar as $s) : ?>
    <div class="modal fade" id="lihatSurat<?= $s['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notice">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                    <h5 class="modal-title text-center" id="myModalLabel">Surat Keluar</h5>
                </div>
                <div class="modal-body">
                    <div class="instruction">
                        <div class="row">
                            <div class="col-md-12">
                                <embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('upload/surat_keluar') ?>/<?= $s['file'] ?>"></embed>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</body>