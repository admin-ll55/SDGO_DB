<?php
$dbname = "sdgo";
$host = "localhost";
$id = "sdgo_user";
$pw = "abcd";
try{
  $pdo = new PDO("mysql:dbname=$dbname;host=$host;charset=UTF8", $id, $pw);
}
catch(Exception $e) {
  die("<b>Please execute the following sql via phpmyadmin or mysql shell:</b><br/>
<pre>GRANT USAGE ON *.* TO 'sdgo_user'@'localhost' IDENTIFIED BY 'abcd';
GRANT SELECT ON `sdgo`.* TO 'sdgo_user'@'localhost';</pre>
<b>Also, please make sure that </b><code>sdgo.sql</code><b> is imported to </b><code>sdgo</code><b> database.</b>");
}
?>