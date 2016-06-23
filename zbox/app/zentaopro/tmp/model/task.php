<?php
helper::import('/opt/zbox/app/zentaopro/module/task/model.php');
class exttaskModel extends taskModel 
{
public function printCell($col, $task, $users, $browseType)
{
    return $this->loadExtension('datatable')->printCell($col, $task, $users, $browseType);
}

public function printHead($col, $orderBy, $vars)
{
    return $this->loadExtension('datatable')->printHead($col, $orderBy, $vars);
}
public function addTaskEstimate($data)
{
    return $this->loadExtension('effort')->addTaskEstimate($data);
}
public function setListValue($productID)
{
    return $this->loadExtension('excel')->setListValue($productID);
}

public function createFromImport($productID)
{
    return $this->loadExtension('excel')->createFromImport($productID);
}
public function start($taskID)
{
    return $this->loadExtension('gantt')->start($taskID);
}

public function finish($taskID)
{
    return $this->loadExtension('gantt')->finish($taskID);
}
//**//
}