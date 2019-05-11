<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

foreach($arResult["ITEMS"] as &$arItem){
    $date = explode(".",$arItem['DISPLAY_ACTIVE_FROM'],3);
    $arItem['DISPLAY_DATE']['DAY'] = $date[0];
    $arItem['DISPLAY_DATE']['MONTH'] = $date[1];
    $arItem['DISPLAY_DATE']['YEAR'] = $date[2];
}


