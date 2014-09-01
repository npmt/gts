<?php

class B_educations extends MY_Model {
    
    const DB_TABLE = 'b_educations';
    const DB_TABLE_PK = 'EducationId';
    
    /**
     * Education unique identifier.
     * @var int
     */
    public $EducationId;
    
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
     * Education degree.
     * @var string
     */
    public $EducationDegree;
    
    /**
     * School where degree was taken.
     * @var string
     */
    public $School;
    
    /**
     * School abbreviation.
     * @var string
     */
    public $SchoolAbb;
    
    /**
     * Year graduated.
     * @var int
     */
    public $YearGraduated;
    
    /**
     * Honors received.
     * @var string
     */
    public $HonorsReceived;
    
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