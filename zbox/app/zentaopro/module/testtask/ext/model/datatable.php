<?php
public function printCell($col, $case, $users, $task, $branches)
{
    return $this->loadExtension('datatable')->printCell($col, $case, $users, $task, $branches);
}
