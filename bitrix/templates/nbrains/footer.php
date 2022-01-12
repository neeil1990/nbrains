<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!-- Page Footer-->
<footer class="section footer-classic context-dark">
	<div class="footer-classic__main bg-gray-3">
		<div class="container">
			<div class="row row-50 align-items-sm-end justify-content-sm-center justify-content-lg-start">
				<div class="col-lg-6">
					<div class="footer-classic__custom-column">
						<div class="unit flex-sm-row">
							<div class="unit__left"><span class="icon icon-md icon-default fl-bigmug-line-headphones32"></span></div>
							<div class="unit__body"><a class="link link-lg" href="tel:<?= tplvar('phone');?>"><?= tplvar('phone');?></a>
								<p>Наша служба поддержки</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-lg-6">
					<!--<div class="group-md">
						<h3>Подписывайся</h3>
						<p class="large">Получите последние обновления и предложения</p>
					</div>-->
					<!-- RD Mailform-->
					<!--<form class="rd-mailform form_inline form_lg" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
						<div class="form-wrap">
							<input class="form-input" id="subscribe-form-footer-form-email" type="email" name="email" data-constraints="@Email @Required">
							<label class="form-label" for="subscribe-form-footer-form-email">Your E-mail</label>
						</div>
						<div class="form-button">
							<button class="button button-lg button-primary button-ujarak" type="submit">присоединяться</button>
						</div>
					</form>-->
				</div>
			</div>
			<div class="row row-50 justify-content-md-center justify-content-lg-start justify-content-xl-between">
				<div class="col-md-5 col-lg-3">
					<p class="custom-heading-1 custom-heading-bordered">Немного о нас</p>
					<div class="divider"></div>
					<p class="ls-05">Наша компания занимается разработкой качественного и надежного программного обеспечения для корпоративных нужд с 2012 года.</p>
					<ul class="list-inline list-inline-xs">
						<li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-facebook" href="#"></a></li>
						<li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-twitter" href="#"></a></li>
						<li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-google-plus" href="#"></a></li>
						<li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-instagram" href="#"></a></li>
					</ul>
				</div>
				<div class="col-md-5 col-lg-4 col-xl-3">
                    <?/*$APPLICATION->IncludeComponent(
                            "bitrix:news.line",
                            ".latest.news.footer",
                        Array(
                        "ACTIVE_DATE_FORMAT" => "M j, Y",
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "300",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                        "FIELD_CODE" => array(	// Поля
                            0 => "PREVIEW_PICTURE",
                            1 => "",
                        ),
                        "IBLOCKS" => array(	// Код информационного блока
                            0 => "10",
                        ),
                        "IBLOCK_TYPE" => "contents",	// Тип информационного блока
                        "NEWS_COUNT" => "2",	// Количество новостей на странице
                        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                    ),
                        false
                    );*/?>
				</div>
				<div class="col-md-10 col-lg-5 col-xl-4">
					<p class="custom-heading-1 custom-heading-bordered">Полезные ссылки</p>
					<div class="divider"></div>
					<div class="row row-5">
						<div class="col-sm-6">
							<ul class="list-marked list-marked_primary">
								<li><a href="#services">Услуги</a></li>
								<li><a href="#tariffs">Тарифы</a></li>
							</ul>
						</div>
						<div class="col-sm-6">
							<ul class="list-marked list-marked_primary">
								<li><a href="#about">О нас</a></li>
								<li><a href="#write">Написать нам</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-default__aside bg-gray-5">
		<div class="container">
			<div class="footer-default__aside-inner">
				<!-- Rights-->
				<p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>nBrains</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
				<ul class="list-separated list-inline">
					<li><a href="#write">Поддержка</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

</div>
<!-- Global Mailform Output-->
<?$APPLICATION->IncludeComponent(
    "nbrains:main.feedback",
    "modal",
    Array(
        "EVENT_NAME" => "FEEDBACK_FORM",
        "IBLOCK_ID" => "12",
        "IBLOCK_TYPE" => "forms"
    )
);?>
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="<?=SITE_TEMPLATE_PATH?>/js/core.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskinput.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
</body>
</html>
