<div class="content" data-color="green" data-background-color="white" data-image="<?= base_url(); ?>assets/img/sidebar-2.jpg">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-7">
                <div class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header card-header-success">
                                <h3 class="card-title"><?= $title ?></h3>
                            </div>
                            <div class="card-body">
                                <form action=" <?= base_url('user/changepassword'); ?>" method="post">
 
                                    <div class="form-group row">
                                        <label for="current_passsword" id="current_passsword" class="col-sm-2 col-form-label">Password saat ini</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="current_password" name="current_pssword">
                                            <?= form_error('current_password', '<small class="text-danger-pl-3">', '</small'); ?>
                                        </div>
                                    </div>
                                    <div class=" form-group row">
                                        <label for="new_password1" id="new_password1" class="col-sm-2 col-form-label">Password Baru</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="new_password1" name="new_password1">
                                            <?= form_error('new_password1', '<small class="text-danger-pl-3">', '</small'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="new_password2" id="new_password2" class="col-sm-2 col-form-label">Ulangi Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="new_password2" name="new_password2">
                                            <?= form_error('new_password2', '<small class="text-danger-pl-3">', '</small'); ?>

                                        </div>
                                    </div>
                                    <div class=" form-group row">
                                        <div class="col-sm 10">
                                            <button type="submit" class="btn btn-success">Ganti Password</button>
                                        </div>
                                    </div>
                                </form>
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