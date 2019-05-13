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
<section class="section section-lg bg-white text-center">
	<div class="container">
		<h2><?=$arResult["NAME"]?></h2>
		<div class="row row-30 justify-content-md-center">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="col-md-6 col-lg-4">
				<!-- Box Chloe-->
				<article class="box-chloe box-chloe_secondary">
					<?if($icon = $arItem["DISPLAY_PROPERTIES"]["ICON"]["VALUE"]):?>
						<div class="box-chloe__icon <?=$icon?>"></div>
					<?endif;?>
					<div class="box-chloe__main">
						<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
							<h4 class="box-chloe__title"><?echo $arItem["NAME"]?></h4>
						<?endif;?>

						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
							<p><?echo $arItem["PREVIEW_TEXT"];?></p>
						<?endif;?>

						<?if($arItem["CODE"]):?>
						<a class="button button-sm button-default button-ujarak" data-toggle="modal" data-target="#modalCallBack" data-whatever="<?=$arItem["NAME"]?> заполните форму и мы вам все расскажем" href="#">подробнее</a>
						<? endif; ?>
					</div>
				</article>
			</div>
			<?endforeach;?>
		</div>
	</div>
</section>
