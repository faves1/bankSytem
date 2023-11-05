<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Title  -->
    <title>Profit - Investment and Stock Broker Template</title>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Profit - Investment and Stock Broker Template">
    <meta name="author" content="Chitrakoot Web">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://profit.websitelayout.net/html/assets/img/favicon.ico">

    <!-- Google Fonts -->
    <link href="loginpage_files/css2.css" rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="loginpage_files/fontawesome-all.css">

    <!-- Theme CSS -->
    <link href="loginpage_files/theme.css" rel="stylesheet">

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- LOGIN FORM
        ================================================== -->
        <section class="p-0">
            <div class="container d-flex flex-column">

                <div class="row align-items-center justify-content-center min-vh-100">
                    <div class="col-sm-11 col-md-8 col-lg-7 col-xl-5">

                        <div class="card p-5 p-sm-6 my-5 shadow-light">

                            <div class="mb-4 text-center">
                                <h2 class="font-weight-normal mb-0">Welcome to Trinex</h2>
                                <p class="mb-0">Login to your account.</p>
                            </div>

                            <!-- Form -->
                            <form action="includes\signin.inc.php" method="POST">

                                <div class="row">

                                    <!-- Input -->
                                    <div class="col-12 mb-4">

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Your username">
                                        </div>

                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <div class="col-12 mb-4">

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Your password">
                                        </div>

                                    </div>
                                    <!-- End Input -->

                                </div>

                                <div class="row mt-2">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="login-remember">
                                            <label class="custom-control-label" for="login-remember">Keep me signed in</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-start text-sm-end">
                                        <a href="#" class="m-link-muted small">Forgot password?</a>
                                    </div>

                                    <div class="col-md-12 center">
                                        <button type="submit" name="submit" class="btn btn-primary d-block w-100 mt-4 mb-0">Login</button>
                                    </div>
                                </div>

                            </form>
                            <!-- End Form -->

                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>

   
    <!-- ALL JAVASCRIPT
    ================================================== -->

    <!-- Global JS -->
    <script src="loginpage_files/jquery.min.js"></script>
    <script src="loginpage_files/popper.min.js"></script>
    <script src="loginpage_files/bootstrap.min.js"></script>

    <!-- Theme JS -->
    <script src="loginpage_files/theme.js"></script>



 </body></html>