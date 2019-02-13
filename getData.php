<?php

$url = "http://weerlive.nl/api/json-data-10min.php?key=0a11e7d089&locatie=Breda";

$json = file_get_contents($url);

//var_dump($json);

$weatherObject = json_decode($json);  

//var_dump($weatherObject);



echo 
'<div class="screen">' .
'<div class="container  bg">' .
    '<div class="row debug">' .
        '<div class="col debug"><p class="text-left">zonsop<br>' . $weatherObject -> liveweer[0] -> sup . '</p></div>' .
        '<div class="col debug">' .
            '<div class="row"><div class="col debug"><p class="text-center">tijd</p></div></div>' .
            '<div class="row"><div class="col debug"><p class="text-center">' . $weatherObject -> liveweer[0] -> plaats . '</p></div></div>' .     
        '</div>' .
        '<div class="col debug"><p class="text-right">zonsonder<br>' . $weatherObject -> liveweer[0] -> sunder . '</p></div>' .
    '</div>' .
    '<div class="row debug">' .
        '<div class="col debug"><p class="text-center">' . $weatherObject -> liveweer[0] -> d0weer . '</p></div>' .
    '</div>' .
    '<div class="row debug">' .
        '<div class="col debug"><p class="text-center">' . $weatherObject -> liveweer[0] -> temp . '</p></div>' .
    '</div>' .
    '<div class="row debug">' .
        '<div class="col debug">' .
            '<div class="row debug"><div class="col debug"><p class="text-center"><small>Dauwpunt</small></p></div></div>' .
            '<div class="row debug>"><div class="col debug"><p class="text-center">' . $weatherObject -> liveweer[0] -> dauwp . '</p></div></div>' .
        '</div>' .
        '<div class="col debug">' .
                '<div class="row debug"><div class="col debug"><p class="text-center"><small>Luchtvochtigheid</small></p></div></div>' .
                '<div class="row debug>"><div class="col debug"><p class="text-center">' . $weatherObject -> liveweer[0] -> lv . '</p></div></div>' .
        '</div>' .
        '<div class="col debug">' .
                '<div class="row debug"><div class="col debug"><p class="text-center"><small>Windsnelheid</small></p></div></div>' .
                '<div class="row debug>"><div class="col debug"><p class="text-center">' . $weatherObject -> liveweer[0] -> winds . '</p></div></div>' .
        '</div>' .
    '</div>' .
    '<div class="row debug">' .
            '<div class="col debug">' .
                '<div class="row debug"><div class="col debug"><p class="text-center">Mist</p></div></div>' .
                '<div class="row debug>"><div class="col debug"><p class="text-center">0 %</p><p class="text-right"><small>kans</small></p></div></div>' .
                
            '</div>' .
            '<div class="col debug">' .
                    '<div class="row debug"><div class="col debug"><p class="text-center">Rijp</p></div></div>' .
                    '<div class="row debug>"><div class="col debug"><p class="text-center">0 %</p><p class="text-right"><small>kans</small></p></div></div>' .
            '</div>' .
            '<div class="col debug">' .
                    '<div class="row debug"><div class="col debug"><p class="text-center">Onweer</p></div></div>' .
                    '<div class="row debug>"><div class="col debug"><p class="text-center">0 %</p><p class="text-right"><small>kans</small></p></div></div>' .
            '</div>' .
        '</div>' .
    '<div class="row debug">' .
        '<div class="col debug"><p class="text-left">' . $weatherObject -> liveweer[0] -> alarm . '</p></div>' .
    '</div>' .
    '<div class="row debug">' .
        '<div class="col debug"><p class="text-left"></p></div>' .
    '</div>' .
'</div>'  .
'</div>';
?>

