<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Admin/Dashboard_admin');?>">
  <div class="sidebar-brand-icon">
    <i class="fa fa-store-alt"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Admin Toko Online<sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item ">
  <a class="nav-link" href="<?php echo base_url('Admin/Dashboard_admin');?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('Admin/Data_barang');?>">
    <i class="fas fa-fw fa-database"></i>
    <span>Data barang</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('Admin/Invoices');?>">
    <i class="fas fa-fw fa-file-invoice-dollar"></i>
    <span>Invoices</span>
  </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->