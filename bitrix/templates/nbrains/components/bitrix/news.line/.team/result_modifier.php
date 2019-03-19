<?php
if($arResult['LAST_ITEM_IBLOCK_ID']){
    $res = CIBlock::GetByID($arResult['LAST_ITEM_IBLOCK_ID']);
    if($ar_res = $res->GetNext())
        $arResult["NAME"] = $ar_res["NAME"];
}

