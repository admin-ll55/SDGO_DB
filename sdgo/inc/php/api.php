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
  private static function wiki($id) {
    global $is_localhost;
    $id2 = self::id2($id);
    return ($is_localhost?"<a class='button block wiki' href='http://localhost/sdgo/resource/cfo/www/ok/{$id}.html' target='_blank'>CFOちらうら</a>
      <a class='button wiki' href='http://localhost/sdgo/resource/olg/{$id}.html' target='_blank'>
        <img src='https://s2.ax1x.com/2019/05/22/V9VUoj.png' class='wiki' />
      </a>
      <a class='button wiki' href='http://localhost/sdgo/resource/sdp/www/ok/{$id}.html' target='_blank'>
        <img src='https://s2.ax1x.com/2019/05/22/V9VNwQ.png' class='wiki' />
      </a>
      <a class='button wiki' href='http://localhost/sdgo/resource/yukict/www/ok/{$id2}.html' target='_blank'>
        <img src='https://s2.ax1x.com/2019/05/22/V9VdFs.png' class='wiki' />
      </a>":"<a class='button block wiki' href='http://cfo.tiraura.jp/unit_detail.php?id={$id}' target='_blank'>CFOちらうら</a>
      <a class='button wiki' href='https://www.olgame.tw/sds/robot_detail.php?id={$id}' target='_blank'>
        <img src='img/wiki/olg.png' class='wiki' />
      </a>
      <a class='button wiki' href='https://sdplayer.club/detail.html?id={$id}' target='_blank'>
        <img src='img/wiki/sdp.png' class='wiki' />
      </a>
      <a class='button wiki' href='https://www.yukict.com/bbs/viewthread.php?tid={$id2}' target='_blank'>
        <img src='img/wiki/yuki.png' class='wiki' />
      </a>");
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
    return false;
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
    return false;
  }
  private static function unit_info($id) {
    global $pdo;
    $sql = "SELECT `hp`, `rank`, `pos`, `atk`, `def`, `agi`, `spd`, `ratk`, `rdef`, `ragi`, `rspd`, `lock`, `rlock`, `sp1dmg`, `sp2dmg` FROM `unit` WHERE `unit`.`id` = ?;";
    $result = $pdo->prepare($sql);
    $result->execute([$id]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        return $row;
      }
    }
    return false;
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
            $in_cm .= "<a href='search_v2?machine={$temp[$x]}' class='button'>{$temp[$x]}</a>";
          }
          return $in_cm;
        }
      }
    }
    return false;
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
    return false;
  }
  private static function tags($id) {
    global $pdo;
    $html = "";
    $text = [["不能","","自由","裝甲解除", "技能激活"],["不能","","自由","装甲解除","技能激活"]];
    $result = $pdo->prepare("SELECT `tag` FROM `unit` WHERE `id` = ?;");
    $result->execute([$id]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        $tag = intval($row["tag"]);
        $html .= "<a href='search_v2?tag={$tag}' class='button'>".tos($text[0][$tag], $text[1][$tag])."</a>";
        return ["meta"=>tos($text[0][$tag], $text[1][$tag]),"html"=>($html?$html:false)];
      }
    }
    
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
    $sql = "SELECT `type`, `wpn`, `rng`, `dmg`, `sets`, `cd`
    FROM `unit`, `unit_weapon` 
      LEFT JOIN `unit_weapon_eff` 
        ON `unit_weapon`.`id` = `unit_weapon_eff`.`id`
          AND `unit_weapon`.`no` = `unit_weapon_eff`.`no`
    WHERE `unit_weapon`.`id` = `unit`.`id` 
      AND `unit_weapon`.`id` = ? AND `unit_weapon`.`no` = ?
    GROUP BY `unit_weapon`.`no`;";
    $result = $pdo->prepare($sql);
    $result->execute([$id, $no]);
    $cwpn = "";
    $ctype = "";
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        $cwpn = $row["wpn"];
        $ctype = $row["type"];
        $row["dmg"] = (($no == 8 || $no == 9) ? ($v2==2?"{$row["rng"]}[":"")."{$row["dmg"]}%".($v2==2?"]":"") : $row["dmg"]);
        $html .= "
      <tr>
        <td>".($row["wpn"]=="0"||$row["wpn"]=="999"?($row["wpn"]=="999"?"<a href='search_v2?prop[]=s'>":""):"<div class='{$row["type"]}'><a href='search_v2?wpn={$row["wpn"]}'>")."<img srcc='{$row["wpn"]}' class='weapon'>".($row["wpn"]=="0"||$row["wpn"]=="999"?($row["wpn"]=="999"?"<a href='search_v2?prop[]=s'>":""):"</a><a href='search_v2?wpn={$row["type"]}'><img class='weapon type' srcc='{$row["type"]}' /></a></div>".($v2==2?"<br>[{$row["rng"]}]":""))."</td>
        ".($v2==1?"<td>{$row["rng"]}</td>":($v2==2?"":""))."
        <td>{$row["dmg"]}".($v2==2&&$row["wpn"]!="0"&&$row["wpn"]!="999"?"×{$row["sets"]}<cl><br>[<cd>]":"")."</td>
        ".($v2==1?"<td>{$row["sets"]}<cl></td>
        <td><cd></td>":($v2==2?"":""))."
        <td>";
        $html = str_replace("<cd>", ($row["type"]=="s"&&$row["cd"]<0?($row["cd"]*-1).tos("段格鬥", "段格斗"):$row["cd"]), $html);
        if ($row["type"]=="s"&&$row["cd"]<0) {
          $html = str_replace("<cl>", ($v2==2?"下":"下倒地"), $html);
        }
        if ($row["wpn"]=="0"||$row["wpn"]=="999") {
          $html = str_replace("<cl>", "", $html);
        }
      }
    }
    else {
      $html .= "
      <tr>
        <td><a href='search_v2?prop[]=ns'><img srcc='999' class='weapon'></a></td>
        ".($v2==1?"<td>-</td>":($v2==2?"":""))."
        <td>-</td>
        ".($v2==1?"<td></td>
        <td></td>":($v2==2?"":""))."
        <td>";
    }
    $sql = "SELECT GROUP_CONCAT(`unit_weapon_eff`.`inconsistent` ORDER BY `eff`.`id` ASC SEPARATOR '<br>') AS inc,
    GROUP_CONCAT(`unit_weapon_eff`.`inconsistent` ORDER BY `eff`.`id` ASC SEPARATOR '<br>') AS inc,
    GROUP_CONCAT(`eff`.`id` ORDER BY `eff`.`id` ASC SEPARATOR '<br>') AS id,
    GROUP_CONCAT(`eff_{$_COOKIE["l"]}` ORDER BY `eff`.`id` ASC SEPARATOR '<br>') AS eff 
    FROM `eff`, `unit_weapon_eff`
    WHERE `eff`.`id` = `unit_weapon_eff`.`eff`
      AND `unit_weapon_eff`.`id` = ? AND `unit_weapon_eff`.`no` = ? 
    GROUP BY `unit_weapon_eff`.`id`, `unit_weapon_eff`.`no`;";
    $result = $pdo->prepare($sql);
    $result->execute([$id, $no]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        $inc = explode("<br>", $row["inc"]);
        $id = explode("<br>", $row["id"]);
        $ed = explode("<br>", $row["eff"]);
        $row["eff"] = "";
        for ($x = 0; $x < count($ed); $x++) {
          $row["eff"] .= "<a href='search_v2?".($id[$x]!="999"?"eff={$id[$x]}":"prop[]=s2")."' class='button block eff' inc='{$inc[$x]}'>".str_replace(".","<br>",$ed[$x])."</a>";
        }
        if ($ctype=="s"&&(in_array("180", $id)||in_array($cwpn, ["6","11","12","23"]))) {
          $html = str_replace("<cl>", ($v2==2?tos("擊","击"):tos("連擊","连击")), $html);
        }
        $html .= $row["eff"];
      }
    }
    $html .= "</td>
      </tr>
  ";
    $html = preg_replace("/<cl>/", tos("發","发"), $html);
    $html = preg_replace("/(\.[0-9]{2})/", "$1秒", $html);
    if ($v2==2) $html = preg_replace("/\[([0-9]\.[0-9]{2})/", "[<span style='opacity:0;'>0</span>$1", $html);
    if ($v2==1) $html = preg_replace("/>([0-9]\.[0-9]{2})/", "><span style='opacity:0;'>0</span>$1", $html);
    return preg_replace("/-1(\.00)?/", "?", $html);
  }
  private static function attr($id, $r) {
    global $pdo;
    $html = "";
    $ma = "ma";
    $ca = "ca";
    $big = "big";
    $tiny = "tiny";
    if ($r == 1) {
      $ma = "r{$ma}";
      $ca = "r{$ca}";
      $big = "r{$big}";
      $tiny = "r{$tiny}";
    }
    $sql = "SELECT `{$ma}` FROM `unit` WHERE `id` = ? UNION ALL SELECT `{$ca}` FROM `unit` WHERE `id` = ? UNION ALL SELECT `{$big}` FROM `unit` WHERE `id` = ? UNION ALL SELECT `{$tiny}` FROM `unit` WHERE `id` = ?;";
    $result = $pdo->prepare($sql);
    $result->execute([$id, $id, $id, $id]);
    if ($result->rowCount() == 4) {
      if ($row = $result->fetchAll()) {
        $html .= ($row[0][0] == "1" ? "<a href='search_v2?prop[]=ma' class='button'>MA</a>" : "").
                 ($row[1][0] == "1" ? "<a href='search_v2?prop[]=ca' class='button'>".tos("格鬥反擊","格斗反击")."</a>" : "").
                 ($row[2][0] == "1" ? "<a href='search_v2?prop[]=big' class='button'>大型</a>" : "").
                 ($row[3][0] == "1" ? "<a href='search_v2?prop[]=tiny' class='button'>小型</a>" : "");
      }
      return $html;
    }
    return false;
  }
  public static function call($api) {
    $data = $api["data"];
    switch ($api["type"]) {
      case "wiki":
        return self::wiki($data["id"]);
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
      case "attr":
        return self::attr($data["id"],$data["r"]);
    }
  }
}
?>