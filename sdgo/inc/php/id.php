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
  $id = intval($_GET["id"]);
}
$unit_name = API::call(["type"=>"unit_name","data"=>["id"=>$id]]);
$title = $unit_name." - ";
$meta = [];
if ($id != null) {
  $sql = "SELECT `tag4`, `sp2` FROM `unit` WHERE `id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while($row = $result->fetch()) {
      $id2 = API::call(["type"=>"id2","data"=>["id"=>$id]]);
      $origin = API::call(["type"=>"origin","data"=>["id"=>$id]]);
      $in_cm = API::call(["type"=>"in_cm","data"=>["id"=>$id]]);
      $blueprint = (API::call(["type"=>"blueprint","data"=>["id"=>$id]])?"<button onclick=\"window.location.href = 'search_v2?blueprint={$id}';\"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'><path fill='currentColor' d='M568 368c-19.1 0-36.3 7.6-49.2 19.7L440.6 343c4.5-12.2 7.4-25.2 7.4-39 0-61.9-50.1-112-112-112-8.4 0-16.6 1.1-24.4 2.9l-32.2-69c15-13.2 24.6-32.3 24.6-53.8 0-39.8-32.2-72-72-72s-72 32.2-72 72 32.2 72 72 72c.9 0 1.8-.2 2.7-.3l33.5 71.7C241.5 235.9 224 267.8 224 304c0 61.9 50.1 112 112 112 30.7 0 58.6-12.4 78.8-32.5l82.2 47c-.4 3.1-1 6.3-1 9.5 0 39.8 32.2 72 72 72s72-32.2 72-72-32.2-72-72-72zM232 96c-13.2 0-24-10.8-24-24s10.8-24 24-24 24 10.8 24 24-10.8 24-24 24zm104 272c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64zm232 96c-13.2 0-24-10.8-24-24s10.8-24 24-24 24 10.8 24 24-10.8 24-24 24zm-54.4-261.2l-19.2-25.6-48 36 19.2 25.6 48-36zM576 192c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zM152 320h48v-32h-48v32zm-88-80c-35.3 0-64 28.7-64 64s28.7 64 64 64 64-28.7 64-64-28.7-64-64-64z' class=''></path></svg></button>":"-");
      $tags = API::call(["type"=>"tags","data"=>["id"=>$id]]);
      $skl_sp = API::call(["type"=>"skl_sp","data"=>["id"=>$id]]);
      $wpn = wpn($id, 1);
      $ma_ca = ma_ca($id);
      $query_html = "
<div id='id'>
  <br>
  <table>
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
    <tr><td>特性</td><td colspan='2'>{$tags}</td></tr>
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
    ".($skl_sp["sp2"]!=''?"<tr>
      <td>".tos("必殺二", "必杀二")."</td>
      <td><a href='search_v2?sp={$skl_sp["sp2"]}'><img class='sp' srcc='{$skl_sp["sp2"]}' alt='{$skl_sp["sp2_desc"]}' /></a>
      <td>{$skl_sp["sp2_dmg"]}</td>
    </tr>":"")."
  </table>
  <br>
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
      <td colspan='3'>".tos("型態代碼：", "型态代码：")."<input type='text' value='".hex($id, "")."' size='4' /></td>
      <td colspan='3'>{$ma_ca[0]}</td>
    </tr>";
      if (($row["sp2"] != '')) {
        $query_html .= "
        <tr>
          <td colspan='8'></td>
        </tr>
    {$wpn[3]}
    {$wpn[4]}
    {$wpn[5]}
    {$wpn[9]}
    <tr>
      <td colspan='3'>".tos("型態代碼：", "型态代码：")."<input type='text' value='".hex($id, $row["tag4"])."' size='4' /></td>
      <td colspan='3'>{$ma_ca[1]}</td>
    </tr>";
      }
      $query_html .= "</table></div>";
      $query_html .= material()."</div><script>$('div#wrapper').addClass('mobile hide');</script>";
      array_push($meta, $tags["meta"]);
      $meta_description = "{$meta[0]}, ID: {$meta[1]} , {$meta[2]} RANK, {$meta[3]}, {$meta[4][0]}: {$meta[4][1]}, {$meta[5][0]}: {$meta[5][1]}, {$meta[6][0]}: {$meta[6][1]}, {$meta[7][0]}: {$meta[7][1]}, {$meta[8][0]}: {$meta[8][1]}, {$meta[9][0]}: {$meta[9][1]}, {$meta[10][0]}: {$meta[10][1]}, {$meta[11]}";
    }
  } else {
    $title = tos("小護士","小护士")." - ";
    $query_html = "<a href='search_v2?404'><img class='unit' src='https://s2.ax1x.com/2019/05/15/E70aqO.png' tit='".tos("與服務器連接終止","与服务器连接终止")."'/></a>";
  }
} else {
  header("Location: search_v2");
}
?>