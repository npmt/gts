<?php

class B_examinations extends MY_Model {
    
    const DB_TABLE = 'b_examinations';
    const DB_TABLE_PK = 'ExaminationId';
    
    /**
     * Examination unique identifier.
     * @var int
     */
    public $ExaminationId;
    
    /**
     * Table graduates foreign key.
     * @var int
     */
    public $GraduateId;
    
    /**
     * Table graduatedetails foreign key.
     * @var string
     */
    public $GraduateDetailId;
    
    /**
     * Examination name.
     * @var string
     */
    public $ExaminationName;
    
    /**
     * Examination date.
     * @var date
     */
    public $ExaminationDate;
    
    /**
     * Examination rating.
     * @var string
     */
    public $ExaminationRating;
    
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