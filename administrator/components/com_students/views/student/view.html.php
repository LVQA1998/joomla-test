<?php
defined("_JEXEC") or die;

class StudentsViewStudent extends JViewLegacy
{
    protected $form;
    public function display($tpl = null)
    {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        JFactory::getApplication()->input->set('hidemainmenu', true);
        $this -> addToolbar();
        return parent::display($tpl);
    }

    public function addToolbar()
    {
        JFactory::getApplication()->input->set('hidemainmenu',true);
        if (empty($this->item->id)) {
            JToolbarHelper::title("Nhập thông tin sinh viên mới");
            JToolbarHelper::save("student.save", "lưu mới");
        }
        else {
            JToolbarHelper::title("Chỉnh sửa thông tin sinh viên");
            JToolbarHelper::save("student.save","Cập nhập");
        }
        JToolbarHelper::cancel("student.canel", "Hủy");
    }
}
