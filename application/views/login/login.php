<div class="container" style="margin-top: 10%;">
    <?php echo form_open('login/aksi_login'); ?>
        <?php if($this->session->flashdata('info')): ?>
            <div class="row">
                <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Maaf username/nim dan password salah
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <center><img src="<?php echo base_url('assets/img/sdtech-logo.png') ?>"></center>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-center">Login Panel</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <div class="form-group has-danger">
                    <label class="sr-only" for="username">Username</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" ><i class="fa fa-at"></i></div>
                        <input type="text" name="username" class="form-control" id="username"
                        placeholder="Username" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                        placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-control-feedback">
                    <span class="text-danger align-middle">
                        <!-- Put password error message here -->    
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding-top: .35rem">
                <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 1rem">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <center><button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</button></center>
            </div>
        </div>
  <?php echo form_close(); ?>
</div>