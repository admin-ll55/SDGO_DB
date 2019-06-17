<?php
function get_released_units() {
  global $pdo;
  $ids = explode(";", minify(_require("inc/home/released.txt")));
  if ($ids[0] == "") {
    return "<div class='item'><p>沒有</p></div>";
  }
  $result = $pdo->prepare("SELECT `id1`, `unit_name_{$_COOKIE["l"]}` AS idu FROM `id_ex` WHERE `id1` IN (".implode(",", $ids).") ORDER BY `id1` ASC;");
  $result->execute();
  if ($result = $result->fetchAll()) {
    for ($x = 0; $x < count($result); $x++) {
?>
<a href='search_v2?id=<?=$result[$x]["id1"]?>'><img class='unit' srcc='<?=$result[$x]["id1"]?>' tit='<?=$result[$x]["idu"]?>' /></a><?php
    }
  }
}
?>
<table id="main">
  <tr>
    <td>新果子 🆕</td>
  </tr>
  <tr>
    <td>
      <div><?=get_released_units()?></div>
    </td>
  </tr>
</table>