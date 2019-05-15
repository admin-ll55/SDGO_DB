<?php
function td($id) {
  global $pdo, $mn;
  $sql = "SELECT `unit`.`rank`, `id_ex`.`unit_name_{$_COOKIE["l"]}` AS unit_name FROM `unit`, `id_ex` WHERE `unit`.`id` = `id_ex`.`id1` AND `id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      array_push($mn, "[{$row["rank"]}]{$row["unit_name"]}");
      return "
    <td rank='{$row["rank"]}'>
      <a href='search_v2?id={$id}'>
        <img class='unit' srcc='{$id}' tit='{$row["unit_name"]}'>
      </a>
    </td>
";
    }
  }
}
$title = "";
$mn = [];
$machine = tos("扭蛋機", "扭蛋机")." ";
if ($_GET["machine"] != NULL) {
  $sql = "SELECT * FROM `capsule` WHERE `machine` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$_GET["machine"]]);
  if ($result->rowCount() == 1) {
    while($row = $result->fetch()) {
      $title = $machine.$row["machine"]." - ";
      $query_html = "
<br>
<div id='machine'>
<table id='machine'>
  <tr>
    <td colspan='2'><b>".$machine.$row["machine"]."</b></td>
  </tr>
  <tr>
    <td colspan='2'>".$row["cost"]." GB</td>
  </tr>
  <tr>
".td($row["a"]).td($row["b"])."
  </tr>
  <tr>
".td($row["c"]).td($row["d"])."
  </tr>
  <tr>
".td($row["e"]).td($row["f"])."
  </tr>
</table>
</div>
<script>
$(\"select[name='machine'] option[value='{$row["machine"]}']\")[0].selected = 'selected';
$(document).ready(function(){
  $('img.unit').each(function(){
    $(this).attr('src', prefix[1]+unit[1][unit[0].indexOf($(this).attr('srcc'))]+'.png');
  });
  $('div#wrapper').addClass('mobile hide');
});
</script>
";
      $query_html = str_replace("-1", "不明", $query_html);
      $meta_description = "{$machine}{$row["machine"]} ({$row["cost"]} GB): {$mn[0]}, {$mn[1]}, {$mn[2]}, {$mn[3]}, {$mn[4]}, {$mn[5]}";
      $meta_description = str_replace("-1", "不明", $meta_description);
    }
  } else {
    $query_html = "<a href='search_v2?404'><img class='unit' src='https://s2.ax1x.com/2019/05/15/E70aqO.png' tit='".tos("與服務器連接終止","与服务器连接终止")."'/></a>";
  }
} else {
  echo "<script>window.location.href = '/sdgo/search_v2';</script>";
}
?>