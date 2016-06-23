<?php
public function printCell($col, $story, $users, $branches, $storyStages)
{
    return $this->loadExtension('datatable')->printCell($col, $story, $users, $branches, $storyStages);
}

public function printHead($col, $orderBy, $vars)
{
    return $this->loadExtension('datatable')->printHead($col, $orderBy, $vars);
}
