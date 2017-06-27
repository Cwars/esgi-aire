<?php

    class BaseSql {

        private $db;
        private $table;
        private $columns = [];

        public function __construct() {
            try {
                $this->db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT, DB_USER, DB_PWD);
            } catch(Exception $e) {
                die("Erreur SQL : ".$e->getMessage());
            }

            //Récupérer le nom de la table dynamiquement
            $this->table = strtolower(get_class($this));

            //Récupérer le nom des colonnes de la table dynamiquement
            $this->columns = array_diff_key(get_class_vars($this->table), get_class_vars(get_parent_class($this)));
        }

        // INSERT ou UPDATE
  public function save() {
        if ($this->getId() === -1) {
            $sqlCol = null;
            $sqlKey = null;
            unset($this->columns['id']);
            foreach ($this->columns as $columns => $value) {
                $data[$columns] = $this->$columns;
                $sqlCol .= ",".$columns;
                $sqlKey .= ", :".$columns;
            }
            $sqlCol = trim($sqlCol, ",");
            $sqlKey = trim($sqlKey, ",");
            var_dump($sqlCol);

            try {
                $req = $this->db->prepare("INSERT INTO ".$this->table." (".$sqlCol.") VALUES (".$sqlKey.");");
                $req->execute($data);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } else {
            $sqlQuery = null;
            foreach ($this->columns as $columns => $value) {
                $data[$columns] = $this->$columns;
                $sqlQuery .= $columns . " = :" . $columns . ", ";
            }
            $sqlQuery = trim($sqlQuery, ", ");
            $req = $this->db->prepare("UPDATE ".$this->table." SET ".$sqlQuery." WHERE id = :id;");
            $req->execute($data);
        }
    }

        public function populate($search = []) {
            $query = $this->getOneBy($search, true);
            // PDO::FETCH_PROPS_LATE : appeler le constructeur après l'alimentation de l'objet
            $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, $this->table);
            $object = $query->fetch();
            return $object;
        }

        public function getOneBy($search = [], $returnQuery = false) {

            // $search = ['id' => 8] exemple
            foreach ($search as $key => $value) {
                $where[] = $key.'=:'.$key;
            }

            // implode(" AND ", $where)
            // id=:id AND name=:name
            $query = $this->db->prepare("SELECT * FROM ".$this->table." WHERE ".implode(" AND ", $where));
            $query->execute($search);

            if ($returnQuery) {
                return $query;
            }
            return $query->fetch(PDO::FETCH_ASSOC);
        }

        // Return every object of a table
        public function getAll(){
            $query = $this->db->prepare("SELECT * FROM ".$this->table);
            $query->execute();

            $result = $query->fetchAll();

            //Retourne result (Toutes les données de la table)
            foreach($result as $obj){
                foreach ($this->columns as $columns => $value){
                    echo "<pre>";
                    echo  $columns . " : " . $obj[$columns];
                    echo "</pre>";
                }
                echo "\n";
            }
        }

        // Return every object of a table (only what we want)
        public function getObj($search = []){

            $stringSelect = '';

            //Concatenation des parametres pour la requète
            foreach ($search as $key => $value) {
                 $stringSelect .= $value.",";
            } 

            //Supression de la dernière virgule + trim
            $stringSelect = trim(rtrim($stringSelect,","));

            //Requète par rapport aux paramètres que l'on a envoyé
            $query = $this->db->prepare('SELECT '. $stringSelect .' FROM '.$this->table . ' WHERE isDeleted = 0' );
            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function getArchive($search = []){

            $stringSelect = '';

            //Concatenation des parametres pour la requète
            foreach ($search as $key => $value) {
                $stringSelect .= $value.",";
            }

            //Supression de la dernière virgule + trim
            $stringSelect = trim(rtrim($stringSelect,","));
            echo $stringSelect;

            //Requète par rapport aux paramètres que l'on a envoyé
            $query = $this->db->prepare('SELECT '. $stringSelect .' FROM '.$this->table . ' WHERE isDeleted = 1' );
            $query->execute();


        }


}

