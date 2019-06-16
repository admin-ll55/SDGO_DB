<?php
$k = array_keys($_GET)[0];
$v = $_GET[array_keys($_GET)[0]];
unset($_GET);
$_GET[$k] = $v;
$_POST[$k] = $v;
$sql = "";
$sql_data = [];
switch($k) {
  case "skl":
    $sql = "SELECT '技能' AS col1, `skl` AS col2, `name_{$_COOKIE["l"]}` AS col3, `desc_{$_COOKIE["l"]}` AS col4 FROM `skill` WHERE `skl` = ?;";
    array_push($sql_data, $_GET["skl"]);
    break;
  case "sp":
    $sql = "SELECT '".tos("必殺","必杀")."' AS col1, `skl` AS col2, `name_{$_COOKIE["l"]}` AS col3, `desc_{$_COOKIE["l"]}` AS col4 FROM `skill` WHERE `skl` = ?;";
    array_push($sql_data, $_GET["sp"]);
    break;
  case "wpn":
    preg_match("/([0-9]{2}|[a-csmlf])/", $_GET["wpn"], $m);
    $_GET["wpn"] = $m[0];
    $sql = "SELECT '武器' AS col1, '{$_GET["wpn"]}' AS col2, `name_{$_COOKIE["l"]}` AS col3, '' AS col4 FROM `weapon` WHERE `wpn` = ? OR `cat` = ?;";
    array_push($sql_data, $_GET["wpn"], $_GET["wpn"]);
    break;
  case "eff":
    $sql = "SELECT '效果' AS col1, `id` AS col2, `eff_{$_COOKIE["l"]}` AS col3, '' AS col4 FROM `eff` WHERE `id` = ?;";
    array_push($sql_data, $_GET["eff"]);
    break;
  case "origin":
    $sql = "SELECT '作品' AS col1, `origin` AS col2, `name_{$_COOKIE["l"]}` AS col3, '' AS col4 FROM `origin` WHERE `origin` = ?;";
    array_push($sql_data, $_GET["origin"]);
    break;
  case "rank":
    switch ($_GET["rank"]) {
      case "S%":
        $text = "全S";
        break;
      case "SS":
        $text = "SS";
        break;
      case "SR":
        $text = "SR";
        break;
      case "S":
        $text = "S";
        break;
      case "A%":
        $text = "全A";
        break;
      case "AS":
        $text = "AS";
        break;
      case "AR":
        $text = "AR";
        break;
      case "A":
        $text = "A";
        break;
      case "B%":
        $text = "全B";
        break;
      case "BS":
        $text = "BS";
        break;
      case "BR":
        $text = "BR";
        break;
      case "B":
        $text = "B";
        break;
      case "BU":
        $text = "BU";
        break;
      case "C%":
        $text = "全C";
        break;
      case "CS":
        $text = "CS";
        break;
      case "CR":
        $text = "CR";
        break;
      case "C":
        $text = "C";
        break;
      case "CU":
        $text = "CU";
        break;
      case "SABC":
        $text = "全NORMAL";
        break;
      case "_S":
        $text = "全SECRET";
        break;
      case "_R":
        $text = "全RARE";
        break;
      case "_U":
        $text = "全U";
        break;
      default:
        $_GET["rank"] = ";";
        break;
    }
    if ($_GET["rank"] != ";")
      $sql = "SELECT '".tos("等級","等级")."' AS col1, '{$_GET["rank"]}' AS col2, '{$text}' AS col3, '' AS col4 FROM `eff` LIMIT 1;";
    break;
  case "pos":
    $text = ($_GET["pos"]=="r"?"近":($_GET["pos"]=="s"?"中":($_GET["pos"]=="p"?tos("遠","远"):";")));
    if ($_GET["pos"] != ";")
      $sql = "SELECT '".tos("距離","距离")."' AS col1, '{$_GET["pos"]}' AS col2, '{$text}' AS col3, '' AS col4 FROM `eff` LIMIT 1;";
    break;
  case "tag":
    if($_GET["tag"]=="2"){$text=tos("自由","自由");}
    else if($_GET["tag"]=="3"){$text=tos("裝甲解除","装甲解除");}
    else if($_GET["tag"]=="4"){$text=tos("技能激活","技能激活");}
    else if($_GET["tag"]=="0"){$text=tos("不能","不能");}
    else {$_GET["tag"]==";";}
    if ($_GET["tag"] != ";")
      $sql = "SELECT '".tos("變型","变型")."' AS col1, '{$_GET["tag"]}' AS col2, '{$text}' AS col3, '' AS col4 FROM `eff` LIMIT 1;";
    break;
  case "prop":
    $text = "";
    switch ($_GET["prop"]) {
      case "ma":
        $text = tos("MA", "MA");
        break;
      case "nma":
        $text = tos("×MA", "×MA");
        break;
      case "ca":
        $text = tos("格鬥反擊", "格斗反击");
        break;
      case "nca":
        $text = tos("×格鬥反擊", "×格斗反击");
        break;
      case "big":
        $text = tos("大型", "大型");
        break;
      case "nbig":
        $text = tos("×大型", "×大型");
        break;
      case "tiny":
        $text = tos("小型", "小型");
        break;
      case "ntiny":
        $text = tos("×小型", "×小型");
        break;
      case "s":
        $text = tos("盾牌", "盾牌");
        break;
      case "ns":
        $text = tos("×盾牌", "×盾牌");
        break;
      case "s2":
        $text = tos("光束盾", "光束盾");
        break;
      case "ns2":
        $text = tos("×光束盾", "×光束盾");
        break;
      case "bp":
        $text = tos("設計圖", "设计图");
        break;
      case "nbp":
        $text = tos("×設計圖", "×设计图");
        break;
      case "cm":
        $text = tos("扭蛋", "扭蛋");
        break;
      case "ncm":
        $text = tos("×扭蛋", "×扭蛋");
        break;
      default:
        $_GET["prop"] = ";";
        break;
    }
    if ($_GET["prop"] != ";") {
      $_POST["prop"] = [$_GET["prop"]];
      $sql = "SELECT '特殊' AS col1, '{$_GET["prop"]}' AS col2, '{$text}' AS col3, '' AS col4 FROM `eff` LIMIT 1;";
    }
    else {
      $_POST["prop"] = [false];
    }
    break;
}
$result = $pdo->prepare($sql);
$result->execute($sql_data);
if ($result->rowCount() == 1) {
  while ($row = $result->fetch()) {
    $meta_description = "{$row["col1"]}[{$row["col2"]}]: {$row["col3"]}, {$row["col4"]}";
  }
}
$meta_description = preg_replace("/(,\s$|\[\])/", "", $meta_description);
require_once "inc/php/query.php";
?>