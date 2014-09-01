<?php

class D_noemployeddetails extends MY_Model {
    
    const DB_TABLE = 'd_noemployeddetails ';
    const DB_TABLE_PK = 'NoEmployedDetailId';
    
    /**
     * No employed detail unique identifier.
     * @var int
     */
    public $NoEmployedDetailId;
    
    /**
     * No employed name.
     * @var string
     */
    public $NoEmployedName;
    
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