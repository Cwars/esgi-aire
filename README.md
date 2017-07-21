# ESGI-AIRE
Le projet a pour but de réaliser un « CMS from scratch » permettant aux utilisateurs de pouvoir gérer le site facilement depuis le back office.

C:\Windows\System32\drivers\etc\hosts

    127.0.0.1   esgi-aire.lan


C:\wamp64\bin\apache\apache2.4.23\conf\extra\httpd-vhosts.conf

    <VirtualHost *:80>
        DocumentRoot "C:/wamp64/www/esgi-aire"
        ServerName esgi-aire.lan
    </VirtualHost>
    
    
Config.inc.php
    
    define("DS", DIRECTORY_SEPARATOR);
    define("PATH_RELATIVE", "http://".$_SERVER['SERVER_NAME']."/");
    define("PATH_RELATIVE_PATTERN", "");
    define("DB_NAME", "mvciw1");
    define("DB_USER", "root");
    define("DB_PWD", "");
    define("DB_PORT", "3306");
    define("DB_HOST", "127.0.0.1");

.htaccess
    
    RewriteRule . /index.php [L]
    
    