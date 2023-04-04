
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TESTER CRUD</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registrasi Akun APPM</h1>
                                    </div>
                                    <section class="form-box-popup">
                                        <div class="form-regis">
                                            <div class="form-value">
                                                <form action="masyarakat/crud_web.php?pg=register" method="POST">
                                                    <h2>Registrasi</h2>
                                                    <div class="inputbox">
                                                        <ion-icon name="pencil-outline"></ion-icon>
                                                        <input type="text" name="nama" required>
                                                        <label for="">Nama Lengkap</label>
                                                    </div>
                                                    <div class="inputbox">
                                                        <ion-icon name="person-add-outline"></ion-icon>
                                                        <input type="text" name="username" required>
                                                        <label for="">Username</label>
                                                    </div>
                                                    <div class="inputbox">
                                                        <ion-icon name="lock-closed-outline"></ion-icon>
                                                        <input type="password" name="password" required>
                                                        <label for="">Password</label>
                                                    </div>
                                                    <button type="submit">Registrasi</button>
                                                    <div class="register">
                                                        <p>Sudah Punya Akun? <a href="#" data-bs-toggle="modal" data-bs-target="#modal_masyarakat">Login</a></p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </section>
                                    <hr>
                                    <p class="small text-center">Silahkan Login Jika Telah Memiliki Akun!</p>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
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
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>