<?php
function get_news() {
  $html = "";
  $news = explode(";", preg_replace("/(\r)?\n/", "", _require("inc/home/rss.php")));
  if ($news[0] == "") {
    return "<div class='item'><p>沒有</p></div>";
  }
  for ($x = 0; $x < 5; $x++) {
    if ($news[$x] != "") {
      $news[$x] = explode("::", $news[$x]);
      $news[$x][1] = explode("||", $news[$x][1]);
      $html .= "<div class='item'><b>{$news[$x][0]}</b> <ul>";
      for ($y = 0; $y < count($news[$x][1]); $y++) {
        $html .= "<li>{$news[$x][1][$y]}</li>";
      }
      $html .= "</ul></div>";
    }
  }
  if (count($news) > 5) {
    $news[count($news)-1] = explode("::", $news[count($news)-1]);
    $html .= "<div class='item'><b>{$news[count($news)-1][0]}</b> <p>{$news[count($news)-1][1]}</p></div>";
  }
  return $html;
}
?>
<table id="news">
  <tr>
    <td><?=tos("站內公告","站内公告")?> 📰</td>
  </tr>
  <tr>
    <td><?=get_news()?></td>
  </tr>
</table>