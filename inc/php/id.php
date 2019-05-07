<?php
function id2() {
  global $pdo, $id;
  $sql = "SELECT `id2` FROM `unit`, `id_ex` WHERE `unit`.`id` = `id_ex`.`id1` AND `unit`.`id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return ($row["id2"] != "" ? "<td><a href='https://www.yukict.com/bbs/viewthread.php?action=printable&tid=".$row["id2"]."' target='_blank' text='YUKI'></a></td>" : "");
    }
  }
}
function unit_name($id) {
  global $pdo;
  $sql = "SELECT `unit_name_{$_COOKIE["l"]}` FROM `unit`, `id_ex` WHERE `unit`.`id` = `id_ex`.`id1` AND `unit`.`id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return $row["unit_name_{$_COOKIE["l"]}"];
    }
  }
}
function origin() {
  global $pdo, $id;
  $sql = "SELECT `unit`.`origin`, `name_{$_COOKIE["l"]}` FROM `unit`, `origin` WHERE `unit`.`origin` = `origin`.`origin` AND `unit`.`id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return "<a href='?origin={$row["origin"]}'>{$row["name_".$_COOKIE["l"]]}</a>";
    }
  }
}
function unit_info() {
  global $pdo, $id;
  $sql = "SELECT `rank`, `pos`, `atk`, `def`, `spd`, `ctl`, `lock` FROM `unit` WHERE `unit`.`id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return "
    <tr>
      <td>ID: ".$id."</td>
      <td>".$row["rank"]."</td>
      <td><img srcc='".$row["pos"]."' class='pos'></td>
    </tr>
    <tr>
      <td rowspan='5'><img srcc='".$id."' class='unit' tit='".unit_name($id)."' /></td>
      <td>".tos("攻擊", "攻击")."</td>
      <td>".$row["atk"]."</td>
    </tr>
    <tr>
      <td>".tos("防禦", "防御")."</td>
      <td>".$row["def"]."</td>
    </tr>
    <tr>
      <td>".tos("速度", "速度")."</td>
      <td>".$row["spd"]."</td>
    </tr>
    <tr>
      <td>".tos("操控", "操控")."</td>
      <td>".$row["ctl"]."</td>
    </tr>
    <tr>
      <td>".tos("總和", "总和")."</td>
      <td>".($row["atk"]+$row["def"]+$row["spd"]+$row["ctl"])."</td>
    </tr>
    <tr>
      <td>".tos("鎖敵距離", "锁敌距离")."</td>
      <td colspan='2'>".$row["lock"]."</td>
    </tr>
";
    }
  }
}
function in_cm() {
  global $pdo, $id;
  $sql = "SELECT GROUP_CONCAT(machine ORDER BY machine SEPARATOR '<br>') AS in_cm FROM `capsule` WHERE a = ? OR b = ? OR c = ? OR d = ? OR e = ? OR f = ?;";
  $result = $pdo->prepare($sql);
  $result->execute(array_fill(0, 6, $id));
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      if ($row["in_cm"] != "") {
        $temp = explode("<br>", $row["in_cm"]);
        $in_cm = "";
        for ($x = 0; $x < sizeof($temp); $x++) {
          $in_cm .= "<a href='?machine={$temp[$x]}'>[{$temp[$x]}]</a>　";
        }
        return "<tr><td colspan='3'>　".tos("扭蛋機", "扭蛋机").":　{$in_cm}</td></tr>";
      }
    }
  }
}
function tags() {
  global $pdo, $id;
  $html = "";
  $sql = [
    "SELECT `tag1` AS tag FROM `unit` WHERE `id` = $id;",
    "SELECT `tag3` AS tag FROM `unit` WHERE `id` = $id;",
    "SELECT `tag4` AS tag FROM `unit` WHERE `id` = $id;"
  ];
  $text = [["大型", "裝甲解除", "技能激活"],["大型", "装甲解除", "技能激活"]];
  for ($i = 0; $i < count($sql); $i++) {
    $result = $pdo->prepare($sql[$i]);
    $result->execute();
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        if ($row["tag"] == "1") {
          if ($html == "") {
            $html .= "<tr><td colspan='3'>";
          }
          $html .= "［".tos($text[0][$i], $text[1][$i])."］";
        }
      }
    }
  }
  return $html;
}
function skl_sp() {
  global $pdo, $id;
  $sql = "SELECT `unit`.`skl1`, (SELECT `desc_{$_COOKIE["l"]}` FROM `skill` WHERE `unit`.`skl1` = `skl`) AS skl1_desc,
                 `unit`.`skl2`, (SELECT `desc_{$_COOKIE["l"]}` FROM `skill` WHERE `unit`.`skl2` = `skl`) AS skl2_desc,
                 `unit`.`sp1`,  (SELECT `desc_{$_COOKIE["l"]}` FROM `skill` WHERE `unit`.`sp1` = `skl`)  AS sp1_desc,
                 `unit`.`sp2`,  (SELECT `desc_{$_COOKIE["l"]}` FROM `skill` WHERE `unit`.`sp2` = `skl`)  AS sp2_desc
          FROM `unit` WHERE `id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return "
  <table>
    <tr style='font-weight: bold;'>
      <td>".tos("技能一", "技能一")."</td>
      <td>".tos("技能二", "技能二")."</td>
      <td>".tos("必殺一", "必杀一")."</td>".
      ($row["sp2"] != '' ? "<td>".tos("必殺二", "必杀二")."</td>" : "")."
    </tr>
    <tr>
      <td><a href='?skl={$row["skl1"]}'><img class='skill' srcc='{$row["skl1"]}' tit='{$row["skl1_desc"]}' /></a></td>
      <td><a href='?skl={$row["skl2"]}'><img class='skill' srcc='{$row["skl2"]}' tit='{$row["skl2_desc"]}' /></a></td>
      <td><a href='?sp={$row["sp1"]}'><img class='sp' srcc='{$row["sp1"]}' tit='{$row["sp1_desc"]}' /></a></td>".
      ($row["sp2"] != '' ? "<td><a href='?sp={$row["sp2"]}'><img class='sp' srcc='{$row["sp2"]}' tit='{$row["sp2_desc"]}' /></a></td>" : "")."
    </tr>
  </table>
";
    }
  }
}
function wpn($no) {
  global $pdo, $id;
  $html = "";
  $s2 = 0;
  $sql = "SELECT `tag0`, `wpn`, `rng`, `dmg`, `sets`, `cd` FROM `unit`, `weapon` WHERE `unit`.`id` = `weapon`.`id` AND `unit`.`id` = ? AND `weapon`.`no` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id, $no]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      $html .= "
    <tr".($row["tag0"] == "1" && $row["wpn"] == "32" ? " bgcolor='#DDDDFF'" : "").">
      <td><img srcc='{$row["wpn"]}' class='weapon'></td>
      <td>{$row["rng"]}</td>
      <td>{$row["dmg"]}".(($no == 8 || $no == 9) ? "%" : "")."</td>
      <td>".(($no == 8 || $no == 9) ? "" : $row["sets"])."</td>
      <td>{$row["cd"]}</td>
      <td>";
      if (($no == 8 || $no == 9) && $row["sets"] == "1") {
        $s2 = 1;
      }
    }
  }
  else {
    $html .= "
    <tr>
      <td><img srcc='999' class='weapon'></td>
      <td>-</td>
      <td>-</td>
      <td></td>
      <td></td>
      <td>";
  }
  if ($s2 == 1) {
    $html .= tos("光束盾", "光束盾");
  }
  else {
    $sql = "SELECT GROUP_CONCAT(`tag` ORDER BY LENGTH(`tag`) SEPARATOR '<br>') AS tag FROM `tag_test2` WHERE `id` = ? AND `no` = ? GROUP BY `id`, `no`;";
    $result = $pdo->prepare($sql);
    $result->execute([$id, $no]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        $html .= (($no == 8 || $no == 9) ? "" : $row["tag"]);
      }
    }
  }
  $html .= "</td>
    </tr>
";
  return preg_replace("/-1(\.00)?/", "?", $html);
}
function ma_ca($no) {
  global $pdo, $id;
  $sql = "SELECT `rng`, `dmg` FROM `weapon` WHERE `id` = ? AND `no` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id, $no+6]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return "
<tr><td colspan='8'>".
($row["rng"] == "1" ? "［MA］" : "").
($row["dmg"] == "1" ? "［".tos("格鬥反擊", "格斗反击")."］" : "").
"</td></tr>
";
    }
  }
}
function blueprint() {
  global $pdo, $id;
  $sql = "SELECT * FROM `blueprint` WHERE `id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return "
<br>
<table>
  <tr style='font-weight: bold;'>
    <td colspan='5'>".tos("設計圖", "设计图")."</td>
  </tr>
  <tr>
    <td bgcolor='#DDDDFF'>
      <a href='?id={$row["a"]}'><img srcc='{$row["a"]}' class='unit' tit='".unit_name($row["a"])."'></a>
    </td>".
    ($row["b"] != "" ? "<td><a href='?id={$row["b"]}'><img srcc='{$row["b"]}' class='unit' tit='".unit_name($row["b"])."'></a></td>" : "").
    ($row["c"] != "" ? "<td><a href='?id={$row["c"]}'><img srcc='{$row["c"]}' class='unit' tit='".unit_name($row["c"])."'></a></td>" : "").
    ($row["d"] != "" ? "<td><a href='?id={$row["d"]}'><img srcc='{$row["d"]}' class='unit' tit='".unit_name($row["d"])."'></a></td>" : "").
    ($row["e"] != "" ? "<td><a href='?id={$row["e"]}'><img srcc='{$row["e"]}' class='unit' tit='".unit_name($row["e"])."'></a></td>" : "")."
  </tr>
  <tr>
    <td bgcolor='#DDDDFF'>Lv {$row["aa"]}</td>".
    ($row["b"] != "" ? "<td>Lv {$row["bb"]}</td>" : "").
    ($row["c"] != "" ? "<td>Lv {$row["cc"]}</td>" : "").
    ($row["d"] != "" ? "<td>Lv {$row["dd"]}</td>" : "").
    ($row["e"] != "" ? "<td>Lv {$row["ee"]}</td>" : "")."
  </tr>
</table>
";
    }
  }
}
function material() {
  global $pdo, $id;
  $parents = [];
  $is_key = [];
  $sql = "SELECT GROUP_CONCAT(`id` ORDER BY `id` SEPARATOR '<br>') AS material FROM `blueprint` WHERE `a` = ? OR `b` = ? OR `c` = ? OR `d` = ? OR `e` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute(array_fill(0, 5, $id));
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      if ($row["material"] != null) {
        $parents = explode("<br>", $row["material"]);
      }
      else {
        return;
      }
    }
  }
  $sql = "SELECT GROUP_CONCAT(`a` ORDER BY `id` SEPARATOR '<br>') AS material FROM `blueprint` WHERE `a` = ? OR `b` = ? OR `c` = ? OR `d` = ? OR `e` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute(array_fill(0, 5, $id));
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      if ($row["material"] != null) {
        $is_key = explode("<br>", $row["material"]);
      }
      else {
        return;
      }
    }
  }
  $row = floor(sqrt(sizeof($parents)));
  $column = ceil(sizeof($parents)/$row);
  $index = 0;
  $html = "<br><table><tr style='font-weight: bold;'><td colspan='5'>材料</td></tr>";
  for ($i = 0; $i < $row; $i++) {
    $html .= "<tr>";
    for ($j = 0; $j < $column; $j++) {
      $html .= "<td".($is_key[$index] == $id ? " bgcolor='#DDDDFF'" : "").">";
      if ($parents[$index] != "") {
        $html .= "<a href='?id={$parents[$index]}'><img srcc='{$parents[$index]}' class='unit' tit='".unit_name($parents[$index])."'></a>";
      }
      $index++;
      $html .= "</td>";
    }
    $html .= "</tr>";
  }
  $html .= "</table>";
  return $html;
}
if ($_GET["id"] == "random") {
  $sql = "SELECT `id` FROM `unit` ORDER BY RAND() LIMIT 1;";
  $result = $pdo->prepare($sql);
  $result->execute();
  $id = $result->fetch()["id"];
  header("Location: search_v2?id=$id");
}
else {
  $id = intval($_GET["id"]);
}
$title = unit_name($id)." - ";
if ($id != null) {
  $sql = "SELECT `tag0`, `tag4`, `sp2` FROM `unit` WHERE `id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() >= 1) {
    while($row = $result->fetch()) {
      $query_html = "
<div id='id'>
  <br>
  <table>
    <tr>
      <td><a href='http://cfo.tiraura.jp/unit_detail.php?id={$id}' target='_blank' text='CFO'></a></td>
      <td><a href='https://www.olgame.tw/sds/robot_detail.php?id={$id}' target='_blank' text='OLG'></a></td>
      <td><a href='https://sdplayer.club/detail.html?id={$id}' target='_blank' text='SDP'></a></td>
      ".id2()."
    </tr>
  </table>
  <br>
  <table>
    <tr>
      <td colspan='3' style='font-weight: bold;'>".unit_name($id)."</td>
    </tr>
    <tr>
      <td colspan='3'>".origin()."</td>
    </tr>".
    unit_info().
    in_cm().
    tags()."
  </table>
  <br>
  ".
  skl_sp()."
  <br>
  <table id='armament'>
    <tr style='font-weight: bold;'>
      <td>".tos("武器", "武器")."</td>
      <td>".tos("射程距離", "射程距离")."</td>
      <td>".tos("攻擊傷害", "攻击伤害")."</td>
      <td>".tos("彈藥數量", "弹药数量")."</td>
      <td>".tos("裝填時間", "装填时间")."</td>
      <td>".tos("武器效果", "武器效果")."</td>
    </tr>".
    wpn(0).
    wpn(1).
    wpn(2).
    wpn(8).
    ma_ca(0);
      if (($row["sp2"] != '')) {
        $query_html .= "
        <tr>
          <td colspan='8'></td>
        </tr>".
        wpn(3).
        wpn(4).
        wpn(5).
        wpn(9).
        ma_ca(1);
      }
      $query_html .= "</table>";
      $query_html .= blueprint();
      $query_html .= material()."</div>";
      $hex = strtoupper(dechex(intval($id)));
      $hex1 = $hex[2].$hex[3]." ".$hex[0].$hex[1];
      $hex2 = "";
      if ($row["tag4"] == "1") {
        $hex2 = ";".strtoupper(dechex(hexdec($hex[2].$hex[3])+1))." ".$hex[0].$hex[1];
      }
      $query_html .= "<script>$(\"input[name='name']\").val('".$hex1.$hex2."');</script>";
    }
  }
} else {
  echo "<script>window.location.href = 'search_v2';</script>";
}
?>