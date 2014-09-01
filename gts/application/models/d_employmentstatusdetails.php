<?php

class D_employmentstatusdetails extends MY_Model {
    
    const DB_TABLE = 'd_employmentstatusdetails ';
    const DB_TABLE_PK = 'EmploymentStatusDetailId';
    
    /**
     * Employment status detail unique identifier.
     * @var int
     */
    public $EmploymentStatusDetailId;
    
    /**
     * Employment status name.
     * @var string
     */
    public $EmploymentStatusName;
    
    /**
     * Employment remarks.
     * @var string
     */
    public $EmploymentRemarks;
    
    /**
     * Visibility flag.
     * @var bit
     */
    public $IsVisible;
    
    /**
     * Default item flag.
     * @var bit
     */
    public $IsDefault;
    
    /**
     * Last updated.
     * @var datetime
     */
    public $UpdateDate;
}