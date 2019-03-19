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

	<section class="section section-lg bg-gray-light text-center">
		<div class="container">
			<h2><?=$arResult["NAME"]?></h2>
			<div class="row row-50">
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-md-6 col-lg-4">
					<!-- Card Creative-->
					<article class="card-creative">
						<div class="card-creative__inner">
							<figure class="card-creative__media">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" width="230" height="211"/>
							</figure>
							<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
								<p class="card-creative__title"><?=$arItem["NAME"]?></p>
							<?endif;?>
							<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
							<p class="card-creative__subtitle"><?echo $arItem["PREVIEW_TEXT"];?></p>
							<?endif;?>
							<div class="card-creative__divider"></div>
							<div class="card-creative__aside">
								<ul class="list-inline list-inline-md">
									<li><a class="icon icon-xs icon-darker icon-style-brand fa fa-facebook" href="#"></a></li>
									<li><a class="icon icon-xs icon-darker icon-style-brand fa fa-twitter" href="#"></a></li>
									<li><a class="icon icon-xs icon-darker icon-style-brand fa fa-google-plus" href="#"></a></li>
									<li><a class="icon icon-xs icon-darker icon-style-brand fa fa-pinterest-p" href="#"></a></li>
								</ul>
							</div>
						</div>
					</article>
				</div>
				<?endforeach;?>
			</div>
		</div>
	</section>

<?endif;?>
