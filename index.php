<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EQUIPMENT | LENDING</title>
    <!-- Favicon -->
    <link rel="icon" href="icon.png" type="image/png">
    
    
    <link href="assets/template/vendors/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link href="assets/template/css/argon.css?v=1.0.1" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/kvm.css">
    <style type="text/css">    
        * {
            color: #202124;
            font-family: roboto,'Noto Sans Myanmar UI',arial,sans-serif;
        }
          .vms-btn {
            background-color: #024e5a;
            color: whitesmoke;
            transition: ease-in 0.4s all;
        }
        .vms-btn:hover {
            background-color: #024e5a;
            color: whitesmoke;
        }

        .vms-btn:focus {
            background-color: #024e5a;
            color: whitesmoke;
        }

        .btn-success {
            background-color: #024e5a;
        }
        .vms-text {
            color: #024e5a;
        }
        .gets{
            background-color: #C0C0C060;
            background-position: center;
        }
        .txt{
            font-family: Franklin Gothic Medium;
        }
        .eh{
            margin-right: 200px;
            margin-left: 200px;
        }

    </style>
<body class="gets">
<!--<div class="preloader"></div>-->
<div>
    <div class="container pt-2">
        <h1 class="bg-info text-light eh" style="text-align: center; font-family:Franklin Gothic Medium;">Mzumbe University Lending Equipment</h1>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5 col-xs-12 wow fadeIn login-form-mobile">
                <div class="card-header bg-info pb-1">
                    <center><img src="icon.png" alt="" srcset="" class="kvm-logo"></center>
                    <h3 class="text-center text-light txt">USER LOGIN</h3>
                </div>
                <div class="kvm-car card">
                    <div class="card-bod px-lg-3 px-sm-3 py-lg-5 mt-3">
                        <form  name="signin" action="includes/auth.php" method="POST" autocomplete="off" role="form">
                            <?php include ("includes/messages.php")?>
                            <div class="form-group mb-2">
                                    <label><b class="text-info txt">Username:</b></label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Username" type="text" name="username" required>
                                </div>
                            </div>
                                <label><b class="text-info txt">Password:</b></label>
                            <div class="form-group mt-0">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password" name="password" required>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit"name="signin"class="btn txt btn-block btn-info my-4">SIGN IN</button>
                            </div>
                            <hr>
                            <div class="form-group mt-2">
                                <p class="text-center ml-3"><a href="#" class="text-info txt">Register</a> if you don't have an account</p>
                            </div>
                            <div class="form-group mt-2">
                               <p class="text-center ml-4"><a href="#" class="text-info txt">Reset Password</a> if you forgot password</p> 
                            </div><hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer fixed-bottom bg-light p-lg-2 pt-3">
        <div class="container">
            <div class="row align-items-center justify-content-md-between pb-0 ">
                <div class="col-md-12 col-xs-12 my_footer">
                    <div class="copyright text-center">
                        &copy; <?php echo date ('Y'); ?>
                        <a href="" target="_blank" class="txt" >Equipment Lending</a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="assets/js/jquery3-6.js"></script>
<script type="text/javascript">
    $(window).on('load', function () {
       $('.preloader').fadeOut('slow');
    });
</script>
<script src="assets/js/kvm.js"></script>
</body>

</html>