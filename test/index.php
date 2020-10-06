<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if (CModule::IncludeModule("iblock")) {
    $res = CIBlockElement::GetList(
        [],
        [
            'IBLOCK_ID' => 2, 'ACTIVE' => 'Y'
        ],
        false,
        false,
        []
    );

    $output = [];
    while($element = $res->GetNext()) {
        $output[] = $element;
    }
    var_dump($output);
}
