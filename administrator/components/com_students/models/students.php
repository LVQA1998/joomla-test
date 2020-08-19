<?php
defined('_JEXEC') or die;
class StudentsModelStudents extends JModelList
{
    protected function getListQuery()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true); //Create new query
        $query->select('*')
            ->from($db->quoteName('qx1ar__students'));
        return $query;
    }

    public function delete($primaryKeys)
    {
        $table = $this->getTable('students');
        foreach ($primaryKeys as $pk)
        {
            $table->delete($pk);
        }

        JFactory::getApplication()->enqueueMessage(
            'Có '.count($primaryKeys).' sinh viên đã bị xóa!',
            'message'
        );
    }
}