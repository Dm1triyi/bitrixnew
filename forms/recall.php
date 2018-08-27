<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<script type="text/javascript" src="/bitrix/js/main/ajax.js"></script>

Text here....

<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	".default", 
	array(
		"SEF_MODE" => "Y",
		"IBLOCK_TYPE" => "recall",
		"IBLOCK_ID" => "7",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"PROPERTY_CODES" => array(
			0 => "13",
			1 => "14",
			2 => "15",
			//3 => "PREVIEW_TEXT",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "13",
			1 => "14",
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>