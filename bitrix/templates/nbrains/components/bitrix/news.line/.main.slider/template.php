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
<?if(count($arResult["ITEMS"]) > 0):?>
<section class="section swiper-container swiper-slider swiper_style-1 swiper_height-1 swiper-controls-classic" data-loop="true" data-autoplay="false" data-simulate-touch="false">
	<div class="swiper-wrapper">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="swiper-slide bg-image-dark" data-slide-bg="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
			<div class="swiper-slide-caption">
				<div class="container text-left">
					<div class="row justify-content-center">
						<div class="col-md-10 col-sm-12">
							<h1 data-caption-animate="fadeInUpSmall"><?echo $arItem["NAME"]?></h1>
							<?if($arItem["PREVIEW_TEXT"]):?>
								<p class="quote-classic__text call-subtitle_text" data-caption-animate="fadeInUpSmall" data-caption-delay="200">
									<?=$arItem["PREVIEW_TEXT"]?>
								</p>
							<?endif;?>

							<?if($arItem["CODE"]):?>
								<a class="button button-lg button-primary" href="<?=$arItem["CODE"]?>" data-caption-animate="fadeInUpSmall" data-caption-delay="250">Read More</a>
							<?endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?endforeach;?>
	</div>
	<div class="swiper-pagination"></div>
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
</section>
<?endif;?>
