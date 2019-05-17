/*original*/
option:hover {
  background-color: #DDDDFF;
}
body[localization="TC"] * {
  font-family: "NSimSun";
}
body[localization="SC"] * {
  font-family: "DFKai-SB";
}
body[fs="16"][localization="SC"] * {
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
form#settings > div {
  border: 1px solid black;
  margin: 5px;
  padding: 5px;
  background-color: #FFF;
  transition: background-color 1s;
}
form#settings > div:hover,
form#compare > div#add:hover {
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
svg[srcc="top.png"] {
  display: block;
  border-radius: 999px;
  transition: background-color 1s;
  z-index: 1000;
}
svg[srcc="top.png"]:hover {
  background-color: #DDDDFF;
  transition: background-color 1s;
}
body[localization="TC"] div#TC,
body[localization="SC"] div#SC,
body[fs="20"] div#fs20,
body[fs="18"] div#fs18,
body[fs="16"] div#fs16 {
  background-color: #DDDDFF;
}
body[fs="20"] svg[srcc="localization.png"],
body[fs="20"] svg[srcc="magnifier.png"],
body[fs="20"] svg[srcc="top.png"] {
  width: 30px;
  height: auto;
}
body[fs="18"] svg[srcc="localization.png"],
body[fs="18"] svg[srcc="magnifier.png"],
body[fs="18"] svg[srcc="top.png"] {
  width: 29px;
  height: auto;
}
body[fs="16"] svg[srcc="localization.png"],
body[fs="16"] svg[srcc="magnifier.png"],
body[fs="16"] svg[srcc="top.png"] {
  width: 28px;
  height: auto;
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
table#machine tr:not(:first-child) td[rank*="A"]:before {
  content: url(https://s2.ax1x.com/2019/01/23/kV6iQK.png);
  position: absolute;
}
table#machine tr:not(:first-child) td[rank*="B"]:before {
  content: url(https://s2.ax1x.com/2019/01/23/kV6Cz6.png);
  position: absolute;
}
table#machine tr:not(:first-child) td[rank*="C"]:before {
  content: url(https://s2.ax1x.com/2019/01/23/kV69Rx.png);
  position: absolute;
}
table#machine tr:not(:first-child) td[rank*="R"] {
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
nav, div#wrapper, div#footer, div#machine, div#compare_wrapper {
  margin: 0 auto;
  text-align: center;
  width: 1100px;
}
div#result, div#id {
  margin: 0 auto;
  text-align: center;
  width: 950px;
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
div#id table#info td {
  max-width: 727px;
  overflow: hidden;
  text-overflow: ellipsis;
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
form table#prop label {
  margin-left: 5px;
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
input[type="button"], input[type="submit"], a, img.unit, button.mobile, svg[srcc="top.png"], form#settings div, form#compare div, select, label, input[type="checkbox"], form#compare div#dcid {
  cursor: url("data:image/gif;base64,R0lGODlhIAAgALMAAAAAABQUFP/dtf+0a+J6AAAAAJQAMZwUQf///yAAAAB7zgAAAAAAAxAAANMAAPfGuSH+JUNyZWF0ZWQgYnkgZkNvZGVyIEdyYXBoaWNzIFByb2Nlc3NvcgAAIfkEBQEAAAAsAAAAACAAIAADBNMQyEmrvTjrTYP/wQV+mScMKCqE3ZkOK9uiRG3H32nvhDyNn8ILVSgCfZrAkGgwIDmSgGtYaB6eG+mSVjVcPRzTNkWoFmxgkWc8LJ93z0D5JSS23UV0p1a3+198TW8yHnNsW3x5BSxaRYeINo4rAEp/j4B8KSFSMZdLaJyMm1RFjp96aR2VpimsO4tYP6xLpbU9WVNsPLe4ujyLUJSQv7xZhruvehYjkcivb8VRAnyRechgCIPL03gEMEeM1j0kUVopkxha3d5IQL0vMcEl7vL19vYRADs="), auto;
}
input[type="text"] {
  cursor: url("data:image/gif;base64,R0lGODlhIAAgALMAAAAAABQUFEBAQP/dtf+0a+J6AAAAAJQAMZwUQf///wB7zgAAAAAAAxAAANMAAPfDaSH+JUNyZWF0ZWQgYnkgZkNvZGVyIEdyYXBoaWNzIFByb2Nlc3NvcgAAIfkEBQEAAAAsAAAAACAAIAADBPMwyAmqvTjjSbX/lhCA5CeWKHZWXLe1ozpKA2HbQ2wF9U3kOoCIZysYj8BJ7cgs6E4wicFnM1ijl1UmQK0eDsGM9kLsGr6IcFZd7hbOh7QaICG3u4T3wWAMc3N0EnhuVkdBXD8Bbz5TVVRGfIY7VZCMN40+kExPHIOekHwGnCyeg0xTgEIxiKVulQQxK6ytmZWpslRWunhMgSGriFa5mKd1FQLIFAHCg7rOTnYcdD2lTdAkd49NoimzN9Zv19iLeeCafb47HEeR5m/tiqk85+/tTXUJkXyp06B8iVjo6CsA6wW1RB/mFUK4pQWINkBSYJNmIQIAOw=="), auto;
}
body {
  cursor: url("data:image/gif;base64,R0lGODlhIAAgAKIAAAAAABQUFP+0a//dteJ6AJQAMZwUQQAAACH+JUNyZWF0ZWQgYnkgZkNvZGVyIEdyYXBoaWNzIFByb2Nlc3NvcgAAIf8LTkVUU0NBUEUyLjADAQAAACH5BAkBAAAALAAAAAAgACAAAgOUCLrc/jDKSau9OOvNewwg6CmhYJrhBp4sK17BELR0HFixMNOuIFO5He9ECBB0EtBAN2QVCcXkUtg0PaOQGRV1okKN2IaWJ9x+w4xVlQct3hzbtfP7iMutdPidnRc3Q2pEbW9wgTpbgW4vcFMlQ4B9jHt4kZJ3bWh1S3KYmZprnYQTMZtzoRhKA52Yi6ggoa0cgKIPCQAh+QQJAQAAACwCAAEAHgAfAAIDqwihoPGsyUnnWvHWTTHDHid616OJaKqubLuZkOvAgWDbdMzVAsHfQNxgIAhZiL5f8PZgVgLIQEG5LE4JuGNPSq36rgRfg9ecVoPfYkA8UxTPS59gqhubgz9lmPu845loX0ZNcGdhSR2FhYeDinCMiY5ee5FVNIGUHYQ4VJtJdWNEMHAwmR1EkjaHbE+ojqtGWq+wKFCKq6wjQ3G4ubVQA72MsSkmuCYymsgoCQAh+QQJAQAAACwCAAEAHgAfAAIDugihoPGsreUgbYzqmKW/3ORhl8iR6GONmXpicCzPdKWC8w2RzzAIQIHmJvEBB7uAUUBoNoWBILDHdDaHuod0O83iSIUoV7qrgcXjadgsCaelhIDhC4u638B4QViLovFMfjQBd2RBf1drMYR/h45wejhagFxOZRKUaZaLmWObdZ2VV5xpOltWXypkjZOBLos/N283ozJKoVW1tj+ZqH28gFZxZrd4wnSwwEHCumw9A8yWyH0Px5dsOURmCQAh+QQFAQAAACwEAAcAHAAZAAIDkQi6rPGvyQaruLfCCcIlHiZiwTAIgVQKYDiKD8msYOG+mU1kzlnfOFZAR2hlPLagqIYKtCIeoBIksEUcyZHrVhymFl7cdtS1gaVKTLEFTqfX34572m3PcXC72LLMn28xMC5PcR0nfHsPdTMndx9+jI5rIBMrc5OUlY10kJqbapiZHA4lA6FwhaOkTpMbqqMarwkAOw=="), auto;
}
tr.mobile {
  display: none;
}
tr.mobile.hide {
  display: table-row;
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
img.origin {
  width: auto;
  height: 100px;
}
table#info tr td:first-child {
  font-weight: bold;
}
table#info svg {
  width: 20px;
}
form div.container:not(:first-child), form:not(:first-child) {
  margin-left: 5px;
}
img.skill,
img.sp {
  width: 48px;
  height: auto;
}
span#rank {
  margin-left: 5px;
}

