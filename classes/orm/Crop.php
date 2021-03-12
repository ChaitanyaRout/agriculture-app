<?php
    /*
    * class Crop
    */
    class Crop
    {
        private $id;
        private $dt_id;
        private $crop_name;
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
        * set dt_id method
        */
        public function setDistrictId($dt_id)
        {
            $this->dt_id = $dt_id;
        }

        /*
        * get dt_id method
        */
        public function getDistrictId()
        {
            return $this->dt_id;
        }

        /*
        * set crop_name method
        */
        public function setCropName($crop_name)
        {
            $this->crop_name = $crop_name;
        }

        /*
        * get crop_name method
        */
        public function getCropName()
        {
            return $this->crop_name;
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
            $this->date_upd =$date_upd;
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