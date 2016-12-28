<? Php
echo $ Host = getenv ('OPENSHIFT_MYSQL_DB_HOST');
echo $ Port = getenv ('OPENSHIFT_MYSQL_DB_PORT');
echo $ User = getenv ('OPENSHIFT_MYSQL_DB_USERNAME');
echo $ Pass = getenv ('OPENSHIFT_MYSQL_DB_PASSWORD');
echo $ Addr = $ host. ":". $ Port; // always include the door

echo $ Link = mysql_connect ($ addr, $ user, $ pass);

echo $ Name = getenv ('OPENSHIFT_APP_NAME'); // default database

Mysql_select_db ($ name);
?>
