<?php

class Graduate_details extends MY_Model {
    
    const DB_TABLE = 'graduatedetails';
    const DB_TABLE_PK = 'GraduateDetailId';
    
    /**
     * Graduate detail unique identifier.
     * @var int
     */
    public $GraduateDetailId;
    
    /**
     * Graduate detail.
     * @var string
     */
    public $GraduateDetail;
    
    /**
     * Graduate detail flag.
     * @var string
     */
    public $GraduateDetailFlag;
    
    /**
     * Last updated.
     * @var datetime
     */
    public $UpdateDate;
}