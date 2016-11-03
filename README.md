# pi_control_web
Website Demo to Control your Rasberry 

Running on Raspberry , Raspbian 

this use jquery ( mostly for ajax call )

To make use of this website you must have transmission-daemon installed as well as 
the following package

sudo apt-get update && sudo apt-get install lighttpd php5-cgi
sudo lighty-enable-mod fastcgi fastcgi-php
sudo service lighttpd force-reload
sudo visudo

Add the following line below "pi ALL etc." and exit the visudo editor:

www-data ALL = NOPASSWD: /sbin/shutdown
www-data ALL = NOPASSWD: /sbin/reboot
www-data ALL = NOPASSWD: /usr/sbin/service transmission-daemon *

clone the repository on your webroot folder , dewfault one is /var/wwww/html/

now you should be able to reboot / restart / see transmission status , stop and start transmission daemon 

ps: the tr folder contain the transmission default web interface , I added it because after installing lighttpd I couldn't lunch it.
I was looking everywhere for the the websites files so I just copied there.

Giving such rigths to users and access on your private network involve security risk.


