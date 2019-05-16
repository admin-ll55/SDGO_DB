<div id="helper">
  <form id="settings">
    <input type="hidden" name="l" value="TC" />
    <input type="hidden" name="fs" value="16" />
    <img src="https://s2.ax1x.com/2019/01/23/kVwuuj.png" srcc="localization.png" width="32" height="32"><br>
    <div id="TC" localization text="繁" onclick="setcookie('l', 'TC', true);"></div>
    <div id="SC" localization text="简" onclick="setcookie('l', 'SC', true);"></div>
    <br>
    <img src="https://s2.ax1x.com/2019/01/23/kVwmvQ.png" srcc="magnifier.png" width="32" height="32"><br>
    <div id="fs20" localization text="大" onclick="setcookie('fs', '20', true);"></div>
    <div id="fs18" localization text="中" onclick="setcookie('fs', '18', true);"></div>
    <div id="fs16" localization text="小" onclick="setcookie('fs', '16', true);"></div>
  </form>
</div>
<form id="compare">
  <img src="https://s2.ax1x.com/2019/01/23/kVwKDs.png" srcc="top.png" width="32" height="32" onclick="$(window).scrollTop(0);">
  <br>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M256 336h-.02c0-16.18 1.34-8.73-85.05-181.51-17.65-35.29-68.19-35.36-85.87 0C-2.06 328.75.02 320.33.02 336H0c0 44.18 57.31 80 128 80s128-35.82 128-80zM128 176l72 144H56l72-144zm511.98 160c0-16.18 1.34-8.73-85.05-181.51-17.65-35.29-68.19-35.36-85.87 0-87.12 174.26-85.04 165.84-85.04 181.51H384c0 44.18 57.31 80 128 80s128-35.82 128-80h-.02zM440 320l72-144 72 144H440zm88 128H352V153.25c23.51-10.29 41.16-31.48 46.39-57.25H528c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16H383.64C369.04 12.68 346.09 0 320 0s-49.04 12.68-63.64 32H112c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h129.61c5.23 25.76 22.87 46.96 46.39 57.25V448H112c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z" class=""></path></svg>
<?php
if (array_key_exists("ucid", $_COOKIE)) {
  $ucid = json_decode($_COOKIE["ucid"]);
  for ($x = 0; $x < count($ucid); $x++) {
    echo "<div ucid='{$ucid[$x]}' onclick='dcid($(this));'><img class='unit' srcc='{$ucid[$x]}' tit='".tos("刪除","删除")."' /><div id='dcid'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' class='svg-inline--fa fa-times-circle fa-w-16 fa-9x'><path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z' class=''></path></svg></div></div>";
  }
}
?>
  <div id="add" onclick="add_compare($(this));"><?=(count($ucid)==2?"✓":"＋")?></div>
</form>
<div id="tooltip"></div>