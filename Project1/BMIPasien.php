<?php
require_once 'class_bmi.php';

if (isset($_GET["nama_pasien"])) {
    $bmi = new BMI;
    $bmi->tglperiksa = $_GET["tgl_periksa"];
    $bmi->kdpasien = $_GET["kd_pasien"];
    $bmi->nama = $_GET["nama_pasien"];
    $bmi->berat = $_GET["brt_pasien"];
    $bmi->tinggi = $_GET["tgi_pasien"];
    $bmi->umur = $_GET["umur"];
    $bmi->gender = $_GET["gender"];

}

$pasien1 = ['tglperiksa'=>'2022-03-21','kdpasien'=>'PS001','nama'=>'Muhammad Afip', 'kelamin'=>'Laki-laki', 'umur'=>19, 'berat'=>90,9, 'tinggi'=>185];
$pasien2 = ['tglperiksa'=>'2022-04-09','kdpasien'=>'PS002','nama'=>'Faisal P', 'kelamin'=>'Laki-laki', 'umur'=>21, 'berat'=>55,6, 'tinggi'=>185];
$pasien3 = ['tglperiksa'=>'2022-05-20','kdpasien'=>'PS003','nama'=>'Laila Amanda', 'kelamin'=>'Perempuan', 'umur'=>19, 'berat'=>65,3, 'tinggi'=>168];
$pasien4 = ['tglperiksa'=>$bmi->tglperiksa,'kdpasien'=> $bmi->kdpasien,'nama'=> $bmi->nama, 'kelamin'=> $bmi->gender, 'umur'=>$bmi->umur, 'berat'=>$bmi->berat, 'tinggi'=>$bmi->tinggi];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hasil BMI</title>
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
                <div class="container">
                    <h2 class="text-center my-4">Data BMI Pasien</h2><hr><br>
                    <table class="table text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">Tanggal Periksa</th>
                                <th scope="col">Kode Pasien</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Tinggi</th>
                                <th scope="col">BMI</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody class="table-secondary">
                            <?php 
                                $nomor = 1;
                                foreach($ar_pasien as $pasien) {
                                    echo '<tr><td>'.$nomor.'</td>';
                                    echo '<td>'.$pasien['tglperiksa'].'</td>';
                                    echo '<td>'.$pasien['kdpasien'].'</td>';
                                    echo '<td>'.$pasien['nama'].'</td>';
                                    echo '<td>'.$pasien['kelamin'].'</td>';
                                    echo '<td>'.$pasien['umur'].'</td>';
                                    echo '<td>'.$pasien['berat'].'</td>';
                                    echo '<td>'.$pasien['tinggi'].'</td>';
                                    $BMI = $pasien["berat"] / (($pasien["tinggi"]/100)**2);
                                    echo '<td>'.number_format($BMI,1).'</td>';
                                    $status = new BMI();
                                    echo $status->statusBMI($BMI);
                                    echo '</tr>';
                                    $nomor++;
                                }
                            ?>
                        </tbody>
                    </table>
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