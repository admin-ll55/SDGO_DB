<?php
$is_localhost = preg_match("/^localhost$/", $_SERVER["HTTP_HOST"])||preg_match("/^localhost$/", $_SERVER["SERVER_NAME"])||preg_match("/^(127\.0\.0\.1|::1)$/", $_SERVER["REMOTE_ADDR"])||preg_match("/^(127\.0\.0\.1|::1)$/", $_SERVER["SERVER_ADDR"]);
function tos($tc, $sc) {
  return ($_COOKIE["l"] == "TC" ? $tc : $sc);
}
?>