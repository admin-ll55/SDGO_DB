<?php
function get_daily() {
  $c = explode("\r\n", _require("inc/home/recommendation.txt"));
?>
<a href='search_v2?id=<?=$c[0]?>'><img class='unit' srcc='<?=$c[0]?>' tit='<?=API::call(["type"=>"unit_name","data"=>["id"=>$c[0]]])?>' /></a><?php
}
?>
<table id="daily">
  <tr>
    <td><?=tos("每日精選","每日精选")?> ⭐</td>
  </tr>
  <tr>
    <td><?=get_daily()?></td>
  </tr>
</table>