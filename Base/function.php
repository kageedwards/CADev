<?php
namespace CADev\Base;

/**
 * @param string $ctrlName Name ID of Controller
 * @return string HTML of block
 */
function GetController($ctrlName, $args = null){
    $ctrls = [
        "core.indexmember" => ["Core", "IndexMember", "indexmember"]
    ];

    if (!array_key_exists($ctrlName, $ctrls)){
        throw new \Exception("Controller does not exist", 1);
    }

    $ctrlToUse = $ctrls[$ctrlName];
    $className = "\\CADev\\Apps\\". $ctrlToUse[0] ."\\Controllers\\". $ctrlToUse[1];
    $objCtrl = new $className();
    $pageArgs = $objCtrl->Process($args);

    if ($pageArgs !== false){
        $viewName = "\\CADev\\Apps\\". $ctrlToUse[0] ."\\Views\\". $ctrlToUse[2];
        $ctrlView = new $viewName();
        return $ctrlView->GetView($pageArgs);
    }
    return '';
}

/**
 * @param string $blockName Name ID of Block
 * @return string HTML of block
 */
function GetBlock($blockName, $args = null){
    $blocks = [
        "comment.block" => ["Comment", "CommentBlock", 'block']
    ];

    if (!array_key_exists($blockName, $blocks)){
        throw new \Exception("Block does not exist", 1);
    }

    $blockToUse = $blocks[$blockName];
    $className = "\\CADev\\Apps\\". $blockToUse[0] ."\\Blocks\\". $blockToUse[1];
    $objBlock = new $className();
    $pageArgs = $objBlock->Process($args);

    if ($pageArgs !== false){
        $viewName = "\\CADev\\Apps\\". $blockToUse[0] ."\\Views\\". $blockToUse[2];
        $blockView = new $viewName();
        return $blockView->GetView($pageArgs);
    }
    return '';
}

?>