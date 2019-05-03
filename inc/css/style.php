body {
  width: 1320px;
  min-width: 1320px;
  margin: 0 auto;
}
div#wrapper {
  margin: 0 auto;
  text-align: center;
  width: 1080px;
  min-width: 1080px;
}
div.cell.header.home:hover, form#machine button:hover {
  cursor: pointer;
}
input[type="checkbox"], input[type="submit"], input[type="button"], button {
  margin: 0;
  border: 0;
}

/*form*/
.container, div.row, div.cell {
  position: relative;
  margin: 0;
  padding: 0;
  border: 0;
}
div.cell {
  display: inline-flex;
}
form.container {
  display: inline-block;
  vertical-align: top;
}
form.container > div.container {
  position: relative;
  margin: 0;
  padding: 7.5px;
  border-right: 1px solid black;
  border-bottom: 1px solid black;
  border-left: 1px solid black;
  text-align: center;
}
form.container > div.container.header {
  border-top: 1px solid black;
}
form.container > div.container.body > div.container {
  position: relative;
  display: inline-block;
  vertical-align: top;
  height: 265px;
}
form.container > div.container.body > div.container > div.row > div.cell {
  margin-top: 1px;
  padding: 7.5px;
  border-right: 1px solid black;
  border-bottom: 1px solid black;
  vertical-align: middle;
  align-items: center;
  height: calc(100% - 16px);
}
form.container > div.container.body > div.container > div.row > div.cell:nth-child(1) {
  border-left: 1px solid black;
}
form.container > div.container.body > div.container > div.row:nth-child(1) > div.cell {
  margin-top: 0;
  border-top: 1px solid black;
}
form.container > div.container.body > div.container > div.row > div.cell > input,
form.container > div.container.body > div.container > div.row > div.cell > select {
  width: 100%;
  height: 100%;
}

/*details*/
label.not > span {
  border-bottom: 1px dotted black;
}
div.row#prop {
  height: 50%;
}
div.cell.header span {
  width: 100%;
  text-align: center;
}
div.container.header {
  font-weight: bold;
}
form.container.form_unit > div.container.body > div.container:last-child {
  width: auto;
}
form.container.form_unit > div.container.body > div.container:last-child > div.row > div.cell.body {
  width: 80px;
}
form.container.form_unit > div.container.body > div.container:last-child > div.row#submit {
  height: 50%;
}
form.container.form_unit > div.container.body > div.container > div.row {
  height: 16.66%;
}
form.container.form_unit > div.container.body > div.container > div.row > div.cell.body {
  width: 200px;
}
form.container.form_cm > div.container.body > div.container > div.row > div.cell {
  margin: 0;
}
form.container.form_cm > div.container.body > div.container > div.row > div.cell.body {
  height: calc(50% - 17px);
  width: 100px;
}
form#machine button {
  background-color: transparent;
}
div#result {
  margin: 0 auto;
  width: 1080px;
  min-width: 1080px;
}

/*original*/
table {
  border-collapse: collapse;
  text-align: center;
  margin: 0 auto;
}
table td {
  border: 1px solid black;
  padding: 5px;
}
form table, form table td {
  text-align: left;
  border: 0;
}
form table td {
  padding: 0;
}
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
body[fs='20'] table#form > tbody > tr:nth-child(2) > td {
  height: 225px;
}
body[fs='18'] table#form > tbody > tr:nth-child(2) > td {
  height: 213px;
}
body[fs='16'] table#form > tbody > tr:nth-child(2) > td {
  height: 195px;
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
table#machine {
  margin-left: auto;
  margin-right: auto;
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  white-space: nowrap;
}
table#machine th,
table#machine td {
  border: 1px solid black;
  border-collapse: collapse;
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
}