<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Data Detail dosen - ITI </title>

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
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>stisla-assets/css/components.css">

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
                            <img alt="image" style="margin-bottom:4px !important;"
                                src="../../assets/stisla-assets/img/avatar/avatar-2.png"
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
                        <li class="nav-item dropdown">
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
                        <li class="nav-item dropdown">
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
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>Dosen</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?=base_url('admin/data_dosen')?>">Data dosen</a>
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
                    <div class="card" style="width:100%;">
                        <div class="card-body">
                            <h2 class="card-title" style="color: black;">Detail dosen | <?=$detail->nama_dosen?> </h2>
                            <hr>
                            <p class="card-text"> Detail dosen meliputi nik, Nama, dan E-mail 
                              
                                Kita tidak bisa mengubah password dosen, Hanya dosen yang dapat mengubah passwordnya
                                sendiri.
                            </p>
                            <a href="#detail" class="btn btn-primary">Saya paham dan
                                ingin melanjutkan</a>
                        </div>
                    </div>
                    <div id="detail" class="col-md-12 bg-white p-3"
                        style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                        <h1 class="font-weight-bold card-title text-center" style="color: black;">Detail dosen </h1>
                        <p class="text-center" style="line-height: 5px;">Berikut data detail yang terdapat di
                            database, meliputi nik, Nama, Email
                            dan Mapel yang diajar.</p>
                        <hr>
                        <table style="width: 100%" class="container text-center">
                            <tbody>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Nomor Induk Pegawai :</span></td>
                                    <td> <?=$detail->nik?></td>
                                </tr>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Nama dosen :</span></td>
                                    <td> <?=$detail->nama_dosen?></td>
                                </tr>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Alamat Email :</span></td>
                                    <td><?=$detail->email?></td>
                                </tr>
                                <tr style="border-bottom: 0.5px solid #6c757d;">
                                    <td><span class="font-weight-bold">Password : </span></td>
                                    <td>Terenkripsi</td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="font-weight:500px!important;font-size:18px;text-align:justify;" class="text-justify">
                        </p>
                        <a href="<?=base_url('admin/data_dosen')?>" class="btn btn-success btn-block">Kembali</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->


    <!-- Start Footer -->
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2020 <div class="bullet"></div> Code & Design by <a
                href="https://syauqizaidan.github.io/">Jonathan Zefanya</a>
        </div>
        <div class="footer-right">
            Made with <span class="text-danger"> &#10084;</span> by Jonathan Zefanya
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