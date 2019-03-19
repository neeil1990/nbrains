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

	<section class="section section-lg bg-white">
		<div class="container">
			<div class="row row-50 justify-content-md-center justify-content-lg-start">
				<div class="col-md-10 col-lg-6">
					<div class="image-custom-1"><img src="<?=$arResult["PICTURE"];?>" alt="" width="602" height="359"/>
					</div>
				</div>
				<div class="col-md-10 col-lg-6">
					<div class="box-inset-1">
						<!-- Bootstrap tabs -->
						<div class="tabs-custom tabs-horizontal tabs-corporate tabs-corporate_left" id="tabs-about">
							<!-- Nav tabs-->
							<ul class="nav nav-tabs">
								<?foreach($arResult["ITEMS"] as $id => $arItem):?>
									<li class="nav-item"><a class="nav-link <?=($id == 0)? 'active' : ''?>" href="#tabs-about-<?=$id?>" data-toggle="tab"><?=$arItem['NAME']?></a></li>
								<?endforeach;?>
							</ul>
							<!-- Tab panes-->
							<div class="tab-content">
								<?foreach($arResult["ITEMS"] as $id => $arItem):?>
									<?
									$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
									$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
									?>
									<div class="tab-pane fade show <?=($id == 0)? 'active' : ''?>" id="tabs-about-<?=$id?>">
										<h4><?=$arItem['PREVIEW_TEXT']?></h4>
										<p><?=$arItem['DETAIL_TEXT']?></p>
									</div>
								<?endforeach;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?endif;?>
