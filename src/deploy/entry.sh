#!/usr/bin/env bash

./deploy/wait_db.sh;
./vendor/bin/typo3 extension:activate event_inventory;
php -S 0.0.0.0:8000 -t /app/public;