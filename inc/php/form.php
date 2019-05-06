<?php
function skl_option() {
  global $pdo;
  $html = "";
  $sql = "SELECT `skl`, `name_{$_COOKIE["l"]}` FROM `skill` WHERE `skl` NOT IN ('012','013','014','231');";
  $result = $pdo->prepare($sql);
  $result->execute();
  if ($result->rowCount() >= 1) {
    $row = $result->fetch();
    while ($row = $result->fetch()) {
      $html .= "            <option text='　{$row["skl"]}-{$row["name_".$_COOKIE["l"]]}' value='{$row["skl"]}'></option>\n";
    }
  }
  return $html;
}
function wpn_option() {
  $html = "";
  $wpn = [
    [1,2,3,4,5,6,11,12,13,14,15,16,21,22,23,25,26,27,28,31,32,"tag0",33,34,35,36,37,38,39,41,42,43],
    ["格鬥","斧","光束軍刀","實體刀","擊","斬","熱能鞭","火箭錨","飛鏢","劍氣","護盾","拳","光束擴散炮","火神炮","狀態彈","浮游炮(射擊型)","浮游炮(近接型)","浮游炮(反射型)","浮游炮(追尾型)","噴槍","光束步槍","光束步槍(3連射)","機關槍","火箭炮","擴散炮","飛彈","羽毛","線性步槍","格林機槍","加農炮","超視炮","狙擊槍"],
    ["格斗","斧","光束军刀","实体刀","击","斩","热能鞭","火箭锚","飞镖","剑气","护盾","拳","光束扩散炮","火神炮","状态弹","浮游炮(射击型)","浮游炮(近接型)","浮游炮(反射型)","浮游炮(追尾型)","喷枪","光束步枪","光束步枪(3连射)","机关枪","火箭炮","扩散炮","飞弹","羽毛","线性步枪","格林机枪","加农炮","超视炮","狙击枪"]
  ];
  $l = $_COOKIE["l"] == "TC" ? 1 : 2;
  for ($x = 0; $x < sizeOf($wpn[0]); $x++) {
    $html .= "            <option text='　{$wpn[$l][$x]}' value='{$wpn[$l][$x]}'></option>\n";
  }
  return $html;
}
function eff_option() {
  global $pdo;
  $html = "";
  $sql = "SELECT DISTINCT `tag` FROM `tag_test2` ORDER BY LENGTH(`tag`) ASC;";
  $result = $pdo->prepare($sql);
  $result->execute();
  if ($result->rowCount() >= 1) {
    while($row = $result->fetch()) {
      $html .= "            <option value='".$row["tag"]."'>　".$row["tag"]."</option>\n";
    }
  }
  return $html;
}
function origin_option() {
  global $pdo;
  $html = "";
  $sql = "SELECT `origin`, `name_{$_COOKIE["l"]}` FROM `origin`;";
  $result = $pdo->prepare($sql);
  $result->execute();
  if ($result->rowCount() >= 1) {
    while($row = $result->fetch()) {
      $html .= "            <option text='　{$row["name_".$_COOKIE["l"]]}' value='{$row["origin"]}'></option>\n";
    }
  }
  return $html;
}
function cm_option() {
  global $pdo;
  $html = "";
  $sql = "SELECT `machine` FROM `capsule`;";
  $result = $pdo->prepare($sql);
  $result->execute();
  if ($result->rowCount() >= 1) {
    while($row = $result->fetch()) {
      $html .= "            <option value='{$row["machine"]}' ".($row["machine"] == "1" ? "selected" : "")."></option>\n";
    }
  }
  return $html;
}
?>
<br/>
<div id="wrapper">

