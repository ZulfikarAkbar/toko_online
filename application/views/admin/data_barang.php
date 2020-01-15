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
          <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_barang"><i class="fa fa-plus"> Tambah barang</i></button>
          <br><br>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="text-align:center">
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot style="text-align:center">
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php
                          $no = 1;
                          foreach($barang as $barang):
                      ?>
                      <tr>
                          <td style="text-align:center"><?php echo $no++; ?></td>
                          <td><?php echo $barang->nama; ?></td>
                          <td><?php echo $barang->keterangan; ?></td>
                          <td><?php echo $barang->kategori; ?></td>
                          <td>Rp<?php echo number_format($barang->harga, 0, ',' , '.'); ?></td>
                          <td style="text-align:right"><?php echo $barang->stok; ?></td>
                          <td style="text-align:center">
                            <?php echo anchor('Admin/Data_barang/detail_barang/' . $barang->id , '<div class="btn btn-sm btn-success"><i class="fa fa-search"></i></div></div>') ?>
                            <?php echo anchor('Admin/Data_barang/edit/' . $barang->id , '<div data-toggle="modal" data-target="#edit_barang" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>
                            <?php echo anchor('Admin/Data_barang/delete/' . $barang->id , '<div class="btn btn-sm btn-danger" onClick="return confirm("Want to delete?");"><i class="fa fa-trash"></i></div>') ?>
                          </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
              </div>
            </div>
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

  <div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url() . "/Admin/Data_barang/tambah_aksi"; ?>" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label>Nama barang</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control">
                </div>
                <div class="form-group">
                    <label>Gambar produk</label>
                    <input type="file" name="img" class="form-control">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success"><i class="fa fa-plus"> Tambah barang</i></button>
                </div>
          </form>
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
