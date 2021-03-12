<?php
    /*
    * class Scheme
    */
    Class Scheme
    {
        private $id;
        private $st_id;
        private $scheme_name;
        private $type;
        private $link;
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
        * set scheme_name method
        */
        public function setSchemeName($scheme_name)
        {
            $this->scheme_name = $scheme_name;
        }

        /*
        * get scheme_name method
        */
        public function getSchemeName()
        {
            return $this->scheme_name;
        }

        /*
        * set type method
        */
        public function setType($type)
        {
            $this->type = $type;
        }

        /*
        * get type method
        */
        public function getType()
        {
            return $this->type;
        }

        /*
        * set link method
        */
        public function setLink($link)
        {
            $this->link = $link;
        }

        /*
        * get link method
        */
        public function getLink()
        {
            return $this->link;
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