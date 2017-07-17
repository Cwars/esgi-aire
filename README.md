# ESGI-AIRE
Le projet a pour but de réaliser un « CMS from scratch » permettant aux utilisateurs de pouvoir gérer le site facilement depuis le back office.

C:\Windows\System32\drivers\etc\hosts

    127.0.0.1   esgi-aire.lan


C:\wamp64\bin\apache\apache2.4.23\conf\extra\httpd-vhosts.conf

    <VirtualHost *:80>
        DocumentRoot "C:/wamp64/www/projetannuelaire"
        ServerName esgi-aire.lan
    </VirtualHost>
    
    
Config.inc.php
    
    define("DS", DIRECTORY_SEPARATOR);
    define("PATH_RELATIVE", "http://".$_SERVER['SERVER_NAME']."/");
    define("PATH_RELATIVE_PATTERN", "");

.htaccess
    
    RewriteRule . /index.php [L]
    
    