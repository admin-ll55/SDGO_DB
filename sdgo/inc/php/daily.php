<?php
  global $pdo;
  $c = minify(_require("inc/home/recommendation.txt"));
  $c = explode(";", preg_replace("/#.*?;/", "", $c));
  $i = 0;
  $x = 0;
  $c = array_slice($c, 0, 3);
  $result = $pdo->prepare("SELECT `unit_name_{$_COOKIE["l"]}` AS idu FROM `id_ex` WHERE `id1` IN (".implode(",", $c).") ORDER BY FIELD(`id1`,".implode(",", $c).");");
  $result->execute();
  if ($result = $result->fetchAll()) {
    for ($x=0;$x<count($result);$x++) {
      $c[$x] = "<a href='search_v2?id={$c[$x]}'><img class='unit' srcc='{$c[$x]}' tit='{$result[$x]["idu"]}' /></a>";
    }
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