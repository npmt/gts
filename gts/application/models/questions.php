<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Questions extends MY_Model {
    
    const DB_TABLE = 'questions';
    const DB_TABLE_PK = 'QuestionId';
    
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Taipei');
        $this->UpdatedOn = date('Y-m-d H:i:s');
    }
    
    /**
     * Question unique identifier.
     * @var int
     */
    public $QuestionId;
    
    /**
     * Question.
     * @var string
     */
    public $QuestionStatement;
    
    /**
     * Question number.
     * @var int
     */
    public $QuestionNo;
    
    /**
     * Category foreign key for question category.
     * @var int
     */
    public $CategoryId;
    
    /**
     * Question visibility flag.
     * @var bit
     */
    public $IsVisible;
    
    /**
     * Last updated.
     * @var datetime
     */
    public $UpdatedOn;
    
}