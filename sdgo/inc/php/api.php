<?php
class API {
  private static function id2($id) {
    global $pdo;
    $sql = "SELECT `id2` FROM `unit`, `id_ex` WHERE `unit`.`id` = `id_ex`.`id1` AND `unit`.`id` = ?;";
    $result = $pdo->prepare($sql);
    $result->execute([$id]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        return $row["id2"];
      }
    }
  }
  private static function unit_name($id) {
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
  private static function origin($id) {
    global $pdo;
    $sql = "SELECT `unit`.`origin`, `name_{$_COOKIE["l"]}` AS name FROM `unit`, `origin` WHERE `unit`.`origin` = `origin`.`origin` AND `unit`.`id` = ?;";
    $result = $pdo->prepare($sql);
    $result->execute([$id]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        return $row;
      }
    }
  }
  private static function unit_info($id) {
    global $pdo;
    $sql = "SELECT `hp`, `rank`, `pos`, `atk`, `def`, `spd`, `ctl`, `ratk`, `rdef`, `rspd`, `rctl`, `lock`, `rlock` FROM `unit` WHERE `unit`.`id` = ?;";
    $result = $pdo->prepare($sql);
    $result->execute([$id]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        return $row;
      }
    }
    else {
      return false;
    }
  }
  private static function in_cm($id) {
    global $pdo;
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
          return $in_cm;
        }
      }
    }
    return "-";
  }
  private static function blueprint($id) {
    global $pdo;
    $sql = "SELECT * FROM `blueprint` WHERE `id` = ?;";
    $result = $pdo->prepare($sql);
    $result->execute([$id]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        return $row;
      }
    }
    else {
      return false;
    }
  }
  private static function tags($id) {
    global $pdo;
    $html = "";
    $sql = [
      "SELECT `tag1` AS tag FROM `unit` WHERE `tag1` = '1' AND `id` = ?;",
      "SELECT `tag3` AS tag FROM `unit` WHERE `tag3` = '1' AND `id` = ?;",
      "SELECT `tag4` AS tag FROM `unit` WHERE `tag4` = '1' AND `id` = ?;"
    ];
    $text = [["大型", "裝甲解除", "技能激活"],["大型", "装甲解除", "技能激活"],[]];
    for ($i = 0; $i < count($sql); $i++) {
      $result = $pdo->prepare($sql[$i]);
      $result->execute([$id]);
      if ($result->rowCount() == 1) {
        while ($row = $result->fetch()) {
          if ($html != "") {
            $html .= "、";
          }
          $html .= tos($text[0][$i], $text[1][$i]);
          array_push($text[2], tos($text[0][$i], $text[1][$i]));
        }
      }
      else {
        $html = "-";
      }
    }
    return ["meta"=>implode($text[2], ", "),"html"=>$html];
  }
  private static function skl_sp($id) {
    global $pdo;
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
        return $row;
      }
    }
  }
  private static function wpn($id, $no, $v2) {
    global $pdo;
    $html = "";
    $sql = "SELECT `wpn`, `rng`, `dmg`".($v2==1?", `sets`, `cd`":($v2==2?"":""))."
    FROM `unit`, `unit_weapon` 
      LEFT JOIN `unit_weapon_tag` 
        ON `unit_weapon`.`id` = `unit_weapon_tag`.`id`
          AND `unit_weapon`.`no` = `unit_weapon_tag`.`no`
    WHERE `unit_weapon`.`id` = `unit`.`id` 
      AND `unit_weapon`.`id` = ? AND `unit_weapon`.`no` = ?
    GROUP BY `unit_weapon`.`no`;";
    $result = $pdo->prepare($sql);
    $result->execute([$id, $no]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        $html .= "
      <tr>
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
      <tr>
        <td><img srcc='999' class='weapon'></td>
        ".($v2==1?"<td>-</td>":($v2==2?"":""))."
        <td>-</td>
        ".($v2==1?"<td></td>
        <td></td>":($v2==2?"":""))."
        <td>";
    }
    $sql = "SELECT GROUP_CONCAT(`tag_{$_COOKIE["l"]}` ORDER BY LENGTH(`tag_{$_COOKIE["l"]}`) SEPARATOR '<br>') AS tag 
    FROM `tag`, `unit_weapon_tag`
    WHERE `tag`.`id` = `unit_weapon_tag`.`tag`
      AND `unit_weapon_tag`.`id` = ? AND `unit_weapon_tag`.`no` = ? 
    GROUP BY `unit_weapon_tag`.`id`, `unit_weapon_tag`.`no`;";
    $result = $pdo->prepare($sql);
    $result->execute([$id, $no]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        $html .= $row["tag"];
      }
    }
    $html .= "</td>
      </tr>
  ";
    return preg_replace("/-1(\.00)?/", "?", $html);
  }
  private static function ma_ca($id, $r) {
    global $pdo;
    $ma = "ma";
    $ca = "ca";
    if ($r == 1) {
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
  public static function call($api) {
    $data = $api["data"];
    switch ($api["type"]) {
      case "id2":
        return self::id2($data["id"]);
      case "unit_name":
        return self::unit_name($data["id"]);
      case "origin":
        return self::origin($data["id"]);
      case "unit_info":
        return self::unit_info($data["id"]);
      case "in_cm":
        return self::in_cm($data["id"]);
      case "blueprint":
        return self::blueprint($data["id"]);
      case "tags":
        return self::tags($data["id"]);
      case "skl_sp":
        return self::skl_sp($data["id"]);
      case "wpn":
        return self::wpn($data["id"],$data["no"],$data["v2"]);
      case "ma_ca":
        return self::ma_ca($data["id"],$data["r"]);
    }
  }
}
?>