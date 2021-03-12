<?php
    /*
    * class States
    */
    class States
    {
        private $id;
        private $state_name;
        private $date_add;
        private $date_upd;
        
        /*
        * set id method
        */
        public function setId($id)
        {
            $this->id = $id;
        }

        /*
        * get id method
        */
        public function getId()
        {
            return $this->id;
        }
        
        /*
        * set state_name method
        */
        public function setStateName($state_name)
        {
            $this->state_name = $state_name;
        }

         /*
        * get state_name method
        */
        public function getStateName()
        {
            return $this->state_name;
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