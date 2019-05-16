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
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="<?=$meta_description?>"/>
  <title><?=$title?></title>
  <link rel="icon" type="image/png" href="https://s2.ax1x.com/2019/01/23/kV2znK.png" />
  <style><?=minify(_require("inc/css/style.php"))?></style>
  <script><?php require_once "inc/js/jquery.php"; ?></script>
</head>
<body localization="<?=$_COOKIE["l"]?>" fs="<?=$_COOKIE["fs"]?>">
<?php
  $body = _require("inc/php/helper.php");
  $body .= _require("inc/php/nav.php");
  $body .= _require("inc/php/result.php");
  $body .= _require("inc/php/footer.php");
  $body .= "<script>"._require("inc/js/script.php")."</script>";
  echo minify($body);
?>
</body>
</html>