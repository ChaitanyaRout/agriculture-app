<?php
    /*
    * class Crop
    */
    class Crop
    {
        private $id;
        private $st_id;
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
        * set st_id method
        */
        public function setStateId($st_id)
        {
            $this->st_id = $st_id;
        }

        /*
        * get st_id method
        */
        public function getstateId()
        {
            return $this->st_id;
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