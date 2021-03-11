<?php
    class Crop
    {
        private $id;
        private $dt_id;
        private $crop_name;
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
        
        public function setDistrictId($dt_id)
        {
            $this->dt_id = $dt_id;
        }

        public function getDistrictId()
        {
            return $this->dt_id;
        }

        public function setCropName($crop_name)
        {
            $this->crop_name = $crop_name;
        }

        public function getCropName()
        {
            return $this->crop_name;
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
            $this->date_upd =$date_upd;
        }

        public function getDateUpd()
        {
            return $this->date_upd;
        }
    }

?>