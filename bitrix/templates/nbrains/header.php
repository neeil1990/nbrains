<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
	<?$APPLICATION->ShowHead();?>
	<!-- Site Title-->
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicon.ico" type="image/x-icon">
	<!-- Stylesheets-->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700%7CSpace+Mono">

	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/fonts.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
	<!--[if lt IE 10]>
	<div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

</head>
<body>
<?$APPLICATION->ShowPanel()?>
<!-- Page Loader-->
<div id="page-loader">
	<div class="page-loader-body"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo-default-95x80.png" alt="" width="95" height="80"/>
		<div class="cssload-wrapper">
			<div class="cssload-border">
				<div class="cssload-whitespace">
					<div class="cssload-line"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="page">
	<!-- Page Header-->
	<header class="section page-header">
		<!-- RD Navbar-->
		<div class="rd-navbar-wrap">
			<nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="74px" data-lg-stick-up-offset="66px" data-md-stick-up="true" data-lg-stick-up="true">
				<div class="rd-navbar-outer">
					<div class="rd-navbar-inner">
						<!-- RD Navbar Panel-->
						<div class="rd-navbar-panel">
							<button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
							<!-- RD Navbar Brand-->
							<div class="rd-navbar-brand">
                                <a class="brand" href="/">
									<div class="brand__name">
                                        <img class="brand__logo-dark" src="<?=SITE_TEMPLATE_PATH?>/images/logo-default-95x80.png" alt="" width="95" height="80"/>
                                        <img class="brand__logo-mobile" src="images/logo-mobile-170x50.png" alt="" width="170" height="50"/>
                                    </div>
                                </a>
                            </div>
						</div>
						<div class="rd-navbar-body">
							<!-- RD Navbar Aside-->
							<div class="rd-navbar-aside">
								<div class="rd-navbar-content-outer">
									<div class="rd-navbar-content__toggle rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
									<div class="rd-navbar-content">
										<ul class="list-bordered list-inline">
											<li>
												<dl class="list-terms-inline">
													<dt>24/7 Support</dt>
													<dd><a href="tel:<?= tplvar('phone');?>"><?= tplvar('phone');?></a></dd>
												</dl>
											</li>
											<li>
												<dl class="list-terms-inline">
													<dt>E-mail</dt>
													<dd><a href="mailto:<?= tplvar('email');?>"><?= tplvar('email');?></a></dd>
												</dl>
											</li>
											<li>
												<ul class="list-inline list-inline-xs">
													<li><a class="icon icon-gray-dark icon-style-brand fa fa-facebook" href="#"></a></li>
													<li><a class="icon icon-gray-dark icon-style-brand fa fa-twitter" href="#"></a></li>
													<li><a class="icon icon-gray-dark icon-style-brand fa fa-google-plus" href="#"></a></li>
													<li><a class="icon icon-gray-dark icon-style-brand fa fa-pinterest-p" href="#"></a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<div class="rd-navbar-panel__button"><a class="button button-xs button-icon button-icon-left button-default button-ujarak" href="login.html"><span class="icon mdi mdi-account"></span>Login</a></div>
							</div>
							<!-- RD Navbar Nav Wrap-->
							<div class="rd-navbar-nav-wrap">
								<div class="rd-navbar-element">
									<!-- RD Navbar Search-->
									<div class="rd-navbar-search rd-navbar-search-toggled">
										<button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"></button>
										<form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
											<div class="form-wrap">
												<input class="form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
											</div>
											<button class="rd-navbar-search-submit" type="submit"></button>
											<label class="form-label" for="rd-navbar-search-form-input">Search...</label>
											<div class="rd-search-results-live" id="rd-search-results-live"></div>
										</form>
									</div>
								</div>
								<!-- RD Navbar Nav-->
								<?$APPLICATION->IncludeComponent("bitrix:menu", ".header.menu", Array(
									"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
									"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
									"DELAY" => "N",	// Откладывать выполнение шаблона меню
									"MAX_LEVEL" => "2",	// Уровень вложенности меню
									"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
										0 => "",
									),
									"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
									"MENU_CACHE_TYPE" => "A",	// Тип кеширования
									"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
									"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
									"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
								),
									false
								);?>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>