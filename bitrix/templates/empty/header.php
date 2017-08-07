<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
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
                                <img src="img/tel.png" alt="telefon" width="20px" height="20px">
                                <a class="number-tel align-middle pl-3" href="callto:89081111111">
                                    +7908-11-11-111
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-sm-right text-center">
                            <div class="social float-sm-right float-none">
                                <a href="https://vk.com/l.sedelnikova" target="blank" class="vk d-inline-block"></a><!--
								--><a href="https://ok.ru/?_erv=vuyzlyirbwpynedjrs" target="blank" class="ok d-inline-block"></a><!--
								--><a href="https://my.mail.ru/mail/lena1687/" target="blank" class="my-space d-inline-block"></a>
                            </div>
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
                        <div class="header-logo navbar-header text-sm-left text-center">
                            <a href="index-bootstrap.html">
                                <img src="img/logo.png" alt="telefon" width="75px" height="70px">
                            </a>
                        </div>
                        <ul class="nav navbar-nav navbar header-menu float-none text-center p-0">
                            <li class="nav-item active"><a class="nav-link d-inline-block text-uppercase" href="about-bootstrap.html">About me</a></li>
                            <li class="nav-item"><a href="news-bootstrap.html" class="nav-link d-inline-block text-uppercase">News</a></li>
                            <li class="nav-item"><a href="contacts-bootstrap.html" class="nav-link d-inline-block text-uppercase">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

	
						