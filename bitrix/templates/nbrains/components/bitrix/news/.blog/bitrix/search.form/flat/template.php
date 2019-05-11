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
$this->setFrameMode(true);?>
<form class="rd-search rd-search_inline form_lg form_outline" action="<?=$arResult["FORM_ACTION"]?>" method="GET">
    <div class="form-wrap">
        <label class="form-label" for="rd-search-blog-form-input"><?=GetMessage("BSF_T_SEARCH_INPUT");?></label>
        <input class="form-input" id="rd-search-blog-form-input" type="text" name="q" value="" autocomplete="off">
    </div>
    <button class="button-link fl-budicons-launch-search81" type="submit" name="s" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>"></button>
</form>