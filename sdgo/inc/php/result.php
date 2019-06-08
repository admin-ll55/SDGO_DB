<?php
if ($is_home) {
  require_once "inc/php/home.php";
}
else {
  echo minify("<div id='loading'><br>".tos("加載中…<br><br>請耐心等候", "加载中…<br><br>请耐心等候")."<br></div>".$query_html);
}
?>