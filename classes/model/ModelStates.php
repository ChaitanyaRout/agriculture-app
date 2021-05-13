<?php
    /*
    * class ModelStates
    */
    class ModelStates extends States
    {
        /*
        * get All states
        * return type associative array
        */
        public function getAllStates()
        {
            $sql = "SELECT id, state_name, date_add, date_upd FROM ag_states ORDER BY state_name ASC";
            $stmt = Db::getDbObject()->prepare($sql);
            // $stmt->bindValue(':id', $this->getId(), PDO::PARAM_INT);
            $stmt->execute();
            $states = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $states;
        }

        /*
        * get state by state_name
        * return type associative array
        */
        public function getStateDetailByName()
        {
            $sql = "SELECT id, state_name, capital, date_add, date_upd FROM ag_states WHERE state_name = :state_name";
            $stmt = Db::getDbObject()->prepare($sql);
            $stmt->bindValue(':state_name', $this->getStateName(), PDO::PARAM_STR);
            $stmt->execute();
            $state = $stmt->fetch(PDO::FETCH_ASSOC);

            if($state)
                return $state;
            else
                return false;
        }
    }
?>