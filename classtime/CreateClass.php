<?php
/**
 * File-level docblock
 * 
 *  @author Karl Lee <kilofoxx@gmail.com
 *  @no License
 * /

/**
 * Class-level docblock
 */
class DriversLicense
{
    protected $fullName;
    
    protected $address;
    
    protected $DOB;
    
    protected $licenseNumber;
    
    protected $expiresOn;
    
    protected $issuedOn;
       
    public function __construct($fullName)
    {
        $this->fullName = $fullName;
    }
    
    public function getFullName ()
    {
        return $this->fullName;
    }

    /*  // Renegotiating the contract
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        
        return $this;
    }*/
}

var_dump($license = new DriversLicense('End User'));

var_dump('getFullName', $license->getfullName());

var_dump($license->setFullName('Anything'));

var_dump($license);
