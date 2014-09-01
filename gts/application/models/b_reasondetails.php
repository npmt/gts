<?php

class B_reasondetails extends MY_Model {
    
    const DB_TABLE = 'b_reasondetails';
    const DB_TABLE_PK = 'ReasonDetailId';
    
    /**
     * Reason detail unique identifier.
     * @var int
     */
    public $ReasonDetailId;
    
    /**
     * Reason name.
     * @var string
     */
    public $ReasonName;
    
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