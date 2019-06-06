/*original*/
.DDDDFF,
.DDDDFF > td {
  background-color: #DDDDFF;
}
td {
  transition: background-color 1s;
}
input[type="text"],
select,
input[type="button"],
input[type="submit"] {
  border: 1px solid #dddddd;
  border-radius: 5.5px;
  padding: 0 5px;
}
form {
  margin: 0;
  padding: 0;
}
img {
  border-radius: 3.5px;
}
button {
  background-color: transparent;
}
option:hover {
  background-color: #DDDDFF;
}
body[localization="SC"] * {
  font-family: "DFKai-SB";
}
body[localization="TC"] * {
  font-family: "NSimSun";
}
body {
  min-height: 1333px;
}
body * {
  font-size: 20px;
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
  margin: 1em 10px;
  position: fixed;
  left: 0;
}
form#settings > div {
  border: 1px dashed black;
  margin: 5px;
  padding: 5px;
  transition: background-color 1s;
  border-radius: 7.5px;
}
form#settings > div:hover,
form#compare > div#add:hover,
form#compare > div#go:hover {
  background-color: #DDDDFF;
}
form, img[srcc], input, div[id] {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
svg[srcc="blueprint.png"],
svg[srcc="capsule.png"],
svg[srcc="back.png"],
svg[srcc="top.png"] {
  transition: background-color 1s;
  border-radius: 3.5px;
}
svg[srcc="blueprint.png"],
svg[srcc="capsule.png"],
svg[srcc="back.png"],
svg[srcc="top.png"] {
  position: fixed;
  bottom: 0;
  margin: 10px;
  display: block;
  border-radius: 999px;
  z-index: 1000;
}
svg[srcc="blueprint.png"] {
  right: 0;
  bottom: 40px;
  border-radius: 3.5px;
}
svg[srcc="capsule.png"] {
  right: 0;
  bottom: 80px;
}
svg[srcc="top.png"] {
  right: 0;
}
svg[srcc="back.png"] {
  left: 0;
}
svg[srcc="blueprint.png"]:hover,
svg[srcc="capsule.png"]:hover,
svg[srcc="back.png"]:hover,
svg[srcc="top.png"]:hover {
  background-color: #DDDDFF;
}
body[localization="TC"] div#TC,
body[localization="SC"] div#SC {
  border: 1px solid black;
}
svg[srcc$=".png"] {
  width: 30px;
  height: auto;
}
table {
  border-collapse: separate;
  border-spacing: 0;
  margin: 0;
  padding: 0;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  white-space: nowrap;
}
table > tbody > tr > td:first-child {
  border-left: 1px solid black;
}
table > tbody > tr:first-child > td {
  border-top: 1px solid black;
}
table > tbody > tr > td {
  border-radius: 0;
  border: 0;
  border-right: 1px solid black;
  border-bottom: 1px solid black;
  margin: 0;
  padding: 5px;
  text-align: center;
  background-color: white;
}
table#machine tr:not(:first-child) td[rank]::before {
  overflow: hidden;
  border-top-left-radius: 3.5px;
}
table#machine tr:not(:first-child) td[rank*="A"]::before {
  content: url(https://s2.ax1x.com/2019/01/23/kV6iQK.png);
  position: absolute;
}
table#machine tr:not(:first-child) td[rank*="B"]::before {
  content: url(https://s2.ax1x.com/2019/01/23/kV6Cz6.png);
  position: absolute;
}
table#machine tr:not(:first-child) td[rank*="C"]::before {
  content: url(https://s2.ax1x.com/2019/01/23/kV69Rx.png);
  position: absolute;
}
table#machine tr:not(:first-child) td[rank*="R"] {
  background-color: #DDDDFF;
}
div#tooltip {
  display: none;
  position: absolute;
  z-index: 2000;
  background-color: rgba(255, 255, 255, 0.9);
  border: 1px solid black;
  border-radius: 5px;
  font-weight: bold;
  padding: 5px;
  text-align: left;
}

