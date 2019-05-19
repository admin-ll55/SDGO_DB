<?php
$meta = [];
function id_details($index, $rlock, $tag4) {
  global $id;
  $none = ["<tr><td><img class='weapon' srcc='","' /></td><td></td><td></td></tr>"];
  $id2 = API::call(["type"=>"id2","data"=>["id"=>$id]]);
  $unit_name = API::call(["type"=>"unit_name","data"=>["id"=>$id]]);
  $origin = API::call(["type"=>"origin","data"=>["id"=>$id]]);
  $in_cm = API::call(["type"=>"in_cm","data"=>["id"=>$id]]);
  $blueprint = (API::call(["type"=>"blueprint","data"=>["id"=>$id]])?"<button onclick=\"window.location.href = 'search_v2?blueprint={$id}';\"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'><path fill='currentColor' d='M568 368c-19.1 0-36.3 7.6-49.2 19.7L440.6 343c4.5-12.2 7.4-25.2 7.4-39 0-61.9-50.1-112-112-112-8.4 0-16.6 1.1-24.4 2.9l-32.2-69c15-13.2 24.6-32.3 24.6-53.8 0-39.8-32.2-72-72-72s-72 32.2-72 72 32.2 72 72 72c.9 0 1.8-.2 2.7-.3l33.5 71.7C241.5 235.9 224 267.8 224 304c0 61.9 50.1 112 112 112 30.7 0 58.6-12.4 78.8-32.5l82.2 47c-.4 3.1-1 6.3-1 9.5 0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72zM232 96c-13.2 0-24-10.8-24-24s10.8-24 24-24 24 10.8 24 24-10.8 24-24 24zm104 272c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64zm232 96c-13.2 0-24-10.8-24-24s10.8-24 24-24 24 10.8 24 24-10.8 24-24 24zm-54.4-261.2l-19.2-25.6-48 36 19.2 25.6 48-36zM576 192c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zM152 320h48v-32h-48v32zm-88-80c-35.3 0-64 28.7-64 64s28.7 64 64 64 64-28.7 64-64-28.7-64-64-64z' class=''></path></svg></button>":"-");
  $tags = API::call(["type"=>"tags","data"=>["id"=>$id,"meta"=>$meta]]);
  $skl_sp = API::call(["type"=>"skl_sp","data"=>["id"=>$id]]);
  $wpn = wpn($id, 2);
  $ma_ca = ma_ca($id);
  $html = "
<div id='id' class='compare id{$index}'>
  <br>
  <table style='margin: 0 auto;'>
    <tr>
      <td><a href='http://cfo.tiraura.jp/unit_detail.php?id={$id}' target='_blank' text='CFO'></a></td>
      <td><a href='https://www.olgame.tw/sds/robot_detail.php?id={$id}' target='_blank' text='OLG'></a></td>
      <td><a href='https://sdplayer.club/detail.html?id={$id}' target='_blank' text='SDP'></a></td>
      <td><a href='https://www.yukict.com/bbs/viewthread.php?tid={$id2}' target='_blank' text='YUKI'></a></td>
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
    <tr><td>".tos("扭蛋機", "扭蛋机")."</td><td colspan='2'>{$in_cm}</td></tr>
    <tr><td>".tos("設計圖", "设计图")."</td><td colspan='2'>{$blueprint}</td></tr>
    <tr><td>特性</td><td colspan='2'>{$tags["html"]}</td></tr>
    <tr>
      <td>技能一</td>
      <td><a href='search_v2?skl={$skl_sp["skl1"]}'><img class='skill' srcc='{$skl_sp["skl1"]}' alt='{$skl_sp["skl1_desc"]}' /></a></td>
      <td><a><svg tit='{$skl_sp["skl1_desc"]}' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z'></path></svg></a></td>
    </tr>
    <tr>
      <td>技能二</td>
      <td><a href='search_v2?skl={$skl_sp["skl2"]}'><img class='skill' srcc='{$skl_sp["skl2"]}' alt='{$skl_sp["skl2_desc"]}' /></a></td>
      <td><a><svg tit='{$skl_sp["skl2_desc"]}' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z'></path></svg></a></td>
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
      <td colspan='3'>".tos("型態代碼：", "型态代码：")."<input type='text' value='".hex($id, "")."' size='4' /></td>
    </tr>
    </tr>
      <td colspan='3'>{$ma_ca[0]}</td>
    </tr>
    <tr>
      <td colspan='3'></td>
    </tr>
    <tr>".
    ($rlock>0?$wpn[3]:"{$none[0]}0{$none[1]}").
    ($rlock>0?$wpn[4]:"{$none[0]}0{$none[1]}").
    ($rlock>0?$wpn[5]:"{$none[0]}0{$none[1]}").
    ($rlock>0?$wpn[9]:"{$none[0]}999{$none[1]}")."
    </tr>
    <tr>
      <td colspan='3'>".tos("型態代碼：", "型态代码：")."<input type='text' value='".($rlock>0?hex($id, $tag4):"")."' size='4' /></td>
    </tr>
    </tr>
      <td colspan='3'>{$ma_ca[1]}</td>
    </tr>
  </table>
</div>";
  return $html;
}
preg_match("/([0-9]{5}),([0-9]{5})/", $_GET["id"], $ids);
$ids = array_slice($ids, 1);
$index = 0;
$sql = "SELECT `id`, `rlock`, `tag4` FROM `unit` WHERE `id` = ? OR `id` = ? ORDER BY `id` ".($ids[0]>$ids[1]?"DE":"A")."SC;";
$result = $pdo->prepare($sql);
$result->execute($ids);
if ($result->rowCount() == 2) {
  while ($row = $result->fetch()) {
    $id = $row["id"];
    $query_html .= id_details($index++, $row["rlock"], $row["tag4"]);
  }
  $query_html = "<div id='compare_wrapper'><div style='width: 864px;margin: 0 auto;'>{$query_html}</div></div><script>$('div#wrapper').addClass('mobile hide');</script>";
} else {
  $title = tos("小護士","小护士")." - ";
  $query_html = "<a href='search_v2?404'><img class='unit' src='https://s2.ax1x.com/2019/05/15/E70aqO.png' tit='".tos("與服務器連接終止","与服务器连接终止")."'/></a>";
}
?>