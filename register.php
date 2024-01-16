<?php
include "layout/header.php";
?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

         <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Daftar!</h1>
                                    </div>
                                    <form action="daftar.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6">

                                        <input type="text" class="form-control form-control-user" id="username_rizalz"
                                            name="username_rizalz"placeholder="Username">
                                    </div>
                                    <div class="col-sm-6">

                                        <input type="text" class="form-control form-control-user" id="password_rizalz"
                                            name="password_rizalz" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">

                                        <input type="text" class="form-control form-control-user" id="nama_lengkap_rizalz"
                                            name="nama_lengkap_rizalz"placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                      <input type="submit" class="btn btn-primary btn-user btn-block" value="Daftar">

                                        <hr>

                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="login.php">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
