<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './simple_html_dom.php';
$html=  file_get_html('http://www.espncricinfo.com/ci/content/site/cricket_squads_teams/index.html');

foreach($html->find('.teamList') as $elements){
        $baal=$html->find('h3 a');
        for($i=0;$i<17;$i++){
            echo $baal[$i].'</br>';
        }
    
      }
?>