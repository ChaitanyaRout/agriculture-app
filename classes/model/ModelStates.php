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
        public function getAllStates()
        {
            $sql = "SELECT id, state_name, date_add, date_upd FROM ag_states ORDER BY state_name";

            $stmt = Db::getDbObject()->prepare($sql);
            // $stmt->bindValue(':id', $this->getId(), PDO::PARAM_INT);
            $stmt->execute();
            $states = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $states;
        }	
    }
?>