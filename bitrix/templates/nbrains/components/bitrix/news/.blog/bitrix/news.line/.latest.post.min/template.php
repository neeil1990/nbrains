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
<p class="custom-heading-line heading-8"><?=GetMessage('CT_BNL_ELEMENT_LATEST_POST')?></p>
<ul class="list-posts">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <li>
        <!-- Post Line-->
        <article class="post-line">
            <?if(is_array($arItem['DISPLAY_DATE']) && count($arItem['DISPLAY_DATE']) > 0):?>
            <time class="post-line__time" datetime="<?=$arItem['DISPLAY_DATE']['YEAR']?>">
                <span class="post-line__time-day"><?=$arItem['DISPLAY_DATE']['DAY']?></span>
                <span class="post-line__time-month"><?=$arItem['DISPLAY_DATE']['MONTH']?></span>
            </time>
            <?endif;?>
            <div class="post-line__title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></div>
        </article>
    </li>
    <?endforeach;?>
</ul>
