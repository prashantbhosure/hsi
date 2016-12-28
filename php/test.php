<?php
$host = getenv('OPENSHIFT_MYSQL_DB_HOST');
echo "hi33";
echo getenv('OPENSHIFT_MYSQL_DB_HOST');
$port = getenv('OPENSHIFT_MYSQL_DB_PORT');
$user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$addr = $host . ":" . $port; //inclua sempre a porta

$link = mysqli_connect($addr, $user, $pass, $name);

$name = getenv('OPENSHIFT_APP_NAME'); //base de dados padrão

mysqli_select_db($name);
?>
