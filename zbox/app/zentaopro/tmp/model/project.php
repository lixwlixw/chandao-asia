<?php
helper::import('/opt/zbox/app/zentaopro/module/project/model.php');
class extprojectModel extends projectModel 
{
/**
 * The model file of calendar module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2012 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     business(商业软件) 
 * @author      Yangyang Shi <shiyangyang@cnezsoft.com>
 * @package     calendar 
 * @version     $Id$
 * @link        http://www.zentao.net
 */
public function getTasks4Calendar($projectID, $status = 'all', $orderBy = 'status_asc, id_desc', $pager = null)
{
    return $this->loadExtension('calendar')->getTasks4Calendar($projectID, $status, $orderBy, $pager);
}

public function getEfforts4Calendar($projectID, $account = '')
{
    return $this->loadExtension('calendar')->getEfforts4Calendar($projectID, $account);
}
/**
 * The control file of project module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2012 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     business(商业软件) 
 * @author      Yangyang Shi <shiyangyang@cnezsoft.com>
 * @package     project 
 * @version     $Id$
 * @link        http://www.zentao.net
 */
public function createRelationOfTasks($projectID)
{
    $this->loadExtension('gantt')->createRelationOfTasks($projectID);
}

public function editRelationOfTasks($projectID)
{
    $this->loadExtension('gantt')->editRelationOfTasks($projectID);
}

public function getRelationsOfTasks($projectID)
{
    return $this->loadExtension('gantt')->getRelationsOfTasks($projectID);
}

public function getDataForGantt($projectID, $type)
{
    return $this->loadExtension('gantt')->getDataForGantt($projectID, $type);
}

public function deleteRelation($id)
{
    $this->loadExtension('gantt')->deleteRelation($id);
}
/**
 * getKanbanTasks 
 * 
 * @param  int    $projectID 
 * @param  string $orderBy 
 * @param  object $pager 
 * @access public
 * @return void
 */
public function getKanbanTasks($projectID, $orderBy = 'status_asc, id_desc', $pager = null)
{
    return $this->loadExtension('kanban')->getKanbanTasks($projectID, $orderBy, $pager);
}

public function saveKanbanData($projectID, $kanbanDatas)
{
    return $this->loadExtension('kanban')->saveKanbanData($projectID, $kanbanDatas);
}

public function getPrevKanban($projectID)
{
    return $this->loadExtension('kanban')->getPrevKanban($projectID);
}
//**//
}