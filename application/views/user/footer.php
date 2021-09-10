   
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form class="user" action="<?php echo site_url('Login/auth'); ?>" method="POST">
                        <div class="form-group">
                          <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                        </div>
                        <button class="btn btn-primary btn-user btn-block">
                          Login
                        </button>
                      </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('Login/register') ?>
                        <div class="form-group">
                          <input type="text" class="form-control form-control-user" name="username" placeholder="Nama" required autocomplete="off">
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control form-control-user" name="email" placeholder="Email" required autocomplete="off">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required autocomplete="off">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control form-control-user" name="alamat" placeholder="Alamat" rows="4" autocomplete="off"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control form-control-user" name="telp" placeholder="No. Telp" autocomplete="off">
                        </div>
                        <div class="form-group">
                              <select class="form-control" name="jk" required>
                                <option>- Pilih Salah Satu -</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                              </select>
                          </div>
                        <div class="form-group">
                            <div>
                                <label>Gambar</label>
                            </div>
                            <input name="gambar" type="file">
                        </div>
                        <button class="btn btn-primary btn-user btn-block">
                          Register
                        </button>
                    <?php echo form_close() ?>
                </div>
              </div>
            </div>
          </div>

          <footer class="site-footer border-top">
        <div class="row text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
    </footer>

   <script src="<?php echo base_url() ?>/assets/front/js/jquery-3.3.1.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/jquery-ui.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/popper.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/owl.carousel.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/jquery.countdown.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/jquery.magnific-popup.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/bootstrap-datepicker.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/aos.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/jquery.sticky.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/jquery.easing.1.3.js"></script>

   <script src="<?php echo base_url() ?>/assets/front/js/jquery.fancybox.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/front/js/main.js"></script>

</body>

</html>