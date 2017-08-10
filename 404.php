<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-uppercase mt-5">Push yourself & your designs</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <img class="mt-5 mb-5" src="<?=SITE_TEMPLATE_PATH?>/img/404.png" alt="404" width="330px" height="184px">
            </div>
        </div>
    </div>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>