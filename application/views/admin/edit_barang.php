<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Toko Online | Admin</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <?php include "templates/sidebar.php"?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include "templates/navbar.php"?>
        <div class="container-fluid">
        <?php foreach($barang as $barang): ?>
            <form action="<?php echo base_url() . "/Admin/Data_barang/update"; ?>" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label>Nama barang</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $barang->nama; ?>">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $barang->id ?>">
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $barang->keterangan; ?>">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control" value="<?php echo $barang->kategori; ?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $barang->harga; ?>">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" value="<?php echo $barang->stok; ?>">
                </div>
                <div class="form-group">
                    <label>Gambar produk</label>
                    <input type="file" name="img" class="form-control" value="<?php echo $barang->img; ?>">
                </div>
                <div class="modal-footer">
                  <a style="color:white"class="btn btn-secondary" href="<?php echo base_url('Admin/Data_barang') ?>">Cancel</a>
                  <button type="submit" class="btn btn-success"><i class="fa fa-edit"> Edit barang</i></button>
                </div>
            </form>
            <?php endforeach; ?>
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

  <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>
</body>
</html>
