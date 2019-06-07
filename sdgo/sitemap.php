<?php
header('Content-Type: application/xml; charset=utf-8');
require_once 'inc/php/db.php';
$x = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
$n = 'http://'.$_SERVER['SERVER_NAME'];
$u = '/search_v2';
$t = '<url><loc><ph></loc></url>';
$p = ['id','skl','sp','wpn','wpn','wpn','eff','origin','blueprint','machine'];
$s = ["select id from unit;",
      "select skl from skill where skl not in ('','012','013','014','231');",
      "select skl from skill where skl in ('012','013','014','231');",
      "select wpn from weapon where wpn not in ('0','999','s','m','l','f');",
      "select wpn from weapon where wpn in ('s','m','l','f');",
      "select distinct cat from weapon where cat in ('a','b','c','d');",
      "select id from eff where id not in ('999');",
      "select origin from origin;",
      "select id from blueprint;",
      "select machine from capsule;"];
for ($i=0;$i<count($p);$i++) {
  $r = $pdo->prepare($s[$i]);
  $r->execute();
  while ($ro=$r->fetch()) {
    $x .= preg_replace('/<ph>/', $n.$u.'?'.$p[$i].'='.$ro[0], $t);
  }
}
echo $x."
  <url>
    <loc>{$n}/search_v2?machine=c</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=S%</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=SS</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=SR</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=S</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=A%</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=AS</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=AR</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=A</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=B%</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=BS</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=BR</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=B</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=BU</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=C%</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=CS</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=CR</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=C</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=CU</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=SABC</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=_S</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=_R</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?rank=_U</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?pos=r</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?pos=s</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?pos=p</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=ma</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=nma</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=ca</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=nca</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=big</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=nbig</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=s</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=ns</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=s2</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=ns2</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=bp</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=nbp</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=cm</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?prop=ncm</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?tag=tag2</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?tag=tag3</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?tag=tag4</loc>
  </url>
  <url>
    <loc>{$n}/search_v2?tag=no</loc>
  </url>
</urlset>";
?>