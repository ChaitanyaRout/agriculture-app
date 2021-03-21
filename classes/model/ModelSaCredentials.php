<?php
    /*
    * class ModelSaCredentials
    */
    class ModelSaCredentials extends SaCredentials
    {
        /*
        * get super admin by email and password
        * return type associative array
        */
        public function getSuperAdmin()
        {
            $sql = "SELECT id, email, password, user_type, date_add, date_upd FROM ag_sa_credentials WHERE email = :email AND password = :password";
            $stmt = Db::getDbObject()->prepare($sql);
            $stmt->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(':password', $this->getPassword(), PDO::PARAM_STR);
            $stmt->execute();
            $states = $stmt->fetch(PDO::FETCH_ASSOC);

            return $states;
        }	
    }
?>