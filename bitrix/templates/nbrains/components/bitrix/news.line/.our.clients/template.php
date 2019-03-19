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

	<section class="section section-md bg-gray-light text-center">
		<svg x="0px" y="0px" width="0" height="0">
			<defs>
				<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
					<stop offset="0%" stop-color="#00abfa"></stop>
					<stop offset="100%" stop-color="#00caad"></stop>
				</linearGradient>
			</defs>
		</svg>
		<div class="container">
			<h2><?=$arResult["NAME"]?></h2>
			<!-- Owl Carousel-->
			<div class="owl-outer-navigation-wrap owl-carousel_nav-modern wow fadeIn">
				<div class="owl-carousel quote-creative-carousel" data-items="1" data-lg-items="2" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-navigation-container="#owl-carousel-nav" data-dots-each="1">
					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						<div class="item">
							<!-- Quote Creative-->
							<article class="quote-creative">
								<div class="quote-creative__header">
									<div class="quote-creative__media">
										<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" width="112" height="99"/>
									</div>
									<div class="quote-creative__info">
										<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
											<p class="quote-creative__title"><?echo $arItem["NAME"]?></p>
										<?endif;?>

										<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
											<p class="quote-creative__subtitle"><?echo $arItem["PREVIEW_TEXT"];?></p>
										<?endif;?>
									</div>
								</div>
								<div class="quote-creative__main">
									<div class="quote-creative__mark">
										<svg x="0px" y="0px" width="39px" height="21px" viewbox="0 0 39 21">
											<g fill="url(#grad1)">
												<polyline points="8.955,21 0,14.031 0.002,0.001 15.984,0.001 15.984,13.984 8.969,14.016 "></polyline>
												<polyline points="31.97,20.999 23.016,14.031 23.018,0.001 39,0.001 39,13.984 31.984,14.015 "></polyline>
											</g>
										</svg>
									</div>
									<div class="quote-creative__main-text">
										<?if($arItem["DETAIL_TEXT"]):?>
											<p><?=$arItem["DETAIL_TEXT"]?></p>
										<?endif;?>
									</div>
								</div>
							</article>
						</div>
					<?endforeach;?>
				</div>
				<div class="owl-outer-navigation" id="owl-carousel-nav"></div>
			</div>
		</div>
	</section>

<?endif;?>
