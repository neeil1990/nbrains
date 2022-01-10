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
<p class="custom-heading-1 custom-heading-bordered"><?=GetMessage('CT_BNL_ELEMENT_LATEST_POST')?></p>
<div class="divider"></div>
<div class="post-small-wrap">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
    <!-- Post small-->
    <article class="post-small">
        <div class="post-small__aside">
            <a class="post-small__media" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                <img class="post-small__image" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?echo $arItem["NAME"]?>" width="80" height="68"/>
            </a>
        </div>
        <div class="post-small__main">
            <p class="post-small__title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></p>
            <time class="post-small__time" datetime="2018"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></time>
        </div>
    </article>
    <?endforeach;?>
</div>
