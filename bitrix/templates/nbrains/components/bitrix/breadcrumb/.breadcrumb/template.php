<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
    return "";

$strReturn = '';

$strReturn .= '<ul class="breadcrumbs-custom__path">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

    if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
    {
        $strReturn .= '<li><a href="'.$arResult[$index]["LINK"].'">'.strtolower($title).' </a></li>';
    }
    else
    {
        $strReturn .= '<li class="active">'.strtolower($title).'</li>';
    }
}

$strReturn .= '</ul>';

return $strReturn;
