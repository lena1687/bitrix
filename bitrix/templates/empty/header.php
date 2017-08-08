<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$blsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
/*теперь эту переменную можно использовать, чтобы отображать его на главной странице, например хлебные крошки*/
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
        <link href="<?=SITE_TEMPLATE_PATH?>/img/favicon.png" rel="shortcut icon" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.min.css'); ?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap-style.min.css'); ?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.fancybox.min.css'); ?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/owl.carousel.min.css'); ?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/owl.theme.default.min.css'); ?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/font-awesome-4.7.0/css/font-awesome.min.css'); ?>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <header>
            <section class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-12 text-sm-left text-center">
                            <div class="telefon float-sm-left float-none">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/tel.png" alt="telefon" width="20px" height="20px">
                                <a class="number-tel align-middle pl-3"
                                   href="callto:<?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/tel.php",
                                    array(),
                                    array(
                                        "MORE" => "text"
                                    )
                                );?>">
                                    <?$APPLICATION->IncludeFile(
                                        SITE_DIR."include/tel.php",
                                        array(),
                                        array(
                                                "MORE" => "text"
                                        )
                                    );?>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-sm-right text-center">
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR."include/social.php",
                                array(),
                                array(
                                    "MORE" => "html"
                                )
                            );?>
                        </div>
                    </div>
                </div>
            </section>
            <nav class="bottom-header navbar navbar-toggleable" role="navigation">
                <div class="container">
                    <button type="button" class="navbar-toggler text-uppercase" data-toggle="collapse" data-target="#main-menu" aria-controls="navbarTogglerDemo01" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>Menu
                        <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="main-menu">

                        <?if($blsMainPage):?>
                        <div class="header-logo navbar-header text-sm-left text-center">
                            <?else:?>
                            <a class="header-logo" href="/">
                                <?endif;?>
                                <?if($blsMainPage):?>
                        </div>
                        <?else:?>
                            </a>
                        <?endif;?>

                        <?$APPLICATION->IncludeComponent("bitrix:menu", "template1", Array(
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                            false
                        );?>
                    </div>
                </div>
            </nav>
            <section class="breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-sm-left text-center">
                        <?if(!$blsMainPage):?>
                            <!--сюда можно вставить блоки, отображающиеся на главной странице, новости, слайдер, в конце < ?endif;?> без пробела после скобки-->
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:breadcrumb",
                                "",
                                Array(
                                    "PATH" => "",
                                    "SITE_ID" => "nu",
                                    "START_FROM" => "0"
                                )
                            );?>
                            <?endif;?>
                        </div>
                    </div>
                </div>
            </section>
        </header>

	
						