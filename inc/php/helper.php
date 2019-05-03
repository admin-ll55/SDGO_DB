<form id="settings" method="get">
  <input type="hidden" name="l" value="TC" />
  <input type="hidden" name="fs" value="16" />
  <img src="https://s2.ax1x.com/2019/01/23/kVwuuj.png" srcc="localization.png" width="32" height="32"><br>
  <div id="TC" localization text="繁" onclick="form_submit($(this).parent(), 'l', 'TC');"></div>
  <div id="SC" localization text="简" onclick="form_submit($(this).parent(), 'l', 'SC');"></div>
  <br>
  <img src="https://s2.ax1x.com/2019/01/23/kVwmvQ.png" srcc="magnifier.png" width="32" height="32"><br>
  <div id="fs20" localization text="大" onclick="form_submit($(this).parent(), 'fs', '20');"></div>
  <div id="fs18" localization text="中" onclick="form_submit($(this).parent(), 'fs', '18');"></div>
  <div id="fs16" localization text="小" onclick="form_submit($(this).parent(), 'fs', '16');"></div>
</form>
<img src="https://s2.ax1x.com/2019/01/23/kVwKDs.png" srcc="top.png" width="32" height="32" onclick="$(window).scrollTop(0);">
<div id="tooltip"></div>