/*general*/
body {
  margin: 0 auto;
  text-align: center;
}
div#wrapper, div#footer, div#machine {
  margin: 0 auto;
  text-align: center;
  width: 1080px;
}
div#compare_wrapper {
  margin: 0 auto;
  text-align: center;
}
div#result, div#id {
  margin: 0 auto;
  text-align: center;
  width: 950px;
}
input[type="checkbox"],
input[type="submit"],
input[type="button"] {
  margin: 0;
  border: 1px solid #c0c0c0;
  background-image: linear-gradient(to bottom, #ddd 0, #ccc 100%);
}
button,
a.button {
  border: 1px solid black;
  border-radius: 5px;
  background-color: white;
  margin: 0;
  padding: 1px 5px;
  transition: background-color 1s, color 1s, border 1s;
  text-decoration: none;
  color: black;
}
a.button {
  display: inline-flex;
  align-items: center;
  vertical-align: middle;
}
td a.button:not(:first-child) {
  margin-left: 5px;
}
a.button.block.eff {
  margin-left: auto;
  margin-right: auto;
  display: table;
}
td > a.button.block.eff:not(:first-child) {
  margin-top: 5px;
}
a.button.h28px {
  height: 26px;
}
a.button.bp {
  height: 24px;
}
a.button.h28px.b0 {
  border: 0;
}
a.button.block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
a.button[href*="rank"] {
  color: black;
  background-color: white;
}
a.button[href$="SS"],
a.button[href$="AS"],
a.button[href$="BS"],
a.button[href$="CS"] {
  border-color: red;
  color: white;
  background-color: red;
}
a.button[href$="R"] {
  border-color: #FFFF87;
  background-color: #FFFF87;
  color: black;
}
a.button[href$="U"] {
  border-color: #7DEB00;
  background-color: #7DEB00;
  color: black;
}
#wiki a.button:not(:nth-of-type(1)) {
  margin-top: 5px;
  width: calc(33% - calc(46px / 3));
  justify-content: center;
}
#wiki a.button:nth-of-type(2) {
  margin-left: 0;
}
div.unit-cell div#detail a.button:nth-child(2),
#wiki a.button:not(:nth-of-type(1)):not(:nth-of-type(2)) {
  margin-left: 5px;
}
button:hover,
a.button:hover {
  border: 1px solid black;
  color: black;
  background-color: #DDDDFF;
}
a.button.h28px.b0:hover {
  border: 0;
  color: black;
  background-color: white;
}

/*nav*/
nav {
  width: 100%;
  padding: 1em 0;
  background-image: linear-gradient(to bottom, #eeeeff 0%, #a0a0ff 33%, #eeeeff 66%, #a0a0ff 100%);
  background-size: 100% 300%;
  -webkit-animation: gradient_animation 9s linear infinite;
  -moz-animation: gradient_animation 9s linear infinite;
  animation: gradient_animation 9s linear infinite;
}
@-webkit-keyframes gradient_animation {
  0%{background-position:100% 0%}
  50%{background-position:100% 50%}
  100%{background-position:100% 100%}
}
@-moz-keyframes gradient_animation {
  0%{background-position:100% 0%}
  50%{background-position:100% 50%}
  100%{background-position:100% 100%}
}
@keyframes gradient_animation { 
  0%{background-position:100% 0%}
  50%{background-position:100% 50%}
  100%{background-position:100% 100%}
}
nav > button {
  margin: 0 auto;
  padding: 0;
  border: 1px solid black;
  background-color: transparent;
}
nav > button > table {
  margin: 0 10px;
  width: 40px;
  height: 50px;
}
nav > button > table td {
  border: 0;
  border-top: 1px solid black;
  border-left: 0 !important;
}
nav > button > table tr:first-child td {
  border: 0;
}

/*details*/
tr#prop td:nth-child(2) div {
  text-align: left;
  max-height: 100px;
  overflow-y: scroll;
}
tr#prop td:nth-child(2) div:hover {
  max-height: unset;
  overflow-y: unset;
}
tr#prop label {
  margin-left: 7px;
}
tr#prop label:nth-of-type(2n-1) {
  float: left;
}
tr#prop label > span {
  margin-left: 5px;
}
label.not {
  margin-left: 5px;
  border: 1px dashed black;
  border-radius: 5.5px;
  padding: 0 5px;
}
label.not.checked {
  border: 1px solid black;
}
label.not > input {
  display: none;
}
div.unit-cell {
  display: inline-block;
  margin: 4px;
  border-radius: 5px;
  border: 1px solid black;
  padding: 5px;
  transition: background-color 1s;
}
div.unit-cell:hover {
  background-color: #DDDDFF !important;
}
div.unit-cell div#detail {
  margin-bottom: 2px;
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
table#info td {
  max-width: 727px;
  overflow: hidden;
  text-overflow: ellipsis;
}
table#info tr td:first-child {
  font-weight: bold;
}
table#info svg {
  width: 20px;
}

