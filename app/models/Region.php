<?php 


include_once "../database.php";
include_once "../operation.php";

class Region extends database implements operations {

    private $id;
    private $name;
    private $status;
    private $logitude;
    private $latitide;
    private $rad;
    private $city_id;
    private $created_at;
    private $updated_at;

       /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

       
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

       
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

       
    }

    /**
     * Get the value of logitude
     */ 
    public function getLogitude()
    {
        return $this->logitude;
    }

    /**
     * Set the value of logitude
     *
     * @return  self
     */ 
    public function setLogitude($logitude)
    {
        $this->logitude = $logitude;

       
    }

    /**
     * Get the value of latitide
     */ 
    public function getLatitide()
    {
        return $this->latitide;
    }

    /**
     * Set the value of latitide
     *
     * @return  self
     */ 
    public function setLatitide($latitide)
    {
        $this->latitide = $latitide;

       
    }

    /**
     * Get the value of rad
     */ 
    public function getRad()
    {
        return $this->rad;
    }

    /**
     * Set the value of rad
     *
     * @return  self
     */ 
    public function setRad($rad)
    {
        $this->rad = $rad;

       
    }
 /**
     * Get the value of city_id
     */ 
    public function getCity_id()
    {
        return $this->city_id;
    }

    /**
     * Set the value of city_id
     *
     * @return  self
     */ 
    public function setCity_id($city_id)
    {
        $this->city_id = $city_id;

       
    }
    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

       
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

      
    }




    function insertData()
    {

    }
    function updateData()
    {

    }
    function deleteData()
    {

    }
    function selectAllData()
    {

    }






   
}








?>