<form class="container form_unit" action="search_v2" method="post">
  <div class="container header" localization TC="機體" SC="机体"></div>
  <div class="container body">
    <div class="container">
      <div class="row">
        <div class="cell header" localization TC="名稱" SC="名称">
          <span></span>
        </div><div class="cell body">
          <input type="text" name="name" value="" />
        </div><div class="cell not">
          <label class="not">
            <input type="checkbox" name="not[]" value="name" /><span localization TC='NOT' SC='NOT'></span>
        </label>
        </div>
      </div>
      <div class="row">
        <div class="cell header" localization TC="技能" SC="技能">
          <span></span>
        </div><div class="cell body">
          <select name="skl">
            <option value=""></option>
            <option value="" disabled localization TC="分類" SC="分类" style='font-weight: bold;'></option>
            <option localization TC="　HP%85%以下時發動" SC="　HP 85%以下时发动" value="HP%85%以下時發動"></option>
            <option localization TC="　HP%80%以下時發動" SC="　HP 80%以下时发动" value="HP%80%以下時發動"></option>
            <option localization TC="　HP%75%以下時發動" SC="　HP 75%以下时发动" value="HP%75%以下時發動"></option>
            <option localization TC="　HP%70%以下時發動" SC="　HP 70%以下时发动" value="HP%70%以下時發動"></option>
            <option localization TC="　HP%60%以下時發動" SC="　HP 60%以下时发动" value="HP%60%以下時發動"></option>
            <option localization TC="　HP%55%以下時發動" SC="　HP 55%以下时发动" value="HP%55%以下時發動"></option>
            <option localization TC="　HP%50%以下時發動" SC="　HP 50%以下时发动" value="HP%50%以下時發動"></option>
            <option localization TC="　HP%45%以下時發動" SC="　HP 45%以下时发动" value="HP%45%以下時發動"></option>
            <option localization TC="　HP%40%以下時發動" SC="　HP 40%以下时发动" value="HP%40%以下時發動"></option>
            <option localization TC="　HP%35%以下時發動" SC="　HP 35%以下时发动" value="HP%35%以下時發動"></option>
            <option localization TC="　HP%30%以下時發動" SC="　HP 30%以下时发动" value="HP%30%以下時發動"></option>
            <option localization TC="　攻擊力" SC="　攻击力" value="攻擊力"></option>
            <option localization TC="　攻擊速度" SC="　攻击速度" value="攻擊速度"></option>
            <option localization TC="　射程距離" SC="　射程距离" value="射程距離"></option>
            <option localization TC="　防禦力" SC="　防御力" value="防禦力"></option>
            <option localization TC="　機動力" SC="　机动力" value="機動力"></option>
            <option localization TC="　敏捷" SC="　敏捷" value="敏捷"></option>
            <option localization TC="　移動速度" SC="　移动速度" value="移動速度"></option>
            <option localization TC="　衝刺速度" SC="　冲刺速度" value="衝刺速度"></option>
            <option localization TC="　推進量" SC="　推进量" value="推進量"></option>
            <option localization TC="　回復時間" SC="　回复时间" value="回復時間"></option>
            <option localization TC="　裝填時間" SC="　装填时间" value="裝填時間"></option>
            <option localization TC="　發動機率%近戰傷害" SC="　发动机率　近战伤害" value="發動機率%近戰傷害"></option>
            <option localization TC="　SP傷害" SC="　SP伤害" value="SP傷害"></option>
            <option localization TC="　SP積蓄速度" SC="　SP积蓄速度" value="SP積蓄速度"></option>
            <option localization TC="　雷達顯示敵軍" SC="　雷达显示敌军" value="雷達顯示敵軍"></option>
            <option localization TC="　格鬥反擊" SC="　格斗反击" value="格鬥反擊"></option>
            <option localization TC="　免疫所有異常狀態" SC="　免疫所有异常状态" value="免疫所有異常狀態"></option>
            <option localization TC="　敵軍對自機鎖定無效" SC="　敌军对自机锁定无效" value="敵軍對自機鎖定無效"></option>
            <option localization TC="　受到的傷害" SC="　受到的伤害" value="受到的傷害"></option>
            <option localization TC="　受到實彈%成的傷害" SC="　受到实弹造成的伤害" value="受到實彈%成的傷害"></option>
            <option localization TC="　受到光束%成的傷害" SC="　受到光束造成的伤害" value="受到光束%成的傷害"></option>
            <option localization TC="　所有攻擊會%成最大傷害" SC="　所有攻击会造成最大伤害" value="所有攻擊會%成最大傷害"></option>
            <option value="" disabled localization TC="--------------------------------------------------" SC="--------------------------------------------------" style='font-weight: bold;'></option>
            <option value="" disabled localization TC="所有技能" SC="所有技能" style='font-weight: bold;'></option>
