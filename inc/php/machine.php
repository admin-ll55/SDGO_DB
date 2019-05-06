<?php
function td($id) {
  global $pdo;
  $sql = "SELECT `unit`.`rank`, `id_ex`.`unit_name_{$_COOKIE["l"]}` FROM `unit`, `id_ex` WHERE `unit`.`id` = `id_ex`.`id1` AND `id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return "
    <td rank='{$row["rank"]}'>
      <button type='button' onclick=\"$('form#machine').attr('action', 'search_v2?id=$id').submit();\">
        <img class='unit' srcc='{$id}' tit='{$row["unit_name_".$_COOKIE["l"]]}'>
      </button>
    </td>
";
    }
  }
}
$title = "";
$machine = tos("扭蛋機", "扭蛋机")." ";
if ($_GET["machine"] != NULL) {
  $sql = "SELECT * FROM `capsule` WHERE `machine` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$_GET["machine"]]);
  if ($result->rowCount() >= 1) {
    while($row = $result->fetch()) {
      $title = $machine.$row["machine"]." - ";
      $query_html = "
<br>
<br>
<br>
<form id='machine'>
<table id='machine'>
  <tr>
    <td colspan='2'><b>".$machine.$row["machine"]."</b></td>
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
</form>
<script>
$(\"select[name='machine'] option[value='{$row["machine"]}']\")[0].selected = 'selected';
$(document).ready(function(){
  $('img.unit').each(function(){
    $(this).attr('src', prefix[1]+unit[1][unit[0].indexOf($(this).attr('srcc'))]+'.png');
  });
});
</script>
";
    }
  } else {
    //To do, empty result

  }
} else {
  echo "<script>window.location.href = '/sdgo/search_v2';</script>";
}
?>