<?php
defined("_JEXEC") or die;
$controller = JControllerLegacy::getInstance('Students');
$task = JFactory::getApplication()->input->getCmd('task'); //khó hiểu 
$controller->execute($task);
$controller->redirect();