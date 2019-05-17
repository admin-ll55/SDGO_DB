<?php
function id_details($index, $sp2, $tag4) {
  global $id;
  $none = ["<td><img class='weapon' srcc='","' /></td><td></td><td></td>"];
  $html = "
<div id='id' class='compare id{$index}'>
  <br>
  <table style='margin: 0 auto;'>
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
    skl_sp(2)."
    <tr>
      <td colspan='3'></td>
    </tr>
    <tr style='font-weight: bold;'>
      <td>".tos("武器", "武器")."</td>
      <td>".tos("攻擊傷害", "攻击伤害")."</td>
      <td>".tos("武器效果", "武器效果")."</td>
    </tr>
    <tr>".
    wpn($id,0,2)."
    </tr>".
    wpn($id,1,2)."
    </tr>".
    wpn($id,2,2)."
    </tr>".
    wpn($id,8,2)."
    </tr>
      <td colspan='3'>".tos("型態代碼：", "型态代码：")."<input type='text' value='".hex($id, "")."' size='4' /></td>
    </tr>
    </tr>
      <td colspan='3'>".ma_ca($id, 0)."</td>
    </tr>
    <tr>
      <td colspan='3'></td>
    </tr>
    <tr>".
    ($sp2!=""?wpn($id,3,2):"{$none[0]}0{$none[1]}")."
    </tr>
    <tr>".
    ($sp2!=""?wpn($id,4,2):"{$none[0]}0{$none[1]}")."
    </tr>
    <tr>".
    ($sp2!=""?wpn($id,5,2):"{$none[0]}0{$none[1]}")."
    </tr>
    <tr>".
    ($sp2!=""?wpn($id,9,2):"{$none[0]}999{$none[1]}")."
    </tr>
    </tr>
      <td colspan='3'>".tos("型態代碼：", "型态代码：")."<input type='text' value='".($sp2!=""?hex($id, $tag4):"")."' size='4' /></td>
    </tr>
    </tr>
      <td colspan='3'>".ma_ca($id, 1)."</td>
    </tr>
  </table>
</div>";
  return $html;
}
$ids = explode(",", $_GET["id"]);
$index = 0;
$sql = "SELECT `id`, `sp2`, `tag4` FROM `unit` WHERE `id` = ? OR `id` = ? ORDER BY `id` ".($ids[0]>$ids[1]?"DE":"A")."SC;";
$result = $pdo->prepare($sql);
$result->execute($ids);
if ($result->rowCount() == 2) {
  while ($row = $result->fetch()) {
    $meta = [];
    $id = $row["id"];
    $query_html .= id_details($index++, $row["sp2"], $row["tag4"]);
  }
  $query_html = "<div id='compare_wrapper'><div style='width: 864px;margin: 0 auto;'>{$query_html}</div></div><script>$('div#wrapper').addClass('mobile hide');</script>";
} else {
  $title = tos("小護士","小护士")." - ";
  $query_html = "<a href='search_v2?404'><img class='unit' src='https://s2.ax1x.com/2019/05/15/E70aqO.png' tit='".tos("與服務器連接終止","与服务器连接终止")."'/></a>";
}
?>