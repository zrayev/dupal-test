#!/usr/bin/env bash

clear
echo "Select action:"
echo "1 - Add 1000 node"
echo "2 - Exit"

read Keypress

case "$Keypress" in
1)
    echo
    echo Add 1000 node ...
    export PATH="$HOME/.composer/vendor/bin:$PATH"
    drush dl devel
    drush en devel -y
    drush genc 1000 --types=Post

    sleep 20

;;

2)
    exit 0
;;
*)
    echo "ERROR! UNDEFINED ACTION"
    exit 0
;;
esac
exit 0
