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
<div class="post-single__header">
    <ul class="post-single__meta">
        <li><span class="icon mdi mdi-comment-outline"></span><a href="#">3</a></li>
        <li><span class="icon mdi mdi-thumb-up-outline"></span><a href="#">12</a></li>
    </ul>
    <ul class="post-single__meta">
        <li><span class="icon mdi icon mdi mdi-account"></span><span>by</span><a href="#">John Doe</a></li>
    </ul>
</div>
<div class="post-single__time-wrap">
    <?if(is_array($arResult['DISPLAY_DATE']) && count($arResult['DISPLAY_DATE']) > 0):?>
    <time class="post-single__time" datetime="<?=$arResult['DISPLAY_DATE']['YEAR']?>">
        <span class="post-single__time-day"><?=$arResult['DISPLAY_DATE']['DAY']?></span>
        <span class="post-single__time-month"><?=$arResult['DISPLAY_DATE']['MONTH']?></span>
    </time>
    <?endif;?>
</div>

<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
    <h3><?=$arResult["NAME"]?></h3>
    <h4 class="post-single__title"><?=$arResult["NAME"]?></h4>
<?endif;?>

<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
    <img
            class="detail_picture"
            border="0"
            src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
            width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
            height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
            alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
            title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
    />
<?endif?>

<?if(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
<?endif?>
