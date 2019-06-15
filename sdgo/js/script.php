<?php
$lm=filemtime(__FILE__);
$etf = md5_file(__FILE__);
$eth=(isset($_SERVER['HTTP_IF_NONE_MATCH'])?trim($_SERVER['HTTP_IF_NONE_MATCH']):false);
header('Content-Type: text/javascript');
header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lm)." GMT");
header("Etag: {$etf}");
header('Cache-Control: public');
if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])==$lm || $eth==$etf) {
  header("HTTP/1.1 304 Not Modified");
  exit();
}
require_once "../inc/php/tos.php";
if (!$is_localhost&&0) {
?>
var skl = [['003','004','005','006','007','008','009','010','012','013','014','015','016','017','018','019','020','021','022','023','024','025','026','027','028','029','030','031','032','033','034','035','036','037','038','039','040','041','042','043','044','045','046','047','048','049','050','051','052','053','054','055','057','058','059','060','061','062','063','065','066','067','068','069','070','071','072','073','074','075','076','077','078','079','080','081','082','083','084','085','086','087','088','089','090','091','092','093','094','095','096','097','098','099','100','101','102','103','104','105','106','107','108','109','110','111','112','113','114','115','116','117','118','119','120','121','122','123','124','125','126','127','128','129','130','131','132','133','134','135','136','137','138','139','140','141','142','143','144','145','146','147','148','149','150','151','152','153','154','155','156','157','158','159','160','161','162','163','164','165','166','167','168','169','170','171','172','173','174','175','176','177','178','179','180','181','182','183','184','185','186','187','188','189','190','191','192','193','194','195','196','197','198','199','200','201','202','203','204','205','206','207','208','209','210','211','212','213','214','215','216','217','218','219','220','221','230','231','232','233','234','235','236','237','238','239','240','241','242','243','244','245','246','247','248','249','250'],['w7RS','wTG8','wOqs','wLrj','wvaq','0SiV','0pGT','09RU','0FsJ','0CzF','0iM4','0KzD','0EZR','0mi6','0kL9','0ZIx','0Vd1','0lsH','0uRO','0nJK','0QQe','01Ld','08eA','0GdI','0tFP','0Jot','0dSS','0NJf','00yQ','0BLj','0wQg','0res','0swn','0cF0','0yoq','0flF','0WSU','0gYV','0hy4','02WT','04OJ','0HFx','0Im9','0owR','0TT1','0qfK','0bY6','0OSO','0XlD','0j6e','0zmd','0vOH','BpTI','BCkt','BPtP','Biff','BA1S','Bkp8','Bemj','Bn7n','Bm0s','BKkq','BMt0','B1pT','BQhV','B31U','B8cF','BGX4','BYnJ','BtB9','BN7R','BaA1','Bdtx','Bwh6','BB9K','BD1O','BWNt','BrcD','B6nH','Bsje','BcBd','BRAI','BgHA','Bf4P','B538','BbHs','B49f','BIgS','Bojg','B7uQ','BLEn','BHBj','BX40','BONq','BvCV','Bx3T','DCDJ','BzgU','DFER','DSvF','DPb9','DkU1','DVC6','DuKe','DegO','DA4x','DZ8K','DKDH','DmvD','D1UI','DJ8f','DMbd','DlVA','D35t','DGPP','D2MF','DBan','D0Vs','DD5q','Ddbj','DyGV','DcxU','DsP0','D62T','DhZ9','DWqJ','DoPx','DRr4','DLse','DqMD','D4aR','D5I1','D7RK','DTG6','DxII','rSit','DOqH','rZon','DvdA','rpJP','r9Rf','rCz8','riQS','rFsg','rkLQ','rEZj','ruWV','rVds','rmiq','rKzT','rnJ0','rlyF','r1L4','rGw9','rQQU','r8eJ','rreH','rNJx','rJoR','rBOe','rtF1','rswd','rUW6','rwQO','r0yD','rgYt','rcFI','ryTA','r2fP','rh6S','rWSf','rfl8','r4Og','rImQ','rTTs','rOpV','rowj','rHkn','rqf0','rbYq','rXlT','rj6U','sS0J','rzm4','sCkR','rvXF','sp79','skp6','sPt1','sA1K','sE6O','sene','sVXD','sMtI','sKAA','sm0H','s19P','sn7d','sQht','s8c8','s31f','sYng','sGjS','saAs','sD3V','sN7j','swhq','sdNn','srcT','scB4','sB90','s6uF','sgHJ','ssjU','sWNR','sRE9','sf41','sbHH','s49x','s536','sIgK','sojO','sHDe','s7uD','szgf','sLEd','sOUA','svCt','ySv8','sX4I','sx8P','yFEj','y9KS','yarD','yPbQ','yCDg','yUKO']];
var weapon = [["0","1","2","3","4","5","6","11","12","13","14","15","16","21","22","23","25","26","27","28","31","32","33","34","35","36","37","38","39","41","42","43","999"],["agJO","are1","aBLR","asdx","a0y9","acFK","aWSe","ayo6","a2WD","afQH","aOSg","a4OA","ahyd","aHFf","aIeI","aowt","abY8","aXlQ","aqfS","azmn","dPYT","ajyj","avOs","dpT0","dSwq","dCkV","dAl4","difU","dkpF","demR","dm01","dVX9","dE6J"]];
var pos = [['r','s','p'],['data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAYdEVYdFNvZnR3YXJlAHBhaW50Lm5ldCA0LjEuNv1OCegAAAS6SURBVDhPdZR5UNVVFMd/oLL4EDEV0GckOKKioBQIwrAKwgMX9k1AAQGfD1CeLILJrhS7KCKLYQ6YgiIpUmqFSOJOWDSWOVPm6EwzOTVTfzTWzKf7HmPGgH98fzPn3nM+v3PPPfdIwGt1vWg/Da5+pMvM2TlTTvZSOxp2bBNbk/u/1KSLFYmJBJrJiTJ7kzBDE8L1jAiQprBBNgMHwym4zJ3JVgd7LlRXCPeJ8eOM3sON7FjjgY9sFt76AiC2vU1mkr8xkJwNCkKWLSZP4UeQuRy/qTKi5FYcTleL0NdA7546Q5B8EQHGpnjqGJK20oGaiGje3bSeOlUyBXERHM/LojkxmfYkJXnO7rhK+jgZmNCUtVcgJoFG26xis4U1nvrGRC+05mjMFk4mq7SA0cZWRlvbaE1I5kRsClUbwmnO2k1JUgKK+VYozBbSos4XmP9Ba3els2m2nGBjM0IXWNKUrORUeiZfiIu6lLOPJ8c6uFlezVBpFZdUe+jcriYvJorS1G0UKIJx05GRuNJ5PDTN0ZkwIzM8JR0+VKbRmZ/P/tAw+P4H7tQf5WJ+EdwagV/+5J/uz+hM3EVzagZNqgyORG8lVm5JhFBH1h4tWBoqLGfzG3IUkiHlXgqOxCdQGR1DT1ERfwxcY6CiFm4L4I0Rnn90Hu4+gnuPuLi7kObN2zidqiJ9uS1+hkaUKQIZqK5F6ovdjtLcEoW+jFL/AFqSUuD+KM/7rtC7t5j+kgqGq45wImY7lzILeVD3AXz7hBenLxNtaErQdCPW6kpsnCFDvcqekympSIecvFHOX0i89RKaUlO0l/GwqQ2e/QafDjKUX87vbd3cyirny5wDvOgbhMdi79wgxcuc8BAVdBHynSqhtltOlY8vUqW7D1Gm5kTa2VCRFE+n6LuRshr+ar8AV7/mWVkL95TFPNpTx0hupbau3PsOuq+SPH0ejgLoLORjIFHi5Ua9vwLptCqNLUusCVhkQYMyhZGKerhym6cVrfxc2siD7Cpo+wQ6Poez/aI0P8LIT3D4LPst7HEXwFVCnvoS5QF+dGqOP3iolmxfL4LfsqA9NY2BzAL4+BpcvsvZCCVn4jNEDZ8KkIAN3BdZPobmCwy7J9C9wp/I6SY46Eism21CZXgoN+sOjvWVWuGLzwwT8UIknITWi04otHEjQ2479oOHv8LFIbr847gTvpOe5f585RrHN6FphOoZs0ZfjzhbWzpyc8daSvM5VbqPTBc33hamszRNwPVINF/Czcwy6BuGxl5GwtX02ARywzGavzNqGA5TESfJtPPBd7YpRSHhWuB/UI32bQohwGwBNmJpsdAa8RAip80ha5Y1B+bYcTskHWq6oLCVdtu1xOkYa0/2jqRLiqs3596rngjVKDsoEk8x8lYIoKb47mLcaTIJ0ZXxvrMXJfYuKOdZaW/bVshJz5AdvutpyC0U4a8446CXj52gOC6B0MVLBWyqNlDTMnZCnrpTRFaazMbstXPnEuu4mpaCUhH6iqHROOOlugqKKdkYQuZqZ4JFvTx0dFlnYCh60YBoSyvUHu60qFT0Nx4V7hPjJyy81OjxdvrLDtCjzqZL9HJvTi49WVmcz9/L9fqDwmXyOED6FwNp6DW50UQ9AAAAAElFTkSuQmCC','data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAYdEVYdFNvZnR3YXJlAHBhaW50Lm5ldCA0LjEuNv1OCegAAATHSURBVDhPdZR5UNRlGMdfpkFNUVMEjVI8kSNEFFCQxQUUUQ7lWFxYFhZkYQUEFDxAkUswgkREORxD88hwMHRYFlNRR1PU1LxDpcOOYbKZarKa6Zg+vViajPrH93c+7+d93uf9Pq8AXqjMvQ/wy+rAUf0elkH1+BScIbT2qvz1/PjHeu7HpLfaGR9WypDZeVh4rmO4bzliZgFCWYhQZGETvYHAlTuoM92Q4c+O7/OyzXQH78QqXvXLYLC7GjEpUEpF/5lZiBnZCNcUzP0NWCj1DHKKxTU4lxXVH8ihL4BWtV/DLbmcl730iIlhDHRQYTk1llkJm1G92U5q0y18C5tQrNiCmzafsR56rCR4XFA2q/adkYjnQD1zihF+i+TyYrFdkI8q2UjkEiPq1UfIbbpD26+Q3dKJt6EUpbaAIPVa7DwT6OeRzLiYjeQ3X5SYp6DZtSaGhi9BOCsQ3moMNee4fA9aPgSPiHdRFR/j5B+w+fx9vLQl+C9eR5yhCM/gVKznrERMjmZackVf6PTE9Qh3HcJnKXZxRaiLWnj/OHwswfH5t4gu+YSOn2B/F8zTN6BYlIcqYTkhuuV4xVcgHLVYzc8ie9fJR2BRduwzJkYXIezjJF2PIrUcN8064nONXP0Ozn4DmsI7pNd1k1F/nQB9I8GJ1QRr1jA3KouZqnzMp8Rg4WfAL38nZUfvIzTbexg0R1pmZAgKmaV3bApz9DkEpNURkXuKLUZQrekmfsN1ypq/p01mmy3LM8IxCTOrQEbYhyAm+CJcFqIoP0hw4xW56oLPGRqyHWHtjzLcQIA6GZ/odKJLm9kjbagt+5KwnC7u/QVHZDmOy8yN3eCb2ISt5yrEAHvE8EnSej44VxzErvos4o3iTxmmqsXM1pOI2DRi4koIiaskpeY0tZcl4FuIlHUNy/yC4GVdeCS0cOIHqDklizc6HDFEAsc4yOwCcGk8ysi68/J5623MFxZiNt6VCO1SQkLzCFXXYKg6L/3ZybZOqDCBrfIw3nEXiCy5QGsP7L4JTqpqmelYxDAb2RhKbDbtZ9jWE4iY41/zWno5/T2UzNUsZUF4Lhr9Lqqaf2ardIC77hw+qTdQGDqJLL6M8YHcPFmK4jYYM79eLt0LMWIyIkjL9F3thJ3r+c/4m3Yj7NwQr0xEDHaRnnBniG0m/roTzEq+wry821TKptl7Fzp+gWM/wtqDYKXcIeP9EZbTsU7MI7rt0r+W6r3Emy4yINQgZ5XA4VMR5jMQZlHYz2pAt6kb40M4JDvqiGyAM/K+5wryQLnL0BkNiFHxDHSKI3DjgUfAJ9Beza/cj5gaihjkKGdWIixUvDQmjdUH7tP+O7T9CatM10jb/hX+GZdwiG1nUtQ++junMSE4j/Sn+v8JtFeB66W1nCPkjvbWSS7L2k9OFInLslp0tTfxTpflSLmIe/JpLFVViGlR2GhWs6LltBz+P6cP9O2TXXiteQezgEzZYfLYs5wi+1oa+/VAzD0rGR3SytgIubsupQgPLYN1GWSY+gJ71eflsWL2XsApr4F+i3PkBkqog8zeda18lof07J2MSjqEd30H6R9dl+HPjn/mw2PldPYQ3nQWXes1klq7MRz+DXXjQzT7/iZdGv/p2L5C/AMxcP60NipjnQAAAABJRU5ErkJggg==','data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAYdEVYdFNvZnR3YXJlAHBhaW50Lm5ldCA0LjEuNv1OCegAAATMSURBVDhPdZRpTNRHGIen2BUU5JaV5dQCoiKgCBFFQFhBXJBTQCsaLlGOBdcCdkEFtSjSgiCCICmHHJ4ItYRq2ipiNKZNjbZNP0jT1LRNT28TmzR5OqDWEvHD75/8Z973mfeaEcBr1dRXQXpJOJ6rzDD3FERlL6T2dLncmtj+hSZc1FfqMJ0lUC00wGahwGSewNBNYOMnMJ4teNNJEJejoedCtzR/1X/cT0dfE17Bzpi5CJz9DTCbL/CInMSS9WYEpVoTIOUVY4xToAHTfeQhXoYUluVL19dA6zv3YetpiFKCVDKiRfFmhGQoSdK7s/odB+LfdWFt+TzC8uyJ0rngn2KFra9A6WZI9tZUiZgAujzZE6VM1SlAMD9aQYTWEV2zmvITsUTrnSlsC+fKvcO8P5hC0i43wrTTCUlT8tYiQ6yd3uDsYKvE/A+qO7AJd7W1BBrI9KYQuXUmmm0O9N3ezbf0sK01jLymYL6hm8YrWWiKbVBvNUGTr2RZnAo3X1N8gx3HQ5cl+zJj8RSsZTqxRd7Uf6Zlc30QxV1RXHvcSv2QFl3rKq4+buHQ5Qxid9kTW2ZD9HYVkZvm4OAt666Zyd76vDGwaDp3BDt/JQ4B5rhrLEivUjP0ZwsXfj3Ihho/zny/j45bpRS0r+Tze4do+SqHhPdUqIsU+GdOIip3Dp5hNrgFmJKpj6ZrsAZRWKPDYamSabJBSze4sCTNjurzWVy+30DF4NvoT0dxfERPxYVEGr/M4MQPBazcYcyugWV03NxC5n410+TIjZYvKmsJJXWbEaklyXLBXs6ggrgif9qvl7G9M5r64Uyu/9NIbrsvVUOxfPpoJ5f/3k1Rrw/5PXM5dSeNk7e1hOW4YeVjgHLRZPziXYnODpL1TPTAPcQKB//JhKa70PVFGcN3D7P349XUXVvDwF8F3GAPAw+zyDluz9qGqZz+LYXzj7aQemgWFnL8LBcYyvEyIXSjH8k6DaLiaAGLo2diu0DgFWmJX5IlFWfWcXakmIsPS7j0NJ+bFNP8XQDaXgv67ydx7sEGDt9Ygfs6gbCUN8xZ4BqkIkEbQWm9DtHWV8nSKFccvY3wj5nF7BBj7OSsNg+nM/SghMG7G+m+o6b+a48xDTxJ5tiPMVRdC8U8WELllVU4CIISfMkpS6Vz8OizuUpMD0fpaowwkqeqBFPl/faOF3TdTKP/l3X0/6Fh8MkqGWU4PT9F8MmTbEpko4SHhJpKmQsi1y+ntrXi2UiNfvZXl6HWhGJkbYQwFEyWpwsLgbbBh5MjSVx8msKZ39X0/BxC20gE1VcjyOsMRK11QWEvWBDows79BWPA/6Cj0hUV4ubhjsJCgTAWTHOX4BmC9RUq2m8lUDscSO2V5bLjm8lt8SetWnbZVmDtqiB5YxSVB8tehY5qizaLub6uKKyep6UUGDgK1OlOFDfEUNObTXp5KPNWmiNkhBazJxG5Rta78aB0f8kZBz3V38W20hwWh83HxE5CZcRjUcun0PS5RrutkHtzAhzJ1afTcfxD6fqSMapxPy9U17aP1IJY1Mk+eK9wRCXncLTG5vKhDojzJEOfSPGBXI5010jzV/1fWXih/kvtNPdWsqMuhwPtxVS16/ngWCm1PXto+ahamkzsB4h/AUuAtDJYkoByAAAAAElFTkSuQmCC']];
var origin = ["PeHI","PVud","ViCt","Pkge","PAjH","PZDA","PnEt","PuUP","PQC8","PYbn","PK4f","Pl8S","P3vQ","P1gg","PGuj","PUU0","PJDs","PNEq","Pa5V","PwCT","P08U","PsKJ"];
var prefix = ["https://s2.ax1x.com/2019/01/23/kV","https://s2.ax1x.com/2019/05/02/Et","https://s2.ax1x.com/2019/05/15/ET"];
<?php
}
?>
var unit = [
["10001","10002","10003","10004","10005","10006","10007","10008","10009","10010","10011","10012","10013","10014","10015","10016","10017","10018","10019","10020","10021","10022","10023","10024","10025","10026","10027","10029","10030","10031","10032","10033","10034","10035","10036","10037","10038","10039","10040","10041","10042","10044","10046","10047","10048","10049","10052","10053","10055","10056","10057","10059","10060","10061","10062","10063","10065","10066","10067","10069","10070","10071","10072","10073","10075","10076","10078","10079","10081","10082","10084","10085","10086","10087","10089","10090","10091","10092","10093","10095","10096","10098","10099","10100","10101","10103","10104","10106","10108","10109","10110","10112","10113","10114","10116","10118","10119","10121","10122","10123","10125","10126","10128","10130","10132","10135","10137","10200","10202","10203","10204","10206","10208","10210","10212","10214","10218","10219","10221","10223","10225","10227","10229","10231","10233","10235","10236","10238","10240","10242","10244","10245","10247","10249","10251","10252","10254","10255","10256","11001","11002","11003","11004","11005","11006","11007","11008","11009","11010","11011","11012","11013","11014","11015","11016","11017","11018","11019","11020","11021","11022","11023","11024","11025","11026","11027","11028","11030","11031","11032","11033","11034","11035","11036","11037","11038","11039","11040","11041","11043","11044","11046","11047","11048","11049","11050","11051","11052","11053","11054","11055","11059","11060","11061","11062","11063","11066","11067","11069","11071","11072","11074","11075","11076","11077","11078","11079","11081","11082","11083","11084","11085","11086","11087","11089","11090","11091","11092","11093","11094","11095","11097","11099","11100","12001","12003","12004","12005","12006","12007","12008","12009","12010","12011","12013","12015","12016","12018","12019","12020","12021","12022","12025","12026","12029","12030","12031","12033","12035","12036","12038","12039","12041","12043","13001","13003","13004","13005","13006","13007","13008","13009","13011","13013","13014","13015","13017","13018","13019","13020","13022","13024","13026","13027","13028","13029","13030","13031","13032","13033","13034","13036","13037","13038","13039","13040","13042","13044","13046","13048","14001","14002","14003","14004","14005","14006","14007","14008","14009","14010","14011","14012","14013","14014","14015","14016","14018","14020","14022","14023","14024","14026","14027","14029","14031","14033","15001","15002","15003","15004","15005","15006","15007","15008","15009","15010","15011","15012","15013","15014","15015","15016","15017","15019","15021","15022","15024","15025","15026","15028","15029","15031","15032","15034","15035","15036","15037","15038","15039","15040","15041","15043","15045","15047","15048","15049","15050","15051","15052","15053","15054","15055","15056","15057","15058","15059","15061","15062","15063","15064","15066","15067","15069","15070","15073","15074","15076","15077","15078","15079","15081","15084","15085","15086","15087","15089","15090","15092","15094","15096","15097","15098","15100","15102","15103","15104","15106","15109","15110","15112","15114","15115","15117","15119","15121","16001","16002","16003","16004","16005","16006","16007","16008","16010","16011","16012","16013","16014","16015","16016","16017","16018","16019","16020","16021","16022","16023","16024","16025","16027","16029","16030","16031","16032","16033","16034","16036","16037","16038","16039","16040","16041","16042","16043","16044","16045","16046","16047","16049","16050","16052","16053","16054","16055","16057","16058","16059","16060","16061","16062","17001","17002","17003","17004","17005","17006","17007","17008","17009","17010","17011","17012","17013","17014","17015","17016","17017","17019","17020","17022","17023","17024","17025","17026","17027","17028","17030","17032","17036","17038","17039","17041","17042","17043","17044","17045","17048","17050","17051","17052","17054","17055","17056","17057","17058","17060","17061","17063","17065","17066","17068","17070","17071","17072","17074","17076","17078","17080","17081","17083","17085","17086","18001","18002","18003","18004","18005","18006","18007","18008","18009","18010","18011","18012","18013","18015","18016","18017","18018","18019","18020","18021","18022","18023","18024","18025","18027","18028","20001","20002","20004","20005","20006","20008","20010","20012","20021","20022","20024","20026","20028","20030","20032","20033","20034","20036","20038","20040","21001","21004","21011","21012","21013","21015","21016","21017","21018","21019","21021","21023","21025","21027","21029","21031","21032","21034","22001","22002","22004","22005","22007","22009","22010","22011","22013","22015","22016","22017","22019","22021","22022","22024","22026","22027","22028","22029","22030","22032","22035","22036","22037","22038","22039","22040","22041","22042","22043","22045","22047","22048","22050","22051","22052","22053","22054","22055","22057","22058","22059","22061","22062","22063","22065","22067","22068","22069","22071","22072","22073","22075","22077","22078","22079","22080","22082","22084","22086","22088","22089","22090","22092","22093","22095","22097","22098","22100","22101","22103","22105","22106","22107","22109","22111","22113","22115","22116","22118","22119","22121","22122","22124","22126","22127","22129","22131","22132","22134","22135","22137","22139","22141","22143","22144","22146","22148","22150","23001","23002","23004","23006","23007","23010","23012","23014","23016","23018","23020","23022","23024","23026","24001","24003","24004","24005","24006","24008","24009","24011","24013","24015","24017","24018","24020","24027","24029","24031","24033","24201","24203","24204","24205","24207","24209","24210","24401","24402","24403","24404","24405","24407","24409","24411","24413","24414","24416","24417","24419","24421","24422","24423","24425","24426","24428","24429","24601","24603","24605","24607","24700","24702","24703","24705","24707","24709","24712","24713","24714","24716","24718","24720","24722","24723","24725","24726","24728","24730","24732","24733"]
<?php
if (!$is_localhost&&0) {
?>
,["0hPH","0WIe","0RaD","04Gd","0Hqf","05RA","0IxI","0TMt","07sP","0qZ8","0LdS","0OIg","0jiQ","0zzn","0vGj","0xRs","B9s0","BpMq","BiZT","BFdU","BCLV","BEi4","BkoF","BZW9","BVJJ","Busx","BezR","BnQ1","BKL6","B8Fe","BQeK","BldO","BGJH","B1oD","BJWd","BtSA","BNQI","Bwef","BaOP","BUyt","B0w8","BBTS","BrFg","BsYQ","BcSs","ByWj","Bgln","BIkF","BfmV","B2yq","BRO0","BhwT","BHp9","BTfJ","B4TU","BLOx","BblR","Bq61","Bj0K","BXm6","DeAS","DKpj","Dmtg","DV78","DE0f","DnhQ","DM1s","DQcn","D3n0","DlXq","DG7T","D8BV","DYAU","DtNF","Dd39","DNh4","Da9J","DwcR","D0j1","DDnx","DrB6","DsHK","DR9H","D6AO","Dg4e","DcND","DhjI","DW3d","DIDP","DfgA","DoHf","D5ut","D7E8","rSbV","Db4g","DHUS","Dxuq","DLCQ","DO3j","DXgs","Djvn","DzD0","r9ET","rP5F","rCUU","rFC4","rA29","rk8J","rEvR","rZK1","rmb6","ruVK","reDx","rKUO","rM5D","r18H","rlPe","r32d","rJKI","r8xA","rrxs","ryMn","rD2j","rRaT","r6rq","rcq0","rhiF","r2ZV","rWIU","r4G4","r5RJ","rHqx","r7s1","rIz9","rTMR","rLdK","rqZ6","rOIO","rzzd","sieP","rjiD","rvJe","rxRH","spQA","sCLt","s9sI","sko8","sFdf","sEFS","sVJg","suyn","sZWQ","snQs","sezj","sKLq","sQe0","slwV","s1oT","sGYF","s8FU","stSJ","sJW4","sNl9","sUyR","saO1","swex","srFO","s0w6","sBTK","ssYD","syfe","s26A","scSH","sgld","sh0P","sROI","sfmt","s4Tf","sIk8","sotS","sLXn","sv7V","sq6s","sj00","sblj","szkT","yStU","yCp4","yFXR","yphF","yP1J","yic9","yAn1","yE0x","yV76","yeAK","ymtO","ynhD","yM1H","yK9e","yljA","yQcd","y3nI","y8Bt","yGHP","ytN8","yYAf","yd3Q","yN4S","ya9g","ywcj","y0js","yDun","yrBq","ysH0","y6EV","ycNT","yg4U","yRCF","yW34","yhv9","yfgJ","y5uR","yID1","yoHx","y7E6","yHUK","yLCD","yb4O","yO8e","yjvd","yXgH","yzDI","yxKA","6Sbt","69VP","6CUf","6FPS","6P58","6k8g","6mbq","6KaV","6uV0","6M5T","6ern","6lPU","61GF","6324","68xJ","6YrR","6JM9","6tq1","6aa6","60PO","6UVx","6dIK","6DRe","6rxH","6BGD","66sA","6cqI","6yMd","62Zt","6WIf","6RdP","6hi8","6IzQ","65Rg","64JS","6TMj","67ss","6qZq","6HLn","6jiT","6Ld0","6OoV","6vJU","6xWF","cpQJ","6zz4","cCLR","cFdx","c9y9","cie1","cko6","cEFK","cZWD","cmSe","cVJO","cuyd","cnQH","cKOA","c1TP","clwt","cQeI","cGY8","c8Ff","ctSg","cJfS","cNlQ","cBT0","c0wq","crkV","csYT","cwmn","cgl4","cyfU","c26J","ccpF","cRX9","cfmR","ch01","cIk6","c4Tx","cotK","cHpD","cb1e","cTfO","cq6H","cLXd","cj0I","czAP","cXnA","cv7t","gStf","gph8","gC9S","gP1g","gAns","gicQ","gEBn","gFXj","gV7q","gmNV","gnhT","geA0","gM3F","gK9U","gQc4","gGH1","g3u9","gljJ","g8BR","gN4K","ga9O","gtN6","gYAx","gd3D","gwge","g0jH","gDud","g6Et","grDA","gsHI","gcUP","gRC8","gg4f","gW8S","ghvQ","gfgg","gxKJ","29V1","2SbR","gzr9","gjv4","2CUx","2P56","2FPK","2A2D","2k8O","2Exe","2erd","2ZKH","2mqA","ob5j","21G8","2Kat","2uVI","2MIP","28xg","2lPf","23RS","2Yrj","2JMQ","2tqs","2UZn","2dI0","2DRU","2aaq","20iV","2BGT","2yM4","2rzF","26sJ","22ZR","2cL9","2Rd1","2WIx","2hi6","24JK","25RO","2HLd","2IzD","2TQe","27sH","2LdI","2qeA","2Oot","2jFP","RSSS","2vJf","2xW8","RpQg","R9yQ","RCLj","RZWT","RFwn","Ries","Rkoq","REF0","RVYV","RKOJ","R1T1","RQm9","Ruy4","RnlF","RlwR","RGY6","RNlD","RJfK","R00A","RtSO","RU6e","Rwmd","RaOH","Rrkt","RBTI","RstP","Rcp8","Rg1S","Ryff","R26g","RIkq","RRXQ","R47n","Rfmj","Rh0s","Rot0","RThV","Rb1U","RHpT","RqcF","RLX4","RXnJ","RjB9","Rv7R","Wph6","WStx","RzA1","WC9K","WP1O","WFje","WicD","WAnH","WEBd","WVHA","WmNt","Wn4P","WK9f","WeAI","WM38","WQgS","W8Bj","Wljg","W3uQ","WGHs","WYEn","WtNq","WN40","Wd3T","WaCV","W6ER","Wsb9","Wg4x","WcU1","WrDJ","WRC6","WW8K","WhvD","WfgO","W5Ke","WIDH","Wobd","W7VA","WHUI","WO8f","Wb5t","WLPP","WjxS","WX28","WxKg","WzrQ","fCan","fSbj","fExU","f9Vs","fP5q","fFP0","fkGV","fA2T","fer4","fZMF","fmqJ","fuZ9","fMI1","fKaR","f8xO","flPx","fJMD","f1G6","f3RK","fYse","ftqH","fadA","fUZd","fdII","f0it","fDRf","frz8","fBJP","fyQS","f2Zj","fcLQ","f5WV","fRds","fWon","fhiq","f4J0","fIzT","fTQU","f7yF","fvJx","fjF1","fLw9","fqeJ","fOoR","fxW6","hSSK","hpQO","h9yD","hFwd","hieH","hCOe","hmSf","hkTA","hEFI","hVYt","hZfP","hnl8","hu6S","hKOg","hQmQ","hlwj","h8kn","hGYq","h1Ts","hJf0","haXF","htpV","hNlT","hU6U","hB79","hwm4","h00J","hst1","hrkR","hyfx","hcp6","h26O","hfne","hg1K","hRXD","h47d","hh0H","hIAA","hTht","hotI","hH9P","hb1f","hLjS","hqc8","hXng","hjBQ","hzAs","4phq","4SNn","4C90","4icT","4P3V","4FjU","4AuF","4eE9","4K9x","4mNR","4M36","4VHJ","4QgK","4ljO","48De","4GHH","43uD","4YEd","4d8P","4tUA","4N4I","4aCt","4wgf","40v8","4DKS","4rDg","4g5n","4sbQ","46Ej","4cUs","4RCq","4f2V","4W80","4hvT","4ob4","45KU","4IrF","47VJ","4b5R","4Ha9","4LP1","4O8x","4X26","4jxK","4xKO","59VH","5Cad","4zrD","5Sqe","5PIA","5kGt","5FPI","5Exf","5ARP","5esS","5ZM8","5mqg","5uZQ","51Gq","5Kaj","5MIs","5lin","53R0","58zV","5UZ4","5JMT","5tLF","5BJ1","5yQK","5DRx","5rz6","50iR","56sO","5RdH","5cLD","52ee","5Wod","5hFA","55Wt","54JI","5oSP","5TQf","5HOS","57y8","5qeg","5LwQ","I9yT","5Ooj","5jFs","5xWq","ICOU","ISS0","IplV","IkTJ","IimF","IFw4","IZf1","IEk9","IVYR","Inl6","IKOO","Il0e","Iu6K","IQmD","I1TH","I8kd","IGtA","IJfI","Itpt","IN1P","IaX8","IU6f","IwnS","IB7Q","I00g","IRXT","Irkj","Ists","Icpq","Iyhn","Ig10","I2cV","IfnU","I474","IhBF","IIAJ","IoN9","ILjK","IjBD","IvHe","IXnO","Iqc6","IzAH","oP3t","oSNd","op4A","oC9I","oFjf","oAu8","oigP","omNj","oEDS","oVHg","on4s","oeEQ","oKCn","oM3q","o8DU","olvV","oQg0","o3uT","oYE4","T4Y9","oN59","otUJ","oaCR","od81","o0v6","owgx","oDKK","orDO","o6Ve","osbD","oW8I","ocUH","oRPA","og5d","of2t","ohxP","o5Kf","ooqS","oIr8","o7Vg","oHaQ"]
<?php
}
?>
];
function ch_l(l) {
  $("td[localization], span[localization], option[localization]").each(function(){
    $(this).html($(this).attr(l));
  });
  $("div[localization], option[text], a[text]").each(function(){
    $(this).html($(this).attr("text"));
  });
  $("input[type='button'], input[type='submit']").each(function(){
    $(this).val($(this).attr(l));
  });
  $("select[name='machine'] option[value]").each(function(){
    $(this).html($(this).attr("value"));
  });
  $("select[name='machine'] option[value]:first-child").html($("select[name='machine'] option[value]:first-child").attr(l));
  $("label.not[localization]").each(function(){
    $(this).attr("tit", $(this).attr(l));
  });
  $("svg[localization]").each(function(){
    $(this).attr("tit", $(this).attr(l));
  });
}
function resetform(){
  $("form.container.form_unit input:not([type='button']):not([type='submit']):not([type='hidden']):not([type='checkbox'])").val('');
  $("form.container.form_unit select").each(function(){
    $(this).children(':first')[0].selected = 'selected';
  });
  $("form.container.form_unit input[type=checkbox]").prop('checked',false);
}
function setcookie(key, value, reload) {
  var d = new Date("December 12, 2020 00:00:00 GMT-04:00");
  $("form#settings input[name='"+key+"']").val(value);
  document.cookie = key+"="+value+";expires="+d.toGMTString()+";";
  if (reload)
    window.location.reload();
}
function getcookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length >= 2)
    return parts.pop().split(";").shift();
}
function gcid(e) {
  var ucid = getcookie("ucid");
  if (ucid != undefined) {
    ucid = JSON.parse(ucid);
    if (ucid.length >= 2) {
      var ids = "";
      for (var i = 1; i < ucid.length; i++) {
        ids += ","+ucid[i];
      }
      window.location = "search_v2?id="+ucid[0]+ids;
    }
  }
}
function acid(e,cid) {
  var ucid = getcookie("ucid");
  if (ucid != undefined) {
    ucid = JSON.parse(ucid);
  } else {
    ucid = [];
  }
  if (cid == "")
    return;
  if (ucid.length == 4)
    return;
  if (ucid.indexOf(cid) == -1 && !window.location.href.match(/id=[0-9]{5}(,[0-9]{5})+$/)) {
    ucid.push(cid);
    if (ucid.length > 1)
      $("div#go").show();
    if (ucid.length == 4)
      e.hide();
    setcookie("ucid", JSON.stringify(ucid), false);
    nuid = $("<div ucid='"+cid+"' onclick='dcid($(this));'><img class='unit' srcc='"+cid+"' tit='<?=tos("刪除","删除")?>' /><div id='dcid'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' class='svg-inline--fa fa-times-circle fa-w-16 fa-9x'><path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z' class=''></path></svg></div></div>");
    nuid.mousemove(function(e){
      $("div#tooltip").text($(this).children("img").attr("tit")).css({"top":e.pageY+30+"px", "left":(e.pageX<=$("div#tooltip").outerWidth()/2?0:(window.innerWidth-e.pageX<=$("div#tooltip").outerWidth()/2?window.innerWidth-$("div#tooltip").outerWidth():e.pageX-$("div#tooltip").outerWidth()/2))+"px"}).show();
    }).mouseout(function(){
      $("div#tooltip").hide().css({"left":"0"});
    });
    e.before(nuid);
    if (unit.length == 1) {
      $("div[ucid='"+cid+"'] img[srcc]").attr("src", "img/unit/"+$("div[ucid='"+cid+"'] img[srcc]").attr("srcc")+".gif");
    }
    else {
      $("div[ucid='"+cid+"'] img[srcc]").attr("src", prefix[1]+unit[1][unit[0].indexOf(cid)]+'.png');
    }
  }
}
function dcid(e) {
  var cid = e.attr("ucid");
  var ucid = getcookie("ucid");
  if (ucid != undefined) {
    ucid = JSON.parse(ucid);
  } else {
    ucid = [];
  }
  var index = ucid.indexOf(cid);
  if (index != -1) {
    ucid.splice(index, 1);
    if (ucid.length < 4)
      $("div#add").show();
    if (ucid.length == 1)
      $("div#go").hide();
    setcookie("ucid", JSON.stringify(ucid), false);
    $("div#tooltip").hide().css({"left":"0"});
    e.remove();
  }
}
function toggle_expand(e) {
  e.closest("table").find("tr:nth-child(2)").toggleClass("expand_compliance");
  e.closest("table").find("tr:not(:nth-child(1)):not(:nth-child(2))").toggleClass("show");
}
function ch_img(c) {
<?php
  if ($is_localhost||1) {
?>
  c = "<?=($is_localhost?"":"https://raw.githubusercontent.com/admin-ll55/SDGO_DB/master/sdgo/")?>";
  $("img.unit").each(function(){
    if ($(this).attr("srcc") != undefined)
      $(this).attr("src", c+"img/unit/"+$(this).attr("srcc")+".gif");
  });
  $("img.weapon").each(function(){
    $(this).attr("src", c+"img/weapon/"+$(this).attr("srcc")+".gif");
  });
  $("img.pos").each(function(){
    $(this).attr("src", c+"img/pos/"+$(this).attr("srcc")+".png");
  });
  $("img.skill, img.sp").each(function(){
    if ($(this).attr("srcc") != "")
      $(this).attr("src", c+"img/skill/"+$(this).attr("srcc")+".gif");
    else
      $(this).remove();
  });
  $("img.origin").each(function(){
    $(this).attr("src", c+"img/origin/"+$(this).attr("srcc")+".png");
  });
<?php
  }
  else {
?>
  $("img.unit").each(function(){
    if (unit[0].indexOf($(this).attr("srcc")) != -1)
      $(this).attr("src", prefix[1]+unit[1][unit[0].indexOf($(this).attr('srcc'))]+'.png');
  });
  $("img.weapon").each(function(){
    if (weapon[0].indexOf($(this).attr("srcc")) != -1)
      $(this).attr("src", prefix[0]+weapon[1][weapon[0].indexOf($(this).attr('srcc'))]+'.gif');
  });
  $("img.pos").each(function(){
    if (pos[0].indexOf($(this).attr("srcc")) != -1)
      $(this).attr("src", pos[1][pos[0].indexOf($(this).attr('srcc'))]);
  });
  $("img.skill, img.sp").each(function(){
    if (skl[0].indexOf($(this).attr("srcc")) != -1)
      $(this).attr("src", prefix[0]+skl[1][skl[0].indexOf($(this).attr('srcc'))]+'.gif');
    else
      $(this).remove();
  });
  $("img.origin").each(function(){
    $(this).attr("src", prefix[2]+origin[parseInt($(this).attr('srcc'))-1]+'.png');
  });
<?php
  }
?>
}
function add_tit(c) {
  $("table#info button.skl_sp").mousemove(function(e){
    $("div#tooltip").html($(this).attr("tit").replace(/<n>/g, "<br>")).css({"top":e.pageY+30+"px", "left":(e.pageX<=$("div#tooltip").outerWidth()/2?0:(window.innerWidth-e.pageX<=$("div#tooltip").outerWidth()/2?window.innerWidth-$("div#tooltip").outerWidth():e.pageX-$("div#tooltip").outerWidth()/2))+"px"}).show();
  }).mouseout(function(){
    $("div#tooltip").hide().css({"left":"0"});
  });
  $("svg[localization], label.not[localization], div[ucid] img").mousemove(function(e){
    $("div#tooltip").text($(this).attr("tit")).css({"top":e.pageY+30+"px", "left":(e.pageX<=$("div#tooltip").outerWidth()/2?0:(window.innerWidth-e.pageX<=$("div#tooltip").outerWidth()/2?window.innerWidth-$("div#tooltip").outerWidth():e.pageX-$("div#tooltip").outerWidth()/2))+"px"}).show();
  }).mouseout(function(){
    $("div#tooltip").hide().css({"left":"0"});
  });
}
var lang = "<?=$_COOKIE["l"]?>".toLowerCase();
$(document).ready(function(){
  if (typeof r != "undefined") {
    var temp = "";
    var template = "<div class='unit-cell'><div id='unit'><a href='search_v2?id=<0>'><img class='unit' srcc='<0>' /></a></div><div id='detail' class='mobile hide'><a href='search_v2?pos=<6>' class='button h28px'><img srcc='<6>' class='pos'></a><a href='search_v2?rank=<5>' class='button'><5></a></div><div id='skl1' class='mobile hide'><a href='search_v2?skl=<1>'><img class='skill' srcc='<1>' /></a></div><div id='skl2' class='mobile hide'><a href='search_v2?skl=<2>'><img class='skill' srcc='<2>' /></a></div><div id='sp1' class='mobile hide'><a href='search_v2?sp=<3>'><img class='sp' srcc='<3>' /></a></div><div id='sp2' class='mobile hide'><a href='search_v2?sp=<4>'><img class='sp' srcc='<4>' /></a></div></div>";
    for (var i = 0; i < r[0].length; i++) {
      temp += template.replace(/<0>/g,r[0][i]).replace(/<1>/g,r[1][i]).replace(/<2>/g,r[2][i]).replace(/<3>/g,r[3][i]).replace(/<4>/g,r[4][i]).replace(/<5>/g,r[5][i]).replace(/<6>/g,r[6][i]);
    }
    if (r[0].length) {
      $("div#container").html("");
    }
    $("div#container").append(temp).show();
    temp = null;
    for (var x=0;x<label_not.length;x++) {
      $("input[name^='not'][value='"+label_not[x]+"']").prop('checked',true).parent().addClass("checked");
    }
  }

  $("tr#prop label").click(function(){
    var state = $(this).html().match("×")?false:true;
    var e = state?$(this).next():$(this).prev();
    e.children("input").prop('checked', false);
  });
  ch_l(lang);
  ch_img("");
  $("select[name='sort']").change(function(){
    if ($(this).val() == "id") {
      $("select[name='order']").val('ASC');
    }
  });
  var a = $("body > div#id, div#result, div#machine, div#compare_wrapper, div#blueprint"), b = a.length?a[0].scrollIntoView():null;
  $("div#loading").remove();
  
  /*$("a[href^='search_v2?id=']").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    var id = $(this).find("img").attr("srcc");
    $.get($(this).attr("href").replace("search_v2","api"), function(r){
      $("table#unit_dialog tr:nth-child(2) td").html("<div id='ww'>"+r.replace(/<br>/,"")+"</div>");
      $("table#unit_dialog").attr("uid",id).css({"display":"table"});
      ch_img("table#unit_dialog ");
      add_tit("table#unit_dialog ");
    });
  });*/
  
  /*extended*/
  add_tit("");
  $("div.unit-cell, div.unit-cell img.unit").click(function(){
    $(this).closest("div.unit-cell").toggleClass("DDDDFF");
  });
  $("label.not").click(function(){
    ($(this).children("input")[0].checked?$(this).addClass("checked"):$(this).removeClass("checked"));
    setTimeout(function(){$("div#tooltip").fadeOut();},1000);
  });
  if ($("div#result").length == 0) {
    $("img.unit").mousemove(function(e){
      $("div#tooltip").text($(this).attr("tit")).css({"top":e.pageY+30+"px", "left":(e.pageX<=$("div#tooltip").outerWidth()/2?0:(window.innerWidth-e.pageX<=$("div#tooltip").outerWidth()/2?window.innerWidth-$("div#tooltip").outerWidth():e.pageX-$("div#tooltip").outerWidth()/2))+"px"}).show();
    }).mouseout(function(){
      $("div#tooltip").hide().css({"left":"0"});
    });
  }
  $("input[type='text']").mouseenter(function(){
    if ($(this).attr("content")) {
      $(this).select();
      document.execCommand("Copy");
    }
    else {
      $(this).focus();
      this.selectionStart = this.selectionEnd = this.value.length;
    }
  }).mouseout(function(){
    $(this).blur();
  });
  document.addEventListener("keydown", function(e){
    var uid = window.location.href.match(/id=([0-9]{5})(#.*?)?$/);
    var machine = window.location.href.match(/machine=([0-9]{1,2})/);
    if (e.ctrlKey && e.shiftKey && e.keyCode === 90) {
      window.location.href = (window.location.href.match(/search_v2/)?"admin":"search_v2")+"?id="+uid[1];
      return false;
    }
    try {
      index = unit[0].indexOf(uid[1]);
    }
    catch {
      index = false;
    }
    try {
      machine = [machine[1],"="+machine[1]];
    }
    catch {
      machine = [false,false];
    }
    machine[0] = parseInt(machine[0])||false;
    if (e.keyCode == 37) {
      if (index !== false && unit[0][index-1] != undefined) {
        window.location.href = window.location.href.replace(uid[1], unit[0][index-1]);
      }
      if (machine[0] && machine[0]-1 > 0) {
        window.location.href = window.location.href.replace(machine[1], "="+(machine[0]-1));
      }
      return false;
    }
    if (e.keyCode == 39) {
      if (index !== false && unit[0][index+1] != undefined) {
        window.location.href = window.location.href.replace(uid[1], unit[0][index+1]);
      }
      if (machine[0] && machine[0]+1 <= 81) {
        window.location.href = window.location.href.replace(machine[1], "="+(machine[0]+1));
      }
      return false;
    }
  });
});