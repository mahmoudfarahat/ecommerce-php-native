<?php 
include_once "../operations.php";
include_once "../database.php";

class Address extends database implements operations {
    private $id;
    private $street;
    private $building;
    private $floor;
    private $status;
    private $flat;
    private $notes;
    private $region_id;
    private $user_id;
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
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

       
    }

    /**
     * Get the value of building
     */ 
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set the value of building
     *
     * @return  self
     */ 
    public function setBuilding($building)
    {
        $this->building = $building;

       
    }

    /**
     * Get the value of floor
     */ 
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set the value of floor
     *
     * @return  self
     */ 
    public function setFloor($floor)
    {
        $this->floor = $floor;

       
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
     * Get the value of flat
     */ 
    public function getFlat()
    {
        return $this->flat;
    }

    /**
     * Set the value of flat
     *
     * @return  self
     */ 
    public function setFlat($flat)
    {
        $this->flat = $flat;

       
    }

    /**
     * Get the value of notes
     */ 
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of notes
     *
     * @return  self
     */ 
    public function setNotes($notes)
    {
        $this->notes = $notes;

       
    }

    /**
     * Get the value of region_id
     */ 
    public function getRegion_id()
    {
        return $this->region_id;
    }

    /**
     * Set the value of region_id
     *
     * @return  self
     */ 
    public function setRegion_id($region_id)
    {
        $this->region_id = $region_id;

       
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

       
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