<?php
if (array_key_exists("ucid", $_COOKIE)) {
  $ucid = json_decode($_COOKIE["ucid"]);
  $y = count($ucid);
  for ($x = 0; $x < $y; $x++) {
    if (!preg_match("/^([0-9]{5})$/", $ucid[$x])) {
      unset($ucid[$x]);
      $ucid = array_values($ucid);
      $x--;
      $y = count($ucid);
    }
  }
  $_COOKIE["ucid"] = json_encode($ucid);
  setcookie("ucid", $_COOKIE["ucid"]);
}
if (!isset($_COOKIE["l"]) || !preg_match("/(TC|SC)/", $_COOKIE["l"])) {
  _setcookie("l", "SC");
  header("Refresh:0");
  exit();
}
?>