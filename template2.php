<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <title>Home IMBPN STORE</title>
    <meta charset="utf-8">
    
</head>

<body>
<div class="container ">
            <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" >Manajemen Admin IMBPN STORE</a>
            </nav>
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                          </button>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">Logout</button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../admin/controller/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content" >
              <ul class="list-group col-md-3 col-xs-2">
                <li class="list-group-item "><a href="index.php?mode=produk"> <i class="fa fa-address-card "></i> <span class="hidden-xs">Data Produk</span></a></li>
                <li class="list-group-item "><a href="index.php?mode=pembeli"> <i class="fa fa-address-card "></i> <span class="hidden-xs">Data Pembeli</span></a></li>
                </ul>
            <div class="col-md-9 col-xs-10">
                <?php include_once $content; ?>
            </div>
            
        </div>

    </div>
    <div id="myModal " class="modal fade " role="dialog ">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <div class="modal-content ">
                <div class="modal-header ">
                    <button type="button " class="close " data-dismiss="modal ">&times;</button>
                    <h4 class="modal-title ">Berhasil</h4>
                </div>
                <div class="modal-body ">
                    <p></p>
                </div>
                <div class="modal-footer ">
                    <button type="button " class="btn btn-default " data-dismiss="modal ">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
</body>
</html>