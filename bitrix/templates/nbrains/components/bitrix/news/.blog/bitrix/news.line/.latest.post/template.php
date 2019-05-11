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
<div class="row row-50">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-md-6">
        <!-- Post Minimal-->
        <article class="post-minimal">
            <a class="post-minimal__media" href="blog-post.html">
                <img class="post-minimal__image" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?echo $arItem["NAME"]?>" width="368" height="293"/>
            </a>
            <h4 class="post-minimal__title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h4>
            <ul class="post-minimal__meta">
                <li><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html">450</a></li>
                <li><span class="icon mdi mdi-thumb-up-outline"></span><a href="#">12</a></li>
                <li><span class="icon mdi mdi-account"></span><span>by</span><a href="#">John Doe</a></li>
            </ul>
        </article>
    </div>
    <?endforeach;?>
</div>

