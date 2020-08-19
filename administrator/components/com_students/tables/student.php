<?php
defined('_JEXEC') or die;
class TableStudent extends JTable
{
    public function __construct($db)
    {
        parent::__construct('qx1ar__students', 'id', $db);
    }
}
