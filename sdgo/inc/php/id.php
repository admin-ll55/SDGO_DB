<?php
if ($_GET["id"] == "random") {
  $sql = "SELECT `id` FROM `unit` ORDER BY RAND() LIMIT 1;";
  $result = $pdo->prepare($sql);
  $result->execute();
  $id = $result->fetch()["id"];
  header("Location: search_v2?id=$id");
  exit();
}
else {
  $id = $_GET["id"];
}
$unit_name = API::call(["type"=>"unit_name","data"=>["id"=>$id]]);
$title = $unit_name." - ";
$meta = [];
$sql = "SELECT `tag` FROM `unit` WHERE `id` = ?;";
$result = $pdo->prepare($sql);
$result->execute([$id]);
if ($result->rowCount() == 1) {
  while($row = $result->fetch()) {
    $b0 = "<a class='button h28px b0'>-</a>";
    $b0_cm = "<a class='button' href='search_v2?prop[]=ncm'>×</a>";
    $b0_bp = "<a class='button' href='search_v2?prop[]=nbp'>×</a>";
    $bpsvg = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'><path fill='currentColor' d='M568 368c-19.1 0-36.3 7.6-49.2 19.7L440.6 343c4.5-12.2 7.4-25.2 7.4-39 0-61.9-50.1-112-112-112-8.4 0-16.6 1.1-24.4 2.9l-32.2-69c15-13.2 24.6-32.3 24.6-53.8 0-39.8-32.2-72-72-72s-72 32.2-72 72 32.2 72 72 72c.9 0 1.8-.2 2.7-.3l33.5 71.7C241.5 235.9 224 267.8 224 304c0 61.9 50.1 112 112 112 30.7 0 58.6-12.4 78.8-32.5l82.2 47c-.4 3.1-1 6.3-1 9.5 0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72zM232 96c-13.2 0-24-10.8-24-24s10.8-24 24-24 24 10.8 24 24-10.8 24-24 24zm104 272c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64zm232 96c-13.2 0-24-10.8-24-24s10.8-24 24-24 24 10.8 24 24-10.8 24-24 24zm-54.4-261.2l-19.2-25.6-48 36 19.2 25.6 48-36zM576 192c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zM152 320h48v-32h-48v32zm-88-80c-35.3 0-64 28.7-64 64s28.7 64 64 64 64-28.7 64-64-28.7-64-64-64z' class=''></path></svg>";
    $wiki = API::call(["type"=>"wiki","data"=>["id"=>$id]]);
    $origin = API::call(["type"=>"origin","data"=>["id"=>$id]]);
    $in_cm = API::call(["type"=>"in_cm","data"=>["id"=>$id]]);
    if ($in_cm) {
      $query_html .= "<svg onclick=\"$('tr#agi')[0].scrollIntoView();$('tr#in_cm').addClass('ddddff');setTimeout(function(){ $('tr#in_cm').removeClass('ddddff');},1000);\" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 180 208' srcc='capsule.png' preserveAspectRatio='xMidYMid meet'><path d='M9.688 95.221C9.204 84.587 20.296 45.621 31.064 35.611 53.271 11.45 70.54 10.842 79.836 9.719 89.131 8.596 89.874 8.726 99.405 9.719 108.935 10.712 135.858 13.588 151.187 35.31 171.635 63.353 168.859 80.264 170.154 90.705 171.45 101.146 170.266 105.226 170.757 116.295 171.849 147.235 159.524 166.227 149.381 175.906 128.701 196.723 115.3 195.559 105.426 197.281 95.552 199.003 83.666 198.421 74.115 197.281 64.565 196.141 41.101 189.637 32.268 178.916 10.79 159.164 11.031 127.492 9.989 116.596 8.947 105.701 10.172 105.855 9.688 95.221ZM9.688 107.263C37.988 139.778 145.467 144.896 170.455 107.263' style='fill:none;stroke:black;stroke-width:15px;' id='e12_arc3'></path></svg>";
    }
    else {
      $in_cm = $b0_cm;
    }
    $blueprint = (API::call(["type"=>"blueprint","data"=>["id"=>$id]])?"<a href='search_v2?blueprint={$id}' class='button bp'>{$bpsvg}</a>":$b0_bp);
    if ($blueprint != $b0) {
      $query_html .= str_replace("<svg", "<svg onclick=\"window.location.href='search_v2?blueprint={$id}';\"  srcc='blueprint.png'", $bpsvg);
    }
    $tags = API::call(["type"=>"tags","data"=>["id"=>$id]]);
    $skl_sp = API::call(["type"=>"skl_sp","data"=>["id"=>$id]]);
    $wpn = wpn($id, 1);
    $ma_ca = attr($id);
    if (!$ma_ca[0]) $ma_ca[0] = $b0;
    if (!$ma_ca[1]) $ma_ca[1] = $b0;
    $query_html .= "
<div id='id'>
<br>
<table>
  <tr>
    <td id='wiki' style='font-weight: bold;'>".tos("維基","维基")."</td>
  </tr>
  <tr>
    <td id='wiki'>
      {$wiki}
    </td>
  </tr>
</table>
<br>
<table id='info'>
  <tr>
    <td colspan='3'>{$unit_name}</td>
  </tr>
  <tr>
    <td colspan='3'><a href='search_v2?origin={$origin["origin"]}'><img class='origin' srcc='{$origin["origin"]}' alt='{$origin["name"]}' /></a></td>
  </tr>".
  unit_info($id)."
  <tr id='in_cm'><td>".tos("扭蛋機", "扭蛋机")."</td><td colspan='2'>{$in_cm}</td></tr>
  <tr><td>".tos("設計圖", "设计图")."</td><td colspan='2'>{$blueprint}</td></tr>
  <tr><td>".tos("變型","变型")."</td><td colspan='2'>{$tags["html"]}</td></tr>
  <tr>
    <td>技能一</td>
    <td><a href='search_v2?skl={$skl_sp["skl1"]}'><img class='skill' srcc='{$skl_sp["skl1"]}' alt='{$skl_sp["skl1_desc"]}' /></a></td>
    <td><button class='skl_sp' tit='{$skl_sp["skl1_desc"]}'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z'></path></svg></button></td>
  </tr>
  <tr>
    <td>技能二</td>
    <td><a href='search_v2?skl={$skl_sp["skl2"]}'><img class='skill' srcc='{$skl_sp["skl2"]}' alt='{$skl_sp["skl2_desc"]}' /></a></td>
    <td><button class='skl_sp' tit='{$skl_sp["skl2_desc"]}'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z'></path></svg></button></td>
  </tr>
<tr>
    <td>".tos("必殺一", "必杀一")."</td>
    <td><a href='search_v2?sp={$skl_sp["sp1"]}'><img class='sp' srcc='{$skl_sp["sp1"]}' alt='{$skl_sp["sp1_desc"]}' /></a></td>
    <td>{$skl_sp["sp1_dmg"]}</td>
  </tr>
  ".($skl_sp["sp2"]!=''?"<tr>
    <td>".tos("必殺二", "必杀二")."</td>
    <td><a href='search_v2?sp={$skl_sp["sp2"]}'><img class='sp' srcc='{$skl_sp["sp2"]}' alt='{$skl_sp["sp2_desc"]}' /></a>
    <td>{$skl_sp["sp2_dmg"]}</td>
  </tr>":"")."
</table>
<br>
<div id='armament'>
<div id='armament'>
<table id='armament'>
  <tr style='font-weight: bold;'>
    <td>".tos("武器", "武器")."</td>
    <td>".tos("射程距離", "射程距离")."</td>
    <td>".tos("攻擊傷害", "攻击伤害")."</td>
    <td>".tos("彈藥數量", "弹药数量")."</td>
    <td>".tos("裝填時間", "装填时间")."</td>
    <td>".tos("武器效果", "武器效果")."</td>
  </tr>
  {$wpn[0]}
  {$wpn[1]}
  {$wpn[2]}
  {$wpn[8]}
  <tr>
    <td colspan='3'>".tos("型態代碼：", "型态代码：").hex($id, "")."</td>
    <td colspan='3'>".tos("型態特性：", "型态特性：")."{$ma_ca[0]}</td>
  </tr>";
    if (($row["tag"] != "0")) {
      $query_html .= "
      <tr>
        <td colspan='8'></td>
      </tr>
  {$wpn[3]}
  {$wpn[4]}
  {$wpn[5]}
  {$wpn[9]}
  <tr>
    <td colspan='3'>".tos("型態代碼：", "型态代码：").hex($id, $row["tag"])."</td>
    <td colspan='3'>".tos("型態特性：", "型态特性：")."{$ma_ca[1]}</td>
  </tr>";
    }
    $query_html .= "</table></div></div>";
    $query_html .= material()."</div>";
    array_push($meta, [tos("變型","变型"), $tags["meta"]]);
    $meta_description = "{$meta[0]}, ID: {$meta[1]} , {$meta[2]} RANK, {$meta[3]}, {$meta[4][0]}: {$meta[4][1]}";
    foreach ([5,6,7,8,9,10] as $x) {
      $meta_description .= ", {$meta[$x][0]}: {$meta[$x][1]}";
      if ($row["tag"] != "0") {
        $meta_description .= "({$meta[$x][2]})";
        if ($x == 9) {
          $meta_description .= "[".(($meta[$x][1]+$meta[$x][2])/2)."]";
        }
      }
    }
    $meta_description .= ", {$meta[11][0]}: {$meta[11][1]}";
  }
  $result = $pdo2->prepare("UPDATE `hot` SET `ct` = `ct` + 1 WHERE `id` = ?;");
  $result->execute([$_GET["id"]]);
  $result->fetchAll();
} else {
  $title = tos("小護士","小护士")." - ";
  $query_html = "<div><br><a href='search_v2?404'>{$err_img}</a></div>";
}
?>