<?php
$query_html = "";
$meta_description = "";
$key = ["skl","sp","wpn","eff","origin","rank","pos","tag","prop"];
if (array_key_exists($key[5], $_GET)) {
  $_GET[$key[5]] = strtoupper($_GET[$key[5]]);
  $_POST[$key[5]] = strtoupper($_POST[$key[5]]);
}
if (array_key_exists($key[6], $_GET)) {
  $_GET[$key[6]] = strtoupper($_GET[$key[6]]);
  $_POST[$key[6]] = strtoupper($_POST[$key[6]]);
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
else if (count($_POST) >= 11) {
  require_once "inc/php/query.php";
}
else if (in_array(array_keys($_GET)[0], $key)) {
  require_once "inc/php/category.php";
}
?>