<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 <!-- Sidebar - Brand -->
 <a class="sidebar-brand d-flex align-items-center 
justify-content-center" href="index.html">
<div class="sidebar-brand-icon rotate-n-15">
 <i class="fas fa-book"></i>
 </div>
 <div class="sidebar-brand-text mx-3">Pustaka 
Booking</div>
 </a>
 <!-- Divider -->
 <hr class="sidebar-divider">
 
 <!-- Looping Menu-->
 
 <!-- Heading -->
 <div class="sidebar-heading">
 Master Data
 </div>
 <!-- Nav Item - Dashboard -->
 <li class="nav-item active">
 <!-- Nav Item - Dashboard -->
 <li class="nav-item">
 <a class="nav-link pb-0" href="<?=
base_url('buku'); ?>">
 <i class="fa fa-fw fa book"></i>
 <span>Data Buku</span></a>
 </li>
 <li class="nav-item">
 <a class="nav-link pb-0" href="<?=
base_url('user/anggota'); ?>">
 <i class="fa fa-fw fa book"></i>
 <span>Data Anggota</span></a>
 </li>
 </li>
 <!-- Divider -->
 <hr class="sidebar-divider mt-3">
 <!-- Sidebar Toggler (Sidebar) -->
 <div class="text-center d-none d-md-inline">
 <button class="rounded-circle border-0"
id="sidebarToggle"></button>
</div>
 </ul>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); 
?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); 
?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script>
 $('.alert-message').alert().delay(3000).slideUp('slow');
</script>
</body>
</html>