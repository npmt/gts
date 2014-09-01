<?php

class C_trainings extends MY_Model {
    
    const DB_TABLE = 'c_trainings';
    const DB_TABLE_PK = 'TrainingId';
    
    /**
     * Training unique identifier.
     * @var int
     */
    public $TrainingId;
    
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
     * Training title.
     * @var string
     */
    public $TrainingName;
    
    /**
     * Training duration in hours.
     * @var int
     */
    public $Duration;
    
    /**
     * Credits earned from training.
     * @var int
     */
    public $CreditsEarned;
    
    /**
     * Institution where training was held.
     * @var string
     */
    public $TrainingInstitution;
    
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