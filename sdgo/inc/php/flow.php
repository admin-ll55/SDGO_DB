<?php
$query_html = "";
$is_home = false;
$key = ["skl","sp","wpn","eff","origin","rank","pos","tag","prop"];
foreach ([5] as $i) {
  if (array_key_exists($key[$i], $_GET)) {
    $_GET[$key[$i]] = strtoupper($_GET[$key[$i]]);
    $_POST[$key[$i]] = strtoupper($_POST[$key[$i]]);
  }
}
foreach ([2,6] as $i) {
  if (array_key_exists($key[$i], $_GET)) {
    $_GET[$key[$i]] = strtolower($_GET[$key[$i]]);
    $_POST[$key[$i]] = strtolower($_POST[$key[$i]]);
  }
}
if (array_keys($_GET)[0] == "404") {
  $query_html = _require("inc/php/404.php");
}
else if (array_keys($_GET)[0] == "id") {
  if (preg_match("/[0-9]{5}(,[0-9]{5})+/", $_GET["id"])) {
    require_once "inc/php/compare.php";
  }
  else {
    require_once "inc/php/id.php";
    /*$title = $title.tos("SD高達 資料庫", "SD敢达 资料库");
    $api = preg_match("/api\?id=/", $_SERVER["REQUEST_URI"]);
    die(minify((!$api?"<html>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
  <meta name='description' content='{$meta_description}'/>
  <title>{$title}</title>
  <link rel='icon' type='image/png' href='https://s2.ax1x.com/2019/01/23/kV2znK.png' />
  <style>"._require("inc/css/style.php")."</style>
  <script>"._require("inc/js/jquery.php")."</script>
</head>
<body localization='{$_COOKIE["l"]}'>".
  _require('inc/php/helper.php').
  _require('inc/php/nav.php'):"").
  _require('inc/php/result.php').
  (!$api?_require('inc/php/footer.php').
  "<script>"._require('inc/js/script.php')."</script>
</body>
</html>":"")));*/
  }
}
else if (array_keys($_GET)[0] == "machine") {
  require_once "inc/php/machine.php";
}
else if (array_keys($_GET)[0] == "blueprint") {
  require_once "inc/php/blueprint.php";
}
else if (count($_POST) >= 11) {
  require_once "inc/php/query.php";
}
else if (in_array(array_keys($_GET)[0], $key)) {
  require_once "inc/php/category.php";
}
else {
  $is_home = true;
}
?>