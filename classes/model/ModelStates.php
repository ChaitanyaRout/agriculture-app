<?php
    /*
    * class ModelStates
    */
    class ModelStates extends States
    {
        /*
        * get state by id
        * return type associative array
        */
        public function getsates()
        {
            $sql = "SELECT * FROM ag_states WHERE id = :id";

            $stmt = Db::getDbObject()->prepare($sql);
            $stmt->bindValue(':id', $this->getId(), PDO::PARAM_INT);
            $stmt->execute();
            $states = $stmt->fetch(PDO::FETCH_ASSOC);

            return $states;
        }

        public function getErrorLog()
        {
            error_log("id: ".$this->getId()." states: ".$this->getStateName());
        }	
    }
?>