<?php
$query_html = "";
if (array_key_exists("id", $_GET)) {
  require_once "inc/php/id.php";
}
else if (array_key_exists("machine", $_GET)) {
  require_once "inc/php/machine.php";
}
else if (count($_POST) >= 11) {
  require_once "inc/php/query.php";
}
?>