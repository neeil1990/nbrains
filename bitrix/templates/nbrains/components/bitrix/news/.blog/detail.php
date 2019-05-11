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

<!-- Blog post-->
<section class="section section-lg bg-white">
    <div class="container">
        <article class="blog-layout">
            <div class="blog-layout__main">
                <article class="post-single">

                    <?$ElementID = $APPLICATION->IncludeComponent(
                        "bitrix:news.detail",
                        "",
                        Array(
                            "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                            "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                            "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                            "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
                            "PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
                            "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
                            "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                            "META_KEYWORDS" => $arParams["META_KEYWORDS"],
                            "META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
                            "BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
                            "SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
                            "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                            "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                            "SET_TITLE" => $arParams["SET_TITLE"],
                            "MESSAGE_404" => $arParams["MESSAGE_404"],
                            "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                            "SHOW_404" => $arParams["SHOW_404"],
                            "FILE_404" => $arParams["FILE_404"],
                            "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                            "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
                            "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
                            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                            "CACHE_TIME" => $arParams["CACHE_TIME"],
                            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                            "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                            "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                            "DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
                            "DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
                            "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
                            "PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
                            "CHECK_DATES" => $arParams["CHECK_DATES"],
                            "ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
                            "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
                            "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
                            "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                            "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
                            "USE_SHARE" => $arParams["USE_SHARE"],
                            "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                            "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                            "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                            "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                            "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                            "ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
                            'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
                        ),
                        $component
                    );?>


                    <? if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y"):?>
                    <noindex>
                        <?
                        $APPLICATION->IncludeComponent("bitrix:main.share", "universal", array(
                            "HANDLERS" => $arParams["SHARE_HANDLERS"],
                            "PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
                            "PAGE_TITLE" => $arResult["~NAME"],
                            "SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                            "SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                            "HIDE" => $arParams["SHARE_HIDE"],
                        ),
                            $component,
                            array("HIDE_ICONS" => "Y")
                        );
                        ?>
                    </noindex>
                    <? endif; ?>
                </article>

                <div class="section-md section-collapse">
                    <?$APPLICATION->IncludeComponent("bitrix:news.line", ".latest.post", Array(
                        "ACTIVE_DATE_FORMAT" => "d.M.Y",	// Формат показа даты
                        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                        "CACHE_TIME" => $arParams["CACHE_TIME"],
                        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                        "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                        "FIELD_CODE" => array(	// Поля
                            0 => "PREVIEW_PICTURE",
                            1 => "",
                        ),
                        "IBLOCKS" => array(	// Код информационного блока
                            0 => $arParams["IBLOCK_ID"],
                        ),
                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],	// Тип информационного блока
                        "NEWS_COUNT" => "2",	// Количество новостей на странице
                        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                        "COMPONENT_TEMPLATE" => ".latest.post"
                    ),
                        $component
                    );?>
                </div>
                <div class="section-md section-collapse">
                    <p class="custom-heading-line heading-8">Comments</p>
                    <div class="comment-group">
                        <!-- Comment-->
                        <article class="comment">
                            <div class="comment__figure"><img class="comment__image" src="images/user-1-82x82.jpg" alt="" width="82" height="82"/>
                            </div>
                            <div class="comment__main">
                                <div class="comment__header">
                                    <h5 class="comment__title">Samantha</h5><span class="comment__time">3 days ago</span>
                                </div>
                                <div class="comment__text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="comment__footer">
                                    <ul class="comment__list">
                                        <li> <a class="comment__link" href="#"> <span class="icon mdi mdi-thumb-up-outline"> </span><span>12</span></a></li>
                                        <li><a class="comment__link" href="#"><span class="icon mdi mdi-comment-outline"></span><span>Reply</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <div class="comment-group">
                            <!-- Comment-->
                            <article class="comment">
                                <div class="comment__figure"><img class="comment__image" src="images/user-2-82x82.jpg" alt="" width="82" height="82"/>
                                </div>
                                <div class="comment__main">
                                    <div class="comment__header">
                                        <h5 class="comment__title">Edward</h5><span class="comment__time">1 day ago</span>
                                    </div>
                                    <div class="comment__text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="comment__footer">
                                        <ul class="comment__list">
                                            <li> <a class="comment__link" href="#"> <span class="icon mdi mdi-thumb-up-outline"> </span><span>53</span></a></li>
                                            <li><a class="comment__link" href="#"><span class="icon mdi mdi-comment-outline"></span><span>Reply</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="comment-box">
                        <div class="unit flex-md-row">
                            <div class="unit__left"><img class="comment-box__image" src="images/user-4-82x82.jpg" alt="" width="82" height="82"/>
                            </div>
                            <div class="unit__body">
                                <p class="heading-8">Linda</p>
                                <form class="rd-mailform form_outline">
                                    <div class="form-wrap">
                                        <label class="form-label" for="comment-message">Write Your Comment...</label>
                                        <textarea class="form-input" id="comment-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                    <div class="form-button">
                                        <button class="button button-lg button-primary button-ujarak" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-layout__aside">
                <div class="blog-layout__aside-item">
                    <!-- RD Search-->
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        "flat",
                        Array(
                            "PAGE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["search"]
                        ),
                        $component
                    );?>
                </div>
                <div class="blog-layout__aside-item blog-layout__aside-item_bordered">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        ".blog.sections",
                        Array(
                            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                            "CACHE_TIME" => $arParams["CACHE_TIME"],
                            "CACHE_FILTER" => $arParams["CACHE_FILTER"],
                            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                            "COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
                            "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                            "SECTION_CODE" => "",	// Код раздела
                            "SECTION_FIELDS" => array(	// Поля разделов
                                0 => "",
                                1 => "",
                            ),
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
                            "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                            "SECTION_USER_FIELDS" => array(	// Свойства разделов
                                0 => "",
                                1 => "",
                            ),
                            "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
                            "TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
                            "FOLDER" => $arResult["FOLDER"],
                        ),
                        $component
                    );?>
                </div>
                <div class="blog-layout__aside-item blog-layout__aside-item_bordered">
                    <?$APPLICATION->IncludeComponent("bitrix:news.line", ".latest.post.min", Array(
                        "ACTIVE_DATE_FORMAT" => "d.M.Y",	// Формат показа даты
                        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                        "CACHE_TIME" => $arParams["CACHE_TIME"],
                        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                        "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                        "FIELD_CODE" => array(	// Поля
                            0 => "",
                            1 => "",
                        ),
                        "IBLOCKS" => array(	// Код информационного блока
                            0 => $arParams["IBLOCK_ID"],
                        ),
                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],	// Тип информационного блока
                        "NEWS_COUNT" => "2",	// Количество новостей на странице
                        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                        "COMPONENT_TEMPLATE" => ".latest.post"
                    ),
                        $component
                    );?>
                </div>
                <div class="blog-layout__aside-item">
                    <a class="link-banner" href="#">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/banner-305x302.jpg" alt="" width="305" height="302"/>
                    </a>
                </div>
            </div>
        </article>
    </div>
</section>