<?=skl_option()?>
          </select>
        </div><div class="cell not">
          <label class="not">
            <input type="checkbox" name="not[]" value="skl" /><span localization TC='NOT' SC='NOT'></span>
        </label>
        </div>
      </div>
      <div class="row">
        <div class="cell header" localization TC="必殺" SC="必杀">
          <span></span>
        </div><div class="cell body">
          <select name="sp">
            <option value=""></option>
            <option value="012" localization TC="　亂舞型" SC="　乱舞型"></option>
            <option value="013" localization TC="　全彈發射型" SC="　全弹发射型"></option>
            <option value="014" localization TC="　地圖炮型" SC="　地图炮型"></option>
            <option value="231" localization TC="　突撃型" SC="　突击型"></option>
          </select>
        </div><div class="cell not">
          <label class="not">
            <input type="checkbox" name="not[]" value="sp" /><span localization TC='NOT' SC='NOT'></span>
        </label>
        </div>
      </div>
      <div class="row">
        <div class="cell header" localization TC="武器" SC="武器">
          <span></span>
        </div><div class="cell body">
          <select name="wpn">
            <option value=""></option>
<!--?=wpn_option()?-->
            <option localization="" tc="　格鬥" sc="　格斗" value="1"></option>
            <option localization="" tc="　斧" sc="　斧" value="2"></option>
            <option localization="" tc="　光束軍刀" sc="　光束军刀" value="3"></option>
            <option localization="" tc="　實體刀" sc="　实体刀" value="4"></option>
            <option localization="" tc="　擊" sc="　击" value="5"></option>
            <option localization="" tc="　斬" sc="　斩" value="6"></option>
            <option localization="" tc="　熱能鞭" sc="　热能鞭" value="11"></option>
            <option localization="" tc="　火箭錨" sc="　火箭锚" value="12"></option>
            <option localization="" tc="　飛鏢" sc="　飞镖" value="13"></option>
            <option localization="" tc="　劍氣" sc="　剑气" value="14"></option>
            <option localization="" tc="　護盾" sc="　护盾" value="15"></option>
            <option localization="" tc="　拳" sc="　拳" value="16"></option>
            <option localization="" tc="　光束擴散炮" sc="　光束扩散炮" value="21"></option>
            <option localization="" tc="　火神炮" sc="　火神炮" value="22"></option>
            <option localization="" tc="　狀態彈" sc="　状态弹" value="23"></option>
            <option localization="" tc="　浮游炮(射擊型)" sc="　浮游炮(射击型)" value="25"></option>
            <option localization="" tc="　浮游炮(近接型)" sc="　浮游炮(近接型)" value="26"></option>
            <option localization="" tc="　浮游炮(反射型)" sc="　浮游炮(反射型)" value="27"></option>
            <option localization="" tc="　浮游炮(追尾型)" sc="　浮游炮(追尾型)" value="28"></option>
            <option localization="" tc="　噴槍" sc="　喷枪" value="31"></option>
            <option localization="" tc="　光束步槍" sc="　光束步枪" value="32"></option>
            <option localization="" tc="　光束步槍(3連射)" sc="　光束步枪(3连射)" value="tag0"></option>
            <option localization="" tc="　機關槍" sc="　机关枪" value="33"></option>
            <option localization="" tc="　火箭炮" sc="　火箭炮" value="34"></option>
            <option localization="" tc="　擴散炮" sc="　扩散炮" value="35"></option>
            <option localization="" tc="　飛彈" sc="　飞弹" value="36"></option>
            <option localization="" tc="　羽毛" sc="　羽毛" value="37"></option>
            <option localization="" tc="　線性步槍" sc="　线性步枪" value="38"></option>
            <option localization="" tc="　格林機槍" sc="　格林机枪" value="39"></option>
            <option localization="" tc="　加農炮" sc="　加农炮" value="41"></option>
            <option localization="" tc="　超視炮" sc="　超视炮" value="42"></option>
            <option localization="" tc="　狙擊槍" sc="　狙击枪" value="43"></option>
          </select>
        </div><div class="cell not">
          <label class="not">
            <input type="checkbox" name="not[]" value="wpn" /><span localization TC='NOT' SC='NOT'></span>
        </label>
        </div>
      </div>
      <div class="row">
        <div class="cell header" localization TC="效果" SC="效果">
          <span></span>
        </div><div class="cell body">
          <select name="eff">
            <option value=""></option>
