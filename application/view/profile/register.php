<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo $pageTitle; ?> </title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL ;?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL ;?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                         <!-- Nav Item - Search PageLink -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL . 'social';?>" >
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Search Page</a>
                        </li>

                         <!-- Nav Item - Logout Button -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                            </a>
                        </li>
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <!--<img class="<img-profile rounded-circle"
                                    src="img/undraw_profile.svg"> -->
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-left">
                                <h1 class="h4 text-gray-900 mb-4">Profile Details</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" id="examplePhone"
                                            placeholder="Phone Number">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-user" id="exampleDepartment"
                                            placeholder="Department">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="email" readonly="" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-user" id="exampleTitle"
                                            placeholder="Title, Sub Department">
                                    </div>
                                </div>  

                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleStation"
                                            placeholder="Station">
                                    </div>
                                    <div class="col-sm-2">
                                        <label>Photo:</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control form-control-user" id="examplePhoto" placeholder="Profile Photo">
                                    </div>
                                </div>

                                <a href="tables.html" class="btn btn-primary btn-user">
                                    Cancel </a>
                                <a href="tables.html" class="btn btn-primary btn-user">
                                    Save </a>

                            <hr>

                            <div class="text-left">
                                <h2 class="h4 text-gray-900 mb-4">Reset Password</h2>
                            </div>

                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                            </div>

                            <a href="register.html" class="btn btn-primary btn-user">
                                    Cancel</a>
                            <a href="register.html" class="btn btn-primary btn-user">
                                    Reset Password</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
      </div>



  <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="<?php echo URL; ?>signin/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Evidence Action 2020</span>
                    </div>
                </div>
            </footer>
    <!-- End of Footer -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URL; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo URL; ?>js/sb-admin-2.min.js"></script>

</body>

</html>