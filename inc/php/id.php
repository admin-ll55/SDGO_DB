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
$title = unit_name($id)." - ";
$meta = [];
if ($id != null) {
  $sql = "SELECT `tag0`, `tag4`, `sp2` FROM `unit` WHERE `id` = ?;";
  $result = $pdo->prepare($sql);
  $result->execute([$id]);
  if ($result->rowCount() == 1) {
    while($row = $result->fetch()) {
      $query_html = "
<div id='id'>
  <br>
  <table>
    <tr>
      <td><a href='http://cfo.tiraura.jp/unit_detail.php?id={$id}' target='_blank' text='CFO'></a></td>
      <td><a href='https://www.olgame.tw/sds/robot_detail.php?id={$id}' target='_blank' text='OLG'></a></td>
      <td><a href='https://sdplayer.club/detail.html?id={$id}' target='_blank' text='SDP'></a></td>
      <td><a href='https://www.yukict.com/bbs/viewthread.php?tid=".id2()."' target='_blank' text='YUKI'></a></td>
    </tr>
  </table>
  <br>
  <table id='info'>
    <tr>
      <td colspan='3'>".unit_name($id)."</td>
    </tr>
    <tr>
      <td colspan='3'>".origin()."</td>
    </tr>".
    unit_info(1)."
    <tr><td>".tos("扭蛋機", "扭蛋机")."</td><td colspan='2'>".in_cm()."</td></tr>".
    tags().
    skl_sp(1)."
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
    </tr>".
    wpn($id,0,1).
    wpn($id,1,1).
    wpn($id,2,1).
    wpn($id,8,1)."
    <tr>
    <td colspan='3'>".tos("型態代碼：", "型态代码：")."<input type='text' value='".hex($id, "")."' size='4' /></td>
    <td colspan='3'>".ma_ca($id, 0)."
    </td>
    </tr>";
      if (($row["sp2"] != '')) {
        $query_html .= "
        <tr>
          <td colspan='8'></td>
        </tr>".
        wpn($id,3,1).
        wpn($id,4,1).
        wpn($id,5,1).
        wpn($id,9,1)."
    <tr>
    <td colspan='3'>".tos("型態代碼：", "型态代码：")."<input type='text' value='".hex($id, $row["tag4"])."' size='4' /></td>
    <td colspan='3'>".ma_ca($id, 1)."
    </td>
    </tr>";
      }
      $query_html .= "</table></div>";
      $query_html .= blueprint();
      $query_html .= material()."</div><script>$('div#wrapper').addClass('mobile hide');</script>";
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