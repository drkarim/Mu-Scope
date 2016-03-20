<?php

include_once("../api/kcl/ServerLogs.php");
include_once("../api/kcl/XMLConfig.php");

$xml_test = new XMLConfig('../xml/museum.xml');

//echo print_r($xml_test->GetSpecimenData('9a46016fc7074e609b83421bdcc6c865', 'description'));
//$specimen_group_id = $xml_test->GetSpecimenGroupID('vertebrates');
//$xml_test->GetSpecimenData('')
//echo print_r($xml_test->GetSpecimens('vertebrates'), true);
echo print_r($xml_test->GetSpecimenDataDigest('vertebrates'), true);

echo "\n\n";


?>