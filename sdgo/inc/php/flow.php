<?php
$query_html = "";
$meta_description = tos("希望你得到想要的機體！","希望你得到想要的机体！");
$key = ["skl","sp","wpn","eff","origin","rank","pos","tag","prop"];
foreach ([2,5] as $i) {
  if (array_key_exists($key[$i], $_GET)) {
    $_GET[$key[$i]] = strtoupper($_GET[$key[$i]]);
    $_POST[$key[$i]] = strtoupper($_POST[$key[$i]]);
  }
}
foreach ([6] as $i) {
  if (array_key_exists($key[$i], $_GET)) {
    $_GET[$key[$i]] = strtolower($_GET[$key[$i]]);
    $_POST[$key[$i]] = strtolower($_POST[$key[$i]]);
  }
}
if (array_keys($_GET)[0] == "404") {
  require_once "inc/php/404.php";
}
else if (array_keys($_GET)[0] == "id") {
  if (preg_match("/[0-9]{5},[0-9]{5}/", $_GET["id"])) {
    require_once "inc/php/compare.php";
  }
  else {
    require_once "inc/php/id.php";
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
?>