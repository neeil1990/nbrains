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
<section class="section section-md bg-gray-2 text-center oh">
	<div class="container wow fadeInUpSmall">
		<h2><?=$arResult["NAME"]?></h2>
		<div class="pricing-table pricing-table-classic">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<!-- Pricing table item-->
			<article class="pricing-table__item pricing-table-classic__item">
				<div class="pricing-table__item-header">
				<?if($arItem["DISPLAY_PROPERTIES"]["STICKER"]["VALUE"]):?>
					<div class="pricing-table__item-label"><?=$arItem["DISPLAY_PROPERTIES"]["STICKER"]["VALUE"]?></div>
				<?endif;?>

				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<p class="pricing-table__item-title"><?echo $arItem["NAME"]?></p>
				<?endif;?>
				</div>
				<div class="pricing-table__item-price">
					<span class="pricing-table__item-price-currency">₽</span>
					<?if($arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]):?>
						<span class="pricing-table__item-price-value"><?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></span>
					<?endif;?>
					<div class="pricing-table__item-price-aside">
						<span class="top">00</span>
					</div>
				</div>
                <?if($arItem["DISPLAY_PROPERTIES"]["SMALL_TEXT"]["VALUE"]):?>
                <p class="pricing-table__item-price-starting"><?=$arItem["DISPLAY_PROPERTIES"]["SMALL_TEXT"]["VALUE"];?></p>
                <?endif;?>
				<ul class="pricing-table__item-features">
					<?foreach($arItem["DISPLAY_PROPERTIES"]["DESCRIPTION_BOLD"]["VALUE"] as $value):?>
						<?if($value):?>
							<li><span class="text-marked"><?=$value?></span></li>
						<?endif;?>
					<?endforeach;?>

					<?foreach($arItem["DISPLAY_PROPERTIES"]["DESCRIPTION"]["VALUE"] as $value):?>
						<?if($value):?>
							<li><?=$value?></li>
						<?endif;?>
					<?endforeach;?>
				</ul>
				<?if($arItem["CODE"]):?>
					<div class="pricing-table__item-control"><a class="button btn-primary" data-toggle="modal" data-target="#modalCallBack" data-whatever="Заполните поля формы и мы вам перезвоним" href="#">Заказать</a></div>
				<? endif; ?>
			</article>
			<?endforeach;?>
		</div>
	</div>
</section>
