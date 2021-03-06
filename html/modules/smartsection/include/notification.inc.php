<?php

/**
* $Id: notification.inc.php,v 1.1 2012/03/31 09:53:57 ohwada Exp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

function smartsection_notify_iteminfo($category, $item_id)
{
    global $xoopsModule, $xoopsModuleConfig, $xoopsConfig;

    include_once(XOOPS_ROOT_PATH . "/modules/smartsection/include/seo_functions.php");
    
    if (empty($xoopsModule) || $xoopsModule->getVar('dirname') != 'smartsection') {
        $module_handler = &xoops_gethandler('module');
        $module = &$module_handler->getByDirname('smartsection');
        $config_handler = &xoops_gethandler('config');
        $config = &$config_handler->getConfigsByCat(0, $module->getVar('mid'));
    } else {
        $module = &$xoopsModule;
        $config = &$xoopsModuleConfig;
    } 

    if ($category == 'global') {
        $item['name'] = '';
        $item['url'] = '';
        return $item;
    } 

    global $xoopsDB;

    if ($category == 'category') {
        // Assume we have a valid category id
        $sql = 'SELECT name, short_url FROM ' . $xoopsDB->prefix('smartsection_categories') . ' WHERE categoryid  = ' . $item_id;
        $result = $xoopsDB->query($sql); // TODO: error check
        $result_array = $xoopsDB->fetchArray($result);
        $item['name'] = $result_array['name'];
        $item['url'] = smartsection_seo_genUrl('category', $item_id, $result_array['short_url']); 
        return $item;
    } 

    if ($category == 'item') {
        // Assume we have a valid story id
        $sql = 'SELECT title, short_url FROM ' . $xoopsDB->prefix('smartsection_item') . ' WHERE itemid = ' . $item_id;
        $result = $xoopsDB->query($sql); // TODO: error check
        $result_array = $xoopsDB->fetchArray($result);
        $item['name'] = $result_array['title'];
        $item['url'] = smartsection_seo_genUrl('item', $item_id, $result_array['short_url']); 
        return $item;
    } 
} 

?>