/*form*/
form.container {
  display: inline-block;
}
div.container {
  vertical-align: top;
  display: inline-block;
  height: 280px;
}
form div table.inner > tbody > tr > td {
  height: calc(100% / 7);
}
form table td {
  background-color: transparent !important;
}
form input[type="text"],
form select {
  width: 200px;
  height: 100%;
  background: rgba(255,255,255,0.85);
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
input[type="button"],
input[type="submit"],
a,
img.unit,
button,
svg[srcc$=".png"],
div[srcc$=".png"],
form#settings div,
form#compare div,
select,
label,
input[type="checkbox"],
form#compare div#dcid,
svg#close {
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
  max-width: 100%;
}
div > form:not(:first-child),
form div.container:not(:first-child) {
  margin-left: 5px;
}
img.skill,
img.sp {
  width: 48px;
  height: auto;
}
table > tbody > tr:first-child > td:first-child {
  border-top-left-radius: 7.5px;
}
table > tbody > tr:first-child > td:last-child {
  border-top-right-radius: 7.5px;
}
table > tbody > tr:last-child > td:first-child {
  border-bottom-left-radius: 7.5px;
}
table > tbody > tr:last-child > td:last-child {
  border-bottom-right-radius: 7.5px;
}
input[content] {
  border: 1px solid black;
}
form table.outer td:first-of-type {
  font-weight: bold;
}
div[srcc] {
  position: fixed;
  bottom: 0;
  left: 0;
  margin: 10px;
}
div[srcc="hot.png"] {
  bottom: 110px;
}
div[srcc="main.png"] {
  bottom: 75px;
}
div[srcc="news.png"] {
  bottom: 40px;
}
div#home {
  overflow: auto;
}
div#home > table {
  width: 100%;
  max-width: calc((100% / 2 - 55px - 55px / 2));
}
div#home > table tr:first-child td {
  font-weight: bold;
}
table#hot {
  float: left;
  margin-left: 55px;
}
table#main,
table#news {
  display: inline-table;
  float: right;
  margin-right: 50px;
}
table#news {
  margin-top: 1em;
}
table#news div.item {
  text-align: left;
}
table#hot div#hot_container {
  min-height: 171px;
}
table#hot div#hot_container,
table#news div.item ul {
  white-space: pre-line;
}
table#news div.item ul {
  margin: 0 0 0 1em;
  padding: 5px;
  text-align: left;
}
table#news div.item:last-child ul {
  padding-bottom: 0;
}
table#news div.item:not(:first-child) {
  margin-top: 5px;
}

/*comapre*/
div#id.compare {
  display: inline-block;
  width: unset;
  vertical-align: top;
}
div > div#id.compare:not(:first-child) {
  margin-left: 20px;
}
form#compare {
  margin: 1em 10px;
  position: fixed;
  right: 0;
}
form#compare > div {
  margin-top: 5px;
}
form#compare div[ucid] {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 3.5px;
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
form#compare div#add,
form#compare div#go {
  border: 1px dashed black;
  border-radius: 7.5px;
  transition: background-color 1s;
  min-height: 32px;
  line-height: 32px;
}
form#compare div#go {
  border: 1px solid black;
}
div#spempty {
  width: 48px;
  height: 48px;
  display: flex;
  justify-content: center;
  align-items: center;
}
img.unit.material {
  width: 120px;
}
table#blueprint.mobile.hide tr:first-child td:first-child {
  border-bottom-left-radius: 7.5px;
}
table#blueprint.mobile.hide tr:not(:nth-child(1)) td:first-child {
  border-left: 0;
}
table#blueprint.mobile.hide tr:nth-child(3) td:first-child {
  border-bottom-left-radius: 0;
}
img.wiki {
  width: auto;
  height: 24px;
}
button.skl_sp {
  padding: 5px;
}

