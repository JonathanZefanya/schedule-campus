<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Data Ruang - ITI</title>

    <!-- General CSS Files -->
    <link rel="icon" href="<?=base_url('assets/')?>img/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/components.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>

</head>

<body>

    <!-- Start Sidebar -->
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class=" navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" style="margin-bottom:3px !important;"
                                src="../assets/stisla-assets/img/avatar/avatar-2.png"
                                class="rounded-circle mr-1 my-auto">
                            <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">Hello, <?php
$data['user'] = $this->db->get_where('admin', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['username'];
?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Admin - ITI</div>
                            <a href="<?=base_url('welcome/logout')?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand text-danger">
                        <div>
                            <a href="<?=base_url('admin')?>"
                                style="font-size: 35px;font-weight:900;font-family: 'Poppins', sans-serif;"
                                class="text-success text-center"><i style="font-size: 30px;"
                                    ></i> 
                                    ITI -IF</a>
                        </div>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?=base_url('admin')?>">ITI -IF</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header ">Dashboard</li>
                        <li class="nav-item dropdown active">
                            <a href="<?=base_url('admin')?>" class="nav-link"><i
                                    class="fas fa-desktop"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Management Kelas</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                                <span>Kelas</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/data_kelas')?>">Data Kelas</a></li>
                                <li><a class="nav-link" href="<?=base_url('admin/add_kelas')?>">Tambah Data Kelas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Ruang</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-building"></i>
                                <span>Ruang</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/data_ruang')?>">Data Ruang</a></li>
                                <li><a class="nav-link" href="<?=base_url('admin/add_ruang')?>">Tambah Data Ruang</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Mata Kuliah</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tasks"></i>
                                <span>Mata Kuliah</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/data_matakuliah')?>">Data Mata Kuliah</a></li>
                                <li><a class="nav-link" href="<?=base_url('admin/add_matakuliah')?>">Tambah Mata Kuliah</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Dosen</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>Dosen</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/data_dosen')?>">Data Dosen</a>
                                </li>
                                <li><a class="nav-link" href="<?=base_url('admin/add_dosen')?>">Tambah Data Dosen</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Pengampu</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>Pengampu</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/data_pengampu')?>">Data Pengampu</a>
                                </li>
                                <li><a class="nav-link" href="<?=base_url('admin/add_pengampu')?>">Tambah Pengampu</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Penjadwalan</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-table"></i>
                                <span>Penjadwalan</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/data_penjadwalan')?>">Data Penjadwalan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">About Admin</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-address-card"></i>
                                <span>Admin</span></a>
                            <ul class="dropdown-menu">
                            <li><a class="nav-link" href="<?=base_url('admin/data_admin')?>">Data Admin</a>
                                </li>
                                <li><a class="nav-link" href="<?=base_url('admin/add_admin')?>">Tambah Data Admin</a>
                                </li>
                            </ul>
                        </li>
                </aside>
            </div>
            <!-- End Sidebar -->


            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Management Data Ruang Penjadwalan Round Robin</h2>
                                <hr>
                                <p class="card-text"> Jumlah ruang yang terdaftar sekarang adalah <span
                                        class="font-weight-bold" style="color:black;">
                                        <?php echo $this->db->count_all('mata_kuliah'); ?> ruang.</span> Untuk sementara, Ruang Hanya admin yang diperkenankan
                                    untuk mendaftarkan Ruang. </p>
                                <a href="<?=base_url('admin/add_ruang')?>" class="btn btn-primary">Tambah
                                    Data ruang</a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="overflow: scroll">
                        <div class="col-md-12">
                            <div class="container bg-white p-4"
                                style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                <table id="example" class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th hidden scope="col">Id</th>
                                            <th scope="col">Nomor Ruang</th>
                                            <th scope="col">Kapasitas</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

foreach ($ruang as $r) {
    ?>
                                        <tr class="text-center">

                                            <th hidden scope="row">
                                                <?php echo $r->id_ruang ?>
                                            </th>

                                            <td>
                                                <?php echo $r->no_ruang ?>
                                            </td>

                                            <td>
                                                <?php echo $r->kapasitas ?>
                                            </td>


                                            <td class="text-center">
                                                <a href="<?php echo site_url('admin/update_ruang/' . $r->id_ruang); ?>"
                                                    class="btn btn-info">Update</a>

                                                <a href="<?php echo site_url('admin/delete_ruang/' . $r->id_ruang); ?>"
                                                    class="btn btn-danger remove">Delete</a>
                                            </td>

                                        </tr>
                                        <?php
}
?>
                                    </tbody>
                                </table>
                                <p class="small font-weight-bold">Pendaftaran ruang hanya dapat dilakukan admin.jika ruang
                                    ingin mendaftar, cukup datang ke admin.</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->


    <!-- Start Sweetalert -->
    <?php if ($this->session->flashdata('success-edit')): ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data Ruang Telah Dirubah!',
        text: 'Selamat data berubah!',
        showConfirmButton: false,
        timer: 2500
    })
    </script>
    <?php endif;?>

    <?php if ($this->session->flashdata('ruang-delete')): ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data Ruang Telah Dihapus!',
        text: 'Selamat data telah Dihapus!',
        showConfirmButton: false,
        timer: 2500
    })
    </script>
    <?php endif;?>
    <!-- End Sweetalert -->


    <!-- Start Footer -->
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2024 <div class="bullet"></div> Code & Design by <a
                href="">Jonathan Zefanya</a>
        </div>
        <div class="footer-right">
            Made with <span class="text-danger"> &#10084;</span> by Xeadesta
        </div>
    </footer>
    <!-- End Footer -->


    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?=base_url('assets/')?>stisla-assets/js/stisla.js"></script>
    <!-- JS Libraies -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
    <!-- Template JS File -->
    <script src="<?=base_url('assets/')?>stisla-assets/js/scripts.js"></script>
    <script src="<?=base_url('assets/')?>stisla-assets/js/custom.js"></script>
</body>

</html>