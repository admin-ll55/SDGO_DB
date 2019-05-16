<?php
//general
function tos($tc, $sc) {
  return ($_COOKIE["l"] == "TC" ? $tc : $sc);
}

//search_v2.php
function _require($file) {
  ob_start();
  require_once $file;
  return ob_get_clean();
}

//cookie.php
function _setcookie($k, $v) {
  setcookie($k, $v, mktime(0, 0, 0, 12, 31, 2020));
}
//id.php
function id2() {
  global $pdo, $id;
  $sql = "SELECT `id2` FROM `unit`, `id_ex` WHERE `unit`.`id` = `id_ex`.`id1` AND `unit`.`id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return $row["id2"];
    }
  }
}
function unit_name($id) {
  global $pdo;
  $sql = "SELECT `unit_name_{$_COOKIE["l"]}` AS unit_name FROM `unit`, `id_ex` WHERE `unit`.`id` = `id_ex`.`id1` AND `unit`.`id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return $row["unit_name"];
    }
  }
}
function origin() {
  global $pdo, $id;
  $sql = "SELECT `unit`.`origin`, `name_{$_COOKIE["l"]}` AS name FROM `unit`, `origin` WHERE `unit`.`origin` = `origin`.`origin` AND `unit`.`id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return "<a href='search_v2?origin={$row["origin"]}'><img class='origin' srcc='{$row["origin"]}' alt='{$row["name"]}' /></a>";
    }
  }
}
function unit_info_helper($a, $b) {
  if ($b == 1) {
    return "
      <tr>
        <td>{$a[0]}</td>
        <td".($a[2]<0?" colspan='2'":"").">{$a[1]}</td>
        ".($a[2]>0?"<td>{$a[2]}</td>":"")."
      </tr>
";
  }
  else if ($b == 2) {
    return "
      <tr>
        <td>{$a[0]}</td>
        <td n='{$a[1]}' r='{$a[2]}' colspan='2'>{$a[1]}</td>
      </tr>
";
  }
}
function unit_info($v2) {
  global $pdo, $id, $meta;
  $sql = "SELECT `hp`, `rank`, `pos`, `atk`, `def`, `spd`, `ctl`, `ratk`, `rdef`, `rspd`, `rctl`, `lock`, `rlock` FROM `unit` WHERE `unit`.`id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      $unit_name = unit_name($id);
      $atk = [tos("攻擊", "攻击"),$row["atk"],$row["ratk"]];
      $def = [tos("防禦", "防御"),$row["def"],$row["rdef"]];
      $spd = [tos("速度", "速度"),$row["spd"],$row["rspd"]];
      $ctl = [tos("操控", "操控"),$row["ctl"],$row["rctl"]];
      $tot = [tos("總和", "总和"),$row["atk"]+$row["def"]+$row["spd"]+$row["ctl"],$row["ratk"]+$row["rdef"]+$row["rspd"]+$row["rctl"]];
      $loc = [tos("鎖敵距離", "锁敌距离"),$row["lock"],$row["rlock"]];
      array_push($meta, $unit_name, $id, $row["rank"], ($row["pos"]=="r"?"近":($row["pos"]=="s"?"中":tos("遠","远"))).tos("距離","距离"), [tos("血量", "血量"),$row["hp"]], $atk, $def, $spd, $ctl, $tot, $loc);
      return "
    <tr>
      <td colspan='3'><a href='search_v2?id={$id}'><img srcc='{$id}' class='unit' tit='{$unit_name}' alt='{$unit_name}' /></a></td>
    </tr>
    <tr>
      <td>ID: <input type='text' value='{$id}' size='4' /></td>
      <td>{$row["rank"]}</td>
      <td><a href='search_v2?pos={$row["pos"]}'><img srcc='{$row["pos"]}' class='pos'></a></td>
    </tr>
    <tr>
      <td>".tos("血量", "血量")."</td>
      <td colspan='2'>{$row["hp"]}</td>
    </tr>".
    unit_info_helper($atk,$v2).
    unit_info_helper($def,$v2).
    unit_info_helper($spd,$v2).
    unit_info_helper($ctl,$v2).
    unit_info_helper($tot,$v2).
    unit_info_helper($loc,$v2);
    }
  }
}
function in_cm() {
  global $pdo, $id;
  $sql = "SELECT GROUP_CONCAT(machine ORDER BY machine SEPARATOR '<br>') AS in_cm FROM `capsule` WHERE a = ? OR b = ? OR c = ? OR d = ? OR e = ? OR f = ?;";
  $result = $pdo->prepare($sql);
  $result->execute(array_fill(0, 6, $id));
  $in_cm = "";
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      if ($row["in_cm"] != "") {
        $temp = explode("<br>", $row["in_cm"]);
        for ($x = 0; $x < sizeof($temp); $x++) {
          if ($x > 0) {
            $in_cm .= " ";
          }
          $in_cm .= "<a href='search_v2?machine={$temp[$x]}'>[{$temp[$x]}]</a>";
        }
      }
    }
  }
  return ($in_cm!=""?$in_cm:"-");
}
function tags() {
  global $pdo, $id, $meta;
  $html = "";
  $sql = [
    "SELECT `tag1` AS tag FROM `unit` WHERE `id` = $id;",
    "SELECT `tag3` AS tag FROM `unit` WHERE `id` = $id;",
    "SELECT `tag4` AS tag FROM `unit` WHERE `id` = $id;"
  ];
  $text = [["大型", "裝甲解除", "技能激活"],["大型", "装甲解除", "技能激活"],[]];
  for ($i = 0; $i < count($sql); $i++) {
    $result = $pdo->prepare($sql[$i]);
    $result->execute();
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        if ($row["tag"] == "1") {
          if ($html != "") {
            $html .= "、";
          }
          $html .= tos($text[0][$i], $text[1][$i]);
          array_push($text[2], tos($text[0][$i], $text[1][$i]));
        }
      }
    }
  }
  array_push($meta, implode($text[2], ", "));
  return "<tr><td>特性</td><td colspan='2'>".($html==""?"-":$html)."</td></tr>";
}
function skl_sp($v2) {
  global $pdo, $id;
  $sql = "SELECT `unit`.`skl1`, (SELECT CONCAT(`name_{$_COOKIE["l"]}`, '\n\n', `desc_{$_COOKIE["l"]}`) FROM `skill` WHERE `unit`.`skl1` = `skl`) AS skl1_desc,
                 `unit`.`skl2`, (SELECT CONCAT(`name_{$_COOKIE["l"]}`, '\n\n', `desc_{$_COOKIE["l"]}`) FROM `skill` WHERE `unit`.`skl2` = `skl`) AS skl2_desc,
                 `unit`.`sp1`, `unit`.`sp1dmg` AS sp1_dmg,
                 `unit`.`sp2`, `unit`.`sp2dmg` AS sp2_dmg
          FROM `unit` WHERE `id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      $row["skl1_desc"] = preg_replace("/\n/", "<n>", $row["skl1_desc"]);
      $row["skl2_desc"] = preg_replace("/\n/", "<n>", $row["skl2_desc"]);
      return "
    <tr>
      <td>".tos("技能一", "技能一")."</td>
      <td><a href='search_v2?skl={$row["skl1"]}'><img class='skill' srcc='{$row["skl1"]}' alt='{$row["skl1_desc"]}' /></a></td>
      <td><a><svg tit='{$row["skl1_desc"]}' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z'></path></svg></a></td>
    </tr>
    <tr>
      <td>".tos("技能二", "技能二")."</td>
      <td><a href='search_v2?skl={$row["skl2"]}'><img class='skill' srcc='{$row["skl2"]}' alt='{$row["skl2_desc"]}' /></a></td>
      <td><a><svg tit='{$row["skl2_desc"]}' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z'></path></svg></a></td>
    </tr>".
    ($v2==1?
      "
    <tr>
      <td>".tos("必殺一", "必杀一")."</td>
      <td><a href='search_v2?sp={$row["sp1"]}'><img class='sp' srcc='{$row["sp1"]}' alt='{$row["sp1_desc"]}' /></a></td>
      <td>{$row["sp1_dmg"]}</td>
    </tr>".
      ($row["sp2"] != '' ? "<tr><td>".tos("必殺二", "必杀二")."</td><td><a href='search_v2?sp={$row["sp2"]}'><img class='sp' srcc='{$row["sp2"]}' alt='{$row["sp2_desc"]}' /></a></td><td>{$row["sp2_dmg"]}</td></tr>" : "")."
"
    :
      ($v2==2?
        "
    <tr>
      <td>".tos("必殺一", "必杀一")."</td>
      <td><a href='search_v2?sp={$row["sp1"]}'><img class='sp' srcc='{$row["sp1"]}' alt='{$row["sp1_desc"]}' /></a></td>
      <td>{$row["sp1_dmg"]}</td>
    </tr>
    <tr>
      <td>".tos("必殺二", "必杀二")."</td>
      <td>".($row["sp2"]!=''?"<a href='search_v2?sp={$row["sp2"]}'><img class='sp' srcc='{$row["sp2"]}' alt='{$row["sp2_desc"]}' /></a>":"<div id='spempty'></div>")."</td>
      <td>".($row["sp2"]!=''?$row["sp2_dmg"]:"")."</td>
    </tr>
"
      :
        ($v2==3?
          "
      <tr>
        <td>".tos("必殺", "必杀")."</td>
        <td><a n='{$row["sp1"]}' r='{$row["sp2"]}' href='search_v2?sp={$row["sp1"]}'><img n='{$row["sp1"]}' r='{$row["sp2"]}' class='sp' srcc='{$row["sp1"]}' /></a></td>
        <td n='{$row["sp1_dmg"]}' r='{$row["sp2_dmg"]}'>{$row["sp1_dmg"]}</td>
      </tr>
"
        :
          ""
        )
      )
    );
    }
  }
}
function wpn($id, $no, $v2) {
  global $pdo;
  $html = "";
  $sql = "SELECT `tag0`, `wpn`, `rng`, `dmg`".($v2==1?", `sets`, `cd`":($v2==2?"":""))."
  FROM `unit`, `weapon` 
    LEFT JOIN `weapon_tag` 
      ON `weapon`.`id` = `weapon_tag`.`id`
        AND `weapon`.`no` = `weapon_tag`.`no`
  WHERE `weapon`.`id` = `unit`.`id` 
    AND `weapon`.`id` = ? AND `weapon`.`no` = ?
  GROUP BY `weapon`.`no`;";
  $result = $pdo->prepare($sql);
  $result->execute([$id, $no]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      $html .= "
    ".($v2==1?"<tr".($row["tag0"] == "1" && $row["wpn"] == "32" ? " bgcolor='#DDDDFF'" : "").">":($v2==2?"":""))."
      <td>".($row["wpn"]==0||$row["wpn"]==999?"":"<a href='search_v2?wpn={$row["wpn"]}'>")."<img srcc='{$row["wpn"]}' class='weapon'>".($row["wpn"]==0||$row["wpn"]==999?"":"</a>")."</td>
      ".($v2==1?"<td>{$row["rng"]}</td>":($v2==2?"":""))."
      <td>{$row["dmg"]}".(($no == 8 || $no == 9) ? "%" : "")."</td>
      ".($v2==1?"<td>".(($no == 8 || $no == 9) ? "" : $row["sets"])."</td>
      <td>{$row["cd"]}</td>":($v2==2?"":""))."
      <td>";
    }
  }
  else {
    $html .= "
    ".($v2==1?"<tr>":($v2==2?"":""))."
      <td><img srcc='999' class='weapon'></td>
      ".($v2==1?"<td>-</td>":($v2==2?"":""))."
      <td>-</td>
      ".($v2==1?"<td></td>
      <td></td>":($v2==2?"":""))."
      <td>";
  }
  $sql = "SELECT GROUP_CONCAT(`tag_{$_COOKIE["l"]}` ORDER BY LENGTH(`tag_{$_COOKIE["l"]}`) SEPARATOR '<br>') AS tag 
  FROM `tag`, `weapon_tag`
  WHERE `tag`.`id` = `weapon_tag`.`tag`
    AND `weapon_tag`.`id` = ? AND `weapon_tag`.`no` = ? 
  GROUP BY `weapon_tag`.`id`, `weapon_tag`.`no`;";
  $result = $pdo->prepare($sql);
  $result->execute([$id, $no]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      $html .= $row["tag"];
    }
  }
  $html .= "</td>
    ".($v2==1?"</tr>":($v2==2?"":""))."
";
  return preg_replace("/-1(\.00)?/", "?", $html);
}
function hex($id, $tag4) {
  $hex = strtoupper(dechex(intval($id)));
  if ($tag4 == "") {
    return $hex[2].$hex[3]." ".$hex[0].$hex[1];
  }
  else {
    return strtoupper(dechex(hexdec($hex[2].$hex[3])+1))." ".$hex[0].$hex[1];
  }
}
function ma_ca($id, $no) {
  global $pdo;
  $ma = "ma";
  $ca = "ca";
  if ($no == 1) {
    $ma = "r{$ma}";
    $ca = "r{$ca}";
  }
  $sql = "SELECT `$ma`, `$ca` FROM `unit` WHERE `id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while ($row = $result->fetch()) {
      return tos("型態特性：", "型态特性：").($row[$ma] == "1" || $row[$ca] == "1"?"":"-").
($row[$ma] == "1" ? "MA" : "").
($row[$ma] == "1" && $row[$ca] == "1" ? "、" : "").
($row[$ca] == "1" ? tos("格鬥反擊", "格斗反击") : "");
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
<table id='blueprint' class='mobile hide'>
  <tr style='font-weight: bold;'>
    <td colspan='5'>".tos("設計圖", "设计图")."</td>
  </tr>
  <tr>
    <td bgcolor='#DDDDFF'>
      <a href='search_v2?id={$row["a"]}'><img srcc='{$row["a"]}' class='unit' tit='".unit_name($row["a"])."' alt='".unit_name($row["a"])."'></a>
    </td>".
    ($row["b"] != "" ? "<td><a href='search_v2?id={$row["b"]}'><img srcc='{$row["b"]}' class='unit' tit='".unit_name($row["b"])."' alt='".unit_name($row["b"])."'></a></td>" : "").
    ($row["c"] != "" ? "<td><a href='search_v2?id={$row["c"]}'><img srcc='{$row["c"]}' class='unit' tit='".unit_name($row["c"])."' alt='".unit_name($row["c"])."'></a></td>" : "").
    ($row["d"] != "" ? "<td><a href='search_v2?id={$row["d"]}'><img srcc='{$row["d"]}' class='unit' tit='".unit_name($row["d"])."' alt='".unit_name($row["d"])."'></a></td>" : "").
    ($row["e"] != "" ? "<td><a href='search_v2?id={$row["e"]}'><img srcc='{$row["e"]}' class='unit' tit='".unit_name($row["e"])."' alt='".unit_name($row["e"])."'></a></td>" : "")."
  </tr>
  <tr>
    <td bgcolor='#DDDDFF'>Lv {$row["aa"]}</td>".
    ($row["b"] != "" ? "<td>Lv {$row["bb"]}</td>" : "").
    ($row["c"] != "" ? "<td>Lv {$row["cc"]}</td>" : "").
    ($row["d"] != "" ? "<td>Lv {$row["dd"]}</td>" : "").
    ($row["e"] != "" ? "<td>Lv {$row["ee"]}</td>" : "")."
  </tr>
</table>
<table id='blueprint' class='mobile'>
  <tr style='font-weight: bold;'>
    <td colspan='2'>".tos("設計圖", "设计图")."</td>
  </tr>
  <tr>
    <td bgcolor='#DDDDFF'>
      <a href='search_v2?id={$row["a"]}'><img srcc='{$row["a"]}' class='unit' tit='".unit_name($row["a"])."' alt='".unit_name($row["a"])."'></a>
    </td>
    <td bgcolor='#DDDDFF'>Lv {$row["aa"]}</td>
  </tr>".
    ($row["b"] != "" ? "<tr><td><a href='search_v2?id={$row["b"]}'><img srcc='{$row["b"]}' class='unit' tit='".unit_name($row["b"])."' alt='".unit_name($row["b"])."'></a></td><td>Lv {$row["bb"]}</td></tr>" : "").
    ($row["c"] != "" ? "<tr><td><a href='search_v2?id={$row["c"]}'><img srcc='{$row["c"]}' class='unit' tit='".unit_name($row["c"])."' alt='".unit_name($row["c"])."'></a></td><td>Lv {$row["cc"]}</td></tr>" : "").
    ($row["d"] != "" ? "<tr><td><a href='search_v2?id={$row["d"]}'><img srcc='{$row["d"]}' class='unit' tit='".unit_name($row["d"])."' alt='".unit_name($row["d"])."'></a></td><td>Lv {$row["dd"]}</td></tr>" : "").
    ($row["e"] != "" ? "<tr><td><a href='search_v2?id={$row["e"]}'><img srcc='{$row["e"]}' class='unit' tit='".unit_name($row["e"])."' alt='".unit_name($row["e"])."'></a></td><td>Lv {$row["ee"]}</td></tr>" : "")."
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
  $html = "<br><table id='material' class='mobile hide'><tr style='font-weight: bold;'><td colspan='5'>材料</td></tr>";
  for ($i = 0; $i < $row; $i++) {
    $html .= "<tr>";
    for ($j = 0; $j < $column; $j++) {
      $html .= "<td".($is_key[$index] == $id ? " bgcolor='#DDDDFF'" : "").">";
      if ($parents[$index] != "") {
        $html .= "<a href='search_v2?id={$parents[$index]}'><img srcc='{$parents[$index]}' class='unit' tit='".unit_name($parents[$index])."' alt='".unit_name($parents[$index])."' /></a>";
      }
      $index++;
      $html .= "</td>";
    }
    $html .= "</tr>";
  }
  $html .= "</table>";
  $row = ceil(sqrt(sizeof($parents)));
  $column = floor(sizeof($parents)/$row);
  $index = 0;
  $html .= "<table id='material' class='mobile'><tr style='font-weight: bold;'><td colspan='5'>材料</td></tr>";
  for ($i = 0; $i < $row; $i++) {
    $html .= "<tr>";
    for ($j = 0; $j < $column; $j++) {
      $html .= "<td".($is_key[$index] == $id ? " bgcolor='#DDDDFF'" : "").">";
      if ($parents[$index] != "") {
        $html .= "<a href='search_v2?id={$parents[$index]}'><img srcc='{$parents[$index]}' class='unit' tit='".unit_name($parents[$index])."' alt='".unit_name($parents[$index])."' /></a>";
      }
      $index++;
      $html .= "</td>";
    }
    $html .= "</tr>";
  }
  $html .= "</table>";
  return $html;
}

//form.php
function skl_option() {
  global $pdo;
  $html = "";
  $sql = "SELECT `skl`, `name_{$_COOKIE["l"]}` AS name FROM `skill` WHERE `skl` NOT IN ('012','013','014','231');";
  $result = $pdo->prepare($sql);
  $result->execute();
  if ($result->rowCount() >= 1) {
    $row = $result->fetch();
    while ($row = $result->fetch()) {
      $html .= "            <option text='　{$row["skl"]} {$row["name"]}' value='{$row["skl"]}'></option>\n";
    }
  }
  return $html;
}
function wpn_option() {
  $html = "";
  $wpn = [
    [1,2,3,4,5,6,11,12,13,14,15,16,21,22,23,25,26,27,28,31,32,"tag0",33,34,35,36,37,38,39,41,42,43],
    ["格鬥","斧","光束軍刀","實體刀","擊","斬","熱能鞭","火箭錨","飛鏢","劍氣","護盾","拳","光束擴散炮","火神炮","狀態彈","浮游炮(射擊型)","浮游炮(近接型)","浮游炮(反射型)","浮游炮(追尾型)","噴槍","光束步槍","光束步槍(3連射)","機關槍","火箭炮","擴散炮","飛彈","羽毛","線性步槍","格林機槍","加農炮","超視炮","狙擊槍"],
    ["格斗","斧","光束军刀","实体刀","击","斩","热能鞭","火箭锚","飞镖","剑气","护盾","拳","光束扩散炮","火神炮","状态弹","浮游炮(射击型)","浮游炮(近接型)","浮游炮(反射型)","浮游炮(追尾型)","喷枪","光束步枪","光束步枪(3连射)","机关枪","火箭炮","扩散炮","飞弹","羽毛","线性步枪","格林机枪","加农炮","超视炮","狙击枪"]
  ];
  $l = $_COOKIE["l"] == "TC" ? 1 : 2;
  for ($x = 0; $x < sizeOf($wpn[0]); $x++) {
    $html .= "            <option text='　{$wpn[$l][$x]}' value='{$wpn[$l][$x]}'></option>\n";
  }
  return $html;
}
function eff_option() {
  global $pdo;
  $html = "";
  $sql = "SELECT `id`, `tag_{$_COOKIE["l"]}` AS tag FROM `tag` WHERE `id` != 999 ORDER BY `id` ASC;";
  $result = $pdo->prepare($sql);
  $result->execute();
  if ($result->rowCount() >= 1) {
    while($row = $result->fetch()) {
      $html .= "            <option text='{$row["tag"]}' value='{$row["id"]}'></option>\n";
    }
  }
  return $html;
}
function origin_option() {
  global $pdo;
  $html = "";
  $sql = "SELECT `origin`, `name_{$_COOKIE["l"]}` AS name FROM `origin`;";
  $result = $pdo->prepare($sql);
  $result->execute();
  if ($result->rowCount() >= 1) {
    while($row = $result->fetch()) {
      $html .= "            <option text='{$row["name"]}' value='{$row["origin"]}'></option>\n";
    }
  }
  return $html;
}
function cm_option() {
  global $pdo;
  $html = "";
  $sql = "SELECT `machine` FROM `capsule` ORDER BY `machine` ASC;";
  $result = $pdo->prepare($sql);
  $result->execute();
  if ($result->rowCount() >= 1) {
    while($row = $result->fetch()) {
      $html .= "            <option value='{$row["machine"]}'".($row["machine"] == "1" ? " selected" : "")."></option>\n";
    }
  }
  return $html;
}

//machine
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

//query.php
function not($k) {
  if (sizeof($_POST["not"]) > 0) {
    if (in_array($k,$_POST["not"])) {
      return "$(\"input[name^='not'][value='$k']\").prop('checked', true);";
    }
  }
  return "";
}

//result.php
function minify($html) {
  return preg_replace("/(\n|(?<=>)\s+(?=<))/", "", preg_replace("/(\n|(?<=>)\s+(?=<))/", "", $html));
}
?>