<!--?=eff_option?-->
            <option value='狙擊'></option>
            <option value='擴散'></option>
            <option value='緩速'></option>
            <option value='追尾'></option>
            <option value='修理'></option>
            <option value='牽引'></option>
            <option value='抽氣'></option>
            <option value='貫通'></option>
            <option value='瞬移'></option>
            <option value='蓄力'></option>
            <option value='倒地'></option>
            <option value='隱形'></option>
            <option value='無格衝'></option>
            <option value='7秒I力場'></option>
            <option value='發射硬直'></option>
            <option value='槍械故障'></option>
            <option value='裝填下降'></option>
            <option value='一時硬直'></option>
            <option value='迎擊模式'></option>
            <option value='突進格鬥'></option>
            <option value='滑鼠反轉'></option>
            <option value='全方位攻撃'></option>
            <option value='格鬥反擊無效'></option>
            <option value='6秒內推進量增加'></option>
            <option value='彈藥減少不可變形'></option>
            <option value='雷達顯示命中機體'></option>
            <option value='判定依射擊武器決定'></option>
            <option value='7秒內防禦力大幅增加'></option>
            <option value='7秒內受到光束的傷害-70%'></option>
          </select>
        </div><div class="cell not">
          <label class="not">
            <input type="checkbox" name="not[]" value="eff" /><span localization TC='NOT' SC='NOT'></span>
        </label>
        </div>
      </div>
      <div class="row">
        <div class="cell header" localization TC="作品" SC="作品">
          <span></span>
        </div><div class="cell body">
          <select name="origin">
            <option value=""></option>
