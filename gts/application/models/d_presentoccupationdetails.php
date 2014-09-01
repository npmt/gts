<?php

class D_presentoccupationdetails extends MY_Model {
    
    const DB_TABLE = 'd_presentoccupationdetails ';
    const DB_TABLE_PK = 'PresentOccupationDetailId';
    
    /**
     * Present occupation detail unique identifier.
     * @var int
     */
    public $PresentOccupationDetailId;
    
    /**
     * Present occupation name.
     * @var string
     */
    public $PresentOccupationName;
    
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