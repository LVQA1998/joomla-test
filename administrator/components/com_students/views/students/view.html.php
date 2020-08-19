<?php
defined('_JEXEC') or die;
class StudentsViewStudents extends JViewLegacy
{
    protected $items;

    public function display($tpl = null)
    {
        $this->items = $this->get('Items');
        $this->addToolbar();
        return parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolbarHelper::title("Danh sách sinh viên");
        JToolbarHelper::addNew("student.add","Thêm một sinh viên");
        JToolbarHelper::deleteList(
            "Bạn có chắc là muốn xóa các sinh viên đã chọn?",
            "students.delete",
            "Xóa");
    }
}
