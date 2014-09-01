<?php

class C_advancestudies extends MY_Model {
    
    const DB_TABLE = 'c_advancestudies';
    const DB_TABLE_PK = 'AdvanceStudyId';
    
    /**
     * Advance study unique identifier.
     * @var int
     */
    public $AdvanceStudyId;
    
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
     * Table c_advancestudydetails foreign key.
     * @var id
     */
    public $AdvanceStudyDetailId;
    
    /**
     * Advance study value.
     * @var bit
     */
    public $AdvanceStudyValue;
    
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