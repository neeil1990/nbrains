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
$this->setFrameMode(true);
?>
<?if (0 < $arResult["SECTIONS_COUNT"]):?>
<p class="custom-heading-line heading-8"><?=GetMessage('CT_BCSL_CATEGORY')?></p>
<ul class="list-categories">
    <li class="<?=(empty($arParams['CODE'])) ? "active" : ""?>"><a href="<?=$arParams['FOLDER']?>"><?=GetMessage('CT_BCSL_CATEGORY_ALL')?></a><span class="count"><?=$arResult['CNT_ELEMENT']?></span></li>
    <? foreach ($arResult['SECTIONS'] as &$arSection):?>
    <?
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
    ?>
    <li class="<?=($arParams['CODE'] == $arSection['CODE']) ? "active" : ""?>"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><span class="count"><? echo $arSection['ELEMENT_CNT']; ?></span></li>
    <?endforeach;?>
</ul>
<?endif;?>