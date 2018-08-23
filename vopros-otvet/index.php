<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопрос-ответ");
?>Text here.... <?$APPLICATION->IncludeComponent(
	"bitrix:support.faq",
	"",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"EXPAND_LIST" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "faq",
		"PATH_TO_USER" => "",
		"RATING_TYPE" => "",
		"SECTION" => "6",
		"SEF_FOLDER" => "/vopros-otvet/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#SECTION_ID#/#ELEMENT_ID#","faq"=>"","section"=>"#SECTION_ID#/"),
		"SHOW_RATING" => ""
	)
);?><br>

<a href="/vopros-otvet/form.php?ajax=Y" style="display:block; width:70px; height:20px; border:solid #0000ff 1px; padding:10px;">Добавить вопрос</a>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>