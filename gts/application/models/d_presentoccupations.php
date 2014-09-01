<?php

class D_presentoccupations extends MY_Model {
    
    const DB_TABLE = 'd_presentoccupations';
    const DB_TABLE_PK = 'PresentOccupationId';
    
    /**
     * Present occupation unique identifier.
     * @var int
     */
    public $PresentOccupationId;
    
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
     * Table d_presentoccupationdetails foreign key.
     * @var id
     */
    public $PresentOccupationDetailId;
    
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