<?php
namespace CADev\Base;

/**
 * @param string $ctrlName Name ID of Controller
 * @return string HTML of block
 */
function GetController($ctrlName, $args = null){
    $ctrls = [
        "core.indexmember" => [
            'app' => "Core",
            'class' => "IndexMember",
            'view' =>"indexmember"
        ]
    ];

    if (!array_key_exists($ctrlName, $ctrls)){
        throw new \Exception("Controller does not exist", 1);
    }

    $ctrlToUse = $ctrls[$ctrlName];
    $className = "\\CADev\\Apps\\". $ctrlToUse['app'] ."\\Controllers\\". $ctrlToUse['class'];
    $objCtrl = new $className();
    $pageArgs = $objCtrl->Process($args);

    if ($pageArgs !== false){
        $viewName = "\\CADev\\Apps\\". $ctrlToUse['app'] ."\\Views\\". $ctrlToUse['view'];
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
        "comment.block" => [
            'app' => "Comment", 
            'class' => "CommentBlock",
            'view' => 'block']
    ];

    if (!array_key_exists($blockName, $blocks)){
        throw new \Exception("Block does not exist", 1);
    }

    $blockToUse = $blocks[$blockName];
    $className = "\\CADev\\Apps\\". $blockToUse['app'] ."\\Blocks\\". $blockToUse['class'];
    $objBlock = new $className();
    $pageArgs = $objBlock->Process($args);

    if ($pageArgs !== false){
        $viewName = "\\CADev\\Apps\\". $blockToUse['app'] ."\\Views\\". $blockToUse['view'];
        $blockView = new $viewName();
        return $blockView->GetView($pageArgs);
    }
    return '';
}

?>