<?php 
require_once __DIR__. "/automatic/loadfunction.php";
$id = intval(getInput('id'));
$EditPic = $db->fetchID("thunbar",$id);
if (empty($EditPic)) {
    $_SESSION['error'] = " dữ liệu k có";
    echo "<script>alert('Dữ liệu k tồn tại');location.href='/Photo-Story/delPic.php';</script>";exit();
}
$num = $db->delete("thunbar",$id);
if($num > 0){
  $_SESSION['success'] = " Xóa thành công";
  echo "<script>alert('Xóa ảnh thành công');location.href='/Photo-Story/delPic.php';</script>";exit();
}else{
  $_SESSION['error'] = " Xóa thất bại";
  echo "<script>alert('Xóa ảnh k thành công')location.href='/Photo-Story/delPic.php';</script>";exit();
}
?>