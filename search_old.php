<?
foreach ($_GET as $q => $v) {
  $_GET[$q] = preg_replace("/(delete|select|insert|union|update|drop|;|--\s)/i", "在干嘛", $v);
}
?>
<html>
<head>
<meta http-equiv="Content-Type"content="text/html; charset=UTF-8"/>
<title localization TC="SD高達 資料庫" SC="SD敢达 资料库">SD高達 資料庫</title>
<link rel="icon" type="image/png" href="https://s2.ax1x.com/2019/01/23/kV2znK.png" />
<script>
if (!window.location.href.match(/l=((T|S)C)/g)) {
  if (window.location.href.match(/\?/g)) {
    window.location.href = window.location.href+"&l=TC";
  } else {
    window.location.href = window.location.href+"?l=TC";
  }
}
if (!window.location.href.match(/fs=(20|18|16)/g)) {
  if (window.location.href.match(/\?/g)) {
    window.location.href = window.location.href+"&fs=16";
  } else {
    window.location.href = window.location.href+"?fs=16";
  }
}
</script>
<script>/*! jQuery v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license */
!function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(e,t){"use strict";var n=[],r=e.document,i=Object.getPrototypeOf,o=n.slice,a=n.concat,s=n.push,u=n.indexOf,l={},c=l.toString,f=l.hasOwnProperty,p=f.toString,d=p.call(Object),h={},g=function e(t){return"function"==typeof t&&"number"!=typeof t.nodeType},y=function e(t){return null!=t&&t===t.window},v={type:!0,src:!0,noModule:!0};function m(e,t,n){var i,o=(t=t||r).createElement("script");if(o.text=e,n)for(i in v)n[i]&&(o[i]=n[i]);t.head.appendChild(o).parentNode.removeChild(o)}function x(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?l[c.call(e)]||"object":typeof e}var b="3.3.1",w=function(e,t){return new w.fn.init(e,t)},T=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;w.fn=w.prototype={jquery:"3.3.1",constructor:w,length:0,toArray:function(){return o.call(this)},get:function(e){return null==e?o.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=w.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return w.each(this,e)},map:function(e){return this.pushStack(w.map(this,function(t,n){return e.call(t,n,t)}))},slice:function(){return this.pushStack(o.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(n>=0&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:s,sort:n.sort,splice:n.splice},w.extend=w.fn.extend=function(){var e,t,n,r,i,o,a=arguments[0]||{},s=1,u=arguments.length,l=!1;for("boolean"==typeof a&&(l=a,a=arguments[s]||{},s++),"object"==typeof a||g(a)||(a={}),s===u&&(a=this,s--);s<u;s++)if(null!=(e=arguments[s]))for(t in e)n=a[t],a!==(r=e[t])&&(l&&r&&(w.isPlainObject(r)||(i=Array.isArray(r)))?(i?(i=!1,o=n&&Array.isArray(n)?n:[]):o=n&&w.isPlainObject(n)?n:{},a[t]=w.extend(l,o,r)):void 0!==r&&(a[t]=r));return a},w.extend({expando:"jQuery"+("3.3.1"+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==c.call(e))&&(!(t=i(e))||"function"==typeof(n=f.call(t,"constructor")&&t.constructor)&&p.call(n)===d)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e){m(e)},each:function(e,t){var n,r=0;if(C(e)){for(n=e.length;r<n;r++)if(!1===t.call(e[r],r,e[r]))break}else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},trim:function(e){return null==e?"":(e+"").replace(T,"")},makeArray:function(e,t){var n=t||[];return null!=e&&(C(Object(e))?w.merge(n,"string"==typeof e?[e]:e):s.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:u.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r,i=[],o=0,a=e.length,s=!n;o<a;o++)(r=!t(e[o],o))!==s&&i.push(e[o]);return i},map:function(e,t,n){var r,i,o=0,s=[];if(C(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&s.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&s.push(i);return a.apply([],s)},guid:1,support:h}),"function"==typeof Symbol&&(w.fn[Symbol.iterator]=n[Symbol.iterator]),w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){l["[object "+t+"]"]=t.toLowerCase()});function C(e){var t=!!e&&"length"in e&&e.length,n=x(e);return!g(e)&&!y(e)&&("array"===n||0===t||"number"==typeof t&&t>0&&t-1 in e)}var E=function(e){var t,n,r,i,o,a,s,u,l,c,f,p,d,h,g,y,v,m,x,b="sizzle"+1*new Date,w=e.document,T=0,C=0,E=ae(),k=ae(),S=ae(),D=function(e,t){return e===t&&(f=!0),0},N={}.hasOwnProperty,A=[],j=A.pop,q=A.push,L=A.push,H=A.slice,O=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},P="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",R="(?:\\\\.|[\\w-]|[^\0-\\xa0])+",I="\\["+M+"*("+R+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+R+"))|)"+M+"*\\]",W=":("+R+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+I+")*)|.*)\\)|)",$=new RegExp(M+"+","g"),B=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),F=new RegExp("^"+M+"*,"+M+"*"),_=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),z=new RegExp("="+M+"*([^\\]'\"]*?)"+M+"*\\]","g"),X=new RegExp(W),U=new RegExp("^"+R+"$"),V={ID:new RegExp("^#("+R+")"),CLASS:new RegExp("^\\.("+R+")"),TAG:new RegExp("^("+R+"|[*])"),ATTR:new RegExp("^"+I),PSEUDO:new RegExp("^"+W),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+P+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},G=/^(?:input|select|textarea|button)$/i,Y=/^h\d$/i,Q=/^[^{]+\{\s*\[native \w/,J=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,K=/[+~]/,Z=new RegExp("\\\\([\\da-f]{1,6}"+M+"?|("+M+")|.)","ig"),ee=function(e,t,n){var r="0x"+t-65536;return r!==r||n?t:r<0?String.fromCharCode(r+65536):String.fromCharCode(r>>10|55296,1023&r|56320)},te=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ne=function(e,t){return t?"\0"===e?"\ufffd":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},re=function(){p()},ie=me(function(e){return!0===e.disabled&&("form"in e||"label"in e)},{dir:"parentNode",next:"legend"});try{L.apply(A=H.call(w.childNodes),w.childNodes),A[w.childNodes.length].nodeType}catch(e){L={apply:A.length?function(e,t){q.apply(e,H.call(t))}:function(e,t){var n=e.length,r=0;while(e[n++]=t[r++]);e.length=n-1}}}function oe(e,t,r,i){var o,s,l,c,f,h,v,m=t&&t.ownerDocument,T=t?t.nodeType:9;if(r=r||[],"string"!=typeof e||!e||1!==T&&9!==T&&11!==T)return r;if(!i&&((t?t.ownerDocument||t:w)!==d&&p(t),t=t||d,g)){if(11!==T&&(f=J.exec(e)))if(o=f[1]){if(9===T){if(!(l=t.getElementById(o)))return r;if(l.id===o)return r.push(l),r}else if(m&&(l=m.getElementById(o))&&x(t,l)&&l.id===o)return r.push(l),r}else{if(f[2])return L.apply(r,t.getElementsByTagName(e)),r;if((o=f[3])&&n.getElementsByClassName&&t.getElementsByClassName)return L.apply(r,t.getElementsByClassName(o)),r}if(n.qsa&&!S[e+" "]&&(!y||!y.test(e))){if(1!==T)m=t,v=e;else if("object"!==t.nodeName.toLowerCase()){(c=t.getAttribute("id"))?c=c.replace(te,ne):t.setAttribute("id",c=b),s=(h=a(e)).length;while(s--)h[s]="#"+c+" "+ve(h[s]);v=h.join(","),m=K.test(e)&&ge(t.parentNode)||t}if(v)try{return L.apply(r,m.querySelectorAll(v)),r}catch(e){}finally{c===b&&t.removeAttribute("id")}}}return u(e.replace(B,"$1"),t,r,i)}function ae(){var e=[];function t(n,i){return e.push(n+" ")>r.cacheLength&&delete t[e.shift()],t[n+" "]=i}return t}function se(e){return e[b]=!0,e}function ue(e){var t=d.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function le(e,t){var n=e.split("|"),i=n.length;while(i--)r.attrHandle[n[i]]=t}function ce(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function fe(e){return function(t){return"input"===t.nodeName.toLowerCase()&&t.type===e}}function pe(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function de(e){return function(t){return"form"in t?t.parentNode&&!1===t.disabled?"label"in t?"label"in t.parentNode?t.parentNode.disabled===e:t.disabled===e:t.isDisabled===e||t.isDisabled!==!e&&ie(t)===e:t.disabled===e:"label"in t&&t.disabled===e}}function he(e){return se(function(t){return t=+t,se(function(n,r){var i,o=e([],n.length,t),a=o.length;while(a--)n[i=o[a]]&&(n[i]=!(r[i]=n[i]))})})}function ge(e){return e&&"undefined"!=typeof e.getElementsByTagName&&e}n=oe.support={},o=oe.isXML=function(e){var t=e&&(e.ownerDocument||e).documentElement;return!!t&&"HTML"!==t.nodeName},p=oe.setDocument=function(e){var t,i,a=e?e.ownerDocument||e:w;return a!==d&&9===a.nodeType&&a.documentElement?(d=a,h=d.documentElement,g=!o(d),w!==d&&(i=d.defaultView)&&i.top!==i&&(i.addEventListener?i.addEventListener("unload",re,!1):i.attachEvent&&i.attachEvent("onunload",re)),n.attributes=ue(function(e){return e.className="i",!e.getAttribute("className")}),n.getElementsByTagName=ue(function(e){return e.appendChild(d.createComment("")),!e.getElementsByTagName("*").length}),n.getElementsByClassName=Q.test(d.getElementsByClassName),n.getById=ue(function(e){return h.appendChild(e).id=b,!d.getElementsByName||!d.getElementsByName(b).length}),n.getById?(r.filter.ID=function(e){var t=e.replace(Z,ee);return function(e){return e.getAttribute("id")===t}},r.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&g){var n=t.getElementById(e);return n?[n]:[]}}):(r.filter.ID=function(e){var t=e.replace(Z,ee);return function(e){var n="undefined"!=typeof e.getAttributeNode&&e.getAttributeNode("id");return n&&n.value===t}},r.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&g){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];i=t.getElementsByName(e),r=0;while(o=i[r++])if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),r.find.TAG=n.getElementsByTagName?function(e,t){return"undefined"!=typeof t.getElementsByTagName?t.getElementsByTagName(e):n.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},r.find.CLASS=n.getElementsByClassName&&function(e,t){if("undefined"!=typeof t.getElementsByClassName&&g)return t.getElementsByClassName(e)},v=[],y=[],(n.qsa=Q.test(d.querySelectorAll))&&(ue(function(e){h.appendChild(e).innerHTML="<a id='"+b+"'></a><select id='"+b+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&y.push("[*^$]="+M+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||y.push("\\["+M+"*(?:value|"+P+")"),e.querySelectorAll("[id~="+b+"-]").length||y.push("~="),e.querySelectorAll(":checked").length||y.push(":checked"),e.querySelectorAll("a#"+b+"+*").length||y.push(".#.+[+~]")}),ue(function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=d.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&y.push("name"+M+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&y.push(":enabled",":disabled"),h.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&y.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),y.push(",.*:")})),(n.matchesSelector=Q.test(m=h.matches||h.webkitMatchesSelector||h.mozMatchesSelector||h.oMatchesSelector||h.msMatchesSelector))&&ue(function(e){n.disconnectedMatch=m.call(e,"*"),m.call(e,"[s!='']:x"),v.push("!=",W)}),y=y.length&&new RegExp(y.join("|")),v=v.length&&new RegExp(v.join("|")),t=Q.test(h.compareDocumentPosition),x=t||Q.test(h.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},D=t?function(e,t){if(e===t)return f=!0,0;var r=!e.compareDocumentPosition-!t.compareDocumentPosition;return r||(1&(r=(e.ownerDocument||e)===(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!n.sortDetached&&t.compareDocumentPosition(e)===r?e===d||e.ownerDocument===w&&x(w,e)?-1:t===d||t.ownerDocument===w&&x(w,t)?1:c?O(c,e)-O(c,t):0:4&r?-1:1)}:function(e,t){if(e===t)return f=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,a=[e],s=[t];if(!i||!o)return e===d?-1:t===d?1:i?-1:o?1:c?O(c,e)-O(c,t):0;if(i===o)return ce(e,t);n=e;while(n=n.parentNode)a.unshift(n);n=t;while(n=n.parentNode)s.unshift(n);while(a[r]===s[r])r++;return r?ce(a[r],s[r]):a[r]===w?-1:s[r]===w?1:0},d):d},oe.matches=function(e,t){return oe(e,null,null,t)},oe.matchesSelector=function(e,t){if((e.ownerDocument||e)!==d&&p(e),t=t.replace(z,"='$1']"),n.matchesSelector&&g&&!S[t+" "]&&(!v||!v.test(t))&&(!y||!y.test(t)))try{var r=m.call(e,t);if(r||n.disconnectedMatch||e.document&&11!==e.document.nodeType)return r}catch(e){}return oe(t,d,null,[e]).length>0},oe.contains=function(e,t){return(e.ownerDocument||e)!==d&&p(e),x(e,t)},oe.attr=function(e,t){(e.ownerDocument||e)!==d&&p(e);var i=r.attrHandle[t.toLowerCase()],o=i&&N.call(r.attrHandle,t.toLowerCase())?i(e,t,!g):void 0;return void 0!==o?o:n.attributes||!g?e.getAttribute(t):(o=e.getAttributeNode(t))&&o.specified?o.value:null},oe.escape=function(e){return(e+"").replace(te,ne)},oe.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},oe.uniqueSort=function(e){var t,r=[],i=0,o=0;if(f=!n.detectDuplicates,c=!n.sortStable&&e.slice(0),e.sort(D),f){while(t=e[o++])t===e[o]&&(i=r.push(o));while(i--)e.splice(r[i],1)}return c=null,e},i=oe.getText=function(e){var t,n="",r=0,o=e.nodeType;if(o){if(1===o||9===o||11===o){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=i(e)}else if(3===o||4===o)return e.nodeValue}else while(t=e[r++])n+=i(t);return n},(r=oe.selectors={cacheLength:50,createPseudo:se,match:V,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(Z,ee),e[3]=(e[3]||e[4]||e[5]||"").replace(Z,ee),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||oe.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&oe.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return V.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&X.test(n)&&(t=a(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(Z,ee).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=E[e+" "];return t||(t=new RegExp("(^|"+M+")"+e+"("+M+"|$)"))&&E(e,function(e){return t.test("string"==typeof e.className&&e.className||"undefined"!=typeof e.getAttribute&&e.getAttribute("class")||"")})},ATTR:function(e,t,n){return function(r){var i=oe.attr(r,e);return null==i?"!="===t:!t||(i+="","="===t?i===n:"!="===t?i!==n:"^="===t?n&&0===i.indexOf(n):"*="===t?n&&i.indexOf(n)>-1:"$="===t?n&&i.slice(-n.length)===n:"~="===t?(" "+i.replace($," ")+" ").indexOf(n)>-1:"|="===t&&(i===n||i.slice(0,n.length+1)===n+"-"))}},CHILD:function(e,t,n,r,i){var o="nth"!==e.slice(0,3),a="last"!==e.slice(-4),s="of-type"===t;return 1===r&&0===i?function(e){return!!e.parentNode}:function(t,n,u){var l,c,f,p,d,h,g=o!==a?"nextSibling":"previousSibling",y=t.parentNode,v=s&&t.nodeName.toLowerCase(),m=!u&&!s,x=!1;if(y){if(o){while(g){p=t;while(p=p[g])if(s?p.nodeName.toLowerCase()===v:1===p.nodeType)return!1;h=g="only"===e&&!h&&"nextSibling"}return!0}if(h=[a?y.firstChild:y.lastChild],a&&m){x=(d=(l=(c=(f=(p=y)[b]||(p[b]={}))[p.uniqueID]||(f[p.uniqueID]={}))[e]||[])[0]===T&&l[1])&&l[2],p=d&&y.childNodes[d];while(p=++d&&p&&p[g]||(x=d=0)||h.pop())if(1===p.nodeType&&++x&&p===t){c[e]=[T,d,x];break}}else if(m&&(x=d=(l=(c=(f=(p=t)[b]||(p[b]={}))[p.uniqueID]||(f[p.uniqueID]={}))[e]||[])[0]===T&&l[1]),!1===x)while(p=++d&&p&&p[g]||(x=d=0)||h.pop())if((s?p.nodeName.toLowerCase()===v:1===p.nodeType)&&++x&&(m&&((c=(f=p[b]||(p[b]={}))[p.uniqueID]||(f[p.uniqueID]={}))[e]=[T,x]),p===t))break;return(x-=i)===r||x%r==0&&x/r>=0}}},PSEUDO:function(e,t){var n,i=r.pseudos[e]||r.setFilters[e.toLowerCase()]||oe.error("unsupported pseudo: "+e);return i[b]?i(t):i.length>1?(n=[e,e,"",t],r.setFilters.hasOwnProperty(e.toLowerCase())?se(function(e,n){var r,o=i(e,t),a=o.length;while(a--)e[r=O(e,o[a])]=!(n[r]=o[a])}):function(e){return i(e,0,n)}):i}},pseudos:{not:se(function(e){var t=[],n=[],r=s(e.replace(B,"$1"));return r[b]?se(function(e,t,n,i){var o,a=r(e,null,i,[]),s=e.length;while(s--)(o=a[s])&&(e[s]=!(t[s]=o))}):function(e,i,o){return t[0]=e,r(t,null,o,n),t[0]=null,!n.pop()}}),has:se(function(e){return function(t){return oe(e,t).length>0}}),contains:se(function(e){return e=e.replace(Z,ee),function(t){return(t.textContent||t.innerText||i(t)).indexOf(e)>-1}}),lang:se(function(e){return U.test(e||"")||oe.error("unsupported lang: "+e),e=e.replace(Z,ee).toLowerCase(),function(t){var n;do{if(n=g?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return(n=n.toLowerCase())===e||0===n.indexOf(e+"-")}while((t=t.parentNode)&&1===t.nodeType);return!1}}),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===h},focus:function(e){return e===d.activeElement&&(!d.hasFocus||d.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:de(!1),disabled:de(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!r.pseudos.empty(e)},header:function(e){return Y.test(e.nodeName)},input:function(e){return G.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:he(function(){return[0]}),last:he(function(e,t){return[t-1]}),eq:he(function(e,t,n){return[n<0?n+t:n]}),even:he(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:he(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:he(function(e,t,n){for(var r=n<0?n+t:n;--r>=0;)e.push(r);return e}),gt:he(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}}).pseudos.nth=r.pseudos.eq;for(t in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})r.pseudos[t]=fe(t);for(t in{submit:!0,reset:!0})r.pseudos[t]=pe(t);function ye(){}ye.prototype=r.filters=r.pseudos,r.setFilters=new ye,a=oe.tokenize=function(e,t){var n,i,o,a,s,u,l,c=k[e+" "];if(c)return t?0:c.slice(0);s=e,u=[],l=r.preFilter;while(s){n&&!(i=F.exec(s))||(i&&(s=s.slice(i[0].length)||s),u.push(o=[])),n=!1,(i=_.exec(s))&&(n=i.shift(),o.push({value:n,type:i[0].replace(B," ")}),s=s.slice(n.length));for(a in r.filter)!(i=V[a].exec(s))||l[a]&&!(i=l[a](i))||(n=i.shift(),o.push({value:n,type:a,matches:i}),s=s.slice(n.length));if(!n)break}return t?s.length:s?oe.error(e):k(e,u).slice(0)};function ve(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function me(e,t,n){var r=t.dir,i=t.next,o=i||r,a=n&&"parentNode"===o,s=C++;return t.first?function(t,n,i){while(t=t[r])if(1===t.nodeType||a)return e(t,n,i);return!1}:function(t,n,u){var l,c,f,p=[T,s];if(u){while(t=t[r])if((1===t.nodeType||a)&&e(t,n,u))return!0}else while(t=t[r])if(1===t.nodeType||a)if(f=t[b]||(t[b]={}),c=f[t.uniqueID]||(f[t.uniqueID]={}),i&&i===t.nodeName.toLowerCase())t=t[r]||t;else{if((l=c[o])&&l[0]===T&&l[1]===s)return p[2]=l[2];if(c[o]=p,p[2]=e(t,n,u))return!0}return!1}}function xe(e){return e.length>1?function(t,n,r){var i=e.length;while(i--)if(!e[i](t,n,r))return!1;return!0}:e[0]}function be(e,t,n){for(var r=0,i=t.length;r<i;r++)oe(e,t[r],n);return n}function we(e,t,n,r,i){for(var o,a=[],s=0,u=e.length,l=null!=t;s<u;s++)(o=e[s])&&(n&&!n(o,r,i)||(a.push(o),l&&t.push(s)));return a}function Te(e,t,n,r,i,o){return r&&!r[b]&&(r=Te(r)),i&&!i[b]&&(i=Te(i,o)),se(function(o,a,s,u){var l,c,f,p=[],d=[],h=a.length,g=o||be(t||"*",s.nodeType?[s]:s,[]),y=!e||!o&&t?g:we(g,p,e,s,u),v=n?i||(o?e:h||r)?[]:a:y;if(n&&n(y,v,s,u),r){l=we(v,d),r(l,[],s,u),c=l.length;while(c--)(f=l[c])&&(v[d[c]]=!(y[d[c]]=f))}if(o){if(i||e){if(i){l=[],c=v.length;while(c--)(f=v[c])&&l.push(y[c]=f);i(null,v=[],l,u)}c=v.length;while(c--)(f=v[c])&&(l=i?O(o,f):p[c])>-1&&(o[l]=!(a[l]=f))}}else v=we(v===a?v.splice(h,v.length):v),i?i(null,a,v,u):L.apply(a,v)})}function Ce(e){for(var t,n,i,o=e.length,a=r.relative[e[0].type],s=a||r.relative[" "],u=a?1:0,c=me(function(e){return e===t},s,!0),f=me(function(e){return O(t,e)>-1},s,!0),p=[function(e,n,r){var i=!a&&(r||n!==l)||((t=n).nodeType?c(e,n,r):f(e,n,r));return t=null,i}];u<o;u++)if(n=r.relative[e[u].type])p=[me(xe(p),n)];else{if((n=r.filter[e[u].type].apply(null,e[u].matches))[b]){for(i=++u;i<o;i++)if(r.relative[e[i].type])break;return Te(u>1&&xe(p),u>1&&ve(e.slice(0,u-1).concat({value:" "===e[u-2].type?"*":""})).replace(B,"$1"),n,u<i&&Ce(e.slice(u,i)),i<o&&Ce(e=e.slice(i)),i<o&&ve(e))}p.push(n)}return xe(p)}function Ee(e,t){var n=t.length>0,i=e.length>0,o=function(o,a,s,u,c){var f,h,y,v=0,m="0",x=o&&[],b=[],w=l,C=o||i&&r.find.TAG("*",c),E=T+=null==w?1:Math.random()||.1,k=C.length;for(c&&(l=a===d||a||c);m!==k&&null!=(f=C[m]);m++){if(i&&f){h=0,a||f.ownerDocument===d||(p(f),s=!g);while(y=e[h++])if(y(f,a||d,s)){u.push(f);break}c&&(T=E)}n&&((f=!y&&f)&&v--,o&&x.push(f))}if(v+=m,n&&m!==v){h=0;while(y=t[h++])y(x,b,a,s);if(o){if(v>0)while(m--)x[m]||b[m]||(b[m]=j.call(u));b=we(b)}L.apply(u,b),c&&!o&&b.length>0&&v+t.length>1&&oe.uniqueSort(u)}return c&&(T=E,l=w),x};return n?se(o):o}return s=oe.compile=function(e,t){var n,r=[],i=[],o=S[e+" "];if(!o){t||(t=a(e)),n=t.length;while(n--)(o=Ce(t[n]))[b]?r.push(o):i.push(o);(o=S(e,Ee(i,r))).selector=e}return o},u=oe.select=function(e,t,n,i){var o,u,l,c,f,p="function"==typeof e&&e,d=!i&&a(e=p.selector||e);if(n=n||[],1===d.length){if((u=d[0]=d[0].slice(0)).length>2&&"ID"===(l=u[0]).type&&9===t.nodeType&&g&&r.relative[u[1].type]){if(!(t=(r.find.ID(l.matches[0].replace(Z,ee),t)||[])[0]))return n;p&&(t=t.parentNode),e=e.slice(u.shift().value.length)}o=V.needsContext.test(e)?0:u.length;while(o--){if(l=u[o],r.relative[c=l.type])break;if((f=r.find[c])&&(i=f(l.matches[0].replace(Z,ee),K.test(u[0].type)&&ge(t.parentNode)||t))){if(u.splice(o,1),!(e=i.length&&ve(u)))return L.apply(n,i),n;break}}}return(p||s(e,d))(i,t,!g,n,!t||K.test(e)&&ge(t.parentNode)||t),n},n.sortStable=b.split("").sort(D).join("")===b,n.detectDuplicates=!!f,p(),n.sortDetached=ue(function(e){return 1&e.compareDocumentPosition(d.createElement("fieldset"))}),ue(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||le("type|href|height|width",function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)}),n.attributes&&ue(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||le("value",function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue}),ue(function(e){return null==e.getAttribute("disabled")})||le(P,function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null}),oe}(e);w.find=E,w.expr=E.selectors,w.expr[":"]=w.expr.pseudos,w.uniqueSort=w.unique=E.uniqueSort,w.text=E.getText,w.isXMLDoc=E.isXML,w.contains=E.contains,w.escapeSelector=E.escape;var k=function(e,t,n){var r=[],i=void 0!==n;while((e=e[t])&&9!==e.nodeType)if(1===e.nodeType){if(i&&w(e).is(n))break;r.push(e)}return r},S=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},D=w.expr.match.needsContext;function N(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var A=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function j(e,t,n){return g(t)?w.grep(e,function(e,r){return!!t.call(e,r,e)!==n}):t.nodeType?w.grep(e,function(e){return e===t!==n}):"string"!=typeof t?w.grep(e,function(e){return u.call(t,e)>-1!==n}):w.filter(t,e,n)}w.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?w.find.matchesSelector(r,e)?[r]:[]:w.find.matches(e,w.grep(t,function(e){return 1===e.nodeType}))},w.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(w(e).filter(function(){for(t=0;t<r;t++)if(w.contains(i[t],this))return!0}));for(n=this.pushStack([]),t=0;t<r;t++)w.find(e,i[t],n);return r>1?w.uniqueSort(n):n},filter:function(e){return this.pushStack(j(this,e||[],!1))},not:function(e){return this.pushStack(j(this,e||[],!0))},is:function(e){return!!j(this,"string"==typeof e&&D.test(e)?w(e):e||[],!1).length}});var q,L=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(w.fn.init=function(e,t,n){var i,o;if(!e)return this;if(n=n||q,"string"==typeof e){if(!(i="<"===e[0]&&">"===e[e.length-1]&&e.length>=3?[null,e,null]:L.exec(e))||!i[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(i[1]){if(t=t instanceof w?t[0]:t,w.merge(this,w.parseHTML(i[1],t&&t.nodeType?t.ownerDocument||t:r,!0)),A.test(i[1])&&w.isPlainObject(t))for(i in t)g(this[i])?this[i](t[i]):this.attr(i,t[i]);return this}return(o=r.getElementById(i[2]))&&(this[0]=o,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):g(e)?void 0!==n.ready?n.ready(e):e(w):w.makeArray(e,this)}).prototype=w.fn,q=w(r);var H=/^(?:parents|prev(?:Until|All))/,O={children:!0,contents:!0,next:!0,prev:!0};w.fn.extend({has:function(e){var t=w(e,this),n=t.length;return this.filter(function(){for(var e=0;e<n;e++)if(w.contains(this,t[e]))return!0})},closest:function(e,t){var n,r=0,i=this.length,o=[],a="string"!=typeof e&&w(e);if(!D.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(a?a.index(n)>-1:1===n.nodeType&&w.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(o.length>1?w.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?u.call(w(e),this[0]):u.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(w.uniqueSort(w.merge(this.get(),w(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}});function P(e,t){while((e=e[t])&&1!==e.nodeType);return e}w.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return k(e,"parentNode")},parentsUntil:function(e,t,n){return k(e,"parentNode",n)},next:function(e){return P(e,"nextSibling")},prev:function(e){return P(e,"previousSibling")},nextAll:function(e){return k(e,"nextSibling")},prevAll:function(e){return k(e,"previousSibling")},nextUntil:function(e,t,n){return k(e,"nextSibling",n)},prevUntil:function(e,t,n){return k(e,"previousSibling",n)},siblings:function(e){return S((e.parentNode||{}).firstChild,e)},children:function(e){return S(e.firstChild)},contents:function(e){return N(e,"iframe")?e.contentDocument:(N(e,"template")&&(e=e.content||e),w.merge([],e.childNodes))}},function(e,t){w.fn[e]=function(n,r){var i=w.map(this,t,n);return"Until"!==e.slice(-5)&&(r=n),r&&"string"==typeof r&&(i=w.filter(r,i)),this.length>1&&(O[e]||w.uniqueSort(i),H.test(e)&&i.reverse()),this.pushStack(i)}});var M=/[^\x20\t\r\n\f]+/g;function R(e){var t={};return w.each(e.match(M)||[],function(e,n){t[n]=!0}),t}w.Callbacks=function(e){e="string"==typeof e?R(e):w.extend({},e);var t,n,r,i,o=[],a=[],s=-1,u=function(){for(i=i||e.once,r=t=!0;a.length;s=-1){n=a.shift();while(++s<o.length)!1===o[s].apply(n[0],n[1])&&e.stopOnFalse&&(s=o.length,n=!1)}e.memory||(n=!1),t=!1,i&&(o=n?[]:"")},l={add:function(){return o&&(n&&!t&&(s=o.length-1,a.push(n)),function t(n){w.each(n,function(n,r){g(r)?e.unique&&l.has(r)||o.push(r):r&&r.length&&"string"!==x(r)&&t(r)})}(arguments),n&&!t&&u()),this},remove:function(){return w.each(arguments,function(e,t){var n;while((n=w.inArray(t,o,n))>-1)o.splice(n,1),n<=s&&s--}),this},has:function(e){return e?w.inArray(e,o)>-1:o.length>0},empty:function(){return o&&(o=[]),this},disable:function(){return i=a=[],o=n="",this},disabled:function(){return!o},lock:function(){return i=a=[],n||t||(o=n=""),this},locked:function(){return!!i},fireWith:function(e,n){return i||(n=[e,(n=n||[]).slice?n.slice():n],a.push(n),t||u()),this},fire:function(){return l.fireWith(this,arguments),this},fired:function(){return!!r}};return l};function I(e){return e}function W(e){throw e}function $(e,t,n,r){var i;try{e&&g(i=e.promise)?i.call(e).done(t).fail(n):e&&g(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}w.extend({Deferred:function(t){var n=[["notify","progress",w.Callbacks("memory"),w.Callbacks("memory"),2],["resolve","done",w.Callbacks("once memory"),w.Callbacks("once memory"),0,"resolved"],["reject","fail",w.Callbacks("once memory"),w.Callbacks("once memory"),1,"rejected"]],r="pending",i={state:function(){return r},always:function(){return o.done(arguments).fail(arguments),this},"catch":function(e){return i.then(null,e)},pipe:function(){var e=arguments;return w.Deferred(function(t){w.each(n,function(n,r){var i=g(e[r[4]])&&e[r[4]];o[r[1]](function(){var e=i&&i.apply(this,arguments);e&&g(e.promise)?e.promise().progress(t.notify).done(t.resolve).fail(t.reject):t[r[0]+"With"](this,i?[e]:arguments)})}),e=null}).promise()},then:function(t,r,i){var o=0;function a(t,n,r,i){return function(){var s=this,u=arguments,l=function(){var e,l;if(!(t<o)){if((e=r.apply(s,u))===n.promise())throw new TypeError("Thenable self-resolution");l=e&&("object"==typeof e||"function"==typeof e)&&e.then,g(l)?i?l.call(e,a(o,n,I,i),a(o,n,W,i)):(o++,l.call(e,a(o,n,I,i),a(o,n,W,i),a(o,n,I,n.notifyWith))):(r!==I&&(s=void 0,u=[e]),(i||n.resolveWith)(s,u))}},c=i?l:function(){try{l()}catch(e){w.Deferred.exceptionHook&&w.Deferred.exceptionHook(e,c.stackTrace),t+1>=o&&(r!==W&&(s=void 0,u=[e]),n.rejectWith(s,u))}};t?c():(w.Deferred.getStackHook&&(c.stackTrace=w.Deferred.getStackHook()),e.setTimeout(c))}}return w.Deferred(function(e){n[0][3].add(a(0,e,g(i)?i:I,e.notifyWith)),n[1][3].add(a(0,e,g(t)?t:I)),n[2][3].add(a(0,e,g(r)?r:W))}).promise()},promise:function(e){return null!=e?w.extend(e,i):i}},o={};return w.each(n,function(e,t){var a=t[2],s=t[5];i[t[1]]=a.add,s&&a.add(function(){r=s},n[3-e][2].disable,n[3-e][3].disable,n[0][2].lock,n[0][3].lock),a.add(t[3].fire),o[t[0]]=function(){return o[t[0]+"With"](this===o?void 0:this,arguments),this},o[t[0]+"With"]=a.fireWith}),i.promise(o),t&&t.call(o,o),o},when:function(e){var t=arguments.length,n=t,r=Array(n),i=o.call(arguments),a=w.Deferred(),s=function(e){return function(n){r[e]=this,i[e]=arguments.length>1?o.call(arguments):n,--t||a.resolveWith(r,i)}};if(t<=1&&($(e,a.done(s(n)).resolve,a.reject,!t),"pending"===a.state()||g(i[n]&&i[n].then)))return a.then();while(n--)$(i[n],s(n),a.reject);return a.promise()}});var B=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;w.Deferred.exceptionHook=function(t,n){e.console&&e.console.warn&&t&&B.test(t.name)&&e.console.warn("jQuery.Deferred exception: "+t.message,t.stack,n)},w.readyException=function(t){e.setTimeout(function(){throw t})};var F=w.Deferred();w.fn.ready=function(e){return F.then(e)["catch"](function(e){w.readyException(e)}),this},w.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--w.readyWait:w.isReady)||(w.isReady=!0,!0!==e&&--w.readyWait>0||F.resolveWith(r,[w]))}}),w.ready.then=F.then;function _(){r.removeEventListener("DOMContentLoaded",_),e.removeEventListener("load",_),w.ready()}"complete"===r.readyState||"loading"!==r.readyState&&!r.documentElement.doScroll?e.setTimeout(w.ready):(r.addEventListener("DOMContentLoaded",_),e.addEventListener("load",_));var z=function(e,t,n,r,i,o,a){var s=0,u=e.length,l=null==n;if("object"===x(n)){i=!0;for(s in n)z(e,t,s,n[s],!0,o,a)}else if(void 0!==r&&(i=!0,g(r)||(a=!0),l&&(a?(t.call(e,r),t=null):(l=t,t=function(e,t,n){return l.call(w(e),n)})),t))for(;s<u;s++)t(e[s],n,a?r:r.call(e[s],s,t(e[s],n)));return i?e:l?t.call(e):u?t(e[0],n):o},X=/^-ms-/,U=/-([a-z])/g;function V(e,t){return t.toUpperCase()}function G(e){return e.replace(X,"ms-").replace(U,V)}var Y=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function Q(){this.expando=w.expando+Q.uid++}Q.uid=1,Q.prototype={cache:function(e){var t=e[this.expando];return t||(t={},Y(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[G(t)]=n;else for(r in t)i[G(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][G(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(G):(t=G(t))in r?[t]:t.match(M)||[]).length;while(n--)delete r[t[n]]}(void 0===t||w.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!w.isEmptyObject(t)}};var J=new Q,K=new Q,Z=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,ee=/[A-Z]/g;function te(e){return"true"===e||"false"!==e&&("null"===e?null:e===+e+""?+e:Z.test(e)?JSON.parse(e):e)}function ne(e,t,n){var r;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(ee,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n=te(n)}catch(e){}K.set(e,t,n)}else n=void 0;return n}w.extend({hasData:function(e){return K.hasData(e)||J.hasData(e)},data:function(e,t,n){return K.access(e,t,n)},removeData:function(e,t){K.remove(e,t)},_data:function(e,t,n){return J.access(e,t,n)},_removeData:function(e,t){J.remove(e,t)}}),w.fn.extend({data:function(e,t){var n,r,i,o=this[0],a=o&&o.attributes;if(void 0===e){if(this.length&&(i=K.get(o),1===o.nodeType&&!J.get(o,"hasDataAttrs"))){n=a.length;while(n--)a[n]&&0===(r=a[n].name).indexOf("data-")&&(r=G(r.slice(5)),ne(o,r,i[r]));J.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof e?this.each(function(){K.set(this,e)}):z(this,function(t){var n;if(o&&void 0===t){if(void 0!==(n=K.get(o,e)))return n;if(void 0!==(n=ne(o,e)))return n}else this.each(function(){K.set(this,e,t)})},null,t,arguments.length>1,null,!0)},removeData:function(e){return this.each(function(){K.remove(this,e)})}}),w.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=J.get(e,t),n&&(!r||Array.isArray(n)?r=J.access(e,t,w.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=w.queue(e,t),r=n.length,i=n.shift(),o=w._queueHooks(e,t),a=function(){w.dequeue(e,t)};"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,a,o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return J.get(e,n)||J.access(e,n,{empty:w.Callbacks("once memory").add(function(){J.remove(e,[t+"queue",n])})})}}),w.fn.extend({queue:function(e,t){var n=2;return"string"!=typeof e&&(t=e,e="fx",n--),arguments.length<n?w.queue(this[0],e):void 0===t?this:this.each(function(){var n=w.queue(this,e,t);w._queueHooks(this,e),"fx"===e&&"inprogress"!==n[0]&&w.dequeue(this,e)})},dequeue:function(e){return this.each(function(){w.dequeue(this,e)})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=w.Deferred(),o=this,a=this.length,s=function(){--r||i.resolveWith(o,[o])};"string"!=typeof e&&(t=e,e=void 0),e=e||"fx";while(a--)(n=J.get(o[a],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(s));return s(),i.promise(t)}});var re=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,ie=new RegExp("^(?:([+-])=|)("+re+")([a-z%]*)$","i"),oe=["Top","Right","Bottom","Left"],ae=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&w.contains(e.ownerDocument,e)&&"none"===w.css(e,"display")},se=function(e,t,n,r){var i,o,a={};for(o in t)a[o]=e.style[o],e.style[o]=t[o];i=n.apply(e,r||[]);for(o in t)e.style[o]=a[o];return i};function ue(e,t,n,r){var i,o,a=20,s=r?function(){return r.cur()}:function(){return w.css(e,t,"")},u=s(),l=n&&n[3]||(w.cssNumber[t]?"":"px"),c=(w.cssNumber[t]||"px"!==l&&+u)&&ie.exec(w.css(e,t));if(c&&c[3]!==l){u/=2,l=l||c[3],c=+u||1;while(a--)w.style(e,t,c+l),(1-o)*(1-(o=s()/u||.5))<=0&&(a=0),c/=o;c*=2,w.style(e,t,c+l),n=n||[]}return n&&(c=+c||+u||0,i=n[1]?c+(n[1]+1)*n[2]:+n[2],r&&(r.unit=l,r.start=c,r.end=i)),i}var le={};function ce(e){var t,n=e.ownerDocument,r=e.nodeName,i=le[r];return i||(t=n.body.appendChild(n.createElement(r)),i=w.css(t,"display"),t.parentNode.removeChild(t),"none"===i&&(i="block"),le[r]=i,i)}function fe(e,t){for(var n,r,i=[],o=0,a=e.length;o<a;o++)(r=e[o]).style&&(n=r.style.display,t?("none"===n&&(i[o]=J.get(r,"display")||null,i[o]||(r.style.display="")),""===r.style.display&&ae(r)&&(i[o]=ce(r))):"none"!==n&&(i[o]="none",J.set(r,"display",n)));for(o=0;o<a;o++)null!=i[o]&&(e[o].style.display=i[o]);return e}w.fn.extend({show:function(){return fe(this,!0)},hide:function(){return fe(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){ae(this)?w(this).show():w(this).hide()})}});var pe=/^(?:checkbox|radio)$/i,de=/<([a-z][^\/\0>\x20\t\r\n\f]+)/i,he=/^$|^module$|\/(?:java|ecma)script/i,ge={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};ge.optgroup=ge.option,ge.tbody=ge.tfoot=ge.colgroup=ge.caption=ge.thead,ge.th=ge.td;function ye(e,t){var n;return n="undefined"!=typeof e.getElementsByTagName?e.getElementsByTagName(t||"*"):"undefined"!=typeof e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&N(e,t)?w.merge([e],n):n}function ve(e,t){for(var n=0,r=e.length;n<r;n++)J.set(e[n],"globalEval",!t||J.get(t[n],"globalEval"))}var me=/<|&#?\w+;/;function xe(e,t,n,r,i){for(var o,a,s,u,l,c,f=t.createDocumentFragment(),p=[],d=0,h=e.length;d<h;d++)if((o=e[d])||0===o)if("object"===x(o))w.merge(p,o.nodeType?[o]:o);else if(me.test(o)){a=a||f.appendChild(t.createElement("div")),s=(de.exec(o)||["",""])[1].toLowerCase(),u=ge[s]||ge._default,a.innerHTML=u[1]+w.htmlPrefilter(o)+u[2],c=u[0];while(c--)a=a.lastChild;w.merge(p,a.childNodes),(a=f.firstChild).textContent=""}else p.push(t.createTextNode(o));f.textContent="",d=0;while(o=p[d++])if(r&&w.inArray(o,r)>-1)i&&i.push(o);else if(l=w.contains(o.ownerDocument,o),a=ye(f.appendChild(o),"script"),l&&ve(a),n){c=0;while(o=a[c++])he.test(o.type||"")&&n.push(o)}return f}!function(){var e=r.createDocumentFragment().appendChild(r.createElement("div")),t=r.createElement("input");t.setAttribute("type","radio"),t.setAttribute("checked","checked"),t.setAttribute("name","t"),e.appendChild(t),h.checkClone=e.cloneNode(!0).cloneNode(!0).lastChild.checked,e.innerHTML="<textarea>x</textarea>",h.noCloneChecked=!!e.cloneNode(!0).lastChild.defaultValue}();var be=r.documentElement,we=/^key/,Te=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,Ce=/^([^.]*)(?:\.(.+)|)/;function Ee(){return!0}function ke(){return!1}function Se(){try{return r.activeElement}catch(e){}}function De(e,t,n,r,i,o){var a,s;if("object"==typeof t){"string"!=typeof n&&(r=r||n,n=void 0);for(s in t)De(e,s,n,r,t[s],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=ke;else if(!i)return e;return 1===o&&(a=i,(i=function(e){return w().off(e),a.apply(this,arguments)}).guid=a.guid||(a.guid=w.guid++)),e.each(function(){w.event.add(this,t,i,r,n)})}w.event={global:{},add:function(e,t,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,y=J.get(e);if(y){n.handler&&(n=(o=n).handler,i=o.selector),i&&w.find.matchesSelector(be,i),n.guid||(n.guid=w.guid++),(u=y.events)||(u=y.events={}),(a=y.handle)||(a=y.handle=function(t){return"undefined"!=typeof w&&w.event.triggered!==t.type?w.event.dispatch.apply(e,arguments):void 0}),l=(t=(t||"").match(M)||[""]).length;while(l--)d=g=(s=Ce.exec(t[l])||[])[1],h=(s[2]||"").split(".").sort(),d&&(f=w.event.special[d]||{},d=(i?f.delegateType:f.bindType)||d,f=w.event.special[d]||{},c=w.extend({type:d,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&w.expr.match.needsContext.test(i),namespace:h.join(".")},o),(p=u[d])||((p=u[d]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(e,r,h,a)||e.addEventListener&&e.addEventListener(d,a)),f.add&&(f.add.call(e,c),c.handler.guid||(c.handler.guid=n.guid)),i?p.splice(p.delegateCount++,0,c):p.push(c),w.event.global[d]=!0)}},remove:function(e,t,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,y=J.hasData(e)&&J.get(e);if(y&&(u=y.events)){l=(t=(t||"").match(M)||[""]).length;while(l--)if(s=Ce.exec(t[l])||[],d=g=s[1],h=(s[2]||"").split(".").sort(),d){f=w.event.special[d]||{},p=u[d=(r?f.delegateType:f.bindType)||d]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=p.length;while(o--)c=p[o],!i&&g!==c.origType||n&&n.guid!==c.guid||s&&!s.test(c.namespace)||r&&r!==c.selector&&("**"!==r||!c.selector)||(p.splice(o,1),c.selector&&p.delegateCount--,f.remove&&f.remove.call(e,c));a&&!p.length&&(f.teardown&&!1!==f.teardown.call(e,h,y.handle)||w.removeEvent(e,d,y.handle),delete u[d])}else for(d in u)w.event.remove(e,d+t[l],n,r,!0);w.isEmptyObject(u)&&J.remove(e,"handle events")}},dispatch:function(e){var t=w.event.fix(e),n,r,i,o,a,s,u=new Array(arguments.length),l=(J.get(this,"events")||{})[t.type]||[],c=w.event.special[t.type]||{};for(u[0]=t,n=1;n<arguments.length;n++)u[n]=arguments[n];if(t.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,t)){s=w.event.handlers.call(this,t,l),n=0;while((o=s[n++])&&!t.isPropagationStopped()){t.currentTarget=o.elem,r=0;while((a=o.handlers[r++])&&!t.isImmediatePropagationStopped())t.rnamespace&&!t.rnamespace.test(a.namespace)||(t.handleObj=a,t.data=a.data,void 0!==(i=((w.event.special[a.origType]||{}).handle||a.handler).apply(o.elem,u))&&!1===(t.result=i)&&(t.preventDefault(),t.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,t),t.result}},handlers:function(e,t){var n,r,i,o,a,s=[],u=t.delegateCount,l=e.target;if(u&&l.nodeType&&!("click"===e.type&&e.button>=1))for(;l!==this;l=l.parentNode||this)if(1===l.nodeType&&("click"!==e.type||!0!==l.disabled)){for(o=[],a={},n=0;n<u;n++)void 0===a[i=(r=t[n]).selector+" "]&&(a[i]=r.needsContext?w(i,this).index(l)>-1:w.find(i,this,null,[l]).length),a[i]&&o.push(r);o.length&&s.push({elem:l,handlers:o})}return l=this,u<t.length&&s.push({elem:l,handlers:t.slice(u)}),s},addProp:function(e,t){Object.defineProperty(w.Event.prototype,e,{enumerable:!0,configurable:!0,get:g(t)?function(){if(this.originalEvent)return t(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[e]},set:function(t){Object.defineProperty(this,e,{enumerable:!0,configurable:!0,writable:!0,value:t})}})},fix:function(e){return e[w.expando]?e:new w.Event(e)},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==Se()&&this.focus)return this.focus(),!1},delegateType:"focusin"},blur:{trigger:function(){if(this===Se()&&this.blur)return this.blur(),!1},delegateType:"focusout"},click:{trigger:function(){if("checkbox"===this.type&&this.click&&N(this,"input"))return this.click(),!1},_default:function(e){return N(e.target,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},w.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},w.Event=function(e,t){if(!(this instanceof w.Event))return new w.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?Ee:ke,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&w.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[w.expando]=!0},w.Event.prototype={constructor:w.Event,isDefaultPrevented:ke,isPropagationStopped:ke,isImmediatePropagationStopped:ke,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=Ee,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=Ee,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=Ee,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},w.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,"char":!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(e){var t=e.button;return null==e.which&&we.test(e.type)?null!=e.charCode?e.charCode:e.keyCode:!e.which&&void 0!==t&&Te.test(e.type)?1&t?1:2&t?3:4&t?2:0:e.which}},w.event.addProp),w.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(e,t){w.event.special[e]={delegateType:t,bindType:t,handle:function(e){var n,r=this,i=e.relatedTarget,o=e.handleObj;return i&&(i===r||w.contains(r,i))||(e.type=o.origType,n=o.handler.apply(this,arguments),e.type=t),n}}}),w.fn.extend({on:function(e,t,n,r){return De(this,e,t,n,r)},one:function(e,t,n,r){return De(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,w(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=ke),this.each(function(){w.event.remove(this,e,n,t)})}});var Ne=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,Ae=/<script|<style|<link/i,je=/checked\s*(?:[^=]|=\s*.checked.)/i,qe=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function Le(e,t){return N(e,"table")&&N(11!==t.nodeType?t:t.firstChild,"tr")?w(e).children("tbody")[0]||e:e}function He(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function Oe(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Pe(e,t){var n,r,i,o,a,s,u,l;if(1===t.nodeType){if(J.hasData(e)&&(o=J.access(e),a=J.set(t,o),l=o.events)){delete a.handle,a.events={};for(i in l)for(n=0,r=l[i].length;n<r;n++)w.event.add(t,i,l[i][n])}K.hasData(e)&&(s=K.access(e),u=w.extend({},s),K.set(t,u))}}function Me(e,t){var n=t.nodeName.toLowerCase();"input"===n&&pe.test(e.type)?t.checked=e.checked:"input"!==n&&"textarea"!==n||(t.defaultValue=e.defaultValue)}function Re(e,t,n,r){t=a.apply([],t);var i,o,s,u,l,c,f=0,p=e.length,d=p-1,y=t[0],v=g(y);if(v||p>1&&"string"==typeof y&&!h.checkClone&&je.test(y))return e.each(function(i){var o=e.eq(i);v&&(t[0]=y.call(this,i,o.html())),Re(o,t,n,r)});if(p&&(i=xe(t,e[0].ownerDocument,!1,e,r),o=i.firstChild,1===i.childNodes.length&&(i=o),o||r)){for(u=(s=w.map(ye(i,"script"),He)).length;f<p;f++)l=i,f!==d&&(l=w.clone(l,!0,!0),u&&w.merge(s,ye(l,"script"))),n.call(e[f],l,f);if(u)for(c=s[s.length-1].ownerDocument,w.map(s,Oe),f=0;f<u;f++)l=s[f],he.test(l.type||"")&&!J.access(l,"globalEval")&&w.contains(c,l)&&(l.src&&"module"!==(l.type||"").toLowerCase()?w._evalUrl&&w._evalUrl(l.src):m(l.textContent.replace(qe,""),c,l))}return e}function Ie(e,t,n){for(var r,i=t?w.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||w.cleanData(ye(r)),r.parentNode&&(n&&w.contains(r.ownerDocument,r)&&ve(ye(r,"script")),r.parentNode.removeChild(r));return e}w.extend({htmlPrefilter:function(e){return e.replace(Ne,"<$1></$2>")},clone:function(e,t,n){var r,i,o,a,s=e.cloneNode(!0),u=w.contains(e.ownerDocument,e);if(!(h.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||w.isXMLDoc(e)))for(a=ye(s),r=0,i=(o=ye(e)).length;r<i;r++)Me(o[r],a[r]);if(t)if(n)for(o=o||ye(e),a=a||ye(s),r=0,i=o.length;r<i;r++)Pe(o[r],a[r]);else Pe(e,s);return(a=ye(s,"script")).length>0&&ve(a,!u&&ye(e,"script")),s},cleanData:function(e){for(var t,n,r,i=w.event.special,o=0;void 0!==(n=e[o]);o++)if(Y(n)){if(t=n[J.expando]){if(t.events)for(r in t.events)i[r]?w.event.remove(n,r):w.removeEvent(n,r,t.handle);n[J.expando]=void 0}n[K.expando]&&(n[K.expando]=void 0)}}}),w.fn.extend({detach:function(e){return Ie(this,e,!0)},remove:function(e){return Ie(this,e)},text:function(e){return z(this,function(e){return void 0===e?w.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)})},null,e,arguments.length)},append:function(){return Re(this,arguments,function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||Le(this,e).appendChild(e)})},prepend:function(){return Re(this,arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Le(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return Re(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return Re(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(w.cleanData(ye(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map(function(){return w.clone(this,e,t)})},html:function(e){return z(this,function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!Ae.test(e)&&!ge[(de.exec(e)||["",""])[1].toLowerCase()]){e=w.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(w.cleanData(ye(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var e=[];return Re(this,arguments,function(t){var n=this.parentNode;w.inArray(this,e)<0&&(w.cleanData(ye(this)),n&&n.replaceChild(t,this))},e)}}),w.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,t){w.fn[e]=function(e){for(var n,r=[],i=w(e),o=i.length-1,a=0;a<=o;a++)n=a===o?this:this.clone(!0),w(i[a])[t](n),s.apply(r,n.get());return this.pushStack(r)}});var We=new RegExp("^("+re+")(?!px)[a-z%]+$","i"),$e=function(t){var n=t.ownerDocument.defaultView;return n&&n.opener||(n=e),n.getComputedStyle(t)},Be=new RegExp(oe.join("|"),"i");!function(){function t(){if(c){l.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",c.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",be.appendChild(l).appendChild(c);var t=e.getComputedStyle(c);i="1%"!==t.top,u=12===n(t.marginLeft),c.style.right="60%",s=36===n(t.right),o=36===n(t.width),c.style.position="absolute",a=36===c.offsetWidth||"absolute",be.removeChild(l),c=null}}function n(e){return Math.round(parseFloat(e))}var i,o,a,s,u,l=r.createElement("div"),c=r.createElement("div");c.style&&(c.style.backgroundClip="content-box",c.cloneNode(!0).style.backgroundClip="",h.clearCloneStyle="content-box"===c.style.backgroundClip,w.extend(h,{boxSizingReliable:function(){return t(),o},pixelBoxStyles:function(){return t(),s},pixelPosition:function(){return t(),i},reliableMarginLeft:function(){return t(),u},scrollboxSize:function(){return t(),a}}))}();function Fe(e,t,n){var r,i,o,a,s=e.style;return(n=n||$e(e))&&(""!==(a=n.getPropertyValue(t)||n[t])||w.contains(e.ownerDocument,e)||(a=w.style(e,t)),!h.pixelBoxStyles()&&We.test(a)&&Be.test(t)&&(r=s.width,i=s.minWidth,o=s.maxWidth,s.minWidth=s.maxWidth=s.width=a,a=n.width,s.width=r,s.minWidth=i,s.maxWidth=o)),void 0!==a?a+"":a}function _e(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}var ze=/^(none|table(?!-c[ea]).+)/,Xe=/^--/,Ue={position:"absolute",visibility:"hidden",display:"block"},Ve={letterSpacing:"0",fontWeight:"400"},Ge=["Webkit","Moz","ms"],Ye=r.createElement("div").style;function Qe(e){if(e in Ye)return e;var t=e[0].toUpperCase()+e.slice(1),n=Ge.length;while(n--)if((e=Ge[n]+t)in Ye)return e}function Je(e){var t=w.cssProps[e];return t||(t=w.cssProps[e]=Qe(e)||e),t}function Ke(e,t,n){var r=ie.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function Ze(e,t,n,r,i,o){var a="width"===t?1:0,s=0,u=0;if(n===(r?"border":"content"))return 0;for(;a<4;a+=2)"margin"===n&&(u+=w.css(e,n+oe[a],!0,i)),r?("content"===n&&(u-=w.css(e,"padding"+oe[a],!0,i)),"margin"!==n&&(u-=w.css(e,"border"+oe[a]+"Width",!0,i))):(u+=w.css(e,"padding"+oe[a],!0,i),"padding"!==n?u+=w.css(e,"border"+oe[a]+"Width",!0,i):s+=w.css(e,"border"+oe[a]+"Width",!0,i));return!r&&o>=0&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-s-.5))),u}function et(e,t,n){var r=$e(e),i=Fe(e,t,r),o="border-box"===w.css(e,"boxSizing",!1,r),a=o;if(We.test(i)){if(!n)return i;i="auto"}return a=a&&(h.boxSizingReliable()||i===e.style[t]),("auto"===i||!parseFloat(i)&&"inline"===w.css(e,"display",!1,r))&&(i=e["offset"+t[0].toUpperCase()+t.slice(1)],a=!0),(i=parseFloat(i)||0)+Ze(e,t,n||(o?"border":"content"),a,r,i)+"px"}w.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Fe(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,a,s=G(t),u=Xe.test(t),l=e.style;if(u||(t=Je(s)),a=w.cssHooks[t]||w.cssHooks[s],void 0===n)return a&&"get"in a&&void 0!==(i=a.get(e,!1,r))?i:l[t];"string"==(o=typeof n)&&(i=ie.exec(n))&&i[1]&&(n=ue(e,t,i),o="number"),null!=n&&n===n&&("number"===o&&(n+=i&&i[3]||(w.cssNumber[s]?"":"px")),h.clearCloneStyle||""!==n||0!==t.indexOf("background")||(l[t]="inherit"),a&&"set"in a&&void 0===(n=a.set(e,n,r))||(u?l.setProperty(t,n):l[t]=n))}},css:function(e,t,n,r){var i,o,a,s=G(t);return Xe.test(t)||(t=Je(s)),(a=w.cssHooks[t]||w.cssHooks[s])&&"get"in a&&(i=a.get(e,!0,n)),void 0===i&&(i=Fe(e,t,r)),"normal"===i&&t in Ve&&(i=Ve[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),w.each(["height","width"],function(e,t){w.cssHooks[t]={get:function(e,n,r){if(n)return!ze.test(w.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?et(e,t,r):se(e,Ue,function(){return et(e,t,r)})},set:function(e,n,r){var i,o=$e(e),a="border-box"===w.css(e,"boxSizing",!1,o),s=r&&Ze(e,t,r,a,o);return a&&h.scrollboxSize()===o.position&&(s-=Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-parseFloat(o[t])-Ze(e,t,"border",!1,o)-.5)),s&&(i=ie.exec(n))&&"px"!==(i[3]||"px")&&(e.style[t]=n,n=w.css(e,t)),Ke(e,n,s)}}}),w.cssHooks.marginLeft=_e(h.reliableMarginLeft,function(e,t){if(t)return(parseFloat(Fe(e,"marginLeft"))||e.getBoundingClientRect().left-se(e,{marginLeft:0},function(){return e.getBoundingClientRect().left}))+"px"}),w.each({margin:"",padding:"",border:"Width"},function(e,t){w.cssHooks[e+t]={expand:function(n){for(var r=0,i={},o="string"==typeof n?n.split(" "):[n];r<4;r++)i[e+oe[r]+t]=o[r]||o[r-2]||o[0];return i}},"margin"!==e&&(w.cssHooks[e+t].set=Ke)}),w.fn.extend({css:function(e,t){return z(this,function(e,t,n){var r,i,o={},a=0;if(Array.isArray(t)){for(r=$e(e),i=t.length;a<i;a++)o[t[a]]=w.css(e,t[a],!1,r);return o}return void 0!==n?w.style(e,t,n):w.css(e,t)},e,t,arguments.length>1)}});function tt(e,t,n,r,i){return new tt.prototype.init(e,t,n,r,i)}w.Tween=tt,tt.prototype={constructor:tt,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||w.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(w.cssNumber[n]?"":"px")},cur:function(){var e=tt.propHooks[this.prop];return e&&e.get?e.get(this):tt.propHooks._default.get(this)},run:function(e){var t,n=tt.propHooks[this.prop];return this.options.duration?this.pos=t=w.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):tt.propHooks._default.set(this),this}},tt.prototype.init.prototype=tt.prototype,tt.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=w.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){w.fx.step[e.prop]?w.fx.step[e.prop](e):1!==e.elem.nodeType||null==e.elem.style[w.cssProps[e.prop]]&&!w.cssHooks[e.prop]?e.elem[e.prop]=e.now:w.style(e.elem,e.prop,e.now+e.unit)}}},tt.propHooks.scrollTop=tt.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},w.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},w.fx=tt.prototype.init,w.fx.step={};var nt,rt,it=/^(?:toggle|show|hide)$/,ot=/queueHooks$/;function at(){rt&&(!1===r.hidden&&e.requestAnimationFrame?e.requestAnimationFrame(at):e.setTimeout(at,w.fx.interval),w.fx.tick())}function st(){return e.setTimeout(function(){nt=void 0}),nt=Date.now()}function ut(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=oe[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function lt(e,t,n){for(var r,i=(pt.tweeners[t]||[]).concat(pt.tweeners["*"]),o=0,a=i.length;o<a;o++)if(r=i[o].call(n,t,e))return r}function ct(e,t,n){var r,i,o,a,s,u,l,c,f="width"in t||"height"in t,p=this,d={},h=e.style,g=e.nodeType&&ae(e),y=J.get(e,"fxshow");n.queue||(null==(a=w._queueHooks(e,"fx")).unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,p.always(function(){p.always(function(){a.unqueued--,w.queue(e,"fx").length||a.empty.fire()})}));for(r in t)if(i=t[r],it.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!y||void 0===y[r])continue;g=!0}d[r]=y&&y[r]||w.style(e,r)}if((u=!w.isEmptyObject(t))||!w.isEmptyObject(d)){f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(l=y&&y.display)&&(l=J.get(e,"display")),"none"===(c=w.css(e,"display"))&&(l?c=l:(fe([e],!0),l=e.style.display||l,c=w.css(e,"display"),fe([e]))),("inline"===c||"inline-block"===c&&null!=l)&&"none"===w.css(e,"float")&&(u||(p.done(function(){h.display=l}),null==l&&(c=h.display,l="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",p.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),u=!1;for(r in d)u||(y?"hidden"in y&&(g=y.hidden):y=J.access(e,"fxshow",{display:l}),o&&(y.hidden=!g),g&&fe([e],!0),p.done(function(){g||fe([e]),J.remove(e,"fxshow");for(r in d)w.style(e,r,d[r])})),u=lt(g?y[r]:0,r,p),r in y||(y[r]=u.start,g&&(u.end=u.start,u.start=0))}}function ft(e,t){var n,r,i,o,a;for(n in e)if(r=G(n),i=t[r],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(a=w.cssHooks[r])&&"expand"in a){o=a.expand(o),delete e[r];for(n in o)n in e||(e[n]=o[n],t[n]=i)}else t[r]=i}function pt(e,t,n){var r,i,o=0,a=pt.prefilters.length,s=w.Deferred().always(function(){delete u.elem}),u=function(){if(i)return!1;for(var t=nt||st(),n=Math.max(0,l.startTime+l.duration-t),r=1-(n/l.duration||0),o=0,a=l.tweens.length;o<a;o++)l.tweens[o].run(r);return s.notifyWith(e,[l,r,n]),r<1&&a?n:(a||s.notifyWith(e,[l,1,0]),s.resolveWith(e,[l]),!1)},l=s.promise({elem:e,props:w.extend({},t),opts:w.extend(!0,{specialEasing:{},easing:w.easing._default},n),originalProperties:t,originalOptions:n,startTime:nt||st(),duration:n.duration,tweens:[],createTween:function(t,n){var r=w.Tween(e,l.opts,t,n,l.opts.specialEasing[t]||l.opts.easing);return l.tweens.push(r),r},stop:function(t){var n=0,r=t?l.tweens.length:0;if(i)return this;for(i=!0;n<r;n++)l.tweens[n].run(1);return t?(s.notifyWith(e,[l,1,0]),s.resolveWith(e,[l,t])):s.rejectWith(e,[l,t]),this}}),c=l.props;for(ft(c,l.opts.specialEasing);o<a;o++)if(r=pt.prefilters[o].call(l,e,c,l.opts))return g(r.stop)&&(w._queueHooks(l.elem,l.opts.queue).stop=r.stop.bind(r)),r;return w.map(c,lt,l),g(l.opts.start)&&l.opts.start.call(e,l),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always),w.fx.timer(w.extend(u,{elem:e,anim:l,queue:l.opts.queue})),l}w.Animation=w.extend(pt,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return ue(n.elem,e,ie.exec(t),n),n}]},tweener:function(e,t){g(e)?(t=e,e=["*"]):e=e.match(M);for(var n,r=0,i=e.length;r<i;r++)n=e[r],pt.tweeners[n]=pt.tweeners[n]||[],pt.tweeners[n].unshift(t)},prefilters:[ct],prefilter:function(e,t){t?pt.prefilters.unshift(e):pt.prefilters.push(e)}}),w.speed=function(e,t,n){var r=e&&"object"==typeof e?w.extend({},e):{complete:n||!n&&t||g(e)&&e,duration:e,easing:n&&t||t&&!g(t)&&t};return w.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in w.fx.speeds?r.duration=w.fx.speeds[r.duration]:r.duration=w.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){g(r.old)&&r.old.call(this),r.queue&&w.dequeue(this,r.queue)},r},w.fn.extend({fadeTo:function(e,t,n,r){return this.filter(ae).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(e,t,n,r){var i=w.isEmptyObject(e),o=w.speed(t,n,r),a=function(){var t=pt(this,w.extend({},e),o);(i||J.get(this,"finish"))&&t.stop(!0)};return a.finish=a,i||!1===o.queue?this.each(a):this.queue(o.queue,a)},stop:function(e,t,n){var r=function(e){var t=e.stop;delete e.stop,t(n)};return"string"!=typeof e&&(n=t,t=e,e=void 0),t&&!1!==e&&this.queue(e||"fx",[]),this.each(function(){var t=!0,i=null!=e&&e+"queueHooks",o=w.timers,a=J.get(this);if(i)a[i]&&a[i].stop&&r(a[i]);else for(i in a)a[i]&&a[i].stop&&ot.test(i)&&r(a[i]);for(i=o.length;i--;)o[i].elem!==this||null!=e&&o[i].queue!==e||(o[i].anim.stop(n),t=!1,o.splice(i,1));!t&&n||w.dequeue(this,e)})},finish:function(e){return!1!==e&&(e=e||"fx"),this.each(function(){var t,n=J.get(this),r=n[e+"queue"],i=n[e+"queueHooks"],o=w.timers,a=r?r.length:0;for(n.finish=!0,w.queue(this,e,[]),i&&i.stop&&i.stop.call(this,!0),t=o.length;t--;)o[t].elem===this&&o[t].queue===e&&(o[t].anim.stop(!0),o.splice(t,1));for(t=0;t<a;t++)r[t]&&r[t].finish&&r[t].finish.call(this);delete n.finish})}}),w.each(["toggle","show","hide"],function(e,t){var n=w.fn[t];w.fn[t]=function(e,r,i){return null==e||"boolean"==typeof e?n.apply(this,arguments):this.animate(ut(t,!0),e,r,i)}}),w.each({slideDown:ut("show"),slideUp:ut("hide"),slideToggle:ut("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,t){w.fn[e]=function(e,n,r){return this.animate(t,e,n,r)}}),w.timers=[],w.fx.tick=function(){var e,t=0,n=w.timers;for(nt=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||w.fx.stop(),nt=void 0},w.fx.timer=function(e){w.timers.push(e),w.fx.start()},w.fx.interval=13,w.fx.start=function(){rt||(rt=!0,at())},w.fx.stop=function(){rt=null},w.fx.speeds={slow:600,fast:200,_default:400},w.fn.delay=function(t,n){return t=w.fx?w.fx.speeds[t]||t:t,n=n||"fx",this.queue(n,function(n,r){var i=e.setTimeout(n,t);r.stop=function(){e.clearTimeout(i)}})},function(){var e=r.createElement("input"),t=r.createElement("select").appendChild(r.createElement("option"));e.type="checkbox",h.checkOn=""!==e.value,h.optSelected=t.selected,(e=r.createElement("input")).value="t",e.type="radio",h.radioValue="t"===e.value}();var dt,ht=w.expr.attrHandle;w.fn.extend({attr:function(e,t){return z(this,w.attr,e,t,arguments.length>1)},removeAttr:function(e){return this.each(function(){w.removeAttr(this,e)})}}),w.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return"undefined"==typeof e.getAttribute?w.prop(e,t,n):(1===o&&w.isXMLDoc(e)||(i=w.attrHooks[t.toLowerCase()]||(w.expr.match.bool.test(t)?dt:void 0)),void 0!==n?null===n?void w.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=w.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!h.radioValue&&"radio"===t&&N(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(M);if(i&&1===e.nodeType)while(n=i[r++])e.removeAttribute(n)}}),dt={set:function(e,t,n){return!1===t?w.removeAttr(e,n):e.setAttribute(n,n),n}},w.each(w.expr.match.bool.source.match(/\w+/g),function(e,t){var n=ht[t]||w.find.attr;ht[t]=function(e,t,r){var i,o,a=t.toLowerCase();return r||(o=ht[a],ht[a]=i,i=null!=n(e,t,r)?a:null,ht[a]=o),i}});var gt=/^(?:input|select|textarea|button)$/i,yt=/^(?:a|area)$/i;w.fn.extend({prop:function(e,t){return z(this,w.prop,e,t,arguments.length>1)},removeProp:function(e){return this.each(function(){delete this[w.propFix[e]||e]})}}),w.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&w.isXMLDoc(e)||(t=w.propFix[t]||t,i=w.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=w.find.attr(e,"tabindex");return t?parseInt(t,10):gt.test(e.nodeName)||yt.test(e.nodeName)&&e.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),h.optSelected||(w.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),w.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){w.propFix[this.toLowerCase()]=this});function vt(e){return(e.match(M)||[]).join(" ")}function mt(e){return e.getAttribute&&e.getAttribute("class")||""}function xt(e){return Array.isArray(e)?e:"string"==typeof e?e.match(M)||[]:[]}w.fn.extend({addClass:function(e){var t,n,r,i,o,a,s,u=0;if(g(e))return this.each(function(t){w(this).addClass(e.call(this,t,mt(this)))});if((t=xt(e)).length)while(n=this[u++])if(i=mt(n),r=1===n.nodeType&&" "+vt(i)+" "){a=0;while(o=t[a++])r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(s=vt(r))&&n.setAttribute("class",s)}return this},removeClass:function(e){var t,n,r,i,o,a,s,u=0;if(g(e))return this.each(function(t){w(this).removeClass(e.call(this,t,mt(this)))});if(!arguments.length)return this.attr("class","");if((t=xt(e)).length)while(n=this[u++])if(i=mt(n),r=1===n.nodeType&&" "+vt(i)+" "){a=0;while(o=t[a++])while(r.indexOf(" "+o+" ")>-1)r=r.replace(" "+o+" "," ");i!==(s=vt(r))&&n.setAttribute("class",s)}return this},toggleClass:function(e,t){var n=typeof e,r="string"===n||Array.isArray(e);return"boolean"==typeof t&&r?t?this.addClass(e):this.removeClass(e):g(e)?this.each(function(n){w(this).toggleClass(e.call(this,n,mt(this),t),t)}):this.each(function(){var t,i,o,a;if(r){i=0,o=w(this),a=xt(e);while(t=a[i++])o.hasClass(t)?o.removeClass(t):o.addClass(t)}else void 0!==e&&"boolean"!==n||((t=mt(this))&&J.set(this,"__className__",t),this.setAttribute&&this.setAttribute("class",t||!1===e?"":J.get(this,"__className__")||""))})},hasClass:function(e){var t,n,r=0;t=" "+e+" ";while(n=this[r++])if(1===n.nodeType&&(" "+vt(mt(n))+" ").indexOf(t)>-1)return!0;return!1}});var bt=/\r/g;w.fn.extend({val:function(e){var t,n,r,i=this[0];{if(arguments.length)return r=g(e),this.each(function(n){var i;1===this.nodeType&&(null==(i=r?e.call(this,n,w(this).val()):e)?i="":"number"==typeof i?i+="":Array.isArray(i)&&(i=w.map(i,function(e){return null==e?"":e+""})),(t=w.valHooks[this.type]||w.valHooks[this.nodeName.toLowerCase()])&&"set"in t&&void 0!==t.set(this,i,"value")||(this.value=i))});if(i)return(t=w.valHooks[i.type]||w.valHooks[i.nodeName.toLowerCase()])&&"get"in t&&void 0!==(n=t.get(i,"value"))?n:"string"==typeof(n=i.value)?n.replace(bt,""):null==n?"":n}}}),w.extend({valHooks:{option:{get:function(e){var t=w.find.attr(e,"value");return null!=t?t:vt(w.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,a="select-one"===e.type,s=a?null:[],u=a?o+1:i.length;for(r=o<0?u:a?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!N(n.parentNode,"optgroup"))){if(t=w(n).val(),a)return t;s.push(t)}return s},set:function(e,t){var n,r,i=e.options,o=w.makeArray(t),a=i.length;while(a--)((r=i[a]).selected=w.inArray(w.valHooks.option.get(r),o)>-1)&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),w.each(["radio","checkbox"],function(){w.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=w.inArray(w(e).val(),t)>-1}},h.checkOn||(w.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})}),h.focusin="onfocusin"in e;var wt=/^(?:focusinfocus|focusoutblur)$/,Tt=function(e){e.stopPropagation()};w.extend(w.event,{trigger:function(t,n,i,o){var a,s,u,l,c,p,d,h,v=[i||r],m=f.call(t,"type")?t.type:t,x=f.call(t,"namespace")?t.namespace.split("."):[];if(s=h=u=i=i||r,3!==i.nodeType&&8!==i.nodeType&&!wt.test(m+w.event.triggered)&&(m.indexOf(".")>-1&&(m=(x=m.split(".")).shift(),x.sort()),c=m.indexOf(":")<0&&"on"+m,t=t[w.expando]?t:new w.Event(m,"object"==typeof t&&t),t.isTrigger=o?2:3,t.namespace=x.join("."),t.rnamespace=t.namespace?new RegExp("(^|\\.)"+x.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,t.result=void 0,t.target||(t.target=i),n=null==n?[t]:w.makeArray(n,[t]),d=w.event.special[m]||{},o||!d.trigger||!1!==d.trigger.apply(i,n))){if(!o&&!d.noBubble&&!y(i)){for(l=d.delegateType||m,wt.test(l+m)||(s=s.parentNode);s;s=s.parentNode)v.push(s),u=s;u===(i.ownerDocument||r)&&v.push(u.defaultView||u.parentWindow||e)}a=0;while((s=v[a++])&&!t.isPropagationStopped())h=s,t.type=a>1?l:d.bindType||m,(p=(J.get(s,"events")||{})[t.type]&&J.get(s,"handle"))&&p.apply(s,n),(p=c&&s[c])&&p.apply&&Y(s)&&(t.result=p.apply(s,n),!1===t.result&&t.preventDefault());return t.type=m,o||t.isDefaultPrevented()||d._default&&!1!==d._default.apply(v.pop(),n)||!Y(i)||c&&g(i[m])&&!y(i)&&((u=i[c])&&(i[c]=null),w.event.triggered=m,t.isPropagationStopped()&&h.addEventListener(m,Tt),i[m](),t.isPropagationStopped()&&h.removeEventListener(m,Tt),w.event.triggered=void 0,u&&(i[c]=u)),t.result}},simulate:function(e,t,n){var r=w.extend(new w.Event,n,{type:e,isSimulated:!0});w.event.trigger(r,null,t)}}),w.fn.extend({trigger:function(e,t){return this.each(function(){w.event.trigger(e,t,this)})},triggerHandler:function(e,t){var n=this[0];if(n)return w.event.trigger(e,t,n,!0)}}),h.focusin||w.each({focus:"focusin",blur:"focusout"},function(e,t){var n=function(e){w.event.simulate(t,e.target,w.event.fix(e))};w.event.special[t]={setup:function(){var r=this.ownerDocument||this,i=J.access(r,t);i||r.addEventListener(e,n,!0),J.access(r,t,(i||0)+1)},teardown:function(){var r=this.ownerDocument||this,i=J.access(r,t)-1;i?J.access(r,t,i):(r.removeEventListener(e,n,!0),J.remove(r,t))}}});var Ct=e.location,Et=Date.now(),kt=/\?/;w.parseXML=function(t){var n;if(!t||"string"!=typeof t)return null;try{n=(new e.DOMParser).parseFromString(t,"text/xml")}catch(e){n=void 0}return n&&!n.getElementsByTagName("parsererror").length||w.error("Invalid XML: "+t),n};var St=/\[\]$/,Dt=/\r?\n/g,Nt=/^(?:submit|button|image|reset|file)$/i,At=/^(?:input|select|textarea|keygen)/i;function jt(e,t,n,r){var i;if(Array.isArray(t))w.each(t,function(t,i){n||St.test(e)?r(e,i):jt(e+"["+("object"==typeof i&&null!=i?t:"")+"]",i,n,r)});else if(n||"object"!==x(t))r(e,t);else for(i in t)jt(e+"["+i+"]",t[i],n,r)}w.param=function(e,t){var n,r=[],i=function(e,t){var n=g(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(Array.isArray(e)||e.jquery&&!w.isPlainObject(e))w.each(e,function(){i(this.name,this.value)});else for(n in e)jt(n,e[n],t,i);return r.join("&")},w.fn.extend({serialize:function(){return w.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=w.prop(this,"elements");return e?w.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!w(this).is(":disabled")&&At.test(this.nodeName)&&!Nt.test(e)&&(this.checked||!pe.test(e))}).map(function(e,t){var n=w(this).val();return null==n?null:Array.isArray(n)?w.map(n,function(e){return{name:t.name,value:e.replace(Dt,"\r\n")}}):{name:t.name,value:n.replace(Dt,"\r\n")}}).get()}});var qt=/%20/g,Lt=/#.*$/,Ht=/([?&])_=[^&]*/,Ot=/^(.*?):[ \t]*([^\r\n]*)$/gm,Pt=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Mt=/^(?:GET|HEAD)$/,Rt=/^\/\//,It={},Wt={},$t="*/".concat("*"),Bt=r.createElement("a");Bt.href=Ct.href;function Ft(e){return function(t,n){"string"!=typeof t&&(n=t,t="*");var r,i=0,o=t.toLowerCase().match(M)||[];if(g(n))while(r=o[i++])"+"===r[0]?(r=r.slice(1)||"*",(e[r]=e[r]||[]).unshift(n)):(e[r]=e[r]||[]).push(n)}}function _t(e,t,n,r){var i={},o=e===Wt;function a(s){var u;return i[s]=!0,w.each(e[s]||[],function(e,s){var l=s(t,n,r);return"string"!=typeof l||o||i[l]?o?!(u=l):void 0:(t.dataTypes.unshift(l),a(l),!1)}),u}return a(t.dataTypes[0])||!i["*"]&&a("*")}function zt(e,t){var n,r,i=w.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&w.extend(!0,e,r),e}function Xt(e,t,n){var r,i,o,a,s=e.contents,u=e.dataTypes;while("*"===u[0])u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in s)if(s[i]&&s[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}a||(a=i)}o=o||a}if(o)return o!==u[0]&&u.unshift(o),n[o]}function Ut(e,t,n,r){var i,o,a,s,u,l={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)l[a.toLowerCase()]=e.converters[a];o=c.shift();while(o)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=c.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(a=l[u+" "+o]||l["* "+o]))for(i in l)if((s=i.split(" "))[1]===o&&(a=l[u+" "+s[0]]||l["* "+s[0]])){!0===a?a=l[i]:!0!==l[i]&&(o=s[0],c.unshift(s[1]));break}if(!0!==a)if(a&&e["throws"])t=a(t);else try{t=a(t)}catch(e){return{state:"parsererror",error:a?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}w.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Ct.href,type:"GET",isLocal:Pt.test(Ct.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":$t,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":w.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?zt(zt(e,w.ajaxSettings),t):zt(w.ajaxSettings,e)},ajaxPrefilter:Ft(It),ajaxTransport:Ft(Wt),ajax:function(t,n){"object"==typeof t&&(n=t,t=void 0),n=n||{};var i,o,a,s,u,l,c,f,p,d,h=w.ajaxSetup({},n),g=h.context||h,y=h.context&&(g.nodeType||g.jquery)?w(g):w.event,v=w.Deferred(),m=w.Callbacks("once memory"),x=h.statusCode||{},b={},T={},C="canceled",E={readyState:0,getResponseHeader:function(e){var t;if(c){if(!s){s={};while(t=Ot.exec(a))s[t[1].toLowerCase()]=t[2]}t=s[e.toLowerCase()]}return null==t?null:t},getAllResponseHeaders:function(){return c?a:null},setRequestHeader:function(e,t){return null==c&&(e=T[e.toLowerCase()]=T[e.toLowerCase()]||e,b[e]=t),this},overrideMimeType:function(e){return null==c&&(h.mimeType=e),this},statusCode:function(e){var t;if(e)if(c)E.always(e[E.status]);else for(t in e)x[t]=[x[t],e[t]];return this},abort:function(e){var t=e||C;return i&&i.abort(t),k(0,t),this}};if(v.promise(E),h.url=((t||h.url||Ct.href)+"").replace(Rt,Ct.protocol+"//"),h.type=n.method||n.type||h.method||h.type,h.dataTypes=(h.dataType||"*").toLowerCase().match(M)||[""],null==h.crossDomain){l=r.createElement("a");try{l.href=h.url,l.href=l.href,h.crossDomain=Bt.protocol+"//"+Bt.host!=l.protocol+"//"+l.host}catch(e){h.crossDomain=!0}}if(h.data&&h.processData&&"string"!=typeof h.data&&(h.data=w.param(h.data,h.traditional)),_t(It,h,n,E),c)return E;(f=w.event&&h.global)&&0==w.active++&&w.event.trigger("ajaxStart"),h.type=h.type.toUpperCase(),h.hasContent=!Mt.test(h.type),o=h.url.replace(Lt,""),h.hasContent?h.data&&h.processData&&0===(h.contentType||"").indexOf("application/x-www-form-urlencoded")&&(h.data=h.data.replace(qt,"+")):(d=h.url.slice(o.length),h.data&&(h.processData||"string"==typeof h.data)&&(o+=(kt.test(o)?"&":"?")+h.data,delete h.data),!1===h.cache&&(o=o.replace(Ht,"$1"),d=(kt.test(o)?"&":"?")+"_="+Et+++d),h.url=o+d),h.ifModified&&(w.lastModified[o]&&E.setRequestHeader("If-Modified-Since",w.lastModified[o]),w.etag[o]&&E.setRequestHeader("If-None-Match",w.etag[o])),(h.data&&h.hasContent&&!1!==h.contentType||n.contentType)&&E.setRequestHeader("Content-Type",h.contentType),E.setRequestHeader("Accept",h.dataTypes[0]&&h.accepts[h.dataTypes[0]]?h.accepts[h.dataTypes[0]]+("*"!==h.dataTypes[0]?", "+$t+"; q=0.01":""):h.accepts["*"]);for(p in h.headers)E.setRequestHeader(p,h.headers[p]);if(h.beforeSend&&(!1===h.beforeSend.call(g,E,h)||c))return E.abort();if(C="abort",m.add(h.complete),E.done(h.success),E.fail(h.error),i=_t(Wt,h,n,E)){if(E.readyState=1,f&&y.trigger("ajaxSend",[E,h]),c)return E;h.async&&h.timeout>0&&(u=e.setTimeout(function(){E.abort("timeout")},h.timeout));try{c=!1,i.send(b,k)}catch(e){if(c)throw e;k(-1,e)}}else k(-1,"No Transport");function k(t,n,r,s){var l,p,d,b,T,C=n;c||(c=!0,u&&e.clearTimeout(u),i=void 0,a=s||"",E.readyState=t>0?4:0,l=t>=200&&t<300||304===t,r&&(b=Xt(h,E,r)),b=Ut(h,b,E,l),l?(h.ifModified&&((T=E.getResponseHeader("Last-Modified"))&&(w.lastModified[o]=T),(T=E.getResponseHeader("etag"))&&(w.etag[o]=T)),204===t||"HEAD"===h.type?C="nocontent":304===t?C="notmodified":(C=b.state,p=b.data,l=!(d=b.error))):(d=C,!t&&C||(C="error",t<0&&(t=0))),E.status=t,E.statusText=(n||C)+"",l?v.resolveWith(g,[p,C,E]):v.rejectWith(g,[E,C,d]),E.statusCode(x),x=void 0,f&&y.trigger(l?"ajaxSuccess":"ajaxError",[E,h,l?p:d]),m.fireWith(g,[E,C]),f&&(y.trigger("ajaxComplete",[E,h]),--w.active||w.event.trigger("ajaxStop")))}return E},getJSON:function(e,t,n){return w.get(e,t,n,"json")},getScript:function(e,t){return w.get(e,void 0,t,"script")}}),w.each(["get","post"],function(e,t){w[t]=function(e,n,r,i){return g(n)&&(i=i||r,r=n,n=void 0),w.ajax(w.extend({url:e,type:t,dataType:i,data:n,success:r},w.isPlainObject(e)&&e))}}),w._evalUrl=function(e){return w.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,"throws":!0})},w.fn.extend({wrapAll:function(e){var t;return this[0]&&(g(e)&&(e=e.call(this[0])),t=w(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstElementChild)e=e.firstElementChild;return e}).append(this)),this},wrapInner:function(e){return g(e)?this.each(function(t){w(this).wrapInner(e.call(this,t))}):this.each(function(){var t=w(this),n=t.contents();n.length?n.wrapAll(e):t.append(e)})},wrap:function(e){var t=g(e);return this.each(function(n){w(this).wrapAll(t?e.call(this,n):e)})},unwrap:function(e){return this.parent(e).not("body").each(function(){w(this).replaceWith(this.childNodes)}),this}}),w.expr.pseudos.hidden=function(e){return!w.expr.pseudos.visible(e)},w.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},w.ajaxSettings.xhr=function(){try{return new e.XMLHttpRequest}catch(e){}};var Vt={0:200,1223:204},Gt=w.ajaxSettings.xhr();h.cors=!!Gt&&"withCredentials"in Gt,h.ajax=Gt=!!Gt,w.ajaxTransport(function(t){var n,r;if(h.cors||Gt&&!t.crossDomain)return{send:function(i,o){var a,s=t.xhr();if(s.open(t.type,t.url,t.async,t.username,t.password),t.xhrFields)for(a in t.xhrFields)s[a]=t.xhrFields[a];t.mimeType&&s.overrideMimeType&&s.overrideMimeType(t.mimeType),t.crossDomain||i["X-Requested-With"]||(i["X-Requested-With"]="XMLHttpRequest");for(a in i)s.setRequestHeader(a,i[a]);n=function(e){return function(){n&&(n=r=s.onload=s.onerror=s.onabort=s.ontimeout=s.onreadystatechange=null,"abort"===e?s.abort():"error"===e?"number"!=typeof s.status?o(0,"error"):o(s.status,s.statusText):o(Vt[s.status]||s.status,s.statusText,"text"!==(s.responseType||"text")||"string"!=typeof s.responseText?{binary:s.response}:{text:s.responseText},s.getAllResponseHeaders()))}},s.onload=n(),r=s.onerror=s.ontimeout=n("error"),void 0!==s.onabort?s.onabort=r:s.onreadystatechange=function(){4===s.readyState&&e.setTimeout(function(){n&&r()})},n=n("abort");try{s.send(t.hasContent&&t.data||null)}catch(e){if(n)throw e}},abort:function(){n&&n()}}}),w.ajaxPrefilter(function(e){e.crossDomain&&(e.contents.script=!1)}),w.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return w.globalEval(e),e}}}),w.ajaxPrefilter("script",function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")}),w.ajaxTransport("script",function(e){if(e.crossDomain){var t,n;return{send:function(i,o){t=w("<script>").prop({charset:e.scriptCharset,src:e.url}).on("load error",n=function(e){t.remove(),n=null,e&&o("error"===e.type?404:200,e.type)}),r.head.appendChild(t[0])},abort:function(){n&&n()}}}});var Yt=[],Qt=/(=)\?(?=&|$)|\?\?/;w.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Yt.pop()||w.expando+"_"+Et++;return this[e]=!0,e}}),w.ajaxPrefilter("json jsonp",function(t,n,r){var i,o,a,s=!1!==t.jsonp&&(Qt.test(t.url)?"url":"string"==typeof t.data&&0===(t.contentType||"").indexOf("application/x-www-form-urlencoded")&&Qt.test(t.data)&&"data");if(s||"jsonp"===t.dataTypes[0])return i=t.jsonpCallback=g(t.jsonpCallback)?t.jsonpCallback():t.jsonpCallback,s?t[s]=t[s].replace(Qt,"$1"+i):!1!==t.jsonp&&(t.url+=(kt.test(t.url)?"&":"?")+t.jsonp+"="+i),t.converters["script json"]=function(){return a||w.error(i+" was not called"),a[0]},t.dataTypes[0]="json",o=e[i],e[i]=function(){a=arguments},r.always(function(){void 0===o?w(e).removeProp(i):e[i]=o,t[i]&&(t.jsonpCallback=n.jsonpCallback,Yt.push(i)),a&&g(o)&&o(a[0]),a=o=void 0}),"script"}),h.createHTMLDocument=function(){var e=r.implementation.createHTMLDocument("").body;return e.innerHTML="<form></form><form></form>",2===e.childNodes.length}(),w.parseHTML=function(e,t,n){if("string"!=typeof e)return[];"boolean"==typeof t&&(n=t,t=!1);var i,o,a;return t||(h.createHTMLDocument?((i=(t=r.implementation.createHTMLDocument("")).createElement("base")).href=r.location.href,t.head.appendChild(i)):t=r),o=A.exec(e),a=!n&&[],o?[t.createElement(o[1])]:(o=xe([e],t,a),a&&a.length&&w(a).remove(),w.merge([],o.childNodes))},w.fn.load=function(e,t,n){var r,i,o,a=this,s=e.indexOf(" ");return s>-1&&(r=vt(e.slice(s)),e=e.slice(0,s)),g(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),a.length>0&&w.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done(function(e){o=arguments,a.html(r?w("<div>").append(w.parseHTML(e)).find(r):e)}).always(n&&function(e,t){a.each(function(){n.apply(this,o||[e.responseText,t,e])})}),this},w.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){w.fn[t]=function(e){return this.on(t,e)}}),w.expr.pseudos.animated=function(e){return w.grep(w.timers,function(t){return e===t.elem}).length},w.offset={setOffset:function(e,t,n){var r,i,o,a,s,u,l,c=w.css(e,"position"),f=w(e),p={};"static"===c&&(e.style.position="relative"),s=f.offset(),o=w.css(e,"top"),u=w.css(e,"left"),(l=("absolute"===c||"fixed"===c)&&(o+u).indexOf("auto")>-1)?(a=(r=f.position()).top,i=r.left):(a=parseFloat(o)||0,i=parseFloat(u)||0),g(t)&&(t=t.call(e,n,w.extend({},s))),null!=t.top&&(p.top=t.top-s.top+a),null!=t.left&&(p.left=t.left-s.left+i),"using"in t?t.using.call(e,p):f.css(p)}},w.fn.extend({offset:function(e){if(arguments.length)return void 0===e?this:this.each(function(t){w.offset.setOffset(this,e,t)});var t,n,r=this[0];if(r)return r.getClientRects().length?(t=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:t.top+n.pageYOffset,left:t.left+n.pageXOffset}):{top:0,left:0}},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===w.css(r,"position"))t=r.getBoundingClientRect();else{t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;while(e&&(e===n.body||e===n.documentElement)&&"static"===w.css(e,"position"))e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=w(e).offset()).top+=w.css(e,"borderTopWidth",!0),i.left+=w.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-w.css(r,"marginTop",!0),left:t.left-i.left-w.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent;while(e&&"static"===w.css(e,"position"))e=e.offsetParent;return e||be})}}),w.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(e,t){var n="pageYOffset"===t;w.fn[e]=function(r){return z(this,function(e,r,i){var o;if(y(e)?o=e:9===e.nodeType&&(o=e.defaultView),void 0===i)return o?o[t]:e[r];o?o.scrollTo(n?o.pageXOffset:i,n?i:o.pageYOffset):e[r]=i},e,r,arguments.length)}}),w.each(["top","left"],function(e,t){w.cssHooks[t]=_e(h.pixelPosition,function(e,n){if(n)return n=Fe(e,t),We.test(n)?w(e).position()[t]+"px":n})}),w.each({Height:"height",Width:"width"},function(e,t){w.each({padding:"inner"+e,content:t,"":"outer"+e},function(n,r){w.fn[r]=function(i,o){var a=arguments.length&&(n||"boolean"!=typeof i),s=n||(!0===i||!0===o?"margin":"border");return z(this,function(t,n,i){var o;return y(t)?0===r.indexOf("outer")?t["inner"+e]:t.document.documentElement["client"+e]:9===t.nodeType?(o=t.documentElement,Math.max(t.body["scroll"+e],o["scroll"+e],t.body["offset"+e],o["offset"+e],o["client"+e])):void 0===i?w.css(t,n,s):w.style(t,n,i,s)},t,a?i:void 0,a)}})}),w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,t){w.fn[t]=function(e,n){return arguments.length>0?this.on(t,null,e,n):this.trigger(t)}}),w.fn.extend({hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),w.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)}}),w.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),g(e))return r=o.call(arguments,2),i=function(){return e.apply(t||this,r.concat(o.call(arguments)))},i.guid=e.guid=e.guid||w.guid++,i},w.holdReady=function(e){e?w.readyWait++:w.ready(!0)},w.isArray=Array.isArray,w.parseJSON=JSON.parse,w.nodeName=N,w.isFunction=g,w.isWindow=y,w.camelCase=G,w.type=x,w.now=Date.now,w.isNumeric=function(e){var t=w.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},"function"==typeof define&&define.amd&&define("jquery",[],function(){return w});var Jt=e.jQuery,Kt=e.$;return w.noConflict=function(t){return e.$===w&&(e.$=Kt),t&&e.jQuery===w&&(e.jQuery=Jt),w},t||(e.jQuery=e.$=w),w});
</script>
<?php
$servername = "localhost";
$username = "sdgo_user";
$password = "abcd";
$dbname = "sdgo";
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
?>
<style>
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
div#result img {
  padding: 2px;
}
table {
  margin-left: auto;
  margin-right: auto;
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  white-space: nowrap;
}
table.table-hidden, table.table-hidden * {
  border-collapse: collapse;
  border: 0;
  padding: 0;
  margin: 0;
  text-align: left;
}
table.table-hidden td {
  padding-left: 10px;
}
th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  padding: 5px;
}
form#sdgo table:nth-child(1), form#sdgo table:nth-child(2) {
  width: 100%;
  max-width: 380px;
}
form#sdgo table:nth-child(3) {
  width: 100%;
  max-width: 150px;
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
form#sdgo select {
  height: 100%;
}
select {
  width: 100%;
}
div.select-wrapper {
  position: relative;
  text-align: left;
  width: 100%;
  height: 100%;
  display: flex;
}
select[name='wpn'], select[name='eff'], select[name='origin'], select[name='rank'] {
  position: absolute;
  height: 100%;
}
option[disabled] {
  color: #000;
  font-weight: bold;
}
div#result {
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  max-width: 1088px;
}
div#count {
  font-weight: bold;
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
form, div#warning, table.frame {
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
body[localization='TC'] div#TC {
  background-color: #DDDDFF;
}
body[localization='SC'] div#SC {
  background-color: #DDDDFF;
}
body[fs='20'] div#fs20 {
  background-color: #DDDDFF;
}
body[fs='18'] div#fs18 {
  background-color: #DDDDFF;
}
body[fs='16'] div#fs16 {
  background-color: #DDDDFF;
}
div#result > div > div > div {
  font-family: serif !important;
}
span.ul {
  border-bottom: 1px dotted black;
  cursor: help;
}
select.fs16 option {
  font-size: 16px !important;
  font-family: "NSimSun";
}
input[type='checkbox'] {
  margin: 0;
}

div#container {
  position: relative;
}
div#container table.frame {
  margin: 2px;
  min-width: 132px;
  min-height: 197px;
  display: inline-table;
}
div#container table.frame img.skill {
  width: 33%;
}
div#container table.frame div {
  display: inline;
}
div#container table.frame table {
  display: inline-table;
  vertical-align: top;
  width: 26px;
  border: 0;
}
div#container table.frame td {
  padding: 0 !important;
  border: 0;
}
div#container table.frame img.sp {
  width: 90%;
  padding: 0 !important;
}
div#container table.frame div.rank {
  display: flex;
  justify-content: center;
  align-items: center;
}
div#container table.frame div.rank img {
  margin-right: 5px;
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
img[src*='r.jpg'], img[src*='s.jpg'], img[src*='p.jpg'] {
  height: 20px;
  width: 21px;
}
img[src*='weapon'] {
  height: 30px;
  width: 93px;
}
</style>
</head>
<body localization="TC" fs="16" style="min-width: 1320px; margin: 0;">
<div id="warning" localization TC="由於目前視窗太窄，頁面預覽可能不正確。" SC="由于目前视窗太窄，页面预览可能不正确。">由於目前視窗太窄，頁面預覽可能不正確。</div>
<form id="settings">
<img src="https://s2.ax1x.com/2019/01/23/kVwuuj.png" srcc="localization.png" width="32" height="32"><br>
<div id="TC" localization TC="繁" SC="繁" onclick="ch_loc_href('TC');">繁</div>
<div id="SC" localization TC="简" SC="简" onclick="ch_loc_href('SC');">简</div>
<br>
<img src="https://s2.ax1x.com/2019/01/23/kVwmvQ.png" srcc="magnifier.png" width="32" height="32"><br>
<div id="fs20" onclick="ch_fs_href('20');">大</div>
<div id="fs18" onclick="ch_fs_href('18');">中</div>
<div id="fs16" onclick="ch_fs_href('16');">小</div>
<img src="https://s2.ax1x.com/2019/01/23/kVwKDs.png" srcc="top.png" width="32" height="32" onclick="$(window).scrollTop(0);">
</form>
<div id="content" style="margin-top : 10px;">
<table id="form" style="max-width: 1080px;"><tr>
<th localization TC="機體" SC="机体">機體</th>
<th localization TC="扭蛋機" SC="扭蛋机">扭蛋機</th></tr>
<tr><td style='text-align: left; width: 920px;'>
<form id="sdgo" style='height: 100%; margin: 0; width: 100%;'>
<table style="height: 100%; display: inline-table; vertical-align: top; margin-right: 5px;">
<tr><td localization TC="名稱" SC="名称">名稱</td><td><input type="text" name="name" value="" style="width: 100%; height: 100%;"/></td><td style='width: 1%;'><label><input type='checkbox' name='not[]' value='name' /><span class="ul" title="　NOT解釋：勾選後結果不包括左方所選條件" localization TC="　NOT解釋：勾選後結果不包括左方所選條件" SC="　NOT解释：勾选后结果不包括左方所选条件">NOT</span></label></td></tr>
<tr><td localization TC="技能" SC="技能">技能</td><td><select name="skl">
<option value=""></option>
<option value="" disabled localization TC="分類" SC="分类">分類</option>
<option localization TC="　HP%85%以下時發動" SC="　HP 85%以下时发动" value="HP%85%以下時發動">　HP 85%以下時發動</option>
<option localization TC="　HP%80%以下時發動" SC="　HP 80%以下时发动" value="HP%80%以下時發動">　HP 80%以下時發動</option>
<option localization TC="　HP%75%以下時發動" SC="　HP 75%以下时发动" value="HP%75%以下時發動">　HP 75%以下時發動</option>
<option localization TC="　HP%70%以下時發動" SC="　HP 70%以下时发动" value="HP%70%以下時發動">　HP 70%以下時發動</option>
<option localization TC="　HP%60%以下時發動" SC="　HP 60%以下时发动" value="HP%60%以下時發動">　HP 60%以下時發動</option>
<option localization TC="　HP%55%以下時發動" SC="　HP 55%以下时发动" value="HP%55%以下時發動">　HP 55%以下時發動</option>
<option localization TC="　HP%50%以下時發動" SC="　HP 50%以下时发动" value="HP%50%以下時發動">　HP 50%以下時發動</option>
<option localization TC="　HP%45%以下時發動" SC="　HP 45%以下时发动" value="HP%45%以下時發動">　HP 45%以下時發動</option>
<option localization TC="　HP%40%以下時發動" SC="　HP 40%以下时发动" value="HP%40%以下時發動">　HP 40%以下時發動</option>
<option localization TC="　HP%35%以下時發動" SC="　HP 35%以下时发动" value="HP%35%以下時發動">　HP 35%以下時發動</option>
<option localization TC="　HP%30%以下時發動" SC="　HP 30%以下时发动" value="HP%30%以下時發動">　HP 30%以下時發動</option>
<option localization TC="　攻擊力" SC="　攻击力" value="攻擊力">　攻擊力</option>
<option localization TC="　攻擊速度" SC="　攻击速度" value="攻擊速度">　攻擊速度</option>
<option localization TC="　射程距離" SC="　射程距离" value="射程距離">　射程距離</option>
<option localization TC="　防禦力" SC="　防御力" value="防禦力">　防禦力</option>
<option localization TC="　機動力" SC="　机动力" value="機動力">　機動力</option>
<option localization TC="　敏捷" SC="　敏捷" value="敏捷">　敏捷</option>
<option localization TC="　移動速度" SC="　移动速度" value="移動速度">　移動速度</option>
<option localization TC="　衝刺速度" SC="　冲刺速度" value="衝刺速度">　衝刺速度</option>
<option localization TC="　推進量" SC="　推进量" value="推進量">　推進量</option>
<option localization TC="　回復時間" SC="　回复时间" value="回復時間">　回復時間</option>
<option localization TC="　裝填時間" SC="　装填时间" value="裝填時間">　裝填時間</option>
<option localization TC="　發動機率%近戰傷害" SC="　发动机率　近战伤害" value="發動機率%近戰傷害">　發動機率　近戰傷害</option>
<option localization TC="　SP傷害" SC="　SP伤害" value="SP傷害">　SP傷害</option>
<option localization TC="　SP積蓄速度" SC="　SP积蓄速度" value="SP積蓄速度">　SP積蓄速度</option>
<option localization TC="　雷達顯示敵軍" SC="　雷达显示敌军" value="雷達顯示敵軍">　雷達顯示敵軍</option>
<option localization TC="　格鬥反擊" SC="　格斗反击" value="格鬥反擊">　格鬥反擊</option>
<option localization TC="　免疫所有異常狀態" SC="　免疫所有异常状态" value="免疫所有異常狀態">　免疫所有異常狀態</option>
<option localization TC="　敵軍對自機鎖定無效" SC="　敌军对自机锁定无效" value="敵軍對自機鎖定無效">　敵軍對自機鎖定無效</option>
<option localization TC="　受到的傷害" SC="　受到的伤害" value="受到的傷害">　受到的傷害</option>
<option localization TC="　受到實彈%成的傷害" SC="　受到实弹造成的伤害" value="受到實彈%成的傷害">　受到實彈造成的傷害</option>
<option localization TC="　受到光束%成的傷害" SC="　受到光束造成的伤害" value="受到光束%成的傷害">　受到光束造成的傷害</option>
<option localization TC="　所有攻擊會%成最大傷害" SC="　所有攻击会造成最大伤害" value="所有攻擊會%成最大傷害">　所有攻擊會造成最大傷害</option>
<option value="" disabled>--------------------------------------------------</option>
<option value="" disabled localization TC="所有技能" SC="所有技能">所有技能</option>
<?
$sql = "SELECT * FROM `skill` WHERE `skl` NOT IN ('012','013','014','231');";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 1) {
  while($row = mysqli_fetch_assoc($result)) {
    if ($row["skl"] != "") {
      echo "<option value='".$row["skl"]."'>　".$row["skl"]."-".$row["name_".$_GET["l"]]."</option>";
    }
  }
}
echo $test;
?>
</select></td><td><label><input type='checkbox' name='not[]' value='skl' /><span class="ul" title="　NOT解釋：勾選後結果不包括左方所選條件" localization TC="　NOT解釋：勾選後結果不包括左方所選條件" SC="　NOT解释：勾选后结果不包括左方所选条件">NOT</span></label></td></tr>
<tr><td localization TC="必殺技" SC="必杀技">必殺技</td><td><select name="sp">
<option value=""></option>
<option value="012" localization TC="　亂舞型" SC="　乱舞型">　亂舞型</option>
<option value="013" localization TC="　全彈發射型" SC="　全弹发射型">　全彈發射型</option>
<option value="014" localization TC="　地圖炮型" SC="　地图炮型">　地圖炮型</option>
<option value="231" localization TC="　突撃型" SC="　突击型">　突撃型</option>
</select></td><td><label><input type='checkbox' name='not[]' value='sp' /><span class="ul" title="　NOT解釋：勾選後結果不包括左方所選條件" localization TC="　NOT解釋：勾選後結果不包括左方所選條件" SC="　NOT解释：勾选后结果不包括左方所选条件">NOT</span></label></td></tr>
<tr><td localization TC="武器" SC="武器">武器</td><td>
<div class="select-wrapper">
<select name="wpn" onfocus="this.size=32;this.style.height='auto';$(this).toggleClass('fs16');" onblur="this.size=1;this.style.height='100%';$(this).toggleClass('fs16');" onchange="this.size=1; this.blur();" style='z-index: 999;'><option value=""></option>
<?
$wpn = [[1,2,3,4,5,6,11,12,13,14,15,16,21,22,23,25,26,27,28,31,32,33,34,35,36,37,38,39,41,42,43],
["格鬥","斧","光束軍刀","實體刀","擊","斬","熱能鞭","火箭錨","飛鏢","劍氣","護盾","拳","光束擴散炮","火神炮","狀態彈","浮游炮(射擊型)","浮游炮(近接型)","浮游炮(反射型)","浮游炮(追尾型)","噴槍","光束步槍","機關槍","火箭炮","擴散炮","飛彈","羽毛","線性步槍","格林機槍","加農炮","超視炮","狙擊槍"],
["格斗","斧","光束军刀","实体刀","击","斩","热能鞭","火箭锚","飞镖","剑气","护盾","拳","光束扩散炮","火神炮","状态弹","浮游炮(射击型)","浮游炮(近接型)","浮游炮(反射型)","浮游炮(追尾型)","喷枪","光束步枪","机关枪","火箭炮","扩散炮","飞弹","羽毛","线性步枪","格林机枪","加农炮","超视炮","狙击枪"]];
$lang_in = ($_GET["l"] == "TC" ? 0+1 : ($_GET["l"] == "SC" ? 1+1 : 0+1));
for ($x = 0; $x < sizeOf($wpn[0]); $x++) {
  echo "<option value='".$wpn[0][$x]."'>　".$wpn[$lang_in][$x]."</option>";
}
?>
</select></div></td><td><label><input type='checkbox' name='not[]' value='wpn' /><span class="ul" title="　NOT解釋：勾選後結果不包括左方所選條件" localization TC="　NOT解釋：勾選後結果不包括左方所選條件" SC="　NOT解释：勾选后结果不包括左方所选条件">NOT</span></label></td></tr>
<tr><td localization TC="效果" SC="效果">效果</td><td>
<div class="select-wrapper">
<select name="eff" onfocus="this.size=30;this.style.height='auto';$(this).toggleClass('fs16');" onblur="this.size=1;this.style.height='100%';$(this).toggleClass('fs16');" onchange="this.size=1; this.blur();" style='z-index: 998;'><option value=""></option>
<?
/*$sql = "SELECT DISTINCT `tag` FROM `tag_test2` ORDER BY LENGTH(`tag`) ASC;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 1) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<option value='".$row["tag"]."'>　".$row["tag"]."</option>";
  }
}*/
$eff_select = ["狙擊",
"擴散",
"緩速",
"追尾",
"修理",
"牽引",
"抽氣",
"貫通",
"瞬移",
"蓄力",
"倒地",
"隱形",
"無格衝",
"7秒I力場",
"發射硬直",
"槍械故障",
"裝填下降",
"一時硬直",
"迎擊模式",
"突進格鬥",
"滑鼠反轉",
"全方位攻撃",
"格鬥反擊無效",
"6秒內推進量增加",
"彈藥減少不可變形",
"雷達顯示命中機體",
"判定依射擊武器決定",
"7秒內防禦力大幅增加",
"7秒內受到光束的傷害-70%"];
for ($x = 0; $x < sizeof($eff_select); $x++) {
  echo "<option value='".$eff_select[$x]."'>　".$eff_select[$x]."</option>";
}
?>
</select></div></td><td><label><input type='checkbox' name='not[]' value='eff' /><span class="ul" title="　NOT解釋：勾選後結果不包括左方所選條件" localization TC="　NOT解釋：勾選後結果不包括左方所選條件" SC="　NOT解释：勾选后结果不包括左方所选条件">NOT</span></label></td></tr>
<tr><td localization TC="作品" SC="作品">作品</td><td style='width: 308px;'><div class="select-wrapper"><select name="origin" onfocus="this.size=21;this.style.height='auto';$(this).toggleClass('fs16');this.style.width='310px';" onblur="this.size=1;this.style.height='100%';$(this).toggleClass('fs16');this.style.width='';" onchange="this.size=1; this.blur();" style='z-index: 997;'><option value=""></option>
<?
$sql = "SELECT * FROM `origin`;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 1) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<option value='".$row["origin"]."'>　".$row["name_".$_GET["l"]]."</option>";
  }
}
?>
</select></div></td><td><label><input type='checkbox' name='not[]' value='origin' /><span class="ul" title="　NOT解釋：勾選後結果不包括左方所選條件" localization TC="　NOT解釋：勾選後結果不包括左方所選條件" SC="　NOT解释：勾选后结果不包括左方所选条件">NOT</span></label></td></tr>
</table><table style="display: inline-table; height: 100%; vertical-align: top; margin-right: 5px;">
<tr><td localization TC="等級" SC="等级">等級</td><td style='width: 100%;'><div class="select-wrapper"><select name="rank" onfocus="this.size=28;this.style.height='auto';$(this).toggleClass('fs16');" onblur="this.size=1;this.style.height='100%';$(this).toggleClass('fs16');" onchange="this.size=1; this.blur();" style='z-index: 998;'>
<option value="" localization TC="全部" SC="全部">全部</option>
<option value="" disabled localization TC="S 等級" SC="S 等级">S 等級</option>
<option value="S%" localization TC="　全S" SC="　全S">　ALL S</option>
<option value="SS">　SS</option>
<option value="SR">　SR</option>
<option value="S">　S</option>
<option value="" disabled localization TC="A 等級" SC="A 等级">A 等級</option>
<option value="A%" localization TC="　全A" SC="　全A">　ALL A</option>
<option value="AS">　AS</option>
<option value="AR">　AR</option>
<option value="A">　A</option>
<option value="" disabled localization TC="B 等級" SC="B 等级">B 等級</option>
<option value="B%" localization TC="　全B" SC="　全B">　ALL B</option>
<option value="BS">　BS</option>
<option value="BR">　BR</option>
<option value="B">　B</option>
<option value="BU">　BU</option>
<option value="" disabled localization TC="C 等級" SC="C 等级">C 等級</option>
<option value="C%" localization TC="　全C" SC="　全C">　ALL C</option>
<option value="CS">　CS</option>
<option value="CR">　CR</option>
<option value="C">　C</option>
<option value="CU">　CU</option>
<option value="" disabled localization TC="其他" SC="其他">其他</option>
<option value="SABC" localization TC="　全白" SC="　全白">　全白</option>
<option value="_S" localization TC="　全SECRET" SC="　全SECRET">　全SECRET</option>
<option value="_R" localization TC="　全RARE" SC="　全RARE">　全RARE</option>
<option value="_U" localization TC="　全U" SC="　全U">　全U</option>
</select></td><td style='width: 1%'><label><input type='checkbox' name='not[]' value='rank' /><span class="ul" title="　NOT解釋：勾選後結果不包括左方所選條件" localization TC="　NOT解釋：勾選後結果不包括左方所選條件" SC="　NOT解释：勾选后结果不包括左方所选条件">NOT</span></label></td></tr>
<tr><td localization TC="距離" SC="距离">距離</td><td><select name="pos"><option value=""></option>
<option value="r" localization TC="　近" SC="　近">　近</option>
<option value="s" localization TC="　中" SC="　中">　中</option>
<option value="p" localization TC="　遠" SC="　远">　遠</option>
</select></td><td><label><input type='checkbox' name='not[]' value='pos' /><span class="ul" title="　NOT解釋：勾選後結果不包括左方所選條件" localization TC="　NOT解釋：勾選後結果不包括左方所選條件" SC="　NOT解释：勾选后结果不包括左方所选条件">NOT</span></label></td></tr>
<tr><td localization TC="變型" SC="变型">變型</td><td><select name="tag"><option value=""></option>
<option value="tag1" localization TC="　自由" SC="　自由">　自由</option>
<option value="tag3" localization TC="　裝甲解除" SC="　装甲解除">　裝甲解除</option>
<option value="tag4" localization TC="　技能激活" SC="　技能激活">　技能激活</option>
<option value="no" localization TC="　不能" SC="　不能">　不能</option>
</select></td><td><label><input type='checkbox' name='not[]' value='tag' /><span class="ul" title="　NOT解釋：勾選後結果不包括左方所選條件" localization TC="　NOT解釋：勾選後結果不包括左方所選條件" SC="　NOT解释：勾选后结果不包括左方所选条件">NOT</span></label></td></tr>
<tr><td localization TC="特殊" SC="特殊">特殊</td><td colspan="2" style="text-align: left;">
<table class="table-hidden"><tr><td>
<label><input name="prop[]" value="ma" type="checkbox" /><span localization TC=" MA" SC=" MA"> MA</span></label>
<label><input name="prop[]" value="ca" type="checkbox" /><span localization TC=" 格鬥反擊" SC=" 格斗反击"> 格鬥反擊</span></label>
<label><input name="prop[]" value="big" type="checkbox" /><span localization TC=" 大型" SC=" 大型"> 大型</span></label>
</td></tr><tr><td>
<label onclick="auto_correct($(this), 's')"><input name="prop[]" value="s1" type="checkbox" /><span localization TC=" 盾牌" SC=" 盾牌"> 盾牌</span></label>
<label onclick="auto_correct($(this), 's')"><input name="prop[]" value="s2" type="checkbox" /><span localization TC=" 光束盾" SC=" 光束盾"> 光束盾</span></label>
<label onclick="auto_correct($(this), 's')"><input name="prop[]" value="s0" type="checkbox" /><span localization TC=" 沒盾牌" SC=" 沒盾牌"> 沒盾牌</span></label>
</td></tr><tr><td>
<label onclick="auto_correct($(this), '');"><input name="prop[]" value="bp" type="checkbox" /><span localization TC=" 設計圖" SC=" 设计图"> 設計圖</span></label>
<label onclick="auto_correct($(this), '');"><input name="prop[]" value="nbp" type="checkbox" /><span localization TC=" 沒設計圖" SC=" 沒设计图"> 沒設計圖</span></label>
</td></tr><tr><td>
<label onclick="auto_correct($(this), '');"><input name="prop[]" value="cm" type="checkbox" /><span localization TC=" 扭蛋" SC=" 扭蛋"> 扭蛋</span></label>
<label onclick="auto_correct($(this), '');"><input name="prop[]" value="ncm" type="checkbox" /><span localization TC=" 沒扭蛋" SC=" 沒扭蛋"> 沒扭蛋</span></label>
</td></tr></table></td></tr>
</table><table style="height: 100%; display: inline-table;">
<tr><td localization TC="排序" SC="排序">排序</td><td><select name="sort">
<option value="tot" localization TC="4圍" SC="4围" style='font-weight: bold;'>4圍</option>
<option value="atk" localization TC="　攻擊" SC="　攻击">　攻擊</option>
<option value="def" localization TC="　防禦" SC="　防御">　防禦</option>
<option value="spd" localization TC="　速度" SC="　速度">　速度</option>
<option value="ctl" localization TC="　操控" SC="　操控">　操控</option>
<option value="id" localization TC="ID" SC="ID" style='font-weight: bold;'>ID</option>
<option value="" disabled localization TC="武器" SC="武器">武器</option>
<option value="rng" localization TC="　射程" SC="　射程">　射程</option>
<option value="dmg" localization TC="　傷害" SC="　伤害">　傷害</option>
<option value="sets" localization TC="　彈數" SC="　弹数">　彈數</option>
<option value="cd" localization TC="　CD" SC="　CD">　CD</option>
<option value="lock" localization TC="鎖敵距離" SC="锁敌距离" style='font-weight: bold;'>鎖敵距離</option>
</select></td></tr>
<tr><td localization TC="次序" SC="次序">次序</td><td><select name="order">
<option value="DESC" localization TC="降序" SC="降序">降序</option>
<option value="ASC" localization TC="升序" SC="升序">升序</option></select></td></tr>
<tr><td><input type="button" value="首頁" localization TC="首頁" SC="首页" onclick="(function(){window.location.href = '?l=<? echo $_GET["l"]; ?>&fs=<? echo $_GET["fs"] ?>';})()" /></td>
<td><input type="button" value="重置" localization TC="重置" SC="重置" onclick="resetform()" style='width: 100%;'/></td></tr>
<tr><td colspan='2' style="height: 50%;"><input type="submit" value="搜尋" localization TC="搜尋" SC="搜寻" style="height: 100%; width: 100%;" /></td></tr>
</table>
<input type="hidden" name="l" localization value="TC" />
<input type="hidden" name="fs" value="16" />
</form>
</td><td style='width: 100px;'>
<form id="capsule" style='height: 100%; margin: 0;'>
<table style="height: 100%; width: 100%;">
<tr><td><select name="machine" style="height: 100%;">
<?
$sql = "SELECT * FROM `capsule`;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 1) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<option value='".$row["machine"]."'>　".$row["machine"]."　</option>";
  }
}
?>
</select></td></tr>
<tr><td style="height: 50%;"><input type="submit" value="搜尋" localization TC="搜尋" SC="搜寻" style="height: 100%; width: 100%;" /></td></tr></table>
<input type="hidden" name="l" localization value="TC" />
<input type="hidden" name="fs" value="16" />
</form>
</td></tr></table>
<div id="result">
<?php
//var_dump($_GET);
if (array_key_exists("id", $_GET)) {
  if ($_GET["id"] != NULL) {
    $sql = "SELECT `weapon`.`id`, rank, pos, atk, def, spd, ctl, sp1, sp2, skl1, skl2, tag0, tag1, tag3, tag4, `lock`, id2, unit_name_".$_GET["l"].", `unit`.`origin`, `origin`.`name_".$_GET["l"]."`, `weapon`.`no`, wpn, rng, dmg, sets, cd, GROUP_CONCAT(`tag` ORDER BY LENGTH(`tag`) SEPARATOR '<br>') AS tags, `blueprint`.a, `blueprint`.aa, `blueprint`.b, `blueprint`.bb, `blueprint`.c, `blueprint`.cc, `blueprint`.d, `blueprint`.dd, `blueprint`.e, `blueprint`.ee, (select GROUP_CONCAT(id order by id separator '<br>') from blueprint where a = '".$_GET["id"]."' or b = '".$_GET["id"]."' or c = '".$_GET["id"]."' or d = '".$_GET["id"]."' or e = '".$_GET["id"]."') AS material, (select GROUP_CONCAT(a order by id separator '<br>') from blueprint where a = '".$_GET["id"]."' or b = '".$_GET["id"]."' or c = '".$_GET["id"]."' or d = '".$_GET["id"]."' or e = '".$_GET["id"]."') AS key_material, (SELECT GROUP_CONCAT(machine ORDER BY machine SEPARATOR '<br>') FROM `capsule` WHERE a = '".$_GET["id"]."' OR b = '".$_GET["id"]."' OR c = '".$_GET["id"]."' OR d = '".$_GET["id"]."' OR e = '".$_GET["id"]."' OR f = '".$_GET["id"]."') AS in_capsule
    FROM `unit`, `id_ex`, `origin`, `weapon` LEFT JOIN `tag_test2` ON `weapon`.`id` = `tag_test2`.`id` AND `weapon`.`no` = `tag_test2`.`no` LEFT JOIN `blueprint` ON `weapon`.`id` = `blueprint`.`id`
    WHERE `id_ex`.`id1` = `weapon`.`id` AND `weapon`.`id` = `unit`.`id` AND `weapon`.`id` = `unit`.`id` AND `weapon`.`id` = '".$_GET["id"]."' AND `origin`.`origin` = `unit`.`origin`
    GROUP BY `weapon`.`no`
    ORDER BY `weapon`.`no` ASC;";
    $result = mysqli_query($conn, $sql);
    $unit_name = "";
    $origin = "";
    $origin_name = "";
    $rank = "";
    $pos = "";
    $wpn = array_fill(0, 6, array_fill(0, 8, ""));
    $skl1 = "";
    $skl2 = "";
    $four = array_fill(0, 4, 0);
    $lock = "";
    $in_capsule = "";
    $tag = array_fill(0, 9, "");
    $sp1 = "";
    $sp2 = "";
    $s1hp = "-";
    $s1per = "-";
    $s1tag = "";
    $s2hp = "-";
    $s2per = "-";
    $s2tag = "";
    $id2 = "";
    $ma = "";
    $ca = "";
    $rma = "";
    $rca = "";
    $bp = array_fill(0, 5, "");
    $bp_lv = array_fill(0, 5, 0);
    $material = "";
    $key_material = "";
    if (mysqli_num_rows($result) >= 1) {
      while($row = mysqli_fetch_assoc($result)) {
        if ($row["no"] == 0) {
          $unit_name = $row["unit_name_".$_GET["l"]];
          $url = $row["url"];
          $origin = $row["origin"];
          $origin_name = $row["name_".$_GET["l"]];
          $id2 = $row["id2"];
          $rank = $row["rank"];
          $pos = $row["pos"];
          $skl1 = $row["skl1"];
          $skl2 = $row["skl2"];
          $four[0] = $row["atk"];
          $four[1] = $row["def"];
          $four[2] = $row["spd"];
          $four[3] = $row["ctl"];
          $lock = $row["lock"];
          if ($row["in_capsule"] != "") {
            $temp = explode("<br>", $row["in_capsule"]);
            for ($x = 0; $x < sizeof($temp); $x++) {
              $in_capsule .= "<a href='?machine=".$temp[$x]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'>[".$temp[$x]."]</a>　";
            }
          }
          $sp1 = $row["sp1"];
          $sp2 = $row["sp2"];
          $tag[0] = $row["tag0"];//shoot multiple bullets
          $tag[1] = $row["tag1"];//big
          $tag[3] = $row["tag3"];//purge
          $tag[4] = $row["tag4"];//skill activation
          $bp[0] = $row["a"];
          $bp_lv[0] = $row["aa"];
          $bp[1] = $row["b"];
          $bp_lv[1] = $row["bb"];
          $bp[2] = $row["c"];
          $bp_lv[2] = $row["cc"];
          $bp[3] = $row["d"];
          $bp_lv[3] = $row["dd"];
          $bp[4] = $row["e"];
          $bp_lv[4] = $row["ee"];
          $material = $row["material"];
          $key_material = $row["key_material"];
        }
        if ($row["no"] <= 5) {
          $wpn[$row["no"]][0] = $row["no"];
          $wpn[$row["no"]][1] = $row["wpn"];
          $wpn[$row["no"]][2] = ".";
          $wpn[$row["no"]][3] = ".";
          $wpn[$row["no"]][4] = ".";
          $wpn[$row["no"]][5] = ".";
          if (intval($row["rng"]) != -1) {
            $wpn[$row["no"]][2] = $row["rng"];
          }
          if (intval($row["dmg"]) != -1) {
            $wpn[$row["no"]][3] = $row["dmg"];
          }
          if (intval($row["sets"]) != -1) {
            $wpn[$row["no"]][4] = $row["sets"];
          }
          if (intval($row["cd"]) != -1) {
            $wpn[$row["no"]][5] = $row["cd"];
          }
          $wpn[$row["no"]][6] = $row["tags"];
        }
        if ($row["no"] == 6) {
          $ma = $row["rng"];
          $ca = $row["dmg"];
        }
        if ($row["no"] == 7) {
          $rma = $row["rng"];
          $rca = $row["dmg"];
        }
        if ($row["no"] == 8) {
          $s1hp = ".";
          $s1per = ".%";
          if (intval($row["rng"]) != -1) {
            $s1hp = $row["rng"];
          }
          if (intval($row["dmg"]) != -1) {
            $s1per = $row["dmg"]."%";
          }
          if ($row["sets"] == 1) {
            $s1tag = "光束盾";
          };
        }
        if ($row["no"] == 9) {
          $s2hp = ".";
          $s2per = ".%";
          if (intval($row["rng"]) != -1) {
            $s2hp = $row["rng"];
          }
          if (intval($row["dmg"]) != -1) {
            $s2per = $row["dmg"]."%";
          }
          if ($row["sets"] == 1) {
            $s2tag = "光束盾";
          };
        }
      }
    }
    $temp = "<br><table><tr><td><a href='http://cfo.tiraura.jp/unit_detail.php?id=".$_GET["id"]."' target='_blank'>CFO</a></td>
    <td><a href='https://www.olgame.tw/sds/robot_detail.php?id=".$_GET["id"]."' target='_blank'>OLG</a></td>
    <td><a href='https://sdplayer.club/detail.html?id=".$_GET["id"]."' target='_blank'>SDP</a></td>
    ".($id2 != "" ? "<td><a href='https://www.yukict.com/bbs/viewthread.php?action=printable&tid=".$id2."' target='_blank'>YUKI</a></td>" : "")."</tr></table><br>
    <table><tr><td colspan='3' style='font-weight: bold;'>".$unit_name."</td></tr>
    <tr><td colspan='3'><a href='?origin=".$origin."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'>".$origin_name."</a></td></tr>
    <tr><td>ID: ".$_GET["id"]."</td><td>".$rank."</td><td><img srcc='".$pos."' class='pos'></td></tr>
    <tr><td rowspan='5'><img srcc='".$_GET["id"]."' class='unit'></td>
    <td localization TC='攻擊' SC='攻击'>攻擊</td><td>".$four[0]."</td></tr>
    <tr><td localization TC='防禦' SC='防御'>防禦</td><td>".$four[1]."</td></tr>
    <tr><td localization TC='速度' SC='速度'>速度</td><td>".$four[2]."</td></tr>
    <tr><td localization TC='操控' SC='操控'>操控</td><td>".$four[3]."</td></tr>
    <tr><td localization TC='總和' SC='总和'>總和</td><td>".($four[0]+$four[1]+$four[2]+$four[3])."</td></tr><tr><td localization TC='鎖敵距離' SC='锁敌距离'>鎖敵距離</td><td colspan='2'>".$lock."</td></tr>".($in_capsule != "" ? "<tr><td colspan='3'>　".($_GET["l"] == "TC" ? "扭蛋機:　" : ($_GET["l"] == "SC" ? "扭蛋机:　" : "")).$in_capsule."</td></tr>" : "").( $tag[1] == "1" || $tag[3] == "1" ? ("<tr><td colspan='3'>".($tag[1] == "1" ? "［<span localization TC='大型' SC='大型'>大型</span>］" : "").($tag[3] == "1" ? "［<span localization TC='裝甲解除' SC='装甲解除'>裝甲解除</span>］" : "")."</td></tr>") : "")."</table><br>
    <table><tr style='font-weight: bold;'><td localization TC='技能一' SC='技能一'>技能一</td><td localization TC='技能二' SC='技能二'>技能二</td><td localization TC='必殺技一' SC='必杀技一'>必殺技一</td>".($sp2 != '' ? "<td localization TC='必殺技二' SC='必杀技二'>必殺技二</td>" : "")."</tr>
    <tr><td><a href='?skl=".$skl1."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img src='skill\\".$skl1.".gif' class='skill' /></a></td>
    <td><a href='?skl=".$skl2."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img src='skill\\".$skl2.".gif' class='skill' /></a></td>
    <td><a href='?sp=".$sp1."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img src='skill\\".$sp1.".gif' class='sp' /></a></td>".($sp2 != '' ? "<td><a href='?sp=".$sp2."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img src='skill\\".$sp2.".gif' class='sp' /></a></td>" : "")."</tr></table><br>
    <table id='armament'".($tag[0] == "1" ? " bgcolor='#DDDDFF'" : "")."><tr style='font-weight: bold;'>
    <td localization TC='武器' SC='武器'>武器</td>
    <td localization TC='射程距離' SC='射程距离'>射程距離</td>
    <td localization TC='攻擊傷害' SC='攻击伤害'>攻擊傷害</td>
    <td localization TC='彈藥數量' SC='弹药数量'>彈藥數量</td>
    <td localization TC='裝填時間' SC='装填时间'>裝填時間</td>
    <td localization TC='武器效果' SC='武器效果'>武器效果</td></tr>
    <tr><td><img srcc='".$wpn[0][1]."' class='weapon'></td><td>".$wpn[0][2]."</td><td>".$wpn[0][3]."</td><td>".$wpn[0][4]."</td><td>".$wpn[0][5]."</td><td>".$wpn[0][6]."</td></tr>
    <tr><td><img srcc='".$wpn[1][1]."' class='weapon'></td><td>".$wpn[1][2]."</td><td>".$wpn[1][3]."</td><td>".$wpn[1][4]."</td><td>".$wpn[1][5]."</td><td>".$wpn[1][6]."</td></tr>
    <tr><td><img srcc='".$wpn[2][1]."' class='weapon'></td><td>".$wpn[2][2]."</td><td>".$wpn[2][3]."</td><td>".$wpn[2][4]."</td><td>".$wpn[2][5]."</td><td>".$wpn[2][6]."</td></tr>
    <tr><td><img srcc='999' class='weapon'></td><td>".$s1hp."</td><td>".$s1per."</td><td></td><td></td><td>".$s1tag."</td></tr>".($ma == '1' || $ca == '1' ? "<tr><td colspan='8'>".($ma == "1" ? "［MA］" : "").($ca == "1" ? "［<span localization TC='格鬥反擊' SC='格斗反击'>格鬥反擊</span>］" : "")."</td></tr>" : "");
    if (($wpn[3][1] != '0' || $wpn[4][1] != '0' || $wpn[5][1] != '0') && ($wpn[3][1] != '' || $wpn[4][1] != '' || $wpn[5][1] != '')) {
      $temp .= "<tr><td colspan='8'></td></tr>
    <tr><td><img srcc='".$wpn[3][1]."' class='weapon'></td><td>".$wpn[3][2]."</td><td>".$wpn[3][3]."</td><td>".$wpn[3][4]."</td><td>".$wpn[3][5]."</td><td>".$wpn[3][6]."</td></tr>
    <tr><td><img srcc='".$wpn[4][1]."' class='weapon'></td><td>".$wpn[4][2]."</td><td>".$wpn[4][3]."</td><td>".$wpn[4][4]."</td><td>".$wpn[4][5]."</td><td>".$wpn[4][6]."</td></tr>
    <tr><td><img srcc='".$wpn[5][1]."' class='weapon'></td><td>".$wpn[5][2]."</td><td>".$wpn[5][3]."</td><td>".$wpn[5][4]."</td><td>".$wpn[5][5]."</td><td>".$wpn[5][6]."</td></tr>
    <tr><td><img srcc='999' class='weapon'></td><td>".$s2hp."</td><td>".$s2per."</td><td></td><td></td><td>".$s2tag."</td></tr>".($rma == '1' || $rca == '1' ? "<tr><td colspan='8'>".($rma == "1" ? "［MA］" : "").($rca == "1" ? "［<span localization TC='格鬥反擊' SC='格斗反击'>格鬥反擊</span>］" : "")."</td></tr>" : "");
    }
    $temp .= "</table>";
    if ($bp[0] != "") {
      $temp .= "<br><div class='frame'><table><tr style='font-weight: bold;'><td colspan='5' localization TC='設計圖' SC='设计图'>設計圖</td></tr>
    <tr><td bgcolor='#DDDDFF'><a href='?id=".$bp[0]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$bp[0]."' class='unit'></a></td>".($bp[1] != "" ? "<td><a href='?id=".$bp[1]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$bp[1]."' class='unit'></a></td>" : "").($bp[2] != "" ? "<td><a href='?id=".$bp[2]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$bp[2]."' class='unit'></a></td>" : "").($bp[3] != "" ? "<td><a href='?id=".$bp[3]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$bp[3]."' class='unit'></a></td>" : "").($bp[4] != "" ? "<td><a href='?id=".$bp[4]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$bp[4]."' class='unit'></a></td>" : "")."</tr>
    <tr><td bgcolor='#DDDDFF'>Lv ".$bp_lv[0]."</td>".($bp[1] != "" ? "<td>Lv ".$bp_lv[1]."</td>" : "").($bp[2] != "" ? "<td>Lv ".$bp_lv[2]."</td>" : "").($bp[3] != "" ? "<td>Lv ".$bp_lv[3]."</td>" : "").($bp[4] != "" ? "<td>Lv ".$bp_lv[4]."</td>" : "")."</tr></table></div>";
    }
    if ($material != "") {
      $parents = explode("<br>", $material);
      $is_key = explode("<br>", $key_material);
      $row = floor(sqrt(sizeof($parents)));
      $column = ceil(sizeof($parents)/$row);
      $index = 0;
      $table = "<br><div class='frame'><table><tr style='font-weight: bold;'><td colspan='5' localization TC='材料' SC='材料'>材料</td></tr>";
      for ($i = 0; $i < $row; $i++) {
        $table .= "<tr>";
        for ($j = 0; $j < $column; $j++) {
          $table .= "<td".($is_key[$index] == $_GET["id"] ? " bgcolor='#DDDDFF'" : "").">";
          if ($parents[$index] != "") {
            $table .= "<a href='?id=".$parents[$index]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$parents[$index]."' class='unit'></a>";
            $index++;
          }
          $table .= "</td>";
        }
        $table .= "</tr>";
      }
      $table .= "</table></div>";
      $temp .= $table;
    } else {
      //To do, empty result
      
    }
    $hex = strtoupper(dechex(intval($_GET["id"])));
    $hex1 = $hex[2].$hex[3]." ".$hex[0].$hex[1];
    $hex2 = "";
    if ($tag[4] == "1") {
      $hex2 = ";".strtoupper(dechex(hexdec($hex[2].$hex[3])+1))." ".$hex[0].$hex[1];
    }
    echo $temp."<script>$(\"input[name='name']\").val('".$hex1.$hex2."');$(document).ready(function(){ $(\"title\").text('".$unit_name." - '+$(\"title\").text()); })</script>";
  } else {
    echo "<script>window.location.href = window.location.href.replace(/\?.*/, '');</script>";
  }
}
if (array_key_exists("machine", $_GET)) {
  if ($_GET["machine"] != NULL) {
    $sql = "SELECT *, (SELECT `unit`.`rank` FROM `unit` WHERE `unit`.`id` = `capsule`.`a`) AS aa, (SELECT `unit`.`rank` FROM `unit` WHERE `unit`.`id` = `capsule`.`b`) AS bb, (SELECT `unit`.`rank` FROM `unit` WHERE `unit`.`id` = `capsule`.`c`) AS cc, (SELECT `unit`.`rank` FROM `unit` WHERE `unit`.`id` = `capsule`.`d`) AS dd, (SELECT `unit`.`rank` FROM `unit` WHERE `unit`.`id` = `capsule`.`e`) AS ee, (SELECT `unit`.`rank` FROM `unit` WHERE `unit`.`id` = `capsule`.`f`) AS ff FROM `capsule` WHERE `machine` = ".intval($_GET["machine"]).";";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 1) {
      $temp = "";
      while($row = mysqli_fetch_assoc($result)) {
      $temp = $row["machine"];
        echo "<br><br><br><table id='machine'><tr><td colspan='2'><b>".($_GET["l"] == "TC" ? "扭蛋機　" : ($_GET["l"] == "SC" ? "扭蛋机　" : "")).$row["machine"]."</b></td></tr>
              <tr><td rank='".$row["aa"]."'><a href='?id=".$row["a"]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$row["a"]."' class='unit'></a></td>
              <td rank='".$row["bb"]."'><a href='?id=".$row["b"]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$row["b"]."' class='unit'></a></td></tr>
              <tr><td rank='".$row["cc"]."'><a href='?id=".$row["c"]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$row["c"]."' class='unit'></a></td>
              <td rank='".$row["dd"]."'><a href='?id=".$row["d"]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$row["d"]."' class='unit'></a></td></tr>
              <tr><td rank='".$row["ee"]."'><a href='?id=".$row["e"]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$row["e"]."' class='unit'></a></td>
              <td rank='".$row["ff"]."'><a href='?id=".$row["f"]."&l=".$_GET["l"]."&fs=".$_GET["fs"]."'><img srcc='".$row["f"]."' class='unit'></a></td></tr></table>";
      }
      echo "<script>$(\"select[name='machine'] option[value='".intval($_GET["machine"])."']\")[0].selected = 'selected';$(document).ready(function(){ $(\"title\").text('".($_GET["l"] == "TC" ? "扭蛋機 " : ($_GET["l"] == "SC" ? "扭蛋机 " : "")).$temp." - '+$(\"title\").text()); })</script>";
    } else {
      //To do, empty result
      
    }
  } else {
    echo "<script>window.location.href = window.location.href.replace(/\?.*/, '');</script>";
  }
}
$parameters = ["name","skl","sp","wpn","eff","origin","rank","pos","tag","prop","sort","order"];
$key_found = false;
for ($x = 0; $x < sizeof($parameters); $x++) {
  if (array_key_exists($parameters[$x], $_GET)) {
    $key_found = true;
    break;
  }
}
if ($key_found) {
  $sql = "SELECT *, `unit`.`id` AS unit_id, (SELECT `name_".$_GET["l"]."` FROM `skill` WHERE `skl` = `unit`.`skl1`) AS skl1_name, (SELECT `desc_".$_GET["l"]."` FROM `skill` WHERE `skl` = `unit`.`skl1`) AS skl1_desc, (SELECT `name_".$_GET["l"]."` FROM `skill` WHERE `skl` = `unit`.`skl2`) AS skl2_name, (SELECT `desc_".$_GET["l"]."` FROM `skill` WHERE `skl` = `unit`.`skl2`) AS skl2_desc
FROM `unit` INNER JOIN `id_ex` ON `unit`.`id` = `id_ex`.`id1`, `weapon` AS w0 LEFT JOIN `tag_test2` AS t0 ON `w0`.`id` = `t0`.`id` AND `w0`.`no` = `t0`.`no`
WHERE `unit`.`id` = `w0`.`id` AND `w0`.`no` IN (0,1,2,3,4,5) AND `w0`.`wpn` != '0'";
  $script = "";
  $temp = "";
  //unit name
  if ($_GET["name"] != "") {
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("name",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='name']\").prop('checked', true);";
        $temp = "NOT ";
      }
    }
    $sql .= " AND `unit`.`id` IN (SELECT `id1` FROM `id_ex` WHERE `unit_name_".$_GET["l"]."` ".$temp."LIKE '%".preg_replace("/\'/", "_", $_GET["name"])."%')";
    $script .= "$(\"input[name='name']\").val(\"".$_GET["name"]."\");";
    $temp = "";
  }
  //skill
  if ($_GET["skl"] != "") {
    $temp2 = "OR";
    $temp3 = "";
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("skl",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='skl']\").prop('checked', true);";
        $temp = "!";
        $temp2 = "AND";
        $temp3 = "NOT ";
      }
    }
    if (preg_match("/[0-9]{3,3}/", $_GET["skl"])) {
      $sql .= " AND (`unit`.`skl1` ".$temp."= '".$_GET["skl"]."' ".$temp2." `unit`.`skl2` ".$temp."= '".$_GET["skl"]."')";
    } else {
      $sql .= " AND (`unit`.`id` IN (SELECT `unit`.`id` FROM `skill` WHERE `desc_TC` ".$temp3."LIKE '%".$_GET["skl"]."%' AND `unit`.`skl1` = `skill`.`skl`) ".$temp2." `unit`.`id` IN (SELECT `unit`.`id` FROM `skill` WHERE `desc_TC` ".$temp3."LIKE '%".$_GET["skl"]."%' AND `unit`.`skl2` = `skill`.`skl`))";
    }
    $script .= "$(\"select[name='skl'] option[value='".$_GET["skl"]."']\").attr('selected','selected');";
    $temp = "";
  }
  //sp
  if ($_GET["sp"] != "") {
    $temp2 = "OR";
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("sp",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='sp']\").prop('checked', true);";
        $temp = "!";
        $temp2 = "AND";
      }
    }
    $sql .= " AND (`unit`.`sp1` ".$temp."= '".$_GET["sp"]."' ".$temp2." `unit`.`sp2` ".$temp."= '".$_GET["sp"]."')";
    $script .= "$(\"select[name='sp'] option[value='".$_GET["sp"]."']\").attr('selected',true);";
    $temp = "";
  }
  //eff
  if ($_GET["eff"] != "") {
    $fix = "";
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("eff",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='eff']\").prop('checked', true);";
        $temp = "NOT ";
        $fix = " OR `t0`.`tag` IS NULL";
      }
    }
    $temp2 = "";
    $temp3 = "";
    $temp4 = "";
    $temp5 = " AND (`t0`.`tag` ".$temp."LIKE '%".$_GET["eff"]."%'".$fix.")";
    if ($_GET["wpn"] != "") {
      $temp4 = " AND `w0`.`wpn` = '".$_GET["wpn"]."'";
      $temp6 = "";
      if (sizeof($_GET["not"]) > 0) {
        if (in_array("wpn",$_GET["not"])) {
          $script .= "$(\"input[name^='not'][value='wpn']\").prop('checked', true);";
          $temp6 = "!";
        }
      }
      $temp2 = "`w7`.`wpn` ".$temp6."= '".$_GET["wpn"]."' AND ";
      $temp3 = " AND `w6`.`wpn` ".$temp6."= '".$_GET["wpn"]."'";
    }
    $sql .= " AND `unit`.`id` IN (SELECT `w7`.`id` FROM `weapon` AS w7 WHERE ".$temp2."`w7`.`id` ".$temp."IN (SELECT `t1`.`id` FROM `weapon` AS w6 LEFT JOIN `tag_test2` AS t1 ON `w6`.`id` = `t1`.`id` AND `w6`.`no` = `t1`.`no` WHERE `t1`.`tag` LIKE '%".$_GET["eff"]."%'".$temp3." GROUP BY `w6`.`id`))".$temp4.$temp5;
    $script .= "$(\"select[name='eff'] option[value='".$_GET["eff"]."']\").attr('selected',true);$(\"select[name='wpn'] option[value='".$_GET["wpn"]."']\").attr('selected',true);";
    $temp = "";
  } else {
    //wpn
    if ($_GET["wpn"] != "") {
      $temp6 = "";
      if (sizeof($_GET["not"]) > 0) {
        if (in_array("wpn",$_GET["not"])) {
          $script .= "$(\"input[name^='not'][value='wpn']\").prop('checked', true);";
          $temp = "NOT ";
          $temp6 = "!";
        }
      }
      $temp4 = " AND `w0`.`wpn` ".$temp6."= '".$_GET["wpn"]."'";
      $sql .= " AND `unit`.`id` ".$temp."IN (SELECT `w1`.`id` FROM `weapon` AS w1 WHERE `w1`.`wpn` = '".$_GET["wpn"]."' GROUP BY `w1`.`id`)".$temp4;
      $script .= "$(\"select[name='wpn'] option[value='".$_GET["wpn"]."']\").attr('selected',true);";
      $temp = "";
    }
  }
  //origin
  if ($_GET["origin"] != ""){
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("origin",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='origin']\").prop('checked', true);";
        $temp = "!";
      }
    }
    $sql .= " AND `unit`.`origin` ".$temp."= '".$_GET["origin"]."'";
    $script .= "$(\"select[name='origin'] option[value='".$_GET["origin"]."']\").attr('selected',true);";
    $temp = "";
  }
  //rank
  if ($_GET["rank"] != ""){
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("rank",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='rank']\").prop('checked', true);";
        $temp = "NOT ";
      }
    }
    if ($_GET["rank"] == "SABC") {
      $sql .= " AND `unit`.`rank` ".$temp." IN ('S','A','B','C')";
    } else {
      $sql .= " AND `unit`.`rank` ".$temp."LIKE '".$_GET["rank"]."'";
    }
    $script .= "$(\"select[name='rank'] option[value='".$_GET["rank"]."']\").attr('selected',true);";
    $temp = "";
  }
  //pos
  if ($_GET["pos"] != ""){
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("pos",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='pos']\").prop('checked', true);";
        $temp = "!";
      }
    }
    $sql .= " AND `unit`.`pos` ".$temp."= '".$_GET["pos"]."'";
    $script .= "$(\"select[name='pos'] option[value='".$_GET["pos"]."']\").attr('selected',true);";
    $temp = "";
  }
  //tag
  if ($_GET["tag"] == "tag1"){
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("tag",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='tag']\").prop('checked', true);";
        $temp = "NOT ";
      }
    }
    $sql .= " AND ".$temp."(`unit`.`tag3` = '' AND `unit`.`tag4` = '' AND `unit`.`sp2` != '')";
    $script .= "$(\"select[name='tag'] option[value='tag1']\").attr('selected',true);";
    $temp = "";
  }
  if ($_GET["tag"] == "tag3"){
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("tag",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='tag']\").prop('checked', true);";
        $temp = "!";
      }
    }
    $sql .= " AND `unit`.`tag3` ".$temp."= '1'";
    $script .= "$(\"select[name='tag'] option[value='tag3']\").attr('selected',true);";
    $temp = "";
  }
  if ($_GET["tag"] == "tag4"){
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("tag",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='tag']\").prop('checked', true);";
        $temp = "!";
      }
    }
    $sql .= " AND `unit`.`tag4` ".$temp."= '1'";
    $script .= "$(\"select[name='tag'] option[value='tag4']\").attr('selected',true);";
    $temp = "";
  }
  if ($_GET["tag"] == "no"){
    if (sizeof($_GET["not"]) > 0) {
      if (in_array("tag",$_GET["not"])) {
        $script .= "$(\"input[name^='not'][value='tag']\").prop('checked', true);";
        $temp = "!";
      }
    }
    $sql .= " AND `unit`.`sp2` ".$temp."= ''";
    $script .= "$(\"select[name='tag'] option[value='no']\").attr('selected',true);";
    $temp = "";
  }
  //prop
  if (sizeof($_GET["prop"]) > 0) {
    if (in_array("ma", $_GET["prop"])) {
      $sql .= " AND `unit`.`id` IN (SELECT `w1`.`id` FROM `weapon` AS w1 WHERE `w1`.`no` IN ('6', '7') AND `w1`.`rng` = 1 GROUP BY `w1`.`id`)";
      $script .= "$(\"input[name^='prop'][value='ma']\").prop('checked', true);";
    }
    if (in_array("ca", $_GET["prop"])) {
      $sql .= " AND `unit`.`id` IN (SELECT `w2`.`id` FROM `weapon` AS w2 WHERE `w2`.`no` IN ('6', '7') AND `w2`.`dmg` = 1 GROUP BY `w2`.`id`)";
      $script .= "$(\"input[name^='prop'][value='ca']\").prop('checked', true);";
    }
    if (in_array("big", $_GET["prop"])) {
      $sql .= " AND `unit`.`tag1` = '1'";
      $script .= "$(\"input[name^='prop'][value='big']\").prop('checked', true);";
    }
    if (in_array("s0", $_GET["prop"])) {
      $sql .= " AND `unit`.`id` NOT IN (SELECT `w3`.`id` FROM `weapon` AS w3 WHERE `w3`.`wpn` = '999' GROUP BY `w3`.`id`)";
      $script .= "$(\"input[name^='prop'][value='s0']\").prop('checked', true);";
    }
    if (in_array("s1", $_GET["prop"])) {
      $sql .= " AND `unit`.`id` IN (SELECT `w4`.`id` FROM `weapon` AS w4 WHERE `w4`.`wpn` = '999' GROUP BY `w4`.`id`)";
      $script .= "$(\"input[name^='prop'][value='s1']\").prop('checked', true);";
    }
    if (in_array("s2", $_GET["prop"])) {
      $sql .= " AND `unit`.`id` IN (SELECT `w5`.`id` FROM `weapon` AS w5 WHERE `w5`.`wpn` = '999' AND `w5`.`sets` = 1 GROUP BY `w5`.`id`)";
      $script .= "$(\"input[name^='prop'][value='s2']\").prop('checked', true);";
    }
    if (in_array("bp", $_GET["prop"])) {
      $sql .= " AND `unit`.`id` IN (SELECT `blueprint`.`id` FROM `blueprint`)";
      $script .= "$(\"input[name^='prop'][value='bp']\").prop('checked', true);";
    }
    if (in_array("nbp", $_GET["prop"])) {
      $sql .= " AND `unit`.`id` NOT IN (SELECT `blueprint`.`id` FROM `blueprint`)";
      $script .= "$(\"input[name^='prop'][value='nbp']\").prop('checked', true);";
    }
    if (in_array("cm", $_GET["prop"])) {
      $sql .= " AND `unit`.`id` IN (SELECT DISTINCT `y` FROM (SELECT DISTINCT `a` AS y FROM `capsule` UNION ALL SELECT DISTINCT `b` FROM `capsule` UNION ALL SELECT DISTINCT `c` FROM `capsule` UNION ALL SELECT DISTINCT `d` FROM `capsule` UNION ALL SELECT DISTINCT `e` FROM `capsule` UNION ALL SELECT DISTINCT `f` FROM `capsule`) AS z)";
      $script .= "$(\"input[name^='prop'][value='cm']\").prop('checked', true);";
    }
    if (in_array("ncm", $_GET["prop"])) {
      $sql .= " AND `unit`.`id` NOT IN (SELECT DISTINCT `y` FROM (SELECT DISTINCT `a` AS y FROM `capsule` UNION ALL SELECT DISTINCT `b` FROM `capsule` UNION ALL SELECT DISTINCT `c` FROM `capsule` UNION ALL SELECT DISTINCT `d` FROM `capsule` UNION ALL SELECT DISTINCT `e` FROM `capsule` UNION ALL SELECT DISTINCT `f` FROM `capsule`) AS z)";
      $script .= "$(\"input[name^='prop'][value='ncm']\").prop('checked', true);";
    }
  }
  $sql .= " GROUP BY `unit`.`id`
