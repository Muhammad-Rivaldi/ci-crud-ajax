<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ekantin - Dashboard Admin</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('asset/vendor/fontawesome-free/css/all.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('asset/css/sb-admin-2.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('template/admin/sidebar')?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('template/admin/header'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
          <!-- end page heading -->

          <!-- Content Row 2 -->
          <div class="row">

            <!-- Area card -->
            <div class="col">
              <div class="card shadow mb-4">

                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">view data menu</h6>
                  <div class="dropdown no-arrow">
								<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
									<div class="dropdown-header">Action</div>
									<a class="dropdown-item addbtn">
										<i class="fas fa-plus fa-sm fa-fw" style="color: green;">
										</i> Add Data
									</a>
									<!-- <a class="dropdown-item" href="<?php echo site_url('homecontroller/cetakData') ?>">
										<i class="fas fa-file fa-sm fa-fw" style="color: blue;">
										</i> Generate Pdf
									</a>
									<a class="dropdown-item" href="<?php echo site_url('homecontroller/cetakExcel') ?>">
										<i class="fas fa-table fa-sm fa-fw" style="color: green;">
										</i> Generate Excel
									</a> -->
								</div>
							</div>
                </div>
                <!-- end Card Header - Dropdown -->

                <!-- Card Body -->
                <div class="card-body">
                <div class="table-responsive">
								<table class="table table-bordered text-center" cellspacing="0" width="100%" id="dataMakanan">
									<thead class="bg-primary text-white">
										<tr>
											<th>Id Makanan</th>
											<th>Nama Makanan</th>
											<th>Foto Makanan</th>
											<th>Jenis Menu</th>
											<th>Harga</th>
											<th>Status Menu</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
                </div>
                <!-- end card body -->

              </div>
            </div>
            <!-- end area card -->

          </div>
          <!-- end content row 2 -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view('template/admin/footer'); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- end Scroll to Top Button -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('ekantin_controller/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('asset/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.bundle.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('asset/vendor/jquery-easing/jquery.easing.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('asset/js/sb-admin-2.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('asset/vendor/chart.js/Chart.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('asset/js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url('asset/js/demo/chart-pie-demo.js') ?>"></script>

  <!-- DataTable -->
  <script src="<?php echo base_url('asset/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('asset/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

  <!-- Swall Alert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.all.min.js"></script>

  <!-- Add Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form id="formtambah" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label>Nama Makanan</label>
								<input type="text" name="namabarang" id="nmabarang" class="form-control" placeholder="Masukkan Nama Makanan">
							</div>
              <div class="form-group">
                <label>Picture</label>
                <input type="file" name="user_image" id="user_image" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Makanan</label>
                <select class="custom-select drpdw" name="kategoriitem" id="ktgritem">
                  <option selected>Select Category</option>
                  <option value="makanan">Makanan</option>
                  <option value="minuman">Minuman</option>
                </select>
              </div>
							<div class="form-group">
                <label>Harga Makanan</label>
								<input type="text" name="hargabarang" id="hrgbarang" class="form-control" placeholder="Masukkan Harga Makanan">
							</div>
							<input value="tersedia" type="hidden" id="statusbarang" name="status" class="form-control">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<input type="hidden" name="action" class="btn btn-success" value="Add" />
							<input type="submit" value="Add" name="action" class="btn btn-success" />
						</div>
					</form>
				</div>
			</div>
		</div>

</body>

<script>
  $(document).ready(function () {
    // add btn modal
    $('.addbtn').on('click', function () { 
        $('#addModal').modal('show');
     });

    // ini adalah fungsi untuk memunculkan data di datatable
		var datamakanan = $('#dataMakanan').DataTable({
			"processing": true,
			"ajax": "<?= base_url("ekantin_controller/dataMakanan") ?>",
			"order": [],
		});

    // add function
    // Tambah barang
		$(document).on('submit', '#formtambah', function(event) {
			event.preventDefault();
			var namamakanan = $('#nmabarang').val();
			var hargamakanan = $('#hrgbarang').val();
			var kategorimakanan = $('#ktgritem').val();
			var extension = $('#user_image').val().split('.').pop().toLowerCase();
			if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
				alert("Invalid Image");
				$('#user_image').val('');
				return false;
			}

			if (namamakanan != '' && hargamakanan != '' && kategorimakanan != '') {
				$.ajax({
					type: "post",
					url: "<?= base_url("ekantin_controller/addData") ?>",
					beforeSend: function() {
						swal({
              type: 'loading',
							title: 'Menunggu',
							html: 'Memproses data',
							onOpen: () => {
								swal.showLoading()
							}
						})
					},
					data: new FormData(this),
					contentType: false,
					processData: false,
					success: function() {
						swal({
							type: 'success',
							title: 'Tambah Barang',
							text: 'Anda Berhasil Menambah Barang'
						})
						$('#formtambah')[0].reset();
						$('#addModal').modal('hide');
						datamakanan.ajax.reload(null, false);
					},
				});
			} else {
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Bother fields are required!',
				});
			}
		});
  });
</script>

</html>