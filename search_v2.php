<?php
foreach ($_GET as $q => $v) {
  $_GET[$q] = preg_replace("/(delete|select|insert|union|update|drop|;|--\s)/i", "在干嘛", $v);
}
foreach ($_POST as $q => $v) {
  $_POST[$q] = preg_replace("/(delete|select|insert|union|update|drop|;|--\s)/i", "在干嘛", $v);
}
require_once "inc/php/util.php";
require_once "inc/php/cookie.php";
require_once "inc/php/db.php";
require_once "inc/php/flow.php";
$title = $title.tos("SD高達 資料庫", "SD敢达 资料库");
?>
<html>
<head>
  <meta http-equiv="Content-Type"content="text/html; charset=UTF-8"/>
  <title><?=$title?></title>
  <link rel="icon" type="image/png" href="https://s2.ax1x.com/2019/01/23/kV2znK.png" />
  <style><?php require "inc/css/style.php"; ?></style>
  <script><?php require "inc/js/jquery.php"; ?></script>
</head>
<body localization="TC" fs="16">
<?php
require_once "inc/php/helper.php";
require_once "inc/php/form.php";
require_once "inc/php/result.php";
require_once "inc/php/footer.php";
?>
  <script><?php require_once "inc/js/script.php"; ?></script>
</body>
</html>