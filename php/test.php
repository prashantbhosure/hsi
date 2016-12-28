<?Php
echo "hi";
$ Host = getenv ('OPENSHIFT_MYSQL_DB_HOST');
$ Port = getenv ('OPENSHIFT_MYSQL_DB_PORT');
$ User = getenv ('OPENSHIFT_MYSQL_DB_USERNAME');
$ Pass = getenv ('OPENSHIFT_MYSQL_DB_PASSWORD');
$ Addr = $ host. ":". $ Port; // always include the door

$ Link = mysql_connect ($ addr, $ user, $ pass);

$ Name = getenv ('OPENSHIFT_APP_NAME'); // default database

Mysql_select_db ($ name);
?>
