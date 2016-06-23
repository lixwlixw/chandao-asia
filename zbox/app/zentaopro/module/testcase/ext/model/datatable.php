<?php
public function printCell($col, $case, $users, $branches)
{
    return $this->loadExtension('datatable')->printCell($col, $case, $users, $branches);
}

public function printHead($col, $orderBy, $vars)
{
    return $this->loadExtension('datatable')->printHead($col, $orderBy, $vars);
}
