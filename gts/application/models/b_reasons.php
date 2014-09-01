<?php

class B_reasons extends MY_Model {
    
    const DB_TABLE = 'b_reasons';
    const DB_TABLE_PK = 'ReasonId';
    
    /**
     * Reason unique identifier.
     * @var int
     */
    public $ReasonId;
    
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
     * Table b_reasondetails foreign key.
     * @var id
     */
    public $ReasonDetailId;
    
    /**
     * Undergraduate flag;.
     * @var bit
     */
    public $Undergraduate;
    
    /**
     * Order number.
     * @var int
     */
    public $OrderNo;
    
    /**
     * Graduate flag;.
     * @var bit
     */
    public $Graduate;
    
    /**
     * Last updated.
     * @var datetime
     */
    public $UpdateDate;
}