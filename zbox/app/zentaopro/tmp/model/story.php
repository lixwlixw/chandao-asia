<?php
helper::import('/opt/zbox/app/zentaopro/module/story/model.php');
class extstoryModel extends storyModel 
{
public function printCell($col, $story, $users, $branches, $storyStages)
{
    return $this->loadExtension('datatable')->printCell($col, $story, $users, $branches, $storyStages);
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
//**//
}