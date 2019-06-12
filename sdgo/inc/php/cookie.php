<?php
if (!isset($_COOKIE["l"]) || !preg_match("/(TC|SC)/", $_COOKIE["l"])) {
  _setcookie("l", "SC");
  header("Refresh:0");
  exit();
}
?>