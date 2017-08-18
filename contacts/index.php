<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Contacts");
?>
<section class="contacts-page w-100 h-100">
    <div class="strip">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="address">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/address.php",
                        array(),
                        array(
                            "MORE" => "html"
                        )
                    );?>
                    <a href="http://bitrix/contacts/evolution">map</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="feedback">
                <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback", Array(
                    "EMAIL_TO" => "lena1687@mail.ru",	// E-mail, на который будет отправлено письмо
                    "EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
                    "REQUIRED_FIELDS" => array("NAME","EMAIL","TELL","MESSAGE"), // Обязательные поля для заполнения
                    "USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
                    "COMPONENT_TEMPLATE" => ".default",
                    "AJAX_MODE" => "Y",   //дальше параметры отправки через AJAX
                    "AJAX_OPTION_SHADOW" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N"
                ),
                    false
                );?>
                </div>
            </div>
        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>