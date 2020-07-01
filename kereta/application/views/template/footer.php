
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-8">
              <h2 class="footer-heading mb-4">About Us</h2>
              <p>Jakerpi adalah situs informasi jadwal kereta api</p>
            </div>

          </div>
        </div>
        <div class="col-md-4 ml-auto">
          <h2 class="footer-heading mb-4">Follow Us</h2>
          <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </form>
        </div>
      </div>
      </div>
    </div>
  </footer>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-black" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-5">
          <form action="<?=base_url();?>/sign_in/login" method="post">
            <div class="form-group row">
              <div class="col-md-12">
                <input type="text" class="form-control border" placeholder="Username" name="username">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <input type="password" class="form-control border" placeholder="password" name="password">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 ml-auto">
                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Login">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  <!-- Modal register -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-black" id="registerModalLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-5">
          <form action="<?PHP echo site_url(); ?>sign_up/register" method="post">
            <div class="form-group row">
              <div class="col-md-12">
                <input type="text" class="form-control border" placeholder="Username" name="username">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <input type="password" class="form-control border" placeholder="password" name="password">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <input type="password" class="form-control border" placeholder="konfirmasi password" name="konfirmasi_password">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 ml-auto">
                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Login">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  


  <script src="<?= base_url();?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url();?>assets/js/jquery-ui.js"></script>
  <script src="<?= base_url();?>assets/js/popper.min.js"></script>
  <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?= base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url();?>assets/js/jquery.sticky.js"></script>
  <script src="<?= base_url();?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url();?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?= base_url();?>assets/js/aos.js"></script>

  <script src="<?= base_url();?>assets/js/main.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.add_jadwal').click(function() {
			$('#stasiun').val('');
			$('#jam').val('');
			$('#id_krl').val('');
						
			$('#save_jadwal').show();
			$('#update_jadwal').hide();
			
			$('#form_tambah_jadwal').attr('action', '<?PHP echo site_url(); ?>jadwal_krl/insert_jadwal');
		});
		
		$('.add_krl').click(function() {
			$('#id_krl').val('');
			$('#nama').val('');
			$('#stasiun_awal').val('');
			$('#stasiun_akhir').val('');
			
			$('#id_krl').attr('disabled', false);
			
			$('#save_krl').show();
			$('#update_krl').hide();
			
			$('#form_tambah_krl').attr('action', '<?PHP echo site_url(); ?>jadwal_krl/insert_krl');
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>jadwal_krl/delete_all';
		});
		
		$('.table').dataTable();
	});
</script>
</body>

</html>