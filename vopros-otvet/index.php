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

<button class="fancyform" >Добавить вопрос</button>
<script type="text/javascript">

$('.fancyform').click(function(){    
   // Function to build the URL edited out for simplicity       
   // var nzData = '/url.com?Zip=8000 #module';

   $.fancybox({
        width: 400,
        height: 400,
        autoSize: false,
        href: '../form.php?ajax=Y',
        type: 'ajax',
      ajax: { 
         data:{temp:'text'} 
        }
    });
});

</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>