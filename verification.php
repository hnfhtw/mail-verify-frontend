<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-Mail Address Verification</title>
    <!-- Bootstrap core CSS-->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="libs/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="verification.php">FHV</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="E-Mail Address Verification">
                <a class="nav-link" href="verification.php">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">E-Mail Address Verification</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="History">
                <a class="nav-link" href="history.php">
                    <i class="fa fa-fw fa-history"></i>
                    <span class="nav-link-text">History</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" id="logoutLink">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-dashboard"></i> E-Mail Address Verification
            </div>
            <div class="card-deck">
                <div class="card" style="border: none;">
                    <div class="form-group" style="margin-left: 10px; margin-top: 20px;">
                        <form id="verifyForm" onsubmit="return(false);">
                            <textarea class="form-control" rows="1" name="mailad" id="mailAddr"
                                      placeholder="Enter mail address:"></textarea>
                            <button type="submit" class="btn btn-primary btn-block" id="verifyBtn" style="margin-top: 10px;">Verify</button>
                        </form>
                    </div>
                </div>
                <div class="card" style="border: none;">
                    <div class="card-block" style="text-align: center;">
                        <i class="fa fa-square-o" aria-hidden="true" style="font-size: 10em; margin-top: 20px;" id="isValid"></i>
                        <p style="font-size: 3em; font-weight: bold;" id="validText">Verification Result</p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © xxx </small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Leave session?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="index.php" id="logoutBtn">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="libs/jquery/jquery.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="libs/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>
        <script src="js/sessionStorage.js"></script>
        <script src="js/verify.js" data-backend="<?php echo getenv('BACKEND_URL');?>"></script>
        <script src="js/auth.js" data-backend="<?php echo getenv('BACKEND_URL');?>"></script>
    </div>
</body>

</html>
