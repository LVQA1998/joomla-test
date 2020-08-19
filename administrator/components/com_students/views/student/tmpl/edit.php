<?php
defined("_JEXEC") or die;
?>

<form action="<?php echo JRoute::_('index.php?option=com_students&id='.$this->item->id); ?>" method="POST"  id="adminForm">
    <?php echo $this->form->renderField('id'); ?>
    <?php echo $this->form->renderField('name'); ?>
    <?php echo $this->form->renderField('year'); ?>
    <?php echo $this->form->renderField('avg'); ?>
    <?php echo JHtml::_('form.token'); ?>
    <input type="hidden" name="task" />
</form>
