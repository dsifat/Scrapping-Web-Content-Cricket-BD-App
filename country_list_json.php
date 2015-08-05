<?php
include 'simple_html_dom.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$html=  file_get_html('http://localhost/html_parse/country_list_html.php');
function html_to_obj($html) {
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    return element_to_obj($dom->documentElement);
}
function element_to_obj($element) {
    $obj = array( "tag" => $element->tagName );
    foreach ($element->attributes as $attribute) {
        $obj[$attribute->name] = $attribute->value;
    }
    foreach ($element->childNodes as $subElement) {
        if ($subElement->nodeType == XML_TEXT_NODE) {
            $obj["html"] = $subElement->wholeText;
        }
        else {
            $obj["children"][] = element_to_obj($subElement);
        }
    }
    return $obj;
}
header("Content-Type: text/plain");
echo json_encode(html_to_obj($html), JSON_PRETTY_PRINT);
?>