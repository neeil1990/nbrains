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
<section class="section parallax-container bg-gray-darker" data-parallax-img="<?=CFile::GetPath($arResult["PICTURE"]);?>">
	<div class="parallax-content">
		<div class="section-lg text-center text-sm-left">
			<div class="container">
				<div class="row row-50 flex-md-row-reverse justify-content-md-between align-items-center align-items-lg-start">
					<div class="col-md-5 wow fadeInRightSmall">
						<div class="box-width-3 box-centered">
							<h2><?=$arResult["NAME"]?></h2>
							<p class="text-style-1"><?=$arResult["DESCRIPTION"]?></p>
							<a class="button button-lg btn-primary button-ujarak" href="<?=$arResult["CODE"]?>">Read More</a>
						</div>
					</div>
					<div class="col-md-7 col-lg-6 wow fadeInLeftSmall">
						<div class="row row-style-1">
							<?foreach($arResult["ITEMS"] as $arItem):?>
							<?
							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
							?>
							<div class="col-sm-6">
								<div class="col-inner">
									<!-- Box counter-->
									<article class="box-counter box-counter_modern">
										<div class="box-counter__main">
											<?if($icon = $arItem["DISPLAY_PROPERTIES"]["ICON"]["VALUE"]):?>
											<div class="box-counter__icon <?=$icon?>"></div>
											<?endif;?>
											<?if($count = $arItem["DISPLAY_PROPERTIES"]["COUNT"]["VALUE"]):?>
											<div class="counter"><?=$count?></div>
											<?endif;?>

											<?if($prefix = $arItem["DISPLAY_PROPERTIES"]["PREFIX"]["VALUE"]):?>
											<span class="<?=$arItem["DISPLAY_PROPERTIES"]["PREFIX_POSITION"]["VALUE_XML_ID"]?>"><?=$prefix?></span>
											<?endif;?>
										</div>
										<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
										<p class="box-counter__title"><?=$arItem["NAME"]?></p>
										<?endif;?>
									</article>
								</div>
							</div>
							<?endforeach;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
