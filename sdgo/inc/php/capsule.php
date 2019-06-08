<?php
$title = "";
$mn = [];
$machine = tos("扭蛋機", "扭蛋机")." ";
$sql = "SELECT * FROM `capsule` WHERE `machine` = ?;";
$result = $pdo->prepare($sql);
$result->execute([$_GET["machine"]]);
if ($result->rowCount() == 1) {
  while($row = $result->fetch()) {
    $title = $machine.$row["machine"]." - ";
    $query_html = "
<div id='machine'>
<br>
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
</script>
";
    $query_html = str_replace("0 GB", "不明 GB", $query_html);
    $meta_description = "{$machine}{$row["machine"]} ({$row["cost"]} GB): {$mn[0]}, {$mn[1]}, {$mn[2]}, {$mn[3]}, {$mn[4]}, {$mn[5]}";
    $meta_description = str_replace("0 GB", "不明 GB", $meta_description);
  }
} else {
  $query_html = "<br><a href='search_v2?404'>{$err_img}</a>";
}
?>