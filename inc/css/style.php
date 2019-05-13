/*original*/
option:hover {
  background-color: #DDDDFF;
}
body[localization='TC'] * {
  font-family: "NSimSun";
}
body[localization='SC'] * {
  font-family: "DFKai-SB";
}
body[fs='16'][localization='SC'] * {
  font-family: "NSimSun";
}
body[fs="20"] * {
  font-size: 20px;
}
body[fs="18"] * {
  font-size: 18px;
}
body[fs="16"] * {
  font-size: 16px;
}
div#warning {
  display: hidden;
  max-height: 0;
  overflow: hidden;
  text-align: center;
  padding: 0;
}
div#warning.show {
  display: block;
  max-height: 30px;
  padding: 10px;
  background-color: #ffffdd;
}
form#settings {
  text-align: center;
  margin: 10px;
  position: fixed;
  left: 0;
  top: 40px;
  z-index: 1000;
}
form#settings div {
  cursor: pointer;
  border: 1px solid black;
  margin: 5px;
  padding: 5px;
  background-color: #FFF;
  transition: background-color 1s;
}
form#settings div:hover {
  background-color: #DDDDFF;
  transition: background-color 1s;
}
form, img[srcc], input, div[id] {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
img[srcc='top.png'] {
  position: fixed;
  top: 40px;
  right: 0;
  margin: 10px;
  border-radius: 16px;
  transition: background-color 1s;
  cursor: pointer;
  z-index: 1000;
}
img[srcc='top.png']:hover {
  background-color: #DDDDFF;
  transition: background-color 1s;
}
body[localization='TC'] div#TC,
body[localization='SC'] div#SC,
body[fs='20'] div#fs20,
body[fs='18'] div#fs18,
body[fs='16'] div#fs16 {
  background-color: #DDDDFF;
}
table {
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
  text-align: center;
  white-space: nowrap;
}
table th,
table td {
  border: 1px solid black;
  text-align: center;
  padding: 5px;
}
table#machine tr:not(:first-child) td[rank*='A']:before {
  content: url(https://s2.ax1x.com/2019/01/23/kV6iQK.png);
  position: absolute;
}
table#machine tr:not(:first-child) td[rank*='B']:before {
  content: url(https://s2.ax1x.com/2019/01/23/kV6Cz6.png);
  position: absolute;
}
table#machine tr:not(:first-child) td[rank*='C']:before {
  content: url(https://s2.ax1x.com/2019/01/23/kV69Rx.png);
  position: absolute;
}
table#machine tr:not(:first-child) td[rank*='R'] {
  background-color: #DDDDFF;
}
div#tooltip {
  display: none;
  position: absolute;
  z-index: 1000;
  background-color: rgba(255, 255, 255, 0.9);
  border: 1px solid black;
  font-weight: bold;
  padding: 5px;
  text-align: left;
}

/*general*/
body {
  margin: 0 auto;
  text-align: center;
}
nav, div#wrapper, div#footer, div#result, div#id, div#machine {
  margin: 0 auto;
  text-align: center;
  width: 1080px;
  min-width: 1080px;
}
div#wrapper {
  margin-top: 40px;
}
input[type="checkbox"], input[type="submit"], input[type="button"], button {
  margin: 0;
  border: 0;
}

/*nav*/
nav > button {
  margin: 25px auto 0 auto;
  padding: 0;
  border: 1px solid black;
  background-color: transparent;
}
nav > button:hover {
  background-color: #DDDDFF;
}
nav > button > table {
  margin: 0 10px;
  width: 40px;
  height: 50px;
}
nav > button > table td {
  border: 0;
  border-top: 1px solid black;
}
nav > button > table tr:first-child td {
  border: 0;
}

/*form*/
form.container {
  display: inline-block;
}
div.container {
  vertical-align: top;
  display: inline-block;
  height: 240px;
}
form table.inner > tbody > tr > td {
  height: calc(100% / 6);
}
form input[type="text"], form select {
  width: 200px;
  height: 100%;
}
form table#prop, form table#prop td {
  border: 0;
  padding: 0;
  text-align: left;
}
form table.inner {
  height: 100%;
}
form div.container:last-child td:last-child {
  width: 100px;
}
form div.container:last-child td select {
  width: 100%;
}
form div.container:last-child td input {
  width: 100%;
  height: 100%;
}
td.mobile {
  display: none;
}
td.mobile.hide {
  display: table-cell;
}
table.mobile {
  display: none;
}
table.mobile.hide {
  display: table;
}
div.mobile, 
button.mobile {
  display: none;
}
div.mobile.hide, 
button.mobile.hide {
  display: block;
}
select[name="machine"] {
  width: 40px;
}
@media only screen and (max-width:1100px) {
body[fs="20"] * {
  font-size: 60px;
}
body[fs="18"] * {
  font-size: 54px;
}
body[fs="16"] * {
  font-size: 48px;
}
body[fs="20"] img[srcc="localization.png"],
body[fs="20"] img[srcc="magnifier.png"],
body[fs="20"] img[srcc="top.png"] {
  width: 76px;
  height: 76px;
}
body[fs="18"] img[srcc="localization.png"],
body[fs="18"] img[srcc="magnifier.png"],
body[fs="18"] img[srcc="top.png"] {
  width: 70px;
  height: 70px;
}
body[fs="16"] img[srcc="localization.png"],
body[fs="16"] img[srcc="magnifier.png"],
body[fs="16"] img[srcc="top.png"] {
  width: 64px;
  height: 64px;
}
form div.container,
form div.container table.inner {
  width: 100%;
  display: block;
  height: unset;
}
form table.inner input[type="checkbox"] {
  width: 26px;
  height: 26px;
}
form table.outer {
  width: 864px;
}
td.mobile {
  display: table-cell;
}
td.mobile.hide {
  display: none;
}
table.mobile {
  display: table;
}
table.mobile.hide {
  display: none;
}
div.mobile,
button.mobile {
  display: block;
}
div.mobile.hide,
button.mobile.hide {
  display: none;
}
form table.inner td.width-99 {
  width: 99%;
}
form input[type="text"], form select {
  width: 100%;
}
form div.container:last-child td:last-child {
  width: 49%;
}
form.form_cm div.container:last-child td {
  width: 1%;
}
img.pos {
  width: 65px;
  height: auto;
}
img.weapon {
  width: 186px;
  height: auto;
}
img.skill, img.sp {
  width: 146px;
  height: auto;
}
img.unit {
  width: 265px;
  height: auto;
}
td[rowspan] img.unit {
  width: 500px;
  height: auto;
}
table#machine img.unit {
  width: 400px;
  height: auto;
}
table#machine tr:not(:first-child) td[rank]:before {
  transform: scale(3);
  transform-origin: top left;
}
}

/*details*/
label.not > span {
  border-bottom: 1px dotted black;
}
div.unit-cell {
  display: inline-block;
  margin: 4px;
}
div.unit-cell div#unit img {
  padding-bottom: 2px;
}
div.unit-cell div#skl1,
div.unit-cell div#skl2 {
  float: left;
}
div.unit-cell div#skl1 img,
div.unit-cell div#skl2 img {
  padding-right: 2px;
  height: 48px;
  width: 48px;
}
div.unit-cell div#sp1 {
  float: right;
}
div.unit-cell div#sp2 {
  clear: right;
  float: right;
}
div.unit-cell div#sp1 img,
div.unit-cell div#sp2 img {
  width: 24px;
  height: 24px;
}
img.pos {
  vertical-align: text-bottom;
}