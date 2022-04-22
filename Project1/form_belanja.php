<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Praktikum 2</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">SAS-STTNF</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="array_siswa.php">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading">Project</div>
                        <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="far fa-hand-point-right"></i></div>
                                Project 1
                            </a>
                        <div class="sb-sidenav-menu-heading">Praktikum</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Daftar Praktikum
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Array_Siswa.php">Praktikum 1</a>
                                    <a class="nav-link" href="form_belanja.php">Praktikum 2</a>
                                    <a class="nav-link" href="main.php">Praktikum 3</a>
                                    <a class="nav-link" href="class_persegipanjang.php">Praktikum 4</a>
                                    <a class="nav-link" href="dispenser.php">Praktikum 5</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Yoga Bagas Budhiman
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <div class="container d-flex row">
                    <h2 class="my-4 text-center">Form Belanja</h2>
                    <hr><br>
                    <div class="col-8">
                        <form method="POST" action="form_belanja.php">
                            <div class="form-group row">
                                <label for="customer" class="col-4 col-form-label">Nama Customer</label> 
                                <div class="col-8">
                                <div class="input-group">
                                    <input id="customer" name="customer" type="text" class="form-control">
                                </div>
                                </div>
                            </div></br>
                            <div class="form-group row">
                                <label for="produk" class="col-4 col-form-label">Produk</label> 
                                <div class="col-8">
                                <select id="produk" name="produk" class="custom-select">
                                    <option value="TV">TV</option>
                                    <option value="Kulkas">Kulkas</option>
                                    <option value="Mesin Cuci">Mesin Cuci</option>
                                </select>
                                </div>
                            </div></br>
                            <div class="form-group row">
                                <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
                                <div class="col-8">
                                <input id="jumlah" name="jumlah" type="text" class="form-control">
                                </div>
                            </div></br>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <input name="proses" type="submit" value="Simpan" class="btn btn-primary"/> 
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-4">
                        <ul class="list-group">
                            <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                            <li class="list-group-item">TV : 4.200.000</li>
                            <li class="list-group-item">Kulkas : 3.100.000</li>
                            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                            <li class="list-group-item active">Harga Dapat Berubah Setiap Hari</li>
                        </ul>
                    </div>
                    <?php
                        $nama = $_POST['customer'];
                        $produk = $_POST['produk'];
                        $jumlah = $_POST['jumlah'];

                        echo 'Nama : '.$nama;
                        echo '</br>Produk yang anda pilih : '.$produk;
                        echo '</br>Jumlah produk : '.$jumlah;
                        if ($produk == 'TV') {
                            echo '</br>Total belanja anda : Rp '. number_format($jumlah*4200000,2,',','.');
                        }
                        elseif ($produk == 'Kulkas') {
                            echo '</br>Total belanja anda : Rp '. number_format($jumlah*3100000,2,',','.');
                        }
                        elseif ($produk == 'Mesin Cuci') {
                            echo '</br>Total belanja anda : Rp '. number_format($jumlah*3800000,2,',','.');
                        }
                    ?>
                </div>
            </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>