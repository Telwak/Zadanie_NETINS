<?php
//Form 3
require 'Model/redirect.php';
require 'Data/Conection_string.php';
require 'Model/Patch_MODEL.php';

//$xml_name = "../Rezultat_parsowania/".$_GET["name_db_xml"].".xml";

 $File = new XML_OUT($_GET["name_db_xml"]);
$xml_name = $File ->get_File_full_patch_xml_out();

$xml = new DOMDocument();
$xml->version  = "1.0";
$xml->encoding = "UTF-8";
   
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$xml->appendChild( $xml->createElement("ID", $row['ID']) );    
$xml->appendChild( $xml->createElement("TEXT", $row['TEXT']) );
}
$xml->save($xml_name);

Create_files_redirect_form3($_GET["name_db_xml"])

?>