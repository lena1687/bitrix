<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("test1");
?><?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"PATH" => "",
		"SITE_ID" => "nu",
		"START_FROM" => "0"
	)
);?><br><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>