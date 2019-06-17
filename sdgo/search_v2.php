<?php
$is_localhost = false;
require_once "inc/php/util.php";
require_once "inc/php/cookie.php";
require_once "inc/php/db.php";
$meta_description = tos("希望你得到想要的機體！","希望你得到想要的机体！");
require_once "inc/php/flow.php";
$title = $title.tos("SD高達 資料庫", "SD敢达 资料库");
?>
<html>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
  <meta name='description' content='<?=$meta_description?>'/>
  <title><?=$title?></title>
  <link rel='icon' type='image/ico' href='sdgo.ico' />
  <link rel="stylesheet" type="text/css" href="css/style">
   <script src="js/jquery.js"></script>
</head>
<body localization='<?=$_COOKIE["l"]?>'>
  <?php require_once 'inc/php/helper.php';?>
  <?=minify(_require('inc/php/nav.php'))?>
  <div id="loading"><br><?=tos("加載中…<br><br>請耐心等候", "加载中…<br><br>请耐心等候")?><br></div>
  <?php require_once 'inc/php/result.php';?>
  <?php require_once 'inc/php/footer.php';?>
  <br>
   <script src="js/script" type="text/javascript"></script>
</body>
</html>