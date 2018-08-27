<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
Text here....

<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	".default", 
	array(
		"SEF_MODE" => "Y",
		"IBLOCK_TYPE" => "faq",
		"IBLOCK_ID" => "6",
		"SECTION_ID" => "6",
		"PROPERTY_CODES" => array(
			0 => "12",
			1 => "NAME",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "12",
			1 => "NAME",
		),
		"GROUPS" => array(
			0 => "1",
		),
		"STATUS_NEW" => "NEW",
		"STATUS" => "ANY",
		"LIST_URL" => "",
		"ELEMENT_ASSOC" => "PROPERTY_ID",
		"ELEMENT_ASSOC_PROPERTY" => "",
		"MAX_USER_ENTRIES" => "100000",
		"MAX_LEVELS" => "100000",
		"LEVEL_LAST" => "Y",
		"USE_CAPTCHA" => "N",
		"USER_MESSAGE_EDIT" => "",
		"USER_MESSAGE_ADD" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"RESIZE_IMAGES" => "Y",
		"MAX_FILE_SIZE" => "0",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "Y",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "Y",
		"CUSTOM_TITLE_NAME" => "Вопрос",
		"CUSTOM_TITLE_TAGS" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"SEF_FOLDER" => "/",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>