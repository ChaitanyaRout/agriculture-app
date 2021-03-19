<?php
    /*
    * class SaCredentials
    */
    * class SaCredentials
    {
        private $id;
        private $email;
        private $password;
        private $user_type;
        private $date_add;
        private $date_upd;
        
        /*
        * set Id method
        */
        public function setId($id)
        {
            $this->id = $id;
        }

        /*
        * get Id method
        */
        public function getId()
        {
            return $this->id;
        }
        
        /*
        * set Email method
        */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /*
        * get Email method
        */
        public function getEmail()
        {
            return $this->email;
        }

        /*
        * set Password method
        */
        public function setPassword($password)
        {
            $this->password = $password;
        }

        /*
        * get Password method
        */
        public function getPassword()
        {
            return $this->password;
        }


        /*
        * set User_type method
        */
        public function setUserType($user_type)
        {
        $this->user_type = $user_type;
        }

        /*
        * get User_type method
        */
        public function getUserType()
        {
            return $this->user_type;
        }
        
        /*
        * set date_add method
        */
        public function setDateAdd($date_add)
        {
            $this->date_add = $date_add;
        }

        /*
        * get date_add method
        */
        public function getDateAdd()
        {
            return $this->date_add;
        }
        
        /*
        * set date_upd method
        */
        public function setDateUpd($date_upd)
        {
            $this->date_upd = $date_upd;
        }

        /*
        * get date_upd method
        */
        public function getDateUpd()
        {
            return $this->date_upd;
        }
    }
?>