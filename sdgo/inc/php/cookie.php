<?php
if (!isset($_COOKIE["l"])&&!isset($_COOKIE["fs"])) {
  _setcookie("l", "TC");
  _setcookie("fs", "16");
  header("Refresh:0");
  exit();
}
if (!isset($_COOKIE["l"])) {
  _setcookie("l", "TC");
  header("Refresh:0");
  exit();
}
if (!isset($_COOKIE["fs"])) {
  _setcookie("fs", "16");
  header("Refresh:0");
  exit();
}
?>