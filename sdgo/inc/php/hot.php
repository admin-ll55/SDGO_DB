<?php
function get_hot_units() {
  global $pdo2;
  $sql = "SELECT `id`, (SELECT `unit_name_{$_COOKIE["l"]}` FROM `id_ex` WHERE `id` = `id1`) AS idu FROM `hot` WHERE `ct` > 0 ORDER BY `ct` DESC LIMIT 42;";
  $result = $pdo2->prepare($sql);
  $result->execute();
  if ($result->rowCount() >= 1) {
    $result = $result->fetchAll();
    for ($x=0;$x<count($result);$x++) {
?>
<a href='search_v2?id=<?=$result[$x]["id"]?>'><img class='unit' srcc='<?=$result[$x]["id"]?>' tit='<?=$result[$x]["idu"]?>' /></a><?php
    }
  }
}
?>
<table id="hot">
  <tr>
    <td><?=tos("人氣排行","人气排行")?> 🔥</td>
  </tr>
  <tr>
    <td><div id="hot_container"><?=get_hot_units()?></div></td>
  </tr>
</table>