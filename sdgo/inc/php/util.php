<?php
require_once "inc/php/api.php";
foreach ($_GET as $q => $v) {
  $_GET[$q] = preg_replace("/(delete|select|insert|union|update|drop|;|--\s)/i", "在干嘛", $v);
}
foreach ($_POST as $q => $v) {
  $_POST[$q] = preg_replace("/(delete|select|insert|union|update|drop|;|--\s)/i", "在干嘛", $v);
}

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
function unit_info_helper($a) {
  return "
      <tr>
        <td>{$a[0]}</td>
        <td".($a[2]<0?" colspan='2'":"").">{$a[1]}</td>
        ".($a[2]>0?"<td>{$a[2]}</td>":"")."
      </tr>
";
}
function unit_info($id) {
  global $pdo, $meta;
  if ($row = API::call(["type"=>"unit_info","data"=>["id"=>$id]])) {
    $unit_name = API::call(["type"=>"unit_name","data"=>["id"=>$id]]);
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
  unit_info_helper($atk).
  unit_info_helper($def).
  unit_info_helper($spd).
  unit_info_helper($ctl).
  unit_info_helper($tot).
  unit_info_helper($loc);
  }
}
function wpn($id, $v2) {
  $r = [];
  foreach ([0,1,2,3,4,5,8,9] as $no) {
    $r[$no] = API::call(["type"=>"wpn","data"=>["id"=>$id,"no"=>$no,"v2"=>$v2]]);
  }
  return $r;
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
function ma_ca($id) {
  return [API::call(["type"=>"ma_ca","data"=>["id"=>$id,"r"=>0]]),API::call(["type"=>"ma_ca","data"=>["id"=>$id,"r"=>1]])];
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
        $unit_name = API::call(["type"=>"unit_name","data"=>["id"=>$parents[$index]]]);
        $html .= "<a href='search_v2?id={$parents[$index]}'><img srcc='{$parents[$index]}' class='unit' tit='{$unit_name}' alt='{$unit_name}' /></a>";
      }
      $index++;
      $html .= "</td>";
    }
    $html .= "</tr>";
  }
  $html .= "</table>";
  $column = 3;//floor(sizeof($parents)/$row);
  $row = ceil(sqrt(sizeof($parents)));
  $index = 0;
  $html .= "<table id='material' class='mobile'><tr style='font-weight: bold;'><td colspan='5'>材料</td></tr>";
  for ($i = 0; $i < $row; $i++) {
    $html .= "<tr>";
    for ($j = 0; $j < $column; $j++) {
      $html .= "<td".($is_key[$index] == $id ? " bgcolor='#DDDDFF'" : "").">";
      if ($parents[$index] != "") {
        $unit_name = API::call(["type"=>"unit_name","data"=>["id"=>$parents[$index]]]);
        $html .= "<a href='search_v2?id={$parents[$index]}'><img srcc='{$parents[$index]}' class='unit' tit='{$unit_name}' alt='{$unit_name}' /></a>";
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
  //tbd
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
  return preg_replace("/([\r]?\n|(?<=>)\s+(?=<))/", "", preg_replace("/([\r]?\n|(?<=>)\s+(?=<))/", "", $html));
}
?>