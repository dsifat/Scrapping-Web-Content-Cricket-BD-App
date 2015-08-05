<?php
include 'simple_html_dom.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * Nasir Hossain=300618
 */
$player_code=300618;
$html=  file_get_html('http://www.espncricinfo.com/bangladesh/content/player/'.$player_code.'html');

foreach ($html->find('.pnl490M') as $elements) {
        $name=$elements->find('h1');
        echo $name[0];
        $desc=$elements->find('p');
        echo $desc[0].'</br>';
        echo $desc[1].'</br>';
        echo $desc[2].'</br>';
        echo $desc[3].'</br>';
        echo $desc[4].'</br>';
        $baal=$elements->find('.engineTable');
        echo $baal[0];
        echo $baal[1];
    }

?>