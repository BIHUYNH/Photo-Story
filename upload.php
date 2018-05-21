<?php
$open="thunbar";
require_once __DIR__. "/automatic/loadfunction.php";
if (!isset($_SESSION['name_id'])) {
echo "<script>alert('Bạn phải đăng nhập mới được dùng chức năng này !!'); location.href='index.php'</script>";
}
$month = $db->fetchAll("thang");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
    "month_id" => postInput('month_id'),    
    ];
    $error = [];
    if (postInput('month_id') == '') {
        $error['month_id'] = " Mời bạn chọn album";
    }
    
    if (empty($error)) {
        if (isset($_FILES['thumbar'])) {
            $file_name = $_FILES['thumbar']['name'];
            $file_tmp = $_FILES['thumbar']['tmp_name'];
            $file_type = $_FILES['thumbar']['type'];
            $file_erro = $_FILES['thumbar']['error'];
            if ($file_erro == 0) {
                $part = ROOT;
                $data['picture'] = $file_name;
            }
        }       
        $id_insert = $db->insert("thunbar",$data);
        if ($id_insert) {
           move_uploaded_file($file_tmp,$part.$file_name);
            $_SESSION['success'] = " Thêm mới thành công";
            echo "<script>alert('Thêm ảnh vào album thành công');location.href='upload.php'</script>";
        }else{
            $_SESSION['error'] = " Thêm mới thất bại";
        }
    }
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
					<h2 class="fh5co-section-title animate-box">Upload Picture</h2>
					<p class="fh5co-lead animate-box">We'd love to talk about your story.</p>

                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Hình ảnh</label>
            <div class="col-sm-5">
                <input type="file" class="form-control" id="inputEmail3" name="thumbar">
                <?php if (isset($error['name'])):?>
                    <p class="text-danger"> <?php echo $error['name']?></p>
                <?php endif ?>
            </div>
        </div>
        <br>
        <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Tháng</label>
                <div class="col-sm-6">
                    <select class="form-control col-md-12" name="month_id">
                        <option value=""> - Mời bạn chọn tháng -</option>
                        <?php foreach ($month as $item): ?>
                            <option value="<?php echo $item['id'] ?>"><?php echo $item['month'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <?php if (isset($error['month_id'])):?>
                        <p class="text-danger"> <?php echo $error['month_id']?></p>
                    <?php endif ?>                            
                </div>
            </div>
            <br><p class="animate-box"><button type="submit" class="btn btn-primary btn-lg">Upload</button></p>
    </form>
					
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
    <script src="/Photo-Story/upload/js/main.js"></script>
    
    </body>
</html>


