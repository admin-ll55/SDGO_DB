<?php
function bp_helper($bp) {
  if ($bp = API::call(["type"=>"blueprint","data"=>["id"=>$bp]])) {
    $bp = "{$bp["a"]} {$bp["b"]} {$bp["c"]} {$bp["d"]} {$bp["e"]}";
    $bp = (strpos($bp, " ")?explode(" ", $bp):[]);
    $arr = [];
    for ($x = 0; $x < count($bp); $x++) {
      $arr = array_merge($arr, bp_helper($bp[$x]));
    }
    return array_merge($bp, $arr);
  }
  else {
    return [];
  }
}
function bp_helper2($type, $id, $lv, $unit_name, $start, $end) {
  $html = "";
  if (!$id)
    return;
  switch ($type) {
    case "unit":
      $html = "<a href='search_v2?id={$id}'><img bpm srcc='{$id}' class='unit' tit='{$unit_name}' alt='{$unit_name}'></a>";
      break;
    case "lv":
      $html = "Lv {$lv}";
      break;
    case "mobile":
      $html = "<a href='search_v2?id={$id}'><img srcc='{$id}' class='unit' tit='{$unit_name}' alt='{$unit_name}'></a></td><td>Lv {$lv}";
      break;
  }
  return "{$start}{$html}{$end}";
}
$bp = "";
$id = $_GET["blueprint"];
if ($unit_name = API::call(["type"=>"unit_name","data"=>["id"=>$id]])) {
  $title = $unit_name." ".tos("設計圖", "设计图")." - ";
  $query_html = "<div id='blueprint'>";
  $ids = [$id];
  $ids = array_merge($ids, bp_helper($id));
  $unique = array_unique($ids);
  foreach ($unique as $v) {
    $id = $v;
    if ($blueprint = API::call(["type"=>"blueprint","data"=>["id"=>$id]])) {
      $unit_name = API::call(["type"=>"unit_name","data"=>["id"=>$id]]);
      $unit_name_a = API::call(["type"=>"unit_name","data"=>["id"=>$blueprint["a"]]]);
      $unit_name_b = API::call(["type"=>"unit_name","data"=>["id"=>$blueprint["b"]]]);
      $unit_name_c = API::call(["type"=>"unit_name","data"=>["id"=>$blueprint["c"]]]);
      $unit_name_d = API::call(["type"=>"unit_name","data"=>["id"=>$blueprint["d"]]]);
      $unit_name_e = API::call(["type"=>"unit_name","data"=>["id"=>$blueprint["e"]]]);
      $query_html .= "
      <br>
      <table id='blueprint' class='mobile hide'>
        <tr style='font-weight: bold;'>
          <td rowspan='3'><a href='search_v2?id={$id}'><img srcc='{$id}' class='unit' tit='{$unit_name}' alt='{$unit_name}'/></a></td>
          <td colspan='5'>{$unit_name}</td>
        </tr>
        <tr>
          <td bgcolor='#DDDDFF'>
            <a bpk href='search_v2?id={$blueprint["a"]}'><img srcc='{$blueprint["a"]}' class='unit' tit='{$unit_name_a}' alt='{$unit_name_a}'/></a>
          </td>".
          bp_helper2("unit", $blueprint["b"], $blueprint["bb"], $unit_name_b, "<td>", "</td>").
          bp_helper2("unit", $blueprint["c"], $blueprint["cc"], $unit_name_c, "<td>", "</td>").
          bp_helper2("unit", $blueprint["d"], $blueprint["dd"], $unit_name_d, "<td>", "</td>").
          bp_helper2("unit", $blueprint["e"], $blueprint["ee"], $unit_name_e, "<td>", "</td>")."
        </tr>
        <tr>
          <td bgcolor='#DDDDFF'>Lv {$blueprint["aa"]}</td>".
          bp_helper2("lv", $blueprint["b"], $blueprint["bb"], $unit_name_b, "<td>", "</td>").
          bp_helper2("lv", $blueprint["c"], $blueprint["cc"], $unit_name_c, "<td>", "</td>").
          bp_helper2("lv", $blueprint["d"], $blueprint["dd"], $unit_name_d, "<td>", "</td>").
          bp_helper2("lv", $blueprint["e"], $blueprint["ee"], $unit_name_e, "<td>", "</td>")."
        </tr>
      </table>
      <table id='blueprint' class='mobile'>
        <tr style='font-weight: bold;' class='show'>
          <td colspan='2'>{$unit_name}</td>
        </tr>
        <tr class='show'>
          <td><a href='search_v2?id={$id}'><img srcc='{$id}' class='unit' tit='{$unit_name}' alt='{$unit_name}'/></a></td>
          <td><button class='expand' onclick='toggle_expand($(this));'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path fill='currentColor' d='M448 344v112a23.94 23.94 0 0 1-24 24H312c-21.39 0-32.09-25.9-17-41l36.2-36.2L224 295.6 116.77 402.9 153 439c15.09 15.1 4.39 41-17 41H24a23.94 23.94 0 0 1-24-24V344c0-21.4 25.89-32.1 41-17l36.19 36.2L184.46 256 77.18 148.7 41 185c-15.1 15.1-41 4.4-41-17V56a23.94 23.94 0 0 1 24-24h112c21.39 0 32.09 25.9 17 41l-36.2 36.2L224 216.4l107.23-107.3L295 73c-15.09-15.1-4.39-41 17-41h112a23.94 23.94 0 0 1 24 24v112c0 21.4-25.89 32.1-41 17l-36.19-36.2L263.54 256l107.28 107.3L407 327.1c15.1-15.2 41-4.5 41 16.9z' class=''></path></svg></button></td>
        </tr>
        <tr bgcolor='#DDDDFF'>
          <td>
            <a href='search_v2?id={$blueprint["a"]}'><img srcc='{$blueprint["a"]}' class='unit' tit='{$unit_name_a}' alt='{$unit_name_a}'/></a>
          </td>
          <td>Lv {$blueprint["aa"]}</td>
        </tr>".
          bp_helper2("mobile", $blueprint["b"], $blueprint["bb"], $unit_name_b, "<tr><td>", "</td></tr>").
          bp_helper2("mobile", $blueprint["c"], $blueprint["cc"], $unit_name_c, "<tr><td>", "</td></tr>").
          bp_helper2("mobile", $blueprint["d"], $blueprint["dd"], $unit_name_d, "<tr><td>", "</td></tr>").
          bp_helper2("mobile", $blueprint["e"], $blueprint["ee"], $unit_name_e, "<tr><td>", "</td></tr>")."
        </tr>
      </table>";
    }
  }
  $query_html .= "</div><script>$(document).ready(function(){var e=$('body table#blueprint.mobile:not(.hide)').eq(0);e.find('tr:nth-child(2)').toggleClass('expand_compliance');e.find('tr:not(:nth-child(1)):not(:nth-child(2))').toggleClass('show');$('table#blueprint:nth-of-type(2) button.expand').remove();});</script>";
}
else {
  $query_html = "<br><a href='search_v2?404'><img class='unit' src='https://s2.ax1x.com/2019/05/15/E70aqO.png' tit='".tos("與服務器連接終止","与服务器连接终止")."'/></a>";
}
?>