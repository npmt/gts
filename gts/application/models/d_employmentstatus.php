<?php

class D_employmentstatus extends MY_Model {
    
    const DB_TABLE = 'c_employmentstatus';
    const DB_TABLE_PK = 'EmploymentStatusId';
    
    /**
     * Employment status unique identifier.
     * @var int
     */
    public $EmploymentStatusId;
    
    /**
     * Table graduates foreign key.
     * @var int
     */
    public $GraduateId;
    
    /**
     * Table graduatedetails foreign key.
     * @var id
     */
    public $GraduateDetailId;
    
    /**
     * Table d_employmentstatusdetails foreign key.
     * @var id
     */
    public $EmploymentStatusDetailId;
    
    /**
     * Order number.
     * @var int
     */
    public $OrderNo;
    
    /**
     * Last updated.
     * @var datetime
     */
    public $UpdateDate;
}