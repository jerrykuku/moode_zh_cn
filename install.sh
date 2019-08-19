#!/bin/bash

echo "Start to create a new syscfg database for language"

sudo sqlite3 /var/local/www/db/moode-sqlite3.db "INSERT INTO cfg_system VALUES (126, 'language', 'English' )"

echo "Start to copy mod files to MoOde"

sudo cp -r ./moode/var/* /var

echo "End The system will be restarted soon. Please wait patiently."

sudo reboot