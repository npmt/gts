<?php

class D_employments extends MY_Model {
    
    const DB_TABLE = 'd_employments';
    const DB_TABLE_PK = 'EmploymentId';
    
    /**
     * Employment unique identifier.
     * @var int
     */
    public $EmploymentId;
    
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
     * 
     * @var string
     */
    public $EmploymentCriteria;
    
     /**
     * 
     * @var string
     */
    public $EmploymentValue;
    
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