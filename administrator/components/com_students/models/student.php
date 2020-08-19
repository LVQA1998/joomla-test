<?php
defined('_JEXEC') or die;
class StudentsModelStudent extends JModelAdmin
{
    public function getForm($data = array(), $loadData = true)
    {
        $form = JForm::getInstance('com_students.form.student',
            __DIR__.'/forms/student.xml',
            array('control'=>'jform'));
        if($loadData)
        {
            if(empty($data))
                $data = JFactory::getApplication()->getUserState("com_students.edit.student.data", array());
            if(empty($data))
                $data = $this->getItem();
            $form->bind($data);
        }
        return $form;
    }
}