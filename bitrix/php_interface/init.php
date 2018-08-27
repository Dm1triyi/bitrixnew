<?//регистрируем обработчик
AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("MyClass", "OnAfterIBlockElementAddHandler"));
AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("MyClass", "OnAfterIBlockElementAddHandler2"));

class MyClass{
    //создаем обработчик события "OnAfterIBlockElementAdd"
    function OnAfterIBlockElementAddHandler(&$arFields){
        if ($arFields["IBLOCK_ID"] == 6){
            $arSend = array('TEXT'=>$arFields['PROPERTIES']['AUTHOR'].'написал'.$arFields['NAME']);
                CEvent::Send('FAQ_ADD_ELEMENT',s1,$arSend);
        }
    }
    function OnAfterIBlockElementAddHandler2(&$arFields){
        if ($arFields["IBLOCK_ID"] == 6){
            $arSend = array('TEXT'=>$arFields['PROPERTIES']['AUTHOR'].'написал'.$arFields['NAME']." ".$arFields['PROPERTIES']['TELEPHONE']." ".$arFields['PROPERTIES']['EMAIL']);
                CEvent::Send('RECALL_FORM',s1,$arSend);
        }
    }
}

?>