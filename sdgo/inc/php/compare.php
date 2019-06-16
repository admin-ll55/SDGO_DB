<?php
$meta = [];
function id_details($index, $tag) {
  global $id, $count;
  $none = ["<tr><td><img class='weapon' srcc='","' /></td><td></td><td></td></tr>"];
  $b0 = "<a class='button h28px b0'>-</a>";
  $b0_cm = "<a class='button' href='search_v2?prop[]=ncm'>×</a>";
  $b0_bp = "<a class='button' href='search_v2?prop[]=nbp'>×</a>";
  $bpsvg = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'><path fill='currentColor' d='M568 368c-19.1 0-36.3 7.6-49.2 19.7L440.6 343c4.5-12.2 7.4-25.2 7.4-39 0-61.9-50.1-112-112-112-8.4 0-16.6 1.1-24.4 2.9l-32.2-69c15-13.2 24.6-32.3 24.6-53.8 0-39.8-32.2-72-72-72s-72 32.2-72 72 32.2 72 72 72c.9 0 1.8-.2 2.7-.3l33.5 71.7C241.5 235.9 224 267.8 224 304c0 61.9 50.1 112 112 112 30.7 0 58.6-12.4 78.8-32.5l82.2 47c-.4 3.1-1 6.3-1 9.5 0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72zM232 96c-13.2 0-24-10.8-24-24s10.8-24 24-24 24 10.8 24 24-10.8 24-24 24zm104 272c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64zm232 96c-13.2 0-24-10.8-24-24s10.8-24 24-24 24 10.8 24 24-10.8 24-24 24zm-54.4-261.2l-19.2-25.6-48 36 19.2 25.6 48-36zM576 192c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zM152 320h48v-32h-48v32zm-88-80c-35.3 0-64 28.7-64 64s28.7 64 64 64 64-28.7 64-64-28.7-64-64-64z' class=''></path></svg>";
  $wiki = API::call(["type"=>"wiki","data"=>["id"=>$id]]);
  $unit_name = API::call(["type"=>"unit_name","data"=>["id"=>$id]]);
  $origin = API::call(["type"=>"origin","data"=>["id"=>$id]]);
  $in_cm = API::call(["type"=>"in_cm","data"=>["id"=>$id]]);
  if (!$in_cm) $in_cm = $b0_cm;
  $blueprint = (API::call(["type"=>"blueprint","data"=>["id"=>$id]])?"<a href = 'search_v2?blueprint={$id}' class='button bp'>{$bpsvg}</a>":$b0_bp);
  $tags = API::call(["type"=>"tags","data"=>["id"=>$id,"meta"=>$meta]]);
  $skl_sp = API::call(["type"=>"skl_sp","data"=>["id"=>$id]]);
  $wpn = wpn($id, 2);
  $ma_ca = attr($id);
  if (!$ma_ca[0]) $ma_ca[0] = $b0;
  if (!$ma_ca[1]) $ma_ca[1] = $b0;
  $html = "
<div id='id' class='compare id{$index} col{$count}'>
  <table id='info'>
    <tr>
      <td>".tos("維基","维基")."</td>
      <td colspan='2' id='wiki'>
        {$wiki}
      </td>
    </tr>
    <tr>
      <td colspan='3'>{$unit_name}</td>
    </tr>
    <tr>
      <td colspan='3'><a href='search_v2?origin={$origin["origin"]}'><img class='origin' srcc='{$origin["origin"]}' alt='{$origin["name"]}' /></a></td>
    </tr>".
    unit_info($id)."
    <tr><td>".tos("扭蛋機", "扭蛋机")."</td><td colspan='2'>{$in_cm}</td></tr>
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
    <tr>
      <td>".tos("必殺二", "必杀二")."</td>
      <td>".($skl_sp["sp2"]!=''?"<a href='search_v2?sp={$skl_sp["sp2"]}'><img class='sp' srcc='{$skl_sp["sp2"]}' alt='{$skl_sp["sp2_desc"]}' /></a>":"<div id='spempty'></div>")."</td>
      <td>".($skl_sp["sp2"]!=''?$skl_sp["sp2_dmg"]:"")."</td>
    </tr>
    <tr>
      <td colspan='3'></td>
    </tr>
    <tr style='font-weight: bold;'>
      <td>".tos("武器", "武器")."</td>
      <td>".tos("攻擊傷害", "攻击伤害")."</td>
      <td>".tos("武器效果", "武器效果")."</td>
    </tr>
    {$wpn[0]}
    {$wpn[1]}
    {$wpn[2]}
    {$wpn[8]}
    <tr>
      <td colspan='3'>".tos("型態代碼：", "型态代码：").hex($id, "")."</td>
    </tr>
    </tr>
      <td colspan='3'>".tos("型態特性：", "型态特性：")."{$ma_ca[0]}</td>
    </tr>
    <tr>
      <td colspan='3'></td>
    </tr>
    <tr>".
    ($tag!="0"?$wpn[3]:"{$none[0]}0{$none[1]}").
    ($tag!="0"?$wpn[4]:"{$none[0]}0{$none[1]}").
    ($tag!="0"?$wpn[5]:"{$none[0]}0{$none[1]}").
    ($tag!="0"?$wpn[9]:"{$none[0]}999{$none[1]}")."
    </tr>
    <tr>
      <td colspan='3'>".tos("型態代碼：", "型态代码：").($tag!="0"?hex($id, $tag):"<input type='text' disabled='' size='4' />")."</td>
    </tr>
    </tr>
      <td colspan='3'>".tos("型態特性：", "型态特性：")."{$ma_ca[1]}</td>
    </tr>
  </table>
</div>";
  return $html;
}
try {
  $ids = explode(",", $_GET["id"]);
  $count = count($ids);
  $query_html = "<div id='compare_wrapper'><div><br>";
  for ($x = 0; $x < $count; $x++) {
    $sql = "SELECT `id`, `tag` FROM `unit` WHERE `id` = ?;";
    $result = $pdo->prepare($sql);
    if (!preg_match("/[0-9]{5}/", $ids[$x])) {
      throw new Exception("");
    }
    $result->execute([$ids[$x]]);
    if ($result->rowCount() == 1) {
      while ($row = $result->fetch()) {
        $id = $row["id"];
        $query_html .= id_details($ids[$x], $row["tag"]);
      }
    }
    else {
      throw new Exception("");
    }
  }
  $query_html .= "</div></div>";
}
catch (Exception $e) {
  $title = tos("小護士","小护士")." - ";
  $query_html = "<a href='search_v2?404'>{$err_img}</a>";
}
?>