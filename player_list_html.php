<?php
include 'simple_html_dom.php';


// Create DOM from URL or file
/*coountry code
 * Bangladesh=25
 */
$country_code=25;
$html = file_get_html('http://www.espncricinfo.com/bangladesh/content/player/country.html?country='.$country_code);
$const='http://www.espncricinfo.com';


// Find all links 

foreach($html->find('.divider') as $element){
        foreach ($element->find('a') as $lnk) {
                $name= $lnk->innertext;
                $temp= $lnk->href;
                $temp='http://www.espncricinfo.com'.$temp;
                $lnk='<a href="'.$temp.'">'.$name.'</a></br>';
                echo $lnk;
            }
        }
?>