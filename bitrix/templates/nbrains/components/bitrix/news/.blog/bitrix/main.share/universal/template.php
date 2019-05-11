<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if ($arResult["PAGE_URL"])
{
	?>
    <div class="post-single__footer">
        <div class="post-single__footer-inner">
            <h5><?=GetMessage("SHARE")?></h5>
            <ul class="list-inline list-inline-xs">
                <?
                if (is_array($arResult["BOOKMARKS"]) && count($arResult["BOOKMARKS"]) > 0)
                {
                    foreach(array_reverse($arResult["BOOKMARKS"]) as $name => $arBookmark)
                    {
                        ?><li><?=$arBookmark["ICON"]?></li><?
                    }
                }
                ?>
            </ul>
        </div>
    </div>
	<?
}
else
{
	?><?=GetMessage("SHARE_ERROR_EMPTY_SERVER")?><?
}
?>