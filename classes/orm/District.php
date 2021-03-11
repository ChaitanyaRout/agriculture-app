<?php
    class District
    {
        private $id;
        private $st_id;
        private $district_name;
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
        
        public function setSateId($st_id)
        {
            $this->st_id = $st_id;
        }

        public function getSateId()
        {
            return $this->st_id;
        }

        public function setDistrictNmae($district_name)
        {
            $this->district_name = $district_name;
        }

        public function getDistrictNmae()
        {
            return $this->district_name;
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