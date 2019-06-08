<?php
function get_released_units() {
  $ids = explode("\r\n", _require("inc/home/released.txt"));
  if ($ids[0] == "") {
    return "<div class='item'><p>沒有</p></div>";
  }
  for ($x = 0; $x < count($ids); $x++) {
    if ($ids[$x] != "") {
      $id = $ids[$x];
?>
<a href='search_v2?id=<?=$id?>'><img class='unit' srcc='<?=$id?>' tit='<?=API::call(["type"=>"unit_name","data"=>["id"=>$id]])?>' /></a><?php
    }
  }
}
?>
<table id="main">
  <tr>
    <td>新果子 🆕</td>
  </tr>
  <tr>
    <td><?=get_released_units()?></td>
  </tr>
</table>