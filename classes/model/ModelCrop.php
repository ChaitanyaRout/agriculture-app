<?php
    /*
    * class ModelCrop
    */
    class ModelCrop extends Crop
    {
    
     /*
        * get Scheme by st_Id
        * return type associative array
        */
        public function getCropByStateId()
        {
            $sql = "SELECT id, st_id, crop_name FROM ag_crops WHERE st_id = :st_id ORDER BY id ASC";
            $stmt = Db::getDbObject()->prepare($sql);
            $stmt->bindValue(':st_id', $this->getStateId(), PDO::PARAM_INT);
            $stmt->execute();
            $crop = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $crop;
        }
    }
?>