/*unit_dialog*/
table#unit_dialog {
  display: none;
  position: fixed;
  top: 12.5%;
  bottom: 12.5%;
  left: 50%;
  margin-left: -37.5%;
  width: 75%;
  height: 75%;
  z-index: 1500;
  overflow: hidden;
}
table#unit_dialog > tbody > tr:first-child > td {
  background-color: #DDDDFF;
  border-bottom-color: white;
}
table#unit_dialog > tbody > tr > td {
  background-color: rgba(255,255,255,1);
}
table#unit_dialog div#ww {
  height: 100%;
  overflow-y: auto;
}
table#unit_dialog > tbody > tr > td > svg {
  width: 32px;
  height: auto;
  border-radius: 999px;
  background-color: white;
  transition: background-color 1s;
}
table#unit_dialog > tbody > tr > td > svg:hover {
  background-color: #DDDDFF;
}
table#unit_dialog svg#close {
  float: right;
}
table#unit_dialog svg#close:hover {
  background-color: #FFAAAA;
}

/*mobile*/
@media only screen and (max-width:1853px) {
div#id.compare.col4 {
  white-space: nowrap;
  max-width: 310px;
}
div#id.compare.col4 table#info td:last-child {
  max-width: 90px;
  overflow-x: auto;
  text-overflow: clip;
}
}
@media only screen and (max-width:1432px) {
div#id.compare[class*="col"] {
  white-space: nowrap;
  max-width: 310px;
}
div#id.compare table#info td:last-child {
  max-width: 90px;
  overflow-x: auto;
  text-overflow: clip;
}
div#id.compare.col4 {
  white-space: nowrap;
  max-width: 225px;
}
div#id.compare.col4 table#info td:nth-child(2) {
  max-width: 50px;
  overflow-x: auto;
  text-overflow: clip;
}
div#id.compare.col4 table#info td:last-child {
  max-width: 50px;
  overflow-x: auto;
  text-overflow: clip;
}
}
@media only screen and (max-width:1100px) {
div[srcc="hot.png"] {
  bottom: 260px;
}
div[srcc="main.png"] {
  bottom: 170px;
}
div[srcc="news.png"] {
  bottom: 80px;
}
label.not,
label.not.checked {
  border-width: 4px;
}
svg[srcc="blueprint.png"] {
  bottom: 80px;
  border-radius: 7.5px;
}
svg[srcc="capsule.png"] {
  bottom: 145px;
}
tr#prop td:nth-child(2) div {
  max-height: unset;
  overflow-y: unset;
}
form input:not([type="checkbox"]),
form select {
  min-height: 110px;
}
form#compare div#add,
form#compare div#go {
  min-height: 70px;
  line-height: 70px;
}
table#unit_dialog {
  top: 0;
  left: 0;
  margin: 0;
  width: 100%;
  height: 100%;
}
table#unit_dialog > tbody > tr > td > svg {
  width: 70px;
}
div#id.compare a.button.block.eff {
  display: table;
}
a.button.h28px {
  height: 72px;
}
div#id.compare a.button.h28px {
  height: 26px;
}
div#id.compare a.button.bp {
  height: 24px;
}
img,
button,
div.unit-cell {
  border-radius: 7.5px;
}
div#id img.wiki {
  height: 68px;
}
div#id.compare img.wiki {
  height: 23px;
}
div#id.compare.col4 {
  white-space: unset;
  max-width: unset;
}
div#id.compare.col4 table#info td:nth-child(2) {
  max-width: unset;
  overflow-x: unset;
  text-overflow: unset;
}
div#id.compare.col4 table#info td:last-child {
  max-width: unset;
  overflow-x: unset;
  text-overflow: unset;
}
div#compare_wrapper {
  width: 1080px;
}
div#compare_wrapper > div {
  max-width: 864px;
  margin: 0 auto;
  white-space: nowrap;
  overflow: auto;
}
table#blueprint.mobile:not(.hide) tbody tr.show:nth-child(2) td:first-child {
  border-bottom-left-radius: 7.5px;
}
table#blueprint.mobile:not(.hide) tbody tr.show:nth-child(2) td:last-child {
  border-bottom-right-radius: 7.5px;
}
.expand_compliance td:first-child {
  border-bottom-left-radius: 0 !important;
}
.expand_compliance td:last-child {
  border-bottom-right-radius: 0 !important;
}
table#blueprint.mobile button.expand {
  width: 100px;
}
table#blueprint.mobile:not(.hide) tr {
  display: none;
}
table#blueprint.mobile:not(.hide) tr.show {
  display: table-row !important;
}
table#blueprint.mobile td,
table#materials.mobile td {
  max-width: 727px;
  overflow: hidden;
  text-overflow: ellipsis;
}
body {
  width: 1080px;
}
nav > button > table {
  margin: 0 20px;
  width: 60px;
  height: 100px;
}
nav > button > table td {
  padding: 10px;
}
div#result, div#id, div#materials {
  margin-left: 0px;
  width: 100%;
}
form#compare div[ucid] img,
form#compare > svg {
  width: 70px;
}
form#compare div#dcid {
  width: 45px;
  height: 45px;
}
form div.container:not(:first-child),
div > form:not(:first-child) {
  margin-left: 0;
}
div > form:not(:first-child) {
  margin-top: 1em;
}
div#id.compare div#spempty {
  width: 30px;
  height: 30px;
}
div > div#id.compare:not(:first-child) {
  margin-left: 10px;
}
div#armament {
  overflow-x: auto;
  overflow-y: hidden;
  width: 765px;
  margin: 0 auto;
}
table#info svg {
  width: 65px;
}
body * {
  font-size: 60px;
}
div#id.compare * {
  font-size: 20px;
}
div#id.compare img.origin {
  height: 100px;
}
div#id.compare img.pos {
  width: 24px;
}
div#id.compare img.skill,
div#id.compare img.sp {
  width: 36px;
}
div#id.compare svg {
  width: 24px;
}
div#id.compare img.weapon {
  width: 90px;
}
svg[srcc$=".png"] {
  width: 70px;
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
form div.container:first-child table.inner tr:last-child td {
  border-radius: 0;
}
form div.container:not(:first-child) table.inner tr:first-child td {
  border-radius: 0;
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
form table.inner td.width-1 {
  width: 1%;
}
tr#prop td {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
form input[type="text"],
form select {
  width: 90%;
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
img.unit.material {
  width: 200px;
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
div.s::after,
div.m::after,
div.l::after,
div.f::after {
  transform-origin: bottom right;
  transform: scale(2);
}
div#id.compare div.s::after,
div#id.compare div.m::after,
div#id.compare div.l::after,
div#id.compare div.f::after {
  transform: scale(1);
}
div#home > table {
  display: table;
  float: unset;
  margin: 0 auto;
  width:  864px;
  max-width: 864px;
}
div#home > table:not(:first-child) {
  margin-top: 1em;
}
}

div.s,
div.m,
div.l,
div.f {
  position: relative;
  display: inline-block;
}
div.s::after,
div.m::after,
div.l::after,
div.f::after {
  position: absolute;
  right: 0;
  bottom: 0;
  border-bottom-right-radius: 3.5px;
  overflow: hidden;
}
div.s::after {
  content: url(http://localhost/sdgo/img/weapon/s.png);
}
div.m::after {
  content: url(http://localhost/sdgo/img/weapon/m.png);
}
div.l::after {
  content: url(http://localhost/sdgo/img/weapon/l.png);
}
div.f::after {
  content: url(http://localhost/sdgo/img/weapon/f.png);
}