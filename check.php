<?php session_start();
$ID=$_POST['ID'];
$PW=$_POST['PW'];
if (($ID == 'skysky') && ($PW == '1234')){
  header('location: index.php');
}
  else
  {
    echo "에러 : 로그인에 실패하였습니다.";
    header('location:login.php')
  }
 ?>
