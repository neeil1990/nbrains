<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/bg-image-8-1920x1000.jpg);">
            <div class="container">
                <h2 class="breadcrumbs-custom__title">Контакты</h2>
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

    <!-- Contact Form -->
    <section class="section section-md bg-white">
        <div class="container container_bigger">
            <div class="row justify-content-md-center justify-content-xl-between row-2-columns-bordered row-50">
                <div class="col-md-10 col-lg-5">
                    <h3>Связаться с нами</h3>
                    <ul class="list-creative">
                        <li>
                            <dl class="list-terms-medium list-terms-medium_secondary">
                                <dt>Адрес</dt>
                                <dd><a href="#"><?= tplvar('street');?></a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-medium">
                                <dt>Телефон</dt>
                                <dd>
                                    <ul class="list-comma">
                                        <li><a href="tel:<?= tplvar('phone');?>"><?= tplvar('phone');?></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-medium list-terms-medium_tertiary">
                                <dt>Почта</dt>
                                <dd>
                                    <ul class="list-comma">
                                        <li><a href="mailto:<?= tplvar('email');?>"><?= tplvar('email');?></a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 col-lg-7 col-xl-6">
                    <?$APPLICATION->IncludeComponent(
                        "nbrains:main.feedback",
                        "",
                        Array(
                            "EVENT_NAME" => "FEEDBACK_FORM",
                            "IBLOCK_ID" => "11",
                            "IBLOCK_TYPE" => "forms"
                        )
                    );?>
                </div>
            </div>
        </div>
    </section>

    <!-- RD Google Map-->
    <section class="section">
        <div class="ya-map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abb9136cec4d0d7e2da93292288f89d34d4dcab79aeae7d18dc61f6f52cac1af6&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>