<?php
helper::import('/opt/zbox/app/zentaopro/module/common/model.php');
class extcommonModel extends commonModel 
{
public function setCompany()
{
    if(!extension_loaded('ionCube Loader')) return parent::setCompany();

    return $this->loadExtension('bizext')->setCompany();
}
/**
 * Print the position bar of Search. 
 * 
 * @param  int    $module 
 * @param  int    $object 
 * @param  int    $keywords 
 * @access public
 * @return void
 */
public function printSearch($module, $object, $keywords)
{
    echo "<li> {$this->lang->search->common} </li>" . "<li>{$keywords}</li>";
}
    public function isOpenMethod($module, $method)
    {
if($module == 'api' and $method == 'getlicenses') return true;
if($module == 'api' and $method == 'mobilegetlist') return true;
if($module == 'api' and $method == 'mobilegetinfo') return true;
if($module == 'api' and $method == 'mobilegetuser') return true;
if($module == 'api' and $method == 'mobilegetusers') return true;
if($module == 'api' and $method == 'mobilegethistory') return true;
if($module == 'api' and $method == 'mobilecomment') return true;
        if($module == 'user' and strpos('login|logout|deny|reset', $method) !== false) return true;
        if($module == 'api'  and $method == 'getsessionid') return true;
        if($module == 'misc' and $method == 'ping')  return true;
        if($module == 'block' and $method == 'main') return true;
        if($module == 'sso' and $method == 'login')  return true;
        if($module == 'sso' and $method == 'logout') return true;
        if($module == 'sso' and $method == 'bind') return true;

        if($this->loadModel('user')->isLogon())
        {
            if(stripos($method, 'ajax') !== false) return true;
            if(stripos($method, 'downnotify') !== false) return true;
        }

        if(stripos($method, 'ajaxgetdropmenu') !== false) return true;
        if(stripos($method, 'ajaxgetmatcheditems') !== false) return true;
        if($method == 'ajaxgetdetail' and $this->app->viewType == 'mhtml') return true;
        if($module == 'misc' and $method == 'qrcode') return true;
        if($module == 'misc' and $method == 'about') return true;
        if($module == 'misc' and $method == 'checkupdate') return true;
        return false;
    }

//**//
}