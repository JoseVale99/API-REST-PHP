<?php
    class Connection{
        protected $dbh;

        protected function connect(){
            try {
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=YOUR_DATA_BASE","YOUR_USER","YOUR_PASSWORD");
				return $conectar;	
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();	
			}
        }

        public function set_names(){	
			return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>