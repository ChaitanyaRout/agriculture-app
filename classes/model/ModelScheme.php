<?php
    /*
    * class ModelScheme
    */
    class ModelScheme extends Scheme
    {
        /*
        * get All Scheme
        * return type associative array
        */
        public function getAllScheme()
        {
            $sql = "SELECT ags.id, agst.state_name, ags.scheme_name, ags.type, ags.link FROM ag_scheme ags INNER JOIN ag_states agst ON agst.id = ags.st_id ORDER BY agst.state_name ASC";
            $stmt = Db::getDbObject()->prepare($sql);
            $stmt->execute();
            $scheme = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $scheme;
        }
        
        /*
        * Insert Scheme
        * return type bool
        */
        public function insertScheme()
        {
            $sql = "INSERT INTO ag_scheme (`st_id`, `scheme_name`, `type`, `link`) VALUES (:st_id, :scheme_name, :type, :link)";
            $stmt = Db::getDbObject()->prepare($sql);
            $stmt->bindValue(':st_id', $this->getSateId(), PDO::PARAM_INT);
            $stmt->bindValue(':scheme_name', $this->getSchemeName(), PDO::PARAM_STR);
            $stmt->bindValue(':type', $this->getType(), PDO::PARAM_INT);
            $stmt->bindValue(':link', $this->getLink(), PDO::PARAM_STR);
            $stmt->execute();

            if($stmt->rowCount())
                return true;
            else
                return false;
        }
    }
?>