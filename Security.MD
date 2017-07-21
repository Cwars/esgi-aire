Sécurité DONE:

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
    
- https pour phpmyadmin

        /etc/phpmyadmin/config.inc.php

  Ajouter la ligne: 

        $cfg['ForceSSL'] = True;

Sécurité en TEST: 

- Renvoyer l’ensemble du site vers le protocole HTTPS sécurisé depuis le virtualhost 
    /etc/apache2/sites-avalaible/X
    
         <VirtualHost *:80>
         .....
         Redirect permanent / https://technique.arscenic.org/
            ....
         </VirtualHost>
        
        
   to check : sql.safe_mode 
    
http://www.supinfo.com/articles/single/575-comment-renforcer-securite-ses-sites-php
https://openclassrooms.com/courses/protegez-vous-efficacement-contre-les-failles-web
https://www.nosyweb.fr/astuce-joomla/configurez-votre-fichier-php-ini-pour-plus-de-securite.html
https://www.vaadata.com/blog/fr/proteger-votre-site-bonnes-pratiques-de-securite-pour-php-3/ 
https://webmasters.stackexchange.com/questions/71568/whats-the-use-of-mysql-safe-mode-in-php-ini-file 

TO CHECK en permanence : 

https://openclassrooms.com/courses/les-filtres-en-php-pour-valider-les-donnees-utilisateur 

- Eviter les failles XXS

        htmlentities();
        
- Injection SQl

        Requête préparée
        
- Faille include()

        Eviter la fonction include() 
https://openclassrooms.com/courses/protegez-vous-efficacement-contre-les-failles-web/la-faille-include-1

- Faille Upload

        Un hash généré (pseudo) aléatoirement du nom du fichier
        Vérification de l'extension
        Vérification de ne pas avoir le même nom de fichier sur le serveur
        Interdiction de symbole lors de l'ouverture du fichier
        Htacces dans le dossier upload 
        
        
        
https://openclassrooms.com/courses/protegez-vous-efficacement-contre-les-failles-web/la-faille-upload-1

- Faille CSRF (Cross site request forgery)

     Création d'un token unique pour l'authentification
        
            <?php
            // On démarre la session en début de chaque page
            session_start();
            
            //On enregistre notre token
            $token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
            
            $_SESSION['token'] = $token;
            ?>
            
            <?php
    
            session_start();
            //On vérifie que tous les jetons sont là
            
            if (isset($_SESSION['token']) AND isset($_POST['token']) AND !empty($_SESSION['token']) AND !empty($_POST['token'])) {
                // On vérifie que les deux correspondent
                
                if ($_SESSION['token'] == $_POST['token']) {
                            // Vérification terminée
                            // On peut supprimer l'utilisateur
                    }
            }
            else {            
                // Les token ne correspondent pas
                // On ne supprime pas
                echo "Erreur de vérification";
            }
            ?>


https://openclassrooms.com/courses/protegez-vous-efficacement-contre-les-failles-web/la-csrf

- Faille CRLF (Carriage Return Line Feed)

     Souvent utilisée pour récupérer le mot de passe de quelqu'un, 
     fonction mail() de la page "mot de passe oublié" 
     
     S'en protéger : supprimer les retours à la ligne lors du traitement

                    <?php
                    // On récupère la valeur du input
                    $chaine_utilisateur = $_POST['mail'];
                    
                    // On supprime les retour à la ligne
                    $chaine_secure = str_replace(array("\n","\r",PHP_EOL),'',$chaine_utilisateur);
                    ?>
        
    Vérifier que la chaine de caractères : une adresse mail.     
         
                    <?php
                    $email = $_POST['mail'];
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                         // Valide
                    }
                    else {
                        // Non valide
                    }
                    ?>
                    
                    
- Brute Force

    Ralentir une attaque avec des pauses
                
                <?php 
                if(isset($_POST['pseudo']) AND isset($_POST['password'])) {
                    sleep(1); // Une pause de 1 sec
                    if... // Vérification des identifiants/password etc..
                ?>
                
    Captcha
    Banissement par ip (avoir une bdd)
    
- Les variables de session 

        https://openclassrooms.com/courses/protegez-vous-efficacement-contre-les-failles-web/les-variable-de-session

