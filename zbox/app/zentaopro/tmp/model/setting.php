<?php
helper::import('/opt/zbox/app/zentaopro/module/setting/model.php');
class extsettingModel extends settingModel 
{
public function updateVersion($version)
{
    return parent::updateVersion($version);
}
//**//
}