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

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <!-- Post Classic-->
    <article class="post-classic">
        <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
            <h3 class="post-classic__title">
                <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
            </h3>
        <?endif;?>

        <ul class="post-classic__meta">
            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                <li>
                    <span class="icon mdi mdi-calendar-blank"></span>
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                        <time datetime="2018"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></time>
                    </a>
                </li>
            <?endif?>
            <li><span class="icon mdi mdi-comment-outline"></span><a href="blog-post.html">450 comments</a></li>
            <li><span class="icon mdi mdi-account"></span><span>by</span><a href="#">John Doe</a></li>
        </ul>
        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
        <div class="post-classic__media">
            <a class="post-classic__figure" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                <img class="post-classic__image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" width="715" height="417"/>
            </a>
        </div>
        <?endif?>
    </article>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>

