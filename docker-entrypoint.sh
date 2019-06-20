#!/bin/bash
set -e
[[ $DEBUG ]] && set -x
# sed -i -r -e "s#'user'    => 'root'#'user'    => \'${MYSQL_USER}\'#" \
#           -e "s#'password' => 'root'#'password' => \'${MYSQL_PASSWORD}\'#" \
#           -e "s#'host'    => '127.0.0.1'#'host'    => \'${MYSQL_HOST}\'#" \
#           -e "s#'port'    => 3306#'port'    => ${MYSQL_PORT}#" vendor/Workerman/Applications/Config/Db.php

[[ $PAUSE ]] && sleep $PAUSE
#begin
cd GatewayWorker
php start.php start -d 
apache2-foreground