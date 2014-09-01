<?php

class D_reasonnotemployed extends MY_Model {
    
    const DB_TABLE = 'd_reasonnotemployed';
    const DB_TABLE_PK = 'ReasonNoEmployedId';
    
    /**
     * Unique identifier.
     * @var int
     */
    public $ReasonNoEmployedId;
    
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
     * Table d_noemployeddetails foreign key.
     * @var id
     */
    public $NoEmployedDetailId;
    
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

