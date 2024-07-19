<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Askar</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>

    <link href="<?php echo base_url(); ?>public/assets/admin/css/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>public/assets/admin/css/upload.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="icon" href="<?= base_url() . 'public/assets/img/portfolio/A.png'; ?>">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Askar Admin</a>
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
                    <li><a class="dropdown-item" href="#!"> <?php $session = session();
                                                            echo $_SESSION['nama']; ?></a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?= base_url('Admin/Logout') ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?= base_url('Admin/index'); ?>">
                            <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="<?= base_url('Admin/Form_Upload'); ?>">
                            <div class="sb-nav-link-icon"><i class="fa fa-upload"></i></div>
                            Upload Gallery
                        </a>
                        <div class="sb-sidenav-menu-heading">Logout Account</div>
                        <a class="nav-link" href="<?= base_url('Admin/Logout') ?>"">
                            <div class=" sb-nav-link-icon"><i class="fa fa-window-close"></i>
                    </div>
                    Logout
                    </a>
                </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php $session = session();
            echo $_SESSION['nama']; ?>
        </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">UPLOAD GALLERY</h1>
                <ol class="breadcrumb mb-3">
                    <li class="breadcrumb-item active">Upload Photo or Video</li>
                </ol>

                <!-- Upload -->
                <div class="row d-flex justify-content-center mt-100">
                    <div class="col-md-8">

                        <div class="card">
                            <div class="card-header">
                                <h5>File Upload</h5>
                            </div>
                            <?php if (session('msg')) : ?>
                                <div class="alert alert-success mt-3">
                                    <?= session('msg') ?>
                                </div>
                            <?php endif ?>
                            <?php if (session('e1')) : ?>
                                <div class="alert alert-danger mt-3">
                                    <?= session('e1') ?>
                                </div>
                            <?php endif ?>
                            <?php if (session('e2')) : ?>
                                <div class="alert alert-danger mt-3">
                                    <?= session('e2') ?>
                                </div>
                            <?php endif ?>
                            <div class="card-block">
                                <form method="post" action="<?php echo base_url('Admin/Upload'); ?>" enctype="multipart/form-data" class="dropzone dz-clickable">

                                    <div class="dz-default dz-message" input type="file" name='images[]' multiple=""><span>Drop files here to upload</span></div>
                                </form>
                                <div class="text-center m-t-20">
                                    <button class="btn btn-primary" type="submit">Upload Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Tables -->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2024</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>public/assets/admin/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>public/assets/admin/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/admin/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>public/assets/admin/js/datatables-simple-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        Dropzone.options.myDropzone = {
            paramName: 'images[]', // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            acceptedFiles: 'image/*',
            init: function() {
                this.on("success", function(file, response) {
                    console.log("File uploaded successfully");
                });
                this.on("error", function(file, response) {
                    console.log("File upload failed");
                });
            }
        };
    </script>


</body>

</html>