ORDER BY ";
  //sort
  if ($_GET["sort"] == "tot"){
    $sql .= "`atk`+`def`+`spd`+`ctl`";
    $script .= "$(\"select[name='sort'] option[value='tot']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "atk"){
    $sql .= "`atk`";
    $script .= "$(\"select[name='sort'] option[value='atk']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "def"){
    $sql .= "`def`";
    $script .= "$(\"select[name='sort'] option[value='def']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "spd"){
    $sql .= "`spd`";
    $script .= "$(\"select[name='sort'] option[value='spd']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "ctl"){
    $sql .= "`ctl`";
    $script .= "$(\"select[name='sort'] option[value='ctl']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "rng"){
    $sql .= "MAX(`w0`.`rng`)";
    $script .= "$(\"select[name='sort'] option[value='rng']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "id"){
    $sql .= "`unit`.`id`";
    $script .= "$(\"select[name='sort'] option[value='id']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "dmg"){
    $sql .= "MAX(`w0`.`dmg`)";
    $script .= "$(\"select[name='sort'] option[value='dmg']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "sets"){
    $sql .= "MAX(`w0`.`sets`)";
    $script .= "$(\"select[name='sort'] option[value='sets']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "cd"){
    $sql .= "MAX(`w0`.`cd`)";
    $script .= "$(\"select[name='sort'] option[value='cd']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "lock"){
    $sql .= "`unit`.`lock`";
    $script .= "$(\"select[name='sort'] option[value='lock']\").attr('selected',true);";
  }
  if ($_GET["sort"] == "") {
    $sql .= "`atk`+`def`+`spd`+`ctl`";
  }
  $sql .= " ";
  //order
  if ($_GET["order"] == "DESC"){
    $sql .= "DE";
    $script .= "$(\"select[name='order'] option[value='DESC']\").attr('selected',true);";
  }
  if ($_GET["order"] == "ASC"){
    $sql .= "A";
    $script .= "$(\"select[name='order'] option[value='ASC']\").attr('selected',true);";
  }
  if ($_GET["order"] == "") {
    $sql .= "DE";
  }
  $sql .= "SC";
  if ($_GET["sort"] != "tot" && $_GET["sort"] != ""){
    $sql .= ", `atk`+`def`+`spd`+`ctl` DESC, `unit`.`id` ASC";
  }
  //echo '<br><br>'.$sql.'<br><br>';
  $result = mysqli_query($conn, $sql);
  $temp = ["","","","","","","",""];
  if (mysqli_num_rows($result) >= 1) {
    while($row = mysqli_fetch_assoc($result)) {
      if ($temp[0] == "") {
        $temp[0] .= "'".$row["unit_id"]."'";
        $temp[1] .= "'".$row["skl1"]."'";
        $temp[2] .= "'".$row["skl2"]."'";
        $temp[3] .= "'".$row["sp1"]."'";
        $temp[4] .= "'".$row["sp2"]."'";
        $temp[5] .= "'".preg_replace("/'/", "&quote;", $row["unit_name_".$_GET["l"]])."'";
        $temp[6] .= "'".$row["rank"]."'";
        $temp[7] .= "'".$row["pos"]."'";
      } else {
        $temp[0] .= ",'".$row["unit_id"]."'";
        $temp[1] .= ",'".$row["skl1"]."'";
        $temp[2] .= ",'".$row["skl2"]."'";
        $temp[3] .= ",'".$row["sp1"]."'";
        $temp[4] .= ",'".$row["sp2"]."'";
        $temp[5] .= ",'".preg_replace("/'/", "&quote;", $row["unit_name_".$_GET["l"]])."'";
        $temp[6] .= ",'".$row["rank"]."'";
        $temp[7] .= ",'".$row["pos"]."'";
      }
    }
  }
  echo "<br><div id='count'>".($_GET["l"] == "TC" ? "結果數量" : ($_GET["l"] == "SC" ? "结果数量" : "")).": ".mysqli_num_rows($result)."</div><br><div id='loading'>".($_GET["l"] == "TC" ? "加載中…<br><br>請耐心等候" : ($_GET["l"] == "SC" ? "加载中…<br><br>请耐心等候" : ""))."<br></div><div id='container'></div>";
  $script .= "var r = [[".$temp[0]."],[".$temp[1]."],[".$temp[2]."],[".$temp[3]."],[".$temp[4]."],[".$temp[5]."],[".$temp[6]."],[".$temp[7]."]];";
  echo "<script>".$script."$(document).ready(function(){ $(\"title\").text('".($_GET["l"] == "TC" ? "搜尋結果" : ($_GET["l"] == "SC" ? "搜寻结果" : ""))." - '+$(\"title\").text()); });</script>";
}
?>
</div>
</div>
<br>
<div id="tooltip"></div>
<br><br><br><table><tr><td localization TC="網址分流" SC="网址分流" style="font-weight: bold;">網址分流</td><td><a href="http://sdgo2018.rf.gd" target="_blank">sdgo2018.rf.gd</a><td><a href="http://sdgo.unaux.com" target="_blank">sdgo.unaux.com</a><td><a href="http://sdgo.byethost7.com" target="_blank">sdgo.byethost7.com</a></td></tr><tr><td colspan="4">DMCA: contact@sdgo2018.rf.gd</td></tr></table><br>
<script>
<?
$sql = "SELECT `skl`, `name_".$_GET["l"]."`, `desc_".$_GET["l"]."` FROM `skill`;";
$result = mysqli_query($conn, $sql);
$temp = ["","",""];
if (mysqli_num_rows($result) >= 1) {
  while($row = mysqli_fetch_assoc($result)) {
    if ($row["skl"] != "") {
      if ($temp[0] == "") {
        $temp[0] .= "'".$row["skl"]."'";
        $temp[1] .= "'".$row["name_".$_GET["l"]]."'";
        $temp[2] .= "'".$row["desc_".$_GET["l"]]."'";
      } else {
        $temp[0] .= ",'".$row["skl"]."'";
        $temp[1] .= ",'".$row["name_".$_GET["l"]]."'";
        $temp[2] .= ",'".$row["desc_".$_GET["l"]]."'";
      }
    }
  }
}
echo "var skl = [[".preg_replace("/\n/", "\\n", $temp[0])."],[".preg_replace("/\n/", "\\n", $temp[1])."],[".preg_replace("/\n/", "\\n", $temp[2])."],['w7RS','wTG8','wOqs','wLrj','wvaq','0SiV','0pGT','09RU','0FsJ','0CzF','0iM4','0KzD','0EZR','0mi6','0kL9','0ZIx','0Vd1','0lsH','0uRO','0nJK','0QQe','01Ld','08eA','0GdI','0tFP','0Jot','0dSS','0NJf','00yQ','0BLj','0wQg','0res','0swn','0cF0','0yoq','0flF','0WSU','0gYV','0hy4','02WT','04OJ','0HFx','0Im9','0owR','0TT1','0qfK','0bY6','0OSO','0XlD','0j6e','0zmd','0vOH','BpTI','BCkt','BPtP','Biff','BA1S','Bkp8','Bemj','Bn7n','Bm0s','BKkq','BMt0','B1pT','BQhV','B31U','B8cF','BGX4','BYnJ','BtB9','BN7R','BaA1','Bdtx','Bwh6','BB9K','BD1O','BWNt','BrcD','B6nH','Bsje','BcBd','BRAI','BgHA','Bf4P','B538','BbHs','B49f','BIgS','Bojg','B7uQ','BLEn','BHBj','BX40','BONq','BvCV','Bx3T','DCDJ','BzgU','DFER','DSvF','DPb9','DkU1','DVC6','DuKe','DegO','DA4x','DZ8K','DKDH','DmvD','D1UI','DJ8f','DMbd','DlVA','D35t','DGPP','D2MF','DBan','D0Vs','DD5q','Ddbj','DyGV','DcxU','DsP0','D62T','DhZ9','DWqJ','DoPx','DRr4','DLse','DqMD','D4aR','D5I1','D7RK','DTG6','DxII','rSit','DOqH','rZon','DvdA','rpJP','r9Rf','rCz8','riQS','rFsg','rkLQ','rEZj','ruWV','rVds','rmiq','rKzT','rnJ0','rlyF','r1L4','rGw9','rQQU','r8eJ','rreH','rNJx','rJoR','rBOe','rtF1','rswd','rUW6','rwQO','r0yD','rgYt','rcFI','ryTA','r2fP','rh6S','rWSf','rfl8','r4Og','rImQ','rTTs','rOpV','rowj','rHkn','rqf0','rbYq','rXlT','rj6U','sS0J','rzm4','sCkR','rvXF','sp79','skp6','sPt1','sA1K','sE6O','sene','sVXD','sMtI','sKAA','sm0H','s19P','sn7d','sQht','s8c8','s31f','sYng','sGjS','saAs','sD3V','sN7j','swhq','sdNn','srcT','scB4','sB90','s6uF','sgHJ','ssjU','sWNR','sRE9','sf41','sbHH','s49x','s536','sIgK','sojO','sHDe','s7uD','szgf','sLEd','sOUA','svCt','ySv8','sX4I','sx8P','yFEj','y9KS','yarD','yPbQ','yCDg','yUKO']];";
mysqli_close($conn);
?>
var unit = [["10001","10002","10003","10004","10005","10006","10007","10008","10009","10010","10011","10012","10013","10014","10015","10016","10017","10018","10019","10020","10021","10022","10023","10024","10025","10026","10027","10029","10030","10031","10032","10033","10034","10035","10036","10037","10038","10039","10040","10041","10042","10044","10046","10047","10048","10049","10052","10053","10055","10056","10057","10059","10060","10061","10062","10063","10065","10066","10067","10069","10070","10071","10072","10073","10075","10076","10078","10079","10081","10082","10084","10085","10086","10087","10089","10090","10091","10092","10093","10095","10096","10098","10099","10100","10101","10103","10104","10106","10108","10109","10110","10112","10113","10114","10116","10118","10119","10121","10122","10123","10125","10126","10128","10130","10132","10135","10137","10200","10202","10203","10204","10206","10207","10210","10212","10214","10218","10219","10221","10223","10225","10227","10229","10231","10233","10235","10236","10238","10240","10242","10244","10245","10247","10249","10251","10252","10254","10255","10256","11001","11002","11003","11004","11005","11006","11007","11008","11009","11010","11011","11012","11013","11014","11015","11016","11017","11018","11019","11020","11021","11022","11023","11024","11025","11026","11027","11028","11030","11031","11032","11033","11034","11035","11036","11037","11038","11039","11040","11041","11043","11044","11046","11047","11048","11049","11050","11051","11052","11053","11054","11055","11059","11060","11061","11062","11063","11066","11067","11069","11071","11072","11074","11075","11076","11077","11078","11079","11081","11082","11083","11084","11085","11086","11087","11089","11090","11091","11092","11093","11094","11095","11097","11099","11100","12001","12003","12004","12005","12006","12007","12008","12009","12010","12011","12013","12015","12016","12018","12019","12020","12021","12022","12025","12026","12029","12030","12031","12033","12035","12036","12038","12039","12041","12043","13001","13003","13004","13005","13006","13007","13008","13009","13011","13013","13014","13015","13017","13018","13019","13020","13022","13024","13026","13027","13028","13029","13030","13031","13032","13033","13034","13036","13037","13038","13039","13040","13042","13044","13046","13048","14001","14002","14003","14004","14005","14006","14007","14008","14009","14010","14011","14012","14013","14014","14015","14016","14018","14020","14022","14023","14024","14026","14027","14029","14031","14033","15001","15002","15003","15004","15005","15006","15007","15008","15009","15010","15011","15012","15013","15014","15015","15016","15017","15019","15021","15022","15024","15025","15026","15028","15029","15031","15032","15034","15035","15036","15037","15038","15039","15040","15041","15043","15045","15047","15048","15049","15050","15051","15052","15053","15054","15055","15056","15057","15058","15059","15061","15062","15063","15064","15066","15067","15069","15070","15074","15076","15077","15078","15079","15081","15084","15085","15086","15087","15089","15090","15092","15094","15096","15097","15098","15100","15102","15103","15104","15106","15109","15110","15112","15114","15115","15117","15119","15121","16001","16002","16003","16004","16005","16006","16007","16008","16010","16011","16012","16013","16014","16015","16016","16017","16018","16019","16020","16021","16022","16023","16024","16025","16027","16029","16030","16031","16032","16033","16034","16036","16037","16038","16039","16040","16041","16042","16043","16044","16045","16046","16047","16049","16050","16052","16053","16054","16055","16057","16058","16059","16060","16061","16062","17001","17002","17003","17004","17005","17006","17007","17008","17009","17010","17011","17012","17013","17014","17015","17016","17017","17019","17020","17022","17023","17024","17025","17026","17027","17028","17030","17032","17036","17038","17039","17041","17042","17043","17044","17045","17048","17050","17051","17052","17054","17055","17056","17057","17058","17060","17061","17063","17065","17066","17068","17070","17071","17072","17074","17076","17078","17080","17081","17083","17085","17086","18001","18002","18003","18004","18005","18006","18007","18008","18009","18010","18011","18012","18013","18015","18016","18017","18018","18019","18020","18021","18022","18023","18024","18025","18027","18028","20001","20002","20004","20005","20006","20008","20010","20012","20021","20022","20024","20026","20028","20030","20032","20033","20034","20036","20038","20040","21001","21004","21011","21012","21013","21015","21016","21017","21018","21019","21021","21023","21025","21027","21029","21031","21032","21034","22001","22002","22004","22005","22007","22009","22010","22011","22013","22015","22016","22017","22019","22021","22022","22024","22026","22027","22028","22029","22030","22032","22035","22036","22037","22038","22039","22040","22041","22042","22043","22045","22047","22048","22050","22051","22052","22053","22054","22055","22057","22058","22059","22061","22062","22063","22065","22067","22068","22069","22071","22072","22073","22075","22077","22078","22079","22080","22082","22084","22086","22088","22089","22090","22092","22093","22095","22097","22098","22100","22101","22103","22105","22106","22107","22109","22111","22113","22115","22116","22118","22119","22121","22122","22124","22126","22127","22129","22131","22132","22134","22135","22137","22139","22141","22143","22144","22146","22148","22150","23001","23002","23004","23006","23007","23010","23012","23014","23016","23018","23020","23022","23024","23026","24001","24003","24004","24005","24006","24008","24009","24011","24013","24015","24017","24018","24020","24027","24029","24031","24033","24201","24203","24204","24205","24207","24209","24210","24401","24402","24403","24404","24405","24407","24409","24411","24413","24414","24416","24417","24419","24421","24422","24423","24425","24426","24428","24429","24601","24603","24605","24607","24700","24702","24703","24705","24707","24709","24712","24713","24714","24716","24718","24720","24722","24723","24725","24726","24728","24730","24732","24733","99999"],["0hPH","0WIe","0RaD","04Gd","0Hqf","05RA","0IxI","0TMt","07sP","0qZ8","0LdS","0OIg","0jiQ","0zzn","0vGj","0xRs","B9s0","BpMq","BiZT","BFdU","BCLV","BEi4","BkoF","BZW9","BVJJ","Busx","BezR","BnQ1","BKL6","B8Fe","BQeK","BldO","BGJH","B1oD","BJWd","BtSA","BNQI","Bwef","BaOP","BUyt","B0w8","BBTS","BrFg","BsYQ","BcSs","ByWj","Bgln","BIkF","BfmV","B2yq","BRO0","BhwT","BHp9","BTfJ","B4TU","BLOx","BblR","Bq61","Bj0K","BXm6","DeAS","DKpj","Dmtg","DV78","DE0f","DnhQ","DM1s","DQcn","D3n0","DlXq","DG7T","D8BV","DYAU","DtNF","Dd39","DNh4","Da9J","DwcR","D0j1","DDnx","DrB6","DsHK","DR9H","D6AO","Dg4e","DcND","DhjI","DW3d","DIDP","DfgA","DoHf","D5ut","D7E8","rSbV","Db4g","DHUS","Dxuq","DLCQ","DO3j","DXgs","Djvn","DzD0","r9ET","rP5F","rCUU","rFC4","rA29","rk8J","rEvR","rZK1","rmb6","ruVK","reDx","rKUO","rM5D","r18H","rlPe","r32d","rJKI","r8xA","rrxs","ryMn","rD2j","rRaT","r6rq","rcq0","rhiF","r2ZV","rWIU","r4G4","r5RJ","rHqx","r7s1","rIz9","rTMR","rLdK","rqZ6","rOIO","rzzd","sieP","rjiD","rvJe","rxRH","spQA","sCLt","s9sI","sko8","sFdf","sEFS","sVJg","suyn","sZWQ","snQs","sezj","sKLq","sQe0","slwV","s1oT","sGYF","s8FU","stSJ","sJW4","sNl9","sUyR","saO1","swex","srFO","s0w6","sBTK","ssYD","syfe","s26A","scSH","sgld","sh0P","sROI","sfmt","s4Tf","sIk8","sotS","sLXn","sv7V","sq6s","sj00","sblj","szkT","yStU","yCp4","yFXR","yphF","yP1J","yic9","yAn1","yE0x","yV76","yeAK","ymtO","ynhD","yM1H","yK9e","yljA","yQcd","y3nI","y8Bt","yGHP","ytN8","yYAf","yd3Q","yN4S","ya9g","ywcj","y0js","yDun","yrBq","ysH0","y6EV","ycNT","yg4U","yRCF","yW34","yhv9","yfgJ","y5uR","yID1","yoHx","y7E6","yHUK","yLCD","yb4O","yO8e","yjvd","yXgH","yzDI","yxKA","6Sbt","69VP","6CUf","6FPS","6P58","6k8g","6mbq","6KaV","6uV0","6M5T","6ern","6lPU","61GF","6324","68xJ","6YrR","6JM9","6tq1","6aa6","60PO","6UVx","6dIK","6DRe","6rxH","6BGD","66sA","6cqI","6yMd","62Zt","6WIf","6RdP","6hi8","6IzQ","65Rg","64JS","6TMj","67ss","6qZq","6HLn","6jiT","6Ld0","6OoV","6vJU","6xWF","cpQJ","6zz4","cCLR","cFdx","c9y9","cie1","cko6","cEFK","cZWD","cmSe","cVJO","cuyd","cnQH","cKOA","c1TP","clwt","cQeI","cGY8","c8Ff","ctSg","cJfS","cNlQ","cBT0","c0wq","crkV","csYT","cwmn","cgl4","cyfU","c26J","ccpF","cRX9","cfmR","ch01","cIk6","c4Tx","cotK","cHpD","cb1e","cTfO","cq6H","cLXd","cj0I","czAP","cXnA","cv7t","gStf","gph8","gC9S","gP1g","gAns","gicQ","gEBn","gFXj","gV7q","gmNV","gnhT","geA0","gM3F","gK9U","gQc4","gGH1","g3u9","gljJ","g8BR","gN4K","ga9O","gtN6","gYAx","gd3D","gwge","g0jH","gDud","g6Et","grDA","gsHI","gcUP","gRC8","gg4f","gW8S","ghvQ","gfgg","gxKJ","29V1","2SbR","gzr9","gjv4","2CUx","2P56","2FPK","2A2D","2k8O","2Exe","2erd","2ZKH","2mqA","21G8","2Kat","2uVI","2MIP","28xg","2lPf","23RS","2Yrj","2JMQ","2tqs","2UZn","2dI0","2DRU","2aaq","20iV","2BGT","2yM4","2rzF","26sJ","22ZR","2cL9","2Rd1","2WIx","2hi6","24JK","25RO","2HLd","2IzD","2TQe","27sH","2LdI","2qeA","2Oot","2jFP","RSSS","2vJf","2xW8","RpQg","R9yQ","RCLj","RZWT","RFwn","Ries","Rkoq","REF0","RVYV","RKOJ","R1T1","RQm9","Ruy4","RnlF","RlwR","RGY6","RNlD","RJfK","R00A","RtSO","RU6e","Rwmd","RaOH","Rrkt","RBTI","RstP","Rcp8","Rg1S","Ryff","R26g","RIkq","RRXQ","R47n","Rfmj","Rh0s","Rot0","RThV","Rb1U","RHpT","RqcF","RLX4","RXnJ","RjB9","Rv7R","Wph6","WStx","RzA1","WC9K","WP1O","WFje","WicD","WAnH","WEBd","WVHA","WmNt","Wn4P","WK9f","WeAI","WM38","WQgS","W8Bj","Wljg","W3uQ","WGHs","WYEn","WtNq","WN40","Wd3T","WaCV","W6ER","Wsb9","Wg4x","WcU1","WrDJ","WRC6","WW8K","WhvD","WfgO","W5Ke","WIDH","Wobd","W7VA","WHUI","WO8f","Wb5t","WLPP","WjxS","WX28","WxKg","WzrQ","fCan","fSbj","fExU","f9Vs","fP5q","fFP0","fkGV","fA2T","fer4","fZMF","fmqJ","fuZ9","fMI1","fKaR","f8xO","flPx","fJMD","f1G6","f3RK","fYse","ftqH","fadA","fUZd","fdII","f0it","fDRf","frz8","fBJP","fyQS","f2Zj","fcLQ","f5WV","fRds","fWon","fhiq","f4J0","fIzT","fTQU","f7yF","fvJx","fjF1","fLw9","fqeJ","fOoR","fxW6","hSSK","hpQO","h9yD","hFwd","hieH","hCOe","hmSf","hkTA","hEFI","hVYt","hZfP","hnl8","hu6S","hKOg","hQmQ","hlwj","h8kn","hGYq","h1Ts","hJf0","haXF","htpV","hNlT","hU6U","hB79","hwm4","h00J","hst1","hrkR","hyfx","hcp6","h26O","hfne","hg1K","hRXD","h47d","hh0H","hIAA","hTht","hotI","hH9P","hb1f","hLjS","hqc8","hXng","hjBQ","hzAs","4phq","4SNn","4C90","4icT","4P3V","4FjU","4AuF","4eE9","4K9x","4mNR","4M36","4VHJ","4QgK","4ljO","48De","4GHH","43uD","4YEd","4d8P","4tUA","4N4I","4aCt","4wgf","40v8","4DKS","4rDg","4g5n","4sbQ","46Ej","4cUs","4RCq","4f2V","4W80","4hvT","4ob4","45KU","4IrF","47VJ","4b5R","4Ha9","4LP1","4O8x","4X26","4jxK","4xKO","59VH","5Cad","4zrD","5Sqe","5PIA","5kGt","5FPI","5Exf","5ARP","5esS","5ZM8","5mqg","5uZQ","51Gq","5Kaj","5MIs","5lin","53R0","58zV","5UZ4","5JMT","5tLF","5BJ1","5yQK","5DRx","5rz6","50iR","56sO","5RdH","5cLD","52ee","5Wod","5hFA","55Wt","54JI","5oSP","5TQf","5HOS","57y8","5qeg","5LwQ","I9yT","5Ooj","5jFs","5xWq","ICOU","ISS0","IplV","IkTJ","IimF","IFw4","IZf1","IEk9","IVYR","Inl6","IKOO","Il0e","Iu6K","IQmD","I1TH","I8kd","IGtA","IJfI","Itpt","IN1P","IaX8","IU6f","IwnS","IB7Q","I00g","IRXT","Irkj","Ists","Icpq","Iyhn","Ig10","I2cV","IfnU","I474","IhBF","IIAJ","IoN9","ILjK","IjBD","IvHe","IXnO","Iqc6","IzAH","oP3t","oSNd","op4A","oC9I","oFjf","oAu8","oigP","omNj","oEDS","oVHg","on4s","oeEQ","oKCn","oM3q","o8DU","olvV","oQg0","o3uT","oYE4","T4Y9","oN59","otUJ","oaCR","od81","o0v6","owgx","oDKK","orDO","o6Ve","osbD","oW8I","ocUH","oRPA","og5d","of2t","ohxP","o5Kf","ooqS","oIr8","o7Vg","oHaQ","ob5j"]];
var weapon = [["0","1","2","3","4","5","6","11","12","13","14","15","16","21","22","23","25","26","27","28","31","32","33","34","35","36","37","38","39","41","42","43","999"],["agJO","are1","aBLR","asdx","a0y9","acFK","aWSe","ayo6","a2WD","afQH","aOSg","a4OA","ahyd","aHFf","aIeI","aowt","abY8","aXlQ","aqfS","azmn","dPYT","ajyj","avOs","dpT0","dSwq","dCkV","dAl4","difU","dkpF","demR","dm01","dVX9","dE6J"]];
var pos = [['r','s','p'],['data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwC98RfG2u+OvGlz4c8N38un6HazC2klt32PcyZx970z26ADJ61iN4E1Xw1ZRavouoalaSkKzXMUx4b1dM8qT3OAe3vS0jxBafDjxjrOka1bXRvZZJFjZlj8qUNjAkLMODjr24Ndz4j13QtK8Ia1FBMt09/ZiCW+TabaMlSGVX/jI44AJOB71z76s+lw+F548tPb+tX089Tu/hT8TIfEHh+RfEc0NrrFjKbe47LKQOHHpn0orwr4H/D7Vde8M3F9C8sULzYR8lfMGP8AP50VSnK2x508NQcrudvI91+NPgDw/wCJtJa+1O1P2yLCrLE21vxNeK+C/hX4fvtfsLK+kv7i138RSTjavPYAe9FFKp8RrhdaN2fVukaZaaRp8Njp0Kw20QwqqP1PvRRRW547d3dn/9k=','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwDY+IPjTW/HHje58KeGtUXStPgYwtNuKmeT+7kc8kcDpXHXul6h4Qh06/0bXNRg1GdXM0byAGKRGwVdR64HWsS+vbfwT8R7yw1+Cct9sMu/yg6MCAASCwyMjmvU9fsWXwNrr+ITaW9nd2xkstP+R5vMY7lcvjcxBzjOeDg9K+lo0k6bhB21svP5fj6bs8NzUuWpPW+v/A+R6D8KPiTb+J/DfmaxIlvqVq5gnGOHI/iGPXmivEPgT4G1jV/B8l0jNEj3DEEgktwB6+360VxfVMNLWc+Vvp2F/aGKg3GFJySur9z2r41+AdA8TaK97qlqTdw8JLG21ufevK/CXw50q61G00+8vNUubLIXypbgYxnpwoOOenSiiujAtqin3uvkebmlSUMTOMXZafifTOmWFrpljDZ2MKQ20ShURRgAUUUV4Em222fWwioxSirI/9k=','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwDR+I3jPxB428Xahofhy+nsNA047Lma2JV3w2GdmHO0HsOw5zXO3vhfUfBdu+p6Rr19aXy3jws0MzbXIUEO2ThgQehFZum67F8O/iVf6R4gtmSK4uiGvGUbkUnG7PQqf4gRjHPavV/Ft1aabod3qVq9uVtLUvZxlwy+ZsOHZj1OOmTgDNfNY/FVKVVJ3u9jhqSknqdV8J/iTD4l8Mb9elittXtZDBc4GFkI6OvpkdvXPbFFeLfBjwHrXiXwxLqzSSw/aJySQ4XcepOM+4P40V7kalS2qudSlK2x7V8ZfAPh/wAUaQ13qtoTcx4Cyxttb868k8HfDPRrzVbKxvrrVLuxWRQltNc5jT6LjHbvmiioq/GTPc+m9MsLXS7GGzsIUht4htVFGAKKKK7EbH//2Q==']];
if (window.innerWidth < 1337) {
  (!$("div#warning").hasClass("show") ? $("div#warning").toggleClass("show") : void(0));
} else {
  ($("div#warning").hasClass("show") ? $("div#warning").toggleClass("show") : void(0));
}
$(window).resize(function(){
  if (window.innerWidth < 1337) {
    (!$("div#warning").hasClass("show") ? $("div#warning").toggleClass("show") : void(0));
  } else {
    ($("div#warning").hasClass("show") ? $("div#warning").toggleClass("show") : void(0));
  }
});
function resetform(){
  $("#sdgo input:not([type='button']):not([type='submit']):not([type='hidden']):not([type='checkbox'])").val('');
  $("#sdgo select").each(function(){
    $(this).children(':first')[0].selected = 'selected';
  })
  $("#sdgo input[type=checkbox]").prop('checked',false);
}
function ch_loc(lang) {
  $("*[localization]:not(body):not(span.ul)").each(function(){
	  $(this).html($(this).attr(lang));
  })
  $("input[type='hidden'][localization]").each(function(){
	  $(this).val(lang);
  })
  $("input[type='button'][localization], input[type='submit'][localization]").each(function(){
	  $(this).val($(this).attr(lang));
  })
  $("body").attr("localization", lang);
  $("span.ul").each(function(){
	  $(this).attr("title", $(this).attr(lang));
  })
  if (lang == "SC") {
    var eff = [["狙擊","擴散","緩速","追尾","修理","牽引","抽氣","貫通","瞬移","蓄力","倒地","隱形","無格衝","7秒I力場","發射硬直","槍械故障","裝填下降","一時硬直","迎擊模式","突進格鬥","滑鼠反轉","全方位攻撃","格鬥反擊無效","6秒內推進量增加","彈藥減少不可變形","雷達顯示命中機體","判定依射擊武器決定","7秒內防禦力大幅增加","7秒內受到光束的傷害-70%"],["狙击","扩散","缓速","追尾","修理","牵引","抽气","贯通","瞬移","蓄力","倒地","隐形","无格冲","7秒I力场","发射硬直","枪械故障","装填下降","一时硬直","迎击模式","突进格斗","鼠标反转","全方位攻撃","格斗反击无效","6秒内推进量增加","弹药减少不可变形","雷达显示命中机体","判定依射击武器决定","7秒内防御力大幅增加","7秒内受到光束的伤害-70%"]];
    for (var i = 0; i < eff[0].length; i++) {
      $("select[name='eff'] option, table#armament td:last-child").each(function(){
        $(this).html($(this).html().replace(eff[0][i], eff[1][i]));
      });
    }
    eff = null;
  }
}
function ch_loc_href(lang) {
  if (lang != cur_lang) {
    window.location.href = window.location.href.replace(/l=((T|S)C)/g, "l="+lang);
  }
}
function ch_fs_href(fs) {
  if (cur_fs != fs) {
    window.location.href = window.location.href.replace(/fs=(20|18|16)/g, "fs="+fs);
  }
}
function auto_correct(element, s) {
  if (element.prev().length && s != "s") {
    element.prev().children('input').prop('checked', false);
  }
  if (element.next().length && s != "s") {
    element.next().children('input').prop('checked', false);
  }
  if (element.next().next().length && s == "s") {
    element.next().next().children('input').prop('checked', false);
  }
  if (element.prev().length && element.next().length && s == "s") {
    element.next().children('input').prop('checked', false);
  }
  if (element.prev().prev().length && s == "s") {
    element.prev().children('input').prop('checked', false);
    element.prev().prev().children('input').prop('checked', false);
  }
}
var cur_lang = window.location.href.match(/l=((T|S)C)/)[1];
var cur_fs = window.location.href.match(/fs=(20|18|16)/)[1];
if (window.location.href.match(/l=((T|S)C)/g)) {
  ch_loc(cur_lang);
}
if (window.location.href.match(/fs=(20|18|16)/g)) {
  $("body").attr("fs", cur_fs);
  $("input[type='hidden'][name='fs']").each(function(){
    $(this).val(cur_fs);
  })
}
if (typeof r != "undefined") {
  var temp = "";
  for (var i = 0; i < r[0].length; i++) {
    temp += "<table class='frame'><tr><td><a href='?id="+r[0][i]+"&l="+cur_lang+"&fs="+cur_fs+"'><img srcc='"+r[0][i]+"' class='unit'></a><br><div class='rank'></div><a href='?skl="+r[1][i]+"&l="+cur_lang+"&fs="+cur_fs+"'><img src='skill\\"+r[1][i]+".gif' class='skill'></a><a href='?skl="+r[2][i]+"&l="+cur_lang+"&fs="+cur_fs+"'><img src='skill\\"+r[2][i]+".gif' class='skill'></a><div><table><tr><td><a href='?sp="+r[3][i]+"&l="+cur_lang+"&fs="+cur_fs+"'><img src='skill\\"+r[3][i]+".gif' class='sp'></a></td>"+(r[4][i] != "" ? "</tr><tr><td><a href='?sp="+r[4][i]+"&l="+cur_lang+"&fs="+cur_fs+"'><img src='skill\\"+r[4][i]+".gif' class='sp'></a></td></tr>" : "")+"</table></div></td></tr></table>";
  }
  $("div#result div#container").append(temp);
  var i = 0;
  $("img.unit").each(function(){
    $(this).attr("tit", r[5][i++].replace("&quote;", "'"));
  })
  i = 0;
  $("div.rank").each(function(){
    $(this).html("<img srcc='"+r[7][i]+"' class='pos' />"+r[6][i++]+" RANK");
  })
  $("img.unit").mousemove(function(e){
    $("div#tooltip").text($(this).attr("tit")).css({"top":e.pageY+30+"px", "left":e.pageX-$("div#tooltip").outerWidth()/2+"px"}).show();
  }).mouseout(function(){
    $("div#tooltip").hide().css({"left":"0"});
  })
  temp = null;
}
$("div#loading").remove();
prefix = ["https://s2.ax1x.com/2019/01/23/kV","https://s2.ax1x.com/2019/05/02/Et"];
$("img.skill, img.sp").each(function(){
  key = $(this).attr("src").match(/([0-9]{3,3})/)[1];
  index = skl[0].indexOf(key);
  title = skl[1][index]+"\n\n"+skl[2][index];
  $(this).attr("tit", title).attr("src", prefix[0]+skl[3][index]+".gif");
})
$("img.skill, img.sp").mousemove(function(e){
  $("div#tooltip").html($(this).attr("tit").replace(/\n/g, "<br>")).css({"top":e.pageY+30+"px", "left":e.pageX-$("div#tooltip").outerWidth()/2+"px"}).show();
}).mouseout(function(){
  $("div#tooltip").hide().css({"left":"0"});
})
$("img.unit").each(function(){
  $(this).attr("src", prefix[1]+unit[1][unit[0].indexOf($(this).attr("srcc"))]+".png");
})
$("img.weapon").each(function(){
  $(this).attr("src", prefix[0]+weapon[1][weapon[0].indexOf($(this).attr("srcc"))]+".gif");
})
$("img.pos").each(function(){
  $(this).attr("src", pos[1][pos[0].indexOf($(this).attr("srcc"))]);
})
</script>
</body>
</html>
