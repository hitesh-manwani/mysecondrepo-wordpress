#!/bin/bash
apt update -y 
apt install nginx -y
systemctl enable nginx
systemctl start nginx
apt install php php-fpm php-mysql php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip -y
