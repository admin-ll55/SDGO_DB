<?php
function get_hot_units() {
  global $pdo2;
  $sql = "SELECT `id` FROM `hot` WHERE `ct` > 0 ORDER BY `ct` DESC LIMIT 42;";
  $result = $pdo2->prepare($sql);
  $result->execute();
  if ($result->rowCount() >= 1) {
    $result = $result->fetchAll();
    for ($x=0;$x<count($result);$x++) {
      $row = $result[$x];
      $id = $row["id"];
?>
<a href='search_v2?id=<?=$id?>'><img class='unit' srcc='<?=$id?>' tit='<?=API::call(["type"=>"unit_name","data"=>["id"=>$id]])?>' /></a><?php
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