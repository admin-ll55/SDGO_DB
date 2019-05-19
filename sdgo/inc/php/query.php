<?php
$title = tos("搜尋結果", "搜寻结果")." - ";
$sql = "SELECT `id`,`skl1`,`skl2`,`sp1`,`sp2`,`rank`,`pos`
FROM `unit`
WHERE 1=1";
$script = "";
$sql_data = [];
//unit name
if ($_POST["name"] != "") {
  if ($s = not("name")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND `unit`.`id` {$not} IN (
  SELECT `id1`
  FROM `id_ex`
  WHERE `unit_name_TC` LIKE ?
    OR `unit_name_SC` LIKE ?
  )";
  array_push($sql_data, "%{$_POST["name"]}%", "%{$_POST["name"]}%");
  $script .= "$(\"input[name='name']\").val('".htmlspecialchars($_POST["name"],ENT_QUOTES)."');";
}
//skill
if ($_POST["skl"] != "") {
  $not = "";
  if ($s = not("skl")) {
    $script .= $s;
    $not = "NOT";
  }
  if (preg_match("/^[0-9]{3}$/", $_POST["skl"])) {
    $sql .= " AND (`unit`.`id` {$not} IN (
    SELECT `unit_skl`.`id`
    FROM `unit` AS unit_skl
    WHERE `unit_skl`.`skl1` = ?
      OR `unit_skl`.`skl2` = ?
    ))";
    array_push($sql_data, "{$_POST["skl"]}", "{$_POST["skl"]}");
  } else {
    $sql .= " AND (`unit`.`id` {$not} IN (
    SELECT `unit_skl`.`id`
    FROM `unit` AS unit_skl, `skill` AS skill_skl
    WHERE (`unit_skl`.`skl1` = `skill_skl`.`skl` AND `skill_skl`.`desc_TC` LIKE ?)
      OR (`unit_skl`.`skl2` = `skill_skl`.`skl` AND `skill_skl`.`desc_TC` LIKE ?)
    ))";
    array_push($sql_data, "%{$_POST["skl"]}%", "%{$_POST["skl"]}%");
  }
  $script .= "$(\"select[name='skl'] option[value='{$_POST["skl"]}']\").attr('selected','selected');";
}
//sp
if ($_POST["sp"] != "") {
  $not = "";
  if ($s = not("sp")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `unit_sp`.`id`
  FROM `unit` AS unit_sp
  WHERE `unit_sp`.`sp1` = ?
    OR `unit_sp`.`sp2` = ?
  ))";
  array_push($sql_data, "{$_POST["sp"]}", "{$_POST["sp"]}");
  $script .= "$(\"select[name='sp'] option[value='{$_POST["sp"]}']\").attr('selected',true);";
}
//wpn
if ($_POST["wpn"] != "" && $_POST["eff"] == "") {
  $not = "";
  if ($s = not("wpn")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `weapon_wpn`.`id`
  FROM `unit_weapon` AS weapon_wpn
    JOIN `weapon`
      ON `weapon_wpn`.`wpn` = `weapon`.`wpn`
  WHERE `weapon_wpn`.`wpn` = ? OR `weapon`.`cat` = ?
  ))";
  array_push($sql_data, "{$_POST["wpn"]}", "{$_POST["wpn"]}");
  $script .= "$(\"select[name='wpn'] option[value='{$_POST["wpn"]}']\").attr('selected',true);";
}
//eff
if ($_POST["eff"] != "" && $_POST["wpn"] == "") {
  $not = "";
  if ($s = not("eff")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `unit_weapon_tag`.`id`
  FROM `unit_weapon_tag`
  WHERE `unit_weapon_tag`.`tag` = ?
  ))";
  array_push($sql_data, "{$_POST["eff"]}");
  $script .= "$(\"select[name='eff'] option[value='{$_POST["eff"]}']\").attr('selected',true);";
}
//wpn eff link
if ($_POST["wpn"] != "" && $_POST["eff"] != "") {
  $wpn = "";
  $eff = "";
  $not = "";
  if ($s = not("wpn")) {
    $script .= $s;
    $wpn = "!";
  }
  if ($s = not("eff")) {
    $script .= $s;
    $eff = "NOT";
  }
  if (!($wpn == "" && $eff == "")) {
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `unit_weapon`.`id`
  FROM `unit_weapon`
    JOIN `unit_weapon_tag`
      ON `unit_weapon`.`id` = `unit_weapon_tag`.`id`
        AND `unit_weapon`.`no` = `unit_weapon_tag`.`no`
    JOIN `weapon` ON `unit_weapon`.`wpn` = `weapon`.`wpn`
  WHERE (`unit_weapon`.`wpn` = ? OR `weapon`.`cat` = ?) AND `unit_weapon_tag`.`tag` = ?
  ))";
  array_push($sql_data, "{$_POST["wpn"]}", "{$_POST["wpn"]}", "{$_POST["eff"]}");
  if (($wpn == "" && $eff != "") || ($wpn != "" && $eff == "")) {
    $sql .= " AND (`unit`.`id` IN (
    SELECT `".($wpn == ""?"unit_weapon":"unit_weapon_tag")."_link`.`id`
    FROM `".($wpn == ""?"unit_weapon":"unit_weapon_tag")."` AS ".($wpn == ""?"unit_weapon":"unit_weapon_tag")."_link
      ".($wpn == ""?"JOIN `weapon` AS weapon_link ON `unit_weapon_link`.`wpn` = `weapon_link`.`wpn`":"")."
    WHERE `".($wpn == ""?"unit_weapon":"unit_weapon_tag")."_link`.`".($wpn == ""?"wpn":"tag")."` = ?".($wpn == ""?" OR `weapon_link`.`cat` = ?":"")."
    ))";
    array_push($sql_data, ($wpn == ""?$_POST["wpn"]:$_POST["eff"]));
    if ($wpn == "")
      array_push($sql_data, $_POST["wpn"]);
  }
  $script .= "$(\"select[name='wpn'] option[value='{$_POST["wpn"]}']\").attr('selected',true);";
  $script .= "$(\"select[name='eff'] option[value='{$_POST["eff"]}']\").attr('selected',true);";
}
//origin
if ($_POST["origin"] != ""){
  $not = "";
  if ($s = not("origin")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `unit_origin`.`id`
  FROM `unit` AS unit_origin
  WHERE `unit_origin`.`origin` = ?
  ))";
  array_push($sql_data, "{$_POST["origin"]}");
  $script .= "$(\"select[name='origin'] option[value='{$_POST["origin"]}']\").attr('selected',true);";
}
//rank
if ($_POST["rank"] != ""){
  $not = "";
  if ($s = not("rank")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `unit_rank`.`id`
  FROM `unit` AS unit_rank
  WHERE `unit_rank`.`rank` ".($_POST["rank"]!="SABC"?"LIKE ?":"IN ('S','A','B','C')")."
  ))";
  if ($_POST["rank"] != "SABC")
    array_push($sql_data, "{$_POST["rank"]}");
  $script .= "$(\"select[name='rank'] option[value='{$_POST["rank"]}']\").attr('selected',true);";
}
//pos
if ($_POST["pos"] != ""){
  $not = "";
  if ($s = not("pos")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `unit_pos`.`id`
  FROM `unit` AS unit_pos
  WHERE `unit_pos`.`pos` = ?
  ))";
  array_push($sql_data, "{$_POST["pos"]}");
  $script .= "$(\"select[name='pos'] option[value='{$_POST["pos"]}']\").attr('selected',true);";
}
//tag
if ($_POST["tag"] == "tag2"){
  $not = "";
  if ($s = not("tag")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `unit_tag`.`id`
  FROM `unit` AS unit_tag
  WHERE `unit_tag`.`tag3` = ''
    AND `unit_tag`.`tag4` = ''
    AND `unit_tag`.`rlock` > 0
  ))";
  $script .= "$(\"select[name='tag'] option[value='tag2']\").attr('selected',true);";
}
if ($_POST["tag"] == "tag3"){
  $not = "";
  if ($s = not("tag")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `unit_tag`.`id`
  FROM `unit` AS unit_tag
  WHERE `unit_tag`.`tag3` = '1'
  ))";
  $script .= "$(\"select[name='tag'] option[value='tag3']\").attr('selected',true);";
}
if ($_POST["tag"] == "tag4"){
  $not = "";
  if ($s = not("tag")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `unit_tag`.`id`
  FROM `unit` AS unit_tag
  WHERE `unit_tag`.`tag4` = '1'
  ))";
  $script .= "$(\"select[name='tag'] option[value='tag4']\").attr('selected',true);";
}
if ($_POST["tag"] == "no"){
  $not = "";
  if ($s = not("tag")) {
    $script .= $s;
    $not = "NOT";
  }
  $sql .= " AND (`unit`.`id` {$not} IN (
  SELECT `unit_tag`.`id`
  FROM `unit` AS unit_tag
  WHERE `unit_tag`.`sp2` = ''
  ))";
  $script .= "$(\"select[name='tag'] option[value='no']\").attr('selected',true);";
}
//prop
if (sizeof($_POST["prop"]) > 0) {
  if (in_array("ma", $_POST["prop"])) {
    $sql .= " AND `unit`.`id` IN (SELECT `w1`.`id` FROM `unit` AS w1 WHERE `w1`.`ma` = '1' OR `w1`.`rma` = '1')";
    $script .= "$(\"input[name^='prop'][value='ma']\").prop('checked', true);";
  }
  if (in_array("ca", $_POST["prop"])) {
    $sql .= " AND `unit`.`id` IN (SELECT `w2`.`id` FROM `unit` AS w2 WHERE `w2`.`ca` = '1' OR `w2`.`rca` = '1')";
    $script .= "$(\"input[name^='prop'][value='ca']\").prop('checked', true);";
  }
  if (in_array("big", $_POST["prop"])) {
    $sql .= " AND `unit`.`id` IN (SELECT `w3`.`id` FROM `unit` AS w3 WHERE `w3`.`tag1` = '1')";
    $script .= "$(\"input[name^='prop'][value='big']\").prop('checked', true);";
  }
  if (in_array("s0", $_POST["prop"])) {
    $sql .= " AND `unit`.`id` NOT IN (SELECT `w4`.`id` FROM `unit_weapon` AS w4 WHERE `w4`.`wpn` = '999' GROUP BY `w4`.`id`)";
    $script .= "$(\"input[name^='prop'][value='s0']\").prop('checked', true);";
  }
  if (in_array("s1", $_POST["prop"])) {
    $sql .= " AND `unit`.`id` IN (SELECT `w5`.`id` FROM `unit_weapon` AS w5 WHERE `w5`.`wpn` = '999' GROUP BY `w5`.`id`)";
    $script .= "$(\"input[name^='prop'][value='s1']\").prop('checked', true);";
  }
  if (in_array("s2", $_POST["prop"])) {
    $sql .= " AND `unit`.`id` IN (SELECT `w6`.`id` FROM `unit_weapon_tag` AS w6 WHERE `w6`.`tag` = 999 GROUP BY `w6`.`id`)";
    $script .= "$(\"input[name^='prop'][value='s2']\").prop('checked', true);";
  }
  if (in_array("bp", $_POST["prop"])) {
    $sql .= " AND `unit`.`id` IN (SELECT `blueprint`.`id` FROM `blueprint`)";
    $script .= "$(\"input[name^='prop'][value='bp']\").prop('checked', true);";
  }
  if (in_array("nbp", $_POST["prop"])) {
    $sql .= " AND `unit`.`id` NOT IN (SELECT `blueprint`.`id` FROM `blueprint`)";
    $script .= "$(\"input[name^='prop'][value='nbp']\").prop('checked', true);";
  }
  if (in_array("cm", $_POST["prop"])) {
    $sql .= " AND `unit`.`id` IN (SELECT DISTINCT `y` FROM (SELECT DISTINCT `a` AS y FROM `capsule` UNION ALL SELECT DISTINCT `b` FROM `capsule` UNION ALL SELECT DISTINCT `c` FROM `capsule` UNION ALL SELECT DISTINCT `d` FROM `capsule` UNION ALL SELECT DISTINCT `e` FROM `capsule` UNION ALL SELECT DISTINCT `f` FROM `capsule`) AS z)";
    $script .= "$(\"input[name^='prop'][value='cm']\").prop('checked', true);";
  }
  if (in_array("ncm", $_POST["prop"])) {
    $sql .= " AND `unit`.`id` NOT IN (SELECT DISTINCT `y` FROM (SELECT DISTINCT `a` AS y FROM `capsule` UNION ALL SELECT DISTINCT `b` FROM `capsule` UNION ALL SELECT DISTINCT `c` FROM `capsule` UNION ALL SELECT DISTINCT `d` FROM `capsule` UNION ALL SELECT DISTINCT `e` FROM `capsule` UNION ALL SELECT DISTINCT `f` FROM `capsule`) AS z)";
    $script .= "$(\"input[name^='prop'][value='ncm']\").prop('checked', true);";
  }
}
$sql .= " ORDER BY ";
//sort
if ($_POST["sort"] == "tot"){
  $sql .= "`atk`+`def`+`spd`+`ctl`";
  $script .= "$(\"select[name='sort'] option[value='tot']\").attr('selected',true);";
}
if ($_POST["sort"] == "atk"){
  $sql .= "`atk`";
  $script .= "$(\"select[name='sort'] option[value='atk']\").attr('selected',true);";
}
if ($_POST["sort"] == "def"){
  $sql .= "`def`";
  $script .= "$(\"select[name='sort'] option[value='def']\").attr('selected',true);";
}
if ($_POST["sort"] == "spd"){
  $sql .= "`spd`";
  $script .= "$(\"select[name='sort'] option[value='spd']\").attr('selected',true);";
}
if ($_POST["sort"] == "ctl"){
  $sql .= "`ctl`";
  $script .= "$(\"select[name='sort'] option[value='ctl']\").attr('selected',true);";
}
if ($_POST["sort"] == "rng"){
  $sql .= "MAX(`w0`.`rng`)";
  $script .= "$(\"select[name='sort'] option[value='rng']\").attr('selected',true);";
}
if ($_POST["sort"] == "id"){
  $sql .= "`unit`.`id`";
  $script .= "$(\"select[name='sort'] option[value='id']\").attr('selected',true);";
}
if ($_POST["sort"] == "dmg"){
  $sql .= "MAX(`w0`.`dmg`)";
  $script .= "$(\"select[name='sort'] option[value='dmg']\").attr('selected',true);";
}
if ($_POST["sort"] == "sets"){
  $sql .= "MAX(`w0`.`sets`)";
  $script .= "$(\"select[name='sort'] option[value='sets']\").attr('selected',true);";
}
if ($_POST["sort"] == "cd"){
  $sql .= "MAX(`w0`.`cd`)";
  $script .= "$(\"select[name='sort'] option[value='cd']\").attr('selected',true);";
}
if ($_POST["sort"] == "lock"){
  $sql .= "`unit`.`lock`";
  $script .= "$(\"select[name='sort'] option[value='lock']\").attr('selected',true);";
}
if ($_POST["sort"] == "") {
  $sql .= "`atk`+`def`+`spd`+`ctl`";
}
$sql .= " ";
//order
if ($_POST["order"] == "DESC"){
  $sql .= "DE";
  $script .= "$(\"select[name='order'] option[value='DESC']\").attr('selected',true);";
}
if ($_POST["order"] == "ASC"){
  $sql .= "A";
  $script .= "$(\"select[name='order'] option[value='ASC']\").attr('selected',true);";
}
if ($_POST["order"] == "") {
  $sql .= "DE";
}
$sql .= "SC;";
$result = $pdo->prepare($sql);
$result->execute($sql_data);
for ($x = 0; $x < count($sql_data); $x++) {
  $sql = preg_replace("/\?/", "'{$sql_data[$x]}'", $sql, 1);
}
$sql = preg_replace("/\n/", "", $sql);
$query_html .= "<!--\r{$sql}\r-->";
$temp = array_fill(0, 6, "");
if ($result->rowCount() >= 1) {
  while($row = $result->fetch()) {
    if ($temp[0] != "") {
      $temp[0] .= ",";
      $temp[1] .= ",";
      $temp[2] .= ",";
      $temp[3] .= ",";
      $temp[4] .= ",";
      $temp[5] .= ",";
      $temp[6] .= ",";
    }
    $temp[0] .= "'{$row["id"]}'";
    $temp[1] .= "'{$row["skl1"]}'";
    $temp[2] .= "'{$row["skl2"]}'";
    $temp[3] .= "'{$row["sp1"]}'";
    $temp[4] .= "'{$row["sp2"]}'";
    $temp[5] .= "'{$row["rank"]}'";
    $temp[6] .= "'{$row["pos"]}'";
  }
}
$query_html .= "
<br>
<div".($result->rowCount()?" id='result'":"").">
  <div id='count'>".tos("結果數量", "结果数量").": ".$result->rowCount()."</div>
  <br>
  <div id='loading'>".tos("加載中…<br><br>請耐心等候", "加载中…<br><br>请耐心等候")."<br></div>
  <div id='container' style='display: none;'><a href='search_v2?404'><img class='unit' src='https://s2.ax1x.com/2019/05/15/E70aqO.png' tit='".tos("與服務器連接終止","与服务器连接终止")."'/></a></div>";
$script .= "var r = [[".$temp[0]."],[".$temp[1]."],[".$temp[2]."],[".$temp[3]."],[".$temp[4]."],[".$temp[5]."],[".$temp[6]."]];$('div#wrapper').addClass('mobile hide');";
$query_html .= "<script>".$script."</script></div>";
?>