<?php

class C_advancestudydetails extends MY_Model {
    
    const DB_TABLE = 'c_advancestudydetails ';
    const DB_TABLE_PK = 'AdvanceStudyDetailId';
    
    /**
     * Advance study detail unique identifier.
     * @var int
     */
    public $AdvanceStudyDetailId;
    
    /**
     * Advance study name.
     * @var string
     */
    public $AdvanceStudyName;
    
    /**
     * Visibility flag.
     * @var bit
     */
    public $IsVisible;
    
    /**
     * Default item flag.
     * @var bit
     */
    public $IsDefault;
    
    /**
     * Last updated.
     * @var datetime
     */
    public $UpdateDate;
}