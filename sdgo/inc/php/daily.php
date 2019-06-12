<?php
  $c = explode(";", minify(_require("inc/home/recommendation.txt")));
  $i = 0;
  $x = 0;
  while ($x < 3) {
    if (!preg_match("/^#/", $c[$i])) {
      $c[$x++] = ($c[$i]?"<a href='search_v2?id={$c[$i]}'><img class='unit' srcc='{$c[$i]}' tit='".API::call(["type"=>"unit_name","data"=>["id"=>$c[$i]]])."' /></a>":"");
    }
    $i++;
  }
?>
<table id="daily">
  <tr>
    <td colspan="3"><?=tos("每日精選","每日精选")?> ⭐</td>
  </tr>
  <tr>
    <td>是日</td>
    <td colspan="2">昔日</td>
  </tr>
  <tr>
    <td style="width: 33.33%;"><?=$c[0]?></td>
    <td style="width: 33.33%;"><?=$c[1]?></td>
    <td style="width: 33.33%;"><?=$c[2]?></td>
  </tr>
</table>