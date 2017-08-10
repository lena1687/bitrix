<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<?if(ERROR_404=="Y"):?>
</div>  <!--закрывается класс с 404 ошибкой-->
    <?endif;?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-12 text-sm-left text-center">
                <div class="copyright float-sm-left float-none">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/copyright.php",
                        array(),
                        array(
                            "MORE" => "html"
                        )
                    );?>
                </div>
            </div>
            <div class="col-sm-7 col-12 text-sm-left text-center">
                <div class="footer-mail float-sm-left float-none mb-4">
                    <a href="mailto:<?$APPLICATION->IncludeFile(
                        SITE_DIR."include/mail.php",
                        array(),
                        array(
                            "MORE" => "html"
                        )
                    );?>" target="blank">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/mail.php",
                            array(),
                            array(
                                "MORE" => "html"
                            )
                        );?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-2.2.4.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/tether.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/owl.carousel.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.fancybox.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/script.js');
?>
</body>
</html>
