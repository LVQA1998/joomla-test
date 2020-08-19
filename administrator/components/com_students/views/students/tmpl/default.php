<?php
defined('_JEXEC') or die;
?>
<form action="<?php echo JRoute::_('index.php?option=com_students'); ?>"
      name="adminForm" id="adminForm" method="POST">
    <input type="hidden" name="task">
    <table class="table table-striped">
        <thead>
        <tr>
            <th><input type="checkbox" onclick="Joomla.checkAll(this)"/></th>
            <th>Họ và tên</th>
            <th>Năm sinh</th>
            <th>Điểm trung bình</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->items as $i=>$item) {?>
            <?php $urlEdit = JRoute::_('index.php?option=com_students&task=student.edit&id='.$item->id);?>
            <tr class="row<?php echo $i%2;?>">
                <td><?php echo JHtml::_('grid.id', $i, $item->id); ?></td>
                <td><?php echo '<a href="'.$urlEdit.'">'.$item->name.'</a>';?></td>
                <td><?php echo $item->year;?></td>
                <td><?php echo $item->avg;?></td>
                <td><a href="<?php echo $urlEdit;?>" title="Chỉnh sửa"><span class="icon-edit"></span></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <?php echo JHtml::_('form.token'); ?>
</form>

