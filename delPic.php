<?php
$open="thunbar";
require_once __DIR__. "/automatic/loadfunction.php";
if (!isset($_SESSION['name_id'])) {
echo "<script>alert('Bạn phải đăng nhập mới được dùng chức năng này !!'); location.href='index.php'</script>";
}
if (isset($_GET['page'])) {
    $p = $_GET['page'];
}else{
    $p = 1; 
}
$sql = "SELECT thunbar.* , thang.month as nameMonth FROM thunbar LEFT JOIN thang on thang.id = thunbar.month_id";
$pic = $db->fetchJone('thunbar',$sql,$p,10,true);
if (isset($pic['page'])) {
    $sotrang = $pic['page'];
    unset($pic['page']);
}
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TimeLine NSS Album</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="images/lightning.ico">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Animate -->
    <link rel="stylesheet" href="/Photo-Story/upload/css/animate.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="/Photo-Story/upload/css/flexslider.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="/Photo-Story/upload/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/Photo-Story/upload/css/bootstrap.css">
    <link rel="stylesheet" href="/Photo-Story/upload/css/style.css">
    <link href="/Photo-Story/delete/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Photo-Story/delete/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/Photo-Story/delete/css/sb-admin.css" rel="stylesheet">
    <!-- Modernizr JS -->
    <script src="/Photo-Story/upload/js/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
   
    <div id="fh5co-header">
        <div class="container">
            <!-- Mobile Toggle Menu Button -->
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <div id="fh5co-logo">
                <a href="index.php">NSS</a>
            </div>
            <nav id="fh5co-main-nav">
                <ul>
                    <?php if (isset($_SESSION['name_user'])): ?>
                    <li><a href="index.php"><?php echo $_SESSION['name_user'] ?></a></li>
                    <li><a href="upload.php">Upload</a></li>
                    <li><a href="delPic.php">Delete</a></li>
                    <li><a href="logout.php">Log out</a></li>
                    <?php else: ?>
                    <li><a href="login.php" data-nav-section="home">Login</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
    <div id="fh5co-main">


    <div id="fh5co-contact" data-section="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center section-heading">
					<h2 class="fh5co-section-title animate-box">Delete Picture</h2>

                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%; text-align: center;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 10px;">STT</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px">Hình ảnh</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Mô tả</th>                                   
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt = 1;foreach ($pic as $item):?>
                                <tr role="row" class="odd">
                                    <td><?php echo $stt ?></td>
                                    <td>
                                        <img src="/Photo-Story/food/<?php echo $item['picture'] ?>" width="40%" height="10%" >
                                    </td>
                                    <td><?php echo $item['description'] ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $stt++; endforeach ?>
                            </tbody>
                    </table>
					<div class="pull-right">
                            <nav aria-label="Page navigation" class="clearfix">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <?php for ($i=1; $i <= $sotrang ; $i++): ?>
                                        <?php 
                                        if(isset($_GET['page'])){
                                            $p = $_GET['page'];
                                        }else{
                                            $p = 1;
                                        }
                                        ?>
                                        <li class="<?php echo ($i == $p) ? 'active' : '' ?>">
                                            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>
                                    <?php  endfor;?>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
				</div>
			</div>
		</div>
	</div>
<div id="fh5co-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="fh5co-footer-widget">
                            <p>&copy; NSS Template. All Rights Reserved.</p>
                            <p>Designed by Storm </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="fh5co-footer-widget">
                            <ul class="fh5co-social pull-right">
                                <li>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="icon-google"></i></a>
                                </li>

                            </ul>
                        <div class="fh5co-footer-widget">
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- END fh5co-page -->

    <!-- jQuery -->
    <script src="/Photo-Story/upload/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="/Photo-Story/upload/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="/Photo-Story/upload/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="/Photo-Story/upload/js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="/Photo-Story/upload/js/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="/Photo-Story/upload/js/jquery.flexslider-min.js"></script>
    <!-- Main JS -->
    <script src="/Photo-Story/delete/vendor/jquery/jquery.min.js"></script>
    <script src="/Photo-Story/delete/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Photo-Story/delete/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/Photo-Story/delete/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Photo-Story/delete/js/sb-admin.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    
    </body>
</html>


