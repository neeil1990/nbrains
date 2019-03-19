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
<section class="section section-sm bg-white text-center">
	<div class="container">
		<h2><?=$arResult["NAME"]?></h2>
		<div class="row row-30 wow fadeIn">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="col-md-6 col-lg-4">
				<!-- Box Alice-->
				<article class="box-alice">
					<div class="box-alice__inner">
						<div class="box-alice__aside">
							<div class="box-alice__icon-outer">
								<div class="icon-figure">
									<div class="box-triangle">
										<svg x="0px" y="0px" width="80px" height="80px" viewBox="0 0 100 100" style="fill: #f7f7f7;">
											<path d="M20,93.301c-11,0-15.5-7.794-10-17.321l30-51.962c5.5-9.526,14.5-9.526,20,0l30,51.962 c5.5,9.526,1,17.321-10,17.321H20z"></path>
										</svg>
									</div>
									<?if($icon = $arItem["DISPLAY_PROPERTIES"]["ICON"]["VALUE"]):?>
									<span class="box-alice__icon <?=$icon?>"></span>
									<?endif;?>
								</div>
							</div>
						</div>
						<div class="box-alice__main">
						<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
							<h5 class="box-alice__title"><?echo $arItem["NAME"]?></h5>
						<?endif;?>
						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
							<p><?echo $arItem["PREVIEW_TEXT"];?></p>
						<?endif;?>
						</div>
					</div>
				</article>
			</div>
			<?endforeach;?>
		</div>
	</div>
</section>
