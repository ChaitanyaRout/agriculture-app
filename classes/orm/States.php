<?php
    class States
    {
        private $id;
        private $state_name;
        private $date_add;
        private $date_upd;
        
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getId()
        {
            return $this->id;
        }
        
        public function setStateName($state_name)
        {
            $this->state_name = $state_name;
        }

        public function getStateName()
        {
            return $this->state_name;
        }
        
        public function setDateAdd($date_add)
        {
            $this->date_add = $date_add;
        }

        public function getDateAdd()
        {
            return $this->date_add;
        }
        
        public function setDateUpd($date_upd)
        {
            $this->date_upd = $date_upd;
        }

        public function getDateUpd()
        {
            return $this->date_upd;
        }
    }
?>