/*comapre*/
div#id.compare {
  display: inline-block;
  width: unset;
  vertical-align: top;
}
div#id.compare.id0 > div,
div#id.compare.id0 > table{
  margin-right: 20px;
}
div#id.compare.id1 > div,
div#id.compare.id1 > table{
  margin-left: 20px;
}
form#compare {
  position: fixed;
  top: 40px;
  right: 0;
  margin: 10px;
  z-index: 1000;
}
form#compare > div {
  margin-top: 5px;
}
form#compare div[ucid] {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
form#compare div[ucid] img,
form#compare > svg {
  width: 32px;
  height: auto;
}
form#compare div#dcid {
  color: red;
  position: absolute;
  width: 20px;
  height: 20px;
  opacity: 0;
  transition: opacity 1s;
  pointer-events: none;
}
form#compare div[ucid]:hover div#dcid {
  opacity: 1;
  transition: opacity 1s;
}
form#compare div#add {
  border: 1px dotted black;
}
div#spempty {
  width: 48px;
  height: 48px;
  display: flex;
  justify-content: center;
  align-items: center;
}

/*mobile*/
@media only screen and (max-width:1100px) {
div#result, div#id {
  margin-left: 10px;
  width: 1080px;
}
body[fs="16"][localization="SC"] * {
  font-family: "DFKai-SB";
}
form#compare div[ucid] img,
form#compare > svg {
  width: 70px;
}
form#compare div#dcid {
  width: 45px;
  height: 45px;
}
form div.container:not(:first-child), form:not(:first-child) {
  margin-left: 0;
}
div#id.compare {
  max-width: 420px;
  overflow: scroll;
}
div#id.compare div#spempty {
  width: 30px;
  height: 30px;
}
div#id.compare.id0 > div, div#id.compare.id0 > table {
  margin-right: 10px;
}
div#id.compare.id1 > div, div#id.compare.id1 > table {
  margin-left: 10px;
}
div#armament {
  overflow: auto;
  width: 765px;
  margin: 0 auto;
}
table#info svg {
  width: 65px;
}
body[fs="20"] * {
  font-size: 60px;
}
body[fs="18"] * {
  font-size: 54px;
}
body[fs="16"] * {
  font-size: 48px;
}
div#id.compare * {
  font-size: 20px;
}
div#id.compare img.origin {
  height: 100px;
}
div#id.compare img.pos {
  width: 30px;
}
div#id.compare img.skill,
div#id.compare img.sp,
div#id.compare svg {
  width: 30px;
}
div#id.compare img.weapon {
  width: 90px;
}
body[fs="20"] svg[srcc="localization.png"],
body[fs="20"] svg[srcc="magnifier.png"],
body[fs="20"] svg[srcc="top.png"] {
  width: 70px;
}
body[fs="18"] svg[srcc="localization.png"],
body[fs="18"] svg[srcc="magnifier.png"],
body[fs="18"] svg[srcc="top.png"] {
  width: 65px;
}
body[fs="16"] svg[srcc="localization.png"],
body[fs="16"] svg[srcc="magnifier.png"],
body[fs="16"] svg[srcc="top.png"] {
  width: 60px;
}
form div.container,
form div.container table.inner {
  width: 100%;
  display: block;
  height: unset;
}
form table.inner input[type="checkbox"] {
  width: 26px;
  height: auto;
}
form div.container:not(:first-child) table.inner tr:first-child td {
  border-top: 0;
}
form table.outer {
  width: 864px;
}
tr.mobile {
  display: table-row;
}
tr.mobile.hide {
  display: none;
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
form div.container table.inner tr#sort td {
  width: 1%;
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
img.origin {
  width: auto;
  height: 200px;
}
}