<?php
$host = getenv('OPENSHIFT_MYSQL_DB_HOST');
$port = getenv('OPENSHIFT_MYSQL_DB_PORT');
$user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$addr = $host . ":" . $port; //inclua sempre a porta

$link = mysql_connect($addr, $user, $pass);

$name = getenv('OPENSHIFT_APP_NAME'); //base de dados padrão

mysql_select_db($name);
?>
