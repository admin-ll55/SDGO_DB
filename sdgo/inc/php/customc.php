<?php
$title = "";
$mn = [];
$machine = tos("自定義扭蛋機", "自定义扭蛋机");
$title = $machine." - ";
$meta_description = "";
$query_html = "
<div id='machine'>
<br>
<table id='customc'>
  <tr>
    <td><b>{$machine}</b></td>
  </tr>
  <tr>
    <td style='white-space: pre-line;'>
      <div>RANK:</div>
      <div>
        <a class='button' onclick=\"$('td#ccm img').show();\">ALL</a>
        <a class='button' onclick=\"$('td#ccm img').each(function(){ $(this).attr('rank').match(/^S/) ? $(this).show() : $(this).hide() });\">S</a>
        <a class='button' onclick=\"$('td#ccm img').each(function(){ $(this).attr('rank').match(/^A/) ? $(this).show() : $(this).hide() });\">A</a>
        <a class='button' onclick=\"$('td#ccm img').each(function(){ $(this).attr('rank').match(/^B/) ? $(this).show() : $(this).hide() });\">B</a>
        <a class='button' onclick=\"$('td#ccm img').each(function(){ $(this).attr('rank').match(/^C/) ? $(this).show() : $(this).hide() });\">C</a>
      </div>
      <div>
        <a class='button' onclick=\"$('td#ccm img').each(function(){ $(this).attr('rank').match(/^.$/) ? $(this).show() : $(this).hide() });\">NORMAL</a>
        <a class='button' onclick=\"$('td#ccm img').each(function(){ $(this).attr('rank').match(/.S$/) ? $(this).show() : $(this).hide() });\">SECRET</a>
        <a class='button' onclick=\"$('td#ccm img').each(function(){ $(this).attr('rank').match(/.R$/) ? $(this).show() : $(this).hide() });\">RARE</a>
        <!--a class='button' onclick=\"$('td#ccm img').each(function(){ $(this).attr('rank').match(/.U$/) ? $(this).show() : $(this).hide() });\">U</a-->
      </div>
    </td>
  </tr>
  <tr>
    <td id='ccm'>";
$sql = "SELECT c.`id`, u.`rank`
FROM `customc` as c
  JOIN `unit` as u
    ON c.id = u.id
ORDER BY `id` ASC;";
$result = $pdo->prepare($sql);
$result->execute();
if ($result->rowCount() >= 1) {
  $meta_description = "{$machine}: ";
  $result = $result->fetchAll();
  for ($x=0;$x<count($result);$x++) {
    $row = $result[$x];
    $unit_name = API::call(["type"=>"unit_name","data"=>["id"=>$row["id"]]]);
    $query_html .= "<a href='search_v2?id={$row["id"]}'><img class='unit' srcc='{$row["id"]}' rank='{$row["rank"]}' tit='{$unit_name}' /></a>";
    if ($row["rank"] == "SR") {
      $meta_description .= $unit_name.', ';
    }
  }
  $query_html .= "
    </td>
  </tr>
</table>
<script>
$(\"select[name='machine'] option[value='c']\")[0].selected = 'selected';
</script>
</div>
";
} else {
  $query_html = "<br><a href='search_v2?404'>{$err_img}</a>";
}
?>