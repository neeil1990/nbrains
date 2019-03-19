<?php
AddEventHandler("main", "OnAdminListDisplay", "MyOnAdminListDisplay");
function MyOnAdminListDisplay(&$list)
{
    if($list->table_id == "tbl_b_hlbd_linearicons"){
        global $APPLICATION;
        $rsTemplates = CSite::GetTemplateList("s1");
        if($arTemplate = $rsTemplates->Fetch())
        {
            $APPLICATION->SetAdditionalCss("/bitrix/templates/$arTemplate[TEMPLATE]/css/fonts.css");
        }

        foreach($list->aRows as &$row){
            $value = $row->aFields['UF_DESCRIPTION']['view']['value'];
            $row->aFields['UF_DESCRIPTION']['view']['value'] = "<i style='font-size: 50px' class='$value'></i>";
        }
    }
}
?>