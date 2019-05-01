<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

$APPLICATION->AddChainItem("404", "");
?>

    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/bg-image-6-1920x750.jpg);">
            <div class="container">
                <h2 class="breadcrumbs-custom__title">404</h2>
            </div>
        </div>
        <div class="breadcrumbs-custom__main bg-gray-light">
            <div class="container">
                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".breadcrumb", Array(
                    "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                    "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                    "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                ),
                    false
                );?>
            </div>
        </div>
    </section>

    <!-- 404-->
    <section class="section section-md bg-white text-center">
        <div class="container">
            <h3>Извините, страница не найдена </h3>
            <p class="ls-05">Возможно, вы ошиблись при вводе адреса или страница переместилась</p>
            <div class="group-sm group-middle">
                <a class="button button-default button-ujarak" href="/">Перейти на главную</a>
                <a class="button button-primary button-ujarak" href="/contact/">Контакты</a>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>