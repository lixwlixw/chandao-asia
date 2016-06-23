<?php
public function printCell($col, $bug, $users, $builds, $branches)
{
    return $this->loadExtension('datatable')->printCell($col, $bug, $users, $builds, $branches);
}

public function printHead($col, $orderBy, $vars)
{
    return $this->loadExtension('datatable')->printHead($col, $orderBy, $vars);
}
