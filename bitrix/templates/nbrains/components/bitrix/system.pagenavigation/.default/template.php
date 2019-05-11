<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if ($arResult["NavShowAlways"] || $arResult["NavPageCount"] > 1):?>

    <div class="pagination">
        <?if ($arResult["NAV"]["PAGE_NUMBER"] == 1):?>
            <div class="pagination__control"><a href="#"><?=GetMessage("nav_end")?></a></div>
        <?else:?>
            <div class="pagination__control"><a href="<?=$arResult["NAV"]["URL"]["FIRST_PAGE"]?>"><?=GetMessage("nav_prev")?></a></div>
        <?endif;?>
        <ul class="pagination__list">
            <?for ($PAGE_NUMBER=$arResult["NAV"]["START_PAGE"]; $PAGE_NUMBER<=$arResult["NAV"]["END_PAGE"]; $PAGE_NUMBER++):?>
                <?if ($PAGE_NUMBER == $arResult["NAV"]["PAGE_NUMBER"]):?>
                    <li class="active"><a href="#"><?=$PAGE_NUMBER?></a></li>
                <?else:?>
                    <li><a href="<?=$arResult["NAV"]["URL"]["SOME_PAGE"][$PAGE_NUMBER]?>"><?=$PAGE_NUMBER?></a></li>
                <?endif;?>
            <?endfor;?>
        </ul>
        <?if ($arResult["NAV"]["PAGE_NUMBER"] == $arResult["NAV"]["PAGE_COUNT"]):?>
            <div class="pagination__control"><a href="#"><?=GetMessage("nav_end")?></a></div>
        <?else:?>
            <div class="pagination__control"><a href="<?=$arResult["NAV"]["URL"]["NEXT_PAGE"]?>"><?=GetMessage("nav_next")?></a></div>
        <?endif;?>
    </div>

<?endif;?>