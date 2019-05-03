<?php
function _setcookie($k, $v) {
  setcookie($k, $v, mktime(0, 0, 0, 12, 31, 2020));
}
if (array_key_exists("l", $_GET)) {
  _setcookie("l", $_GET["l"]);
  die();
}
if (array_key_exists("fs", $_GET)) {
  _setcookie("fs", $_GET["fs"]);
  die();
}
if (!isset($_COOKIE["l"])) {
  _setcookie("l", "TC");
  header("Refresh:0");
}
if (!isset($_COOKIE["fs"])) {
  _setcookie("fs", "16");
  header("Refresh:0");
}
?>