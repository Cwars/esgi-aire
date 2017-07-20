Différents sécurité effectué:

- Ne pas afficher les informations de version

nano /etc/apache2/conf.d/security
       
       ServerTokens Prod
	   ServerSignature Off

/etc/init.d/apache2 reload

Source : https://technique.arscenic.org/lamp-linux-apache-mysql-php/apache-le-serveur-http/article/apache-et-un-petit-peu-de-securite

-  Les fichiers .htaccess représentent également des fichiers sensibles. Pour interdir l’accès à ces fichiers, il convient de modifier le fichier de configuration du serveur Http ou les fichiers de configuration de vos Vhost de la façon suivante 


    <Directory />
        Options None
        AllowOverride None
        Order allow,deny
        Allow from all
    </Directory>
    
 Source: http://shakup.net/quelques-astuces-pour-securiser-votre-serveur-web-sous-linux/
 
 - Hiding PHP version (X-Powered-By) is easy. Add or modify following php.ini file row like following:
 
        expose_php = Off
        
 Source: https://www.if-not-true-then-false.com/2009/howto-hide-and-modify-apache-server-information-serversignature-and-servertokens-and-hide-php-version-x-powered-by/
 
 - Par défaut, ce paramètre est désactivé, comme il se doit. Désactivé, les fichiers distants ne seront pas traités comme des fichiers locaux sur le serveur, empêchant ainsi les attaques malveillantes
 
         allow_url_fopen = Off
         
 - Réduit le risque d'une attaque par fixation de session.
 
        session.use_trans_sid = off
        
- Désactiver toutes ces fonctions si vous ne les utilisez pas

        disable_functions=eval, ini_set, exec, fopen, popen, passthru, readfile, file, shell_exec, system, phpversion, phpinfo, ini_get, get_loaded_extensions

- Configuration pour les sessions et les cookies
  
        session.cookie_lifetime = 0
        session.cookie_secure = 1
        session.cookie_httponly=1
        session.use_only_cookies=1
        session.entropy_file= /dev/urandom
    
    
    to check : sql.safe_mode 
    
http://www.supinfo.com/articles/single/575-comment-renforcer-securite-ses-sites-php     
https://www.nosyweb.fr/astuce-joomla/configurez-votre-fichier-php-ini-pour-plus-de-securite.html
https://www.vaadata.com/blog/fr/proteger-votre-site-bonnes-pratiques-de-securite-pour-php-3/ 
https://webmasters.stackexchange.com/questions/71568/whats-the-use-of-mysql-safe-mode-in-php-ini-file 