<?php
    /*
    * class District
    */
    class District
    {
        private $id;
        private $st_id;
        private $district_name;
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
        * set st_id method
        */
        public function setSateId($st_id)
        {
            $this->st_id = $st_id;
        }

        /*
        * get st_id method
        */
        public function getSateId()
        {
            return $this->st_id;
        }

        /*
        * set district_name method
        */
        public function setDistrictNmae($district_name)
        {
            $this->district_name = $district_name;
        }

        /*
        * get district_name method
        */
        public function getDistrictNmae()
        {
            return $this->district_name;
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