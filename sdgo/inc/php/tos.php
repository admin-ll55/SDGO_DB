<?php
function tos($tc, $sc) {
  return ($_COOKIE["l"] == "TC" ? $tc : $sc);
}
?>