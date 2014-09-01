<?php

class Graduates extends MY_Model {
    
    const DB_TABLE = 'graduates';
    const DB_TABLE_PK = 'GraduateId';
    
    /**
     * Graduate unique identifier.
     * @var int
     */
    public $GraduateId;
    
    /**
     * Graduate 10-digit numbers.
     * @var string
     */
    public $GraduateNo;
    
    /**
     * Graduate last name.
     * @var string
     */
    public $LastName;
    
    /**
     * Graduate first name.
     * @var string
     */
    public $FirstName;
    
    /**
     * Graduate middle Name.
     * @var string
     */
    public $MiddleName;
    
    /**
     * Graduate maiden last name.
     * @var string
     */
    public $LastName01;
    
    /**
     * Graduate extension name.
     * @var string
     * Example: Jr., Sr., etc.
     */
    public $ExtensionName;
    
    /**
     * Graduate address.
     * @var string
     */
    public $Address;
    
    /**
     * Graduate email address.
     * @var int
     */
    public $EmailAddress;
    
    /**
     * Graduate civil status.
     * @var string
     */
    public $CivilStatus;
    
    /**
     * Graduate sex.
     * @var bit
     * 0 = Male
     * 1 = Female
     */
    public $Sex;
    
    /**
     * Graduate birthdate.
     * @var date
     */
    public $BirthDate;
    
    /**
     * Graduate region of origin.
     * @var string
     */
    public $RegionOfOrigin;
    
    /**
     * Graduate province.
     * @var string
     */
    public $Province;
    
    /**
     * Graduates location of residence.
     * @var bit
     * 0 = Municipality
     * 1 = City
     */
    public $LocationOfResidence;
    
    /**
     * Graduate telephone number.
     * @var string
     */
    public $TelephoneNo;
    
    /**
     * Graduate cellphone number.
     * @var int
     */
    public $CellphoneNo;
    
    /**
     * Last updated.
     * @var datetime
     */
    public $UpdateDate;
}