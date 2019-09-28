#!/usr/bin/env bash


cd /app;
touch ./public/FIRST_INSTALL;
php vendor/bin/typo3cms install:setup \
    --no-interaction \
    --database-user-name=root \
    --database-user-password=toor \
    --database-host-name=database \
    --database-port=3306 \
    --database-name=typo3 \
    --use-existing-database \
    --admin-user-name=admin \
    --admin-password=adminadmin \
    --site-setup-type=site