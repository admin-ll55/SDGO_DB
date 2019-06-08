<?php
if (!preg_match("/^\/sdgo\//", $_SERVER["PHP_SELF"])) {
  die("<b>Please place all files inside a folder named </b><code>sdgo</code><b>.</b>");
}
require_once "inc/php/util.php";
require_once "inc/php/cookie.php";
require_once "inc/php/db.php";
require_once "inc/php/flow.php";
$title = $title.tos("SD高達 資料庫", "SD敢达 资料库");
$meta_description = tos("希望你得到想要的機體！","希望你得到想要的机体！");
?>
<html>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
  <meta name='description' content='<?=$meta_description?>'/>
  <title><?=$title?></title>
  <link rel='icon' type='image/png' href='https://s2.ax1x.com/2019/01/23/kV2znK.png' />
  <style><?php require_once 'inc/css/style.php';?></style>
  <script><?php require_once 'inc/js/jquery.php';?></script>
</head>
<body localization='<?=$_COOKIE["l"]?>'>
  <?php require_once 'inc/php/helper.php';?>
  <?=minify(_require('inc/php/nav.php'))?>
  <?php require_once 'inc/php/result.php';?>
  <br>
  <script><?php require_once 'inc/js/script.php';?></script>
</body>
</html>