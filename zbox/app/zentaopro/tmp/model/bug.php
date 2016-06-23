<?php
helper::import('/opt/zbox/app/zentaopro/module/bug/model.php');
class extbugModel extends bugModel 
{
public function printCell($col, $bug, $users, $builds, $branches)
{
    return $this->loadExtension('datatable')->printCell($col, $bug, $users, $builds, $branches);
}

public function printHead($col, $orderBy, $vars)
{
    return $this->loadExtension('datatable')->printHead($col, $orderBy, $vars);
}
public function setListValue($productID, $branch = 0)
{
    return $this->loadExtension('excel')->setListValue($productID, $branch);
}

public function createFromImport($productID, $branch = 0)
{
    return $this->loadExtension('excel')->createFromImport($productID, $branch);
}
public function getUnresolvedBugs($projectID)
{
    return $this->loadExtension('kanban')->getUnresolvedBugs($projectID);
}
//**//
}