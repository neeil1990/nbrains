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
		<div class="section-lg text-center">
			<div class="container">
				<h2><?=$arResult["NAME"]?></h2>
				<p class="text-style-1"><?=$arResult["DESCRIPTION"]?></p>
				<div class="row row-30 offset-top-1">
					<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="col-sm-6 col-md-3">
						<!-- Box counter-->
						<article class="box-counter">
							<div class="box-counter__main">
								<?if($count = $arItem["DISPLAY_PROPERTIES"]["COUNT"]["VALUE"]):?>
									<div class="counter"><?=$count?></div>
								<?endif;?>
								<?if($prefix = $arItem["DISPLAY_PROPERTIES"]["PREFIX"]["VALUE"]):?>
									<span class="<?=$arItem["DISPLAY_PROPERTIES"]["PREFIX_POSITION"]["VALUE_XML_ID"]?>"><?=$prefix?></span>
								<?endif;?>
							</div>
							<div class="box-counter__divider"></div>
							<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
							<p class="box-counter__title"><?=$arItem["NAME"]?></p>
							<?endif;?>
						</article>
					</div>
					<?endforeach;?>
				</div>
			</div>
		</div>
	</div>
</section>
