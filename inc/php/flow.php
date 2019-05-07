<?php
$query_html = "";
$key = ["skl","sp","wpn","eff","origin","pos"];
if (array_keys($_GET)[0] == "id") {
  require_once "inc/php/id.php";
}
else if (in_array(array_keys($_GET)[0], $key)) {
  foreach ($_GET as $q => $v) {
    $_POST[$q] = $v;
  }
  require_once "inc/php/query.php";
}
else if (array_keys($_GET)[0] == "machine") {
  require_once "inc/php/machine.php";
}
else if (count($_POST) >= 11) {
  require_once "inc/php/query.php";
}
?>