<?=origin_option()?>
          </select>
        </div><div class="cell not">
          <label class="not">
            <input type="checkbox" name="not[]" value="origin" /><span localization TC='NOT' SC='NOT'></span>
        </label>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="cell header" localization TC="等級" SC="等级">
          <span></span>
        </div><div class="cell body">
          <select name="rank">
            <option value="" localization TC="全部" SC="全部"></option>
            <option value="" localization TC="S 等級" SC="S 等级" disabled style='font-weight: bold;'></option>
            <option value="S%" localization TC="　全S" SC="　全S"></option>
            <option value="SS" localization TC="　SS" SC="　SS"></option>
            <option value="SR" localization TC="　SR" SC="　SR"></option>
            <option value="S" localization TC="　S" SC="　S"></option>
            <option value="" localization TC="A 等級" SC="A 等级" disabled style='font-weight: bold;'></option>
            <option value="A%" localization TC="　全A" SC="　全A"></option>
            <option value="AS" localization TC="　AS" SC="　AS"></option>
            <option value="AR" localization TC="　AR" SC="　AR"></option>
            <option value="A" localization TC="　A" SC="　A"></option>
            <option value="" localization TC="B 等級" SC="B 等级" disabled style='font-weight: bold;'></option>
            <option value="B%" localization TC="　全B" SC="　全B"></option>
            <option value="BS" localization TC="　BS" SC="　BS"></option>
            <option value="BR" localization TC="　BR" SC="　BR"></option>
            <option value="B" localization TC="　B" SC="　B"></option>
            <option value="BU" localization TC="　BU" SC="　BU"></option>
            <option value="" localization TC="C 等級" SC="C 等级" disabled style='font-weight: bold;'></option>
            <option value="C%" localization TC="　全C" SC="　全C"></option>
            <option value="CS" localization TC="　CS" SC="　CS"></option>
            <option value="CR" localization TC="　CR" SC="　CR"></option>
            <option value="C" localization TC="　C" SC="　C"></option>
            <option value="CU" localization TC="　CU" SC="　CU"></option>
            <option value="" localization TC="其他" SC="其他" disabled style='font-weight: bold;'></option>
            <option value="SABC" localization TC="　全白" SC="　全白"></option>
            <option value="_S" localization TC="　全SECRET" SC="　全SECRET"></option>
            <option value="_R" localization TC="　全RARE" SC="　全RARE"></option>
            <option value="_U" localization TC="　全U" SC="　全U"></option>
          </select>
        </div><div class="cell not">
          <label class="not">
            <input type="checkbox" name="not[]" value="rank" /><span localization TC='NOT' SC='NOT'></span>
        </label>
        </div>
      </div>
      <div class="row">
        <div class="cell header" localization TC="距離" SC="距离">
          <span></span>
        </div><div class="cell body">
          <select name="pos">
            <option value=""></option>
            <option value="r" localization TC="　近" SC="　近"></option>
            <option value="s" localization TC="　中" SC="　中"></option>
            <option value="p" localization TC="　遠" SC="　远"></option>
          </select>
        </div><div class="cell not">
          <label class="not">
            <input type="checkbox" name="not[]" value="pos" /><span localization TC='NOT' SC='NOT'></span>
        </label>
        </div>
      </div>
      <div class="row">
        <div class="cell header" localization TC="變型" SC="变型">
          <span></span>
        </div><div class="cell body">
          <select name="tag">
            <option value=""></option>
            <option value="tag2" localization TC="　自由" SC="　自由"></option>
            <option value="tag3" localization TC="　裝甲解除" SC="　装甲解除"></option>
            <option value="tag4" localization TC="　技能激活" SC="　技能激活"></option>
            <option value="no" localization TC="　不能" SC="　不能"></option>
          </select>
        </div><div class="cell not">
          <label class="not">
            <input type="checkbox" name="not[]" value="tag" /><span localization TC='NOT' SC='NOT'></span>
        </label>
        </div>
      </div>
      <div class="row" id="prop">
        <div class="cell header" localization TC="特殊" SC="特殊">
          <span></span>
        </div><div class="cell body">
          <table><tr><td>
            <label>
              <input name="prop[]" value="ma" type="checkbox" />
              <span localization TC=" MA" SC=" MA"></span>
            </label>
            <label>
              <input name="prop[]" value="ca" type="checkbox" />
              <span localization TC=" 格鬥反擊" SC=" 格斗反击"></span>
            </label>
            <label>
              <input name="prop[]" value="big" type="checkbox" />
              <span localization TC=" 大型" SC=" 大型"></span>
            </label>
          </td></tr><tr><td>
            <label onclick="auto_correct($(this), 's')">
              <input name="prop[]" value="s1" type="checkbox" />
              <span localization TC=" 盾牌" SC=" 盾牌"></span>
            </label>
            <label onclick="auto_correct($(this), 's')">
              <input name="prop[]" value="s2" type="checkbox" />
              <span localization TC=" 光束盾" SC=" 光束盾"></span>
            </label>
            <label onclick="auto_correct($(this), 's')">
              <input name="prop[]" value="s0" type="checkbox" />
              <span localization TC=" 沒盾牌" SC=" 沒盾牌"></span>
            </label>
          </td></tr><tr><td>
            <label onclick="auto_correct($(this), '');">
              <input name="prop[]" value="bp" type="checkbox" />
              <span localization TC=" 設計圖" SC=" 设计图"></span>
            </label>
            <label onclick="auto_correct($(this), '');">
              <input name="prop[]" value="nbp" type="checkbox" />
              <span localization TC=" 沒設計圖" SC=" 沒设计图"></span>
            </label>
          </td></tr><tr><td>
            <label onclick="auto_correct($(this), '');">
              <input name="prop[]" value="cm" type="checkbox" />
              <span localization TC=" 扭蛋" SC=" 扭蛋"></span>
            </label>
            <label onclick="auto_correct($(this), '');">
              <input name="prop[]" value="ncm" type="checkbox" />
              <span localization TC=" 沒扭蛋" SC=" 沒扭蛋"></span>
            </label>
          </td></tr></table>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row" id="sort">
        <div class="cell header" localization TC="排序" SC="排序">
          <span></span>
        </div><div class="cell body">
          <select name="sort">
            <option value="tot" localization TC="4圍" SC="4围" style='font-weight: bold;'></option>
            <option value="atk" localization TC="　攻擊" SC="　攻击"></option>
            <option value="def" localization TC="　防禦" SC="　防御"></option>
            <option value="spd" localization TC="　速度" SC="　速度"></option>
            <option value="ctl" localization TC="　操控" SC="　操控"></option>
            <option value="id" localization TC="ID" SC="ID" style='font-weight: bold;'></option>
            <!--option value="" disabled localization TC="武器" SC="武器"></option>
            <option value="rng" localization TC="　射程" SC="　射程"></option>
            <option value="dmg" localization TC="　傷害" SC="　伤害"></option>
            <option value="sets" localization TC="　彈數" SC="　弹数"></option>
            <option value="cd" localization TC="　CD" SC="　CD"></option-->
            <option value="lock" localization TC="鎖敵距離" SC="锁敌距离" style='font-weight: bold;'></option>
          </select>
        </div>
      </div>
      <div class="row" id="order">
        <div class="cell header" localization TC="次序" SC="次序">
          <span></span>
        </div><div class="cell body">
          <select name="order">
            <option value="DESC" localization TC="降序" SC="降序"></option>
            <option value="ASC" localization TC="升序" SC="升序"></option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="cell header home">
          <input type="button" value="" localization TC="首頁" SC="首页" onclick="window.location.href = 'search_v2';" />
        </div><div class="cell body reset">
          <input type="button" value="" localization TC="重置" SC="重置" onclick="resetform()" />
        </div>
      </div>
      <div class="row" id="submit">
        <div class="cell body">
          <input type="submit" value="" localization TC="搜尋" SC="搜寻" style="height: 100%; width: 100%;" />
        </div>
      </div>
      <div class="row" id="random">
        <div class="cell body">
          <input type="button" value="" localization TC="隨機機體" SC="随机机体" onclick="window.location.href = 'search_v2?id=random';" style="height: 100%; width: 100%;" />
        </div>
      </div>
    </div>
  </div>
</form>

<form class="container form_cm" method="get">
  <div class="container header" localization TC="扭蛋機" SC="扭蛋机"></div>
  <div class="container body">
    <div class="container">
      <div class="row">
        <div class="cell body">
          <select name="machine" style="height: 100%;">
<?=cm_option()?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="cell body submit">
          <input type="submit" value="" localization TC="搜尋" SC="搜寻" style="height: 100%; width: 100%;" />
        </div>
      </div>
    </div>
  </div>
</form>

</div>