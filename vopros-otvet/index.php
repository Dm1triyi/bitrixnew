<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопрос-ответ");
?><?$APPLICATION->IncludeComponent(
	"bitrix:support.faq.element.list",
	"faq_template",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "faq",
		"PATH_TO_USER" => "",
		"RATING_TYPE" => "like",
		"SECTION_ID" => "6",
		"SHOW_RATING" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>