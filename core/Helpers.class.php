<?php
class Helpers{
    //Vérification en amont de l'existance d'un fichier et dossier de log.
    public static function createLogExist(){
        if(file_exists("logs/")){
            if(file_exists("logs/last.txt")){
                if(is_writable("logs/last.txt")){
                    return true;
                }
            } else {
                file_put_contents("logs/last.txt");
                return true;
            }
        } else { return false; }
    }
    //Ecrire les érreurs de routing dans un fichier de log à travers cette fonction là avec le contenu de $msg avec la date et l'heure avant.
    public static function log($msg){
        $log = date("Y-m-d H:i:s") . " ===> " . $msg . "\n\n";
        file_put_contents("logs/last.txt",$log, FILE_APPEND | LOCK_EX);
    }
    //Coder la fonction mais ne l'appellez pas, on passera par un controllerName
    //Limite de taille : 5mo   (On l'archive).
    public static function purgeLog(){
        if(filesize("logs/last.txt") > 5242880){
            $newname = date('d_m_y')."_".uniqid().".txt";
            rename("logs/last.txt","logs/logs/$newname");
        }
    }
}