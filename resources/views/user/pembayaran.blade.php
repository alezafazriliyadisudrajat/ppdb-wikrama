<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PPDB SMK WIRKAMA </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="">User</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-sm-none d-lg-inline-block">Hi,Nazri</div><i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/login">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">PPDB 2023-2024</div>
                        <a class="nav-link" href="/dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="/pembayaran">
                            <div class="sb-nav-link-icon"><i class=<i class="bi bi-cash-stack"></i><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cash-stack" viewBox="0 0 16 16">
                                    <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                    <path
                                        d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                                </svg>
                                </i>
                            </div>
                            pembayaran
                        </a>
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Student</h1>
                    <div class="main-title">
                        <div class="d-flex">
                            <box-icon name='minus'></box-icon>
                        </div>
                        <p>Pembayaran</p>
                        <p style="font-size: 15px">silahkan upload bukti Pembayaran</p>
                        <form method="POST" action="https://fajarafrizal.my.id/ppdb/transaksi/pembayaran"
                            enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="NUXcB3Xl80Xx4bPFqECo8ilw1vs3jZXTs899Jkh0">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Form Pembayaran</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-start">
                                                <div class="col-sm-4">
                                                    <label>Nama Bank</label>
                                                    <select name="nama_bank" id="class"
                                                        class="theSelect form-control w-100 ml-0"
                                                        onchange='checkvalue(this.value)'>
                                                        <option hidden disabled selected>--Pilih Bank--</option>
                                                        <option value="Maybank Virtual Account">Maybank Virtual Account
                                                        </option>
                                                        <option value="Permata Virtual Account">Permata Virtual Account
                                                        </option>
                                                        <option value="BNI Virtual Account">BNI Virtual Account</option>
                                                        <option value="BRI Virtual Account">BRI Virtual Account</option>
                                                        <option value="Mandiri Virtual Account">Mandiri Virtual Account
                                                        </option>
                                                        <option value="BCA Virtual Account">BCA Virtual Account</option>
                                                        <option value="Sinarmas Virtual Account">Sinarmas Virtual
                                                            Account</option>
                                                        <option value="BRI Virtual Account (Open Payment)">BRI Virtual
                                                            Account (Open Payment)</option>
                                                        <option value="CIMB Niaga Virtual Account (Open Payment)">CIMB
                                                            Niaga Virtual Account (Open Payment)</option>
                                                        <option value="Danamon Virtual Account (Open Payment)">Danamon
                                                            Virtual Account (Open Payment)</option>
                                                        <option value="Muamalat Virtual Account">Muamalat Virtual
                                                            Account</option>
                                                        <option value="CIMB Virtual Account">CIMB Virtual Account
                                                        </option>
                                                        <option value="Sahabat Sampoerna Virtual Account">Sahabat
                                                            Sampoerna Virtual Account</option>
                                                        <option value="Hana Bank Virtual Account (Open Payment)">Hana
                                                            Bank Virtual Account (Open Payment)</option>
                                                        <option value="BSI Virtual Account">BSI Virtual Account</option>
                                                        <option value="BSI Virtual Account (Open Payment)">BSI Virtual
                                                            Account (Open Payment)</option>
                                                        <option value="BNC Virtual Account">BNC Virtual Account
                                                        </option>
                                                        <option value="Alfamart">Alfamart</option>
                                                        <option value="Indomaret">Indomaret</option>
                                                        <option value="Alfamidi">Alfamidi</option>
                                                        <option value="OVO">OVO</option>
                                                        <option value="QRIS (Customizable)">QRIS (Customizable)
                                                        </option>
                                                        <option value="ShopeePay">ShopeePay</option>
                                                        <option value="lainnya">LAINNYA</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Nama Pemilik Rekening</label>
                                                    <input type="text" class="form-control" name="nama_pemilik"
                                                        value=""required>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Nominal</label>
                                                    <input type="text" id="rupiah" class="form-control"
                                                        name="nominal" value=""required>
                                                </div>

                                            </div>
                                            <br>
                                            <div class="row" id="lainnya1" style="display: none">
                                                <div class="form-group col-md-12">
                                                    <label for="asal_sekolah_text" class="mb-2">Nama BANK</label>
                                                    <input type="text" name="nama_bank_text" class="form-control"
                                                        placeholder="Masukkan nama bank">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="bukti">Foto bukti
                                                        pembayaran</label>
                                                    <input name="foto" type="file" class="custom-file-input"
                                                        aria-describedby="bukti" required>
                                                </div>
                                            </div>
                                            <br>

                                            <br>
                                            <div class="row align-items-start">
                                                <div class="col-md-8"></div>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-block btn-primary">Upload
                                                        Bukti
                                                        Pembayaran</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <script>
                        $(".theSelect").select2();
                    </script>
                    <script>
                        function checkvalue(val) {
                            if (val === "lainnya") {
                                document.getElementById('lainnya1').style.display = 'block';
                            } else {
                                document.getElementById('lainnya1').style.display = 'none';
                            }
                        }
                    </script>
                    <div class="d-flex">
                        <div class="justify-items-left">
                            <div class="card mb-5">
                                <div class="card-body bg-white "
                                    style="background-image: linear-gradient(to right, #263dc0, #162a60, #130153);color:white;">
                                </div>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
                                </script>
                                <script src="js/scripts.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
                                <script src="assets/demo/chart-area-demo.js"></script>
                                <script src="assets/demo/chart-bar-demo.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
                                <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
