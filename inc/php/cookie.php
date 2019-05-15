<?php
function _setcookie($k, $v) {
  setcookie($k, $v, mktime(0, 0, 0, 12, 31, 2020));
}
if (!isset($_COOKIE["l"])&&!isset($_COOKIE["fs"])) {
  _setcookie("l", "TC");
  _setcookie("fs", "16");
  header("Refresh:0");
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