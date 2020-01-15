<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Toko Online | Dashboard</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <?php include "templates/sidebar.php"?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include "templates/navbar.php"?>
        <div class="container-fluid">
        <div class="card">
            <?php foreach($barang as $barang): ?>
            <h5 class="card-header">
                <a href="<?php echo base_url('Admin/Data_barang') ?>"><span style="color:gray"><i class="fa fa-times"></i></span></a>
            </h5>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                    <img src="<?php echo base_url() . "/uploads/" . $barang->img; ?>" class="card-img-top" alt="Image not found">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr><td>Nama barang</td> <td><strong><?php echo $barang->nama; ?></strong></td></tr>
                            <tr><td>Keterangan</td> <td><strong><?php echo $barang->keterangan; ?></strong></td></tr>
                            <tr><td>kategori</td> <td><strong><?php echo $barang->kategori; ?></strong></td></tr>
                            <tr><td>Stok</td> <td><strong><?php echo $barang->stok; ?></strong></td></tr>
                            <tr><td>Harga</td> <td><span class="badge badge-success mb-3"><strong>Rp <?php echo number_format($barang->harga, 0 , ',' , '.');  ?> </strong></span></td></tr>
                        </table>
                    </div>
                </div> 
            </div>
            <?php endforeach; ?>
        </div>
        </div>
      </div>
      <?php include "templates/footer.php"?>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>
</body>
</html>
