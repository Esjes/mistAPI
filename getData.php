<?php

$url = "http://weerlive.nl/api/json-data-10min.php?key=0a11e7d089&locatie=Breda";

$json = file_get_contents($url);

//var_dump($json);

$weatherObject = json_decode($json);  

//var_dump($weatherObject);



echo 
'<div class="screen">' .
'<div class="wrapper">' .
'<div class="container  bg">' .
    '<div class="row debug">' .
        '<div class="col debug"><p class="text-left"><i class="wi wi-sunrise"><br>' . $weatherObject -> liveweer[0] -> sup . '</i></div>' .
        '<div class="col debug">' .
            '<div class="row"><div class="col debug" id="klokbalk"><p class="text-center"></p></div></div>' .
            '<div class="row"><div class="col debug"><p class="text-center">' . $weatherObject -> liveweer[0] -> plaats . '</p></div></div>' .     
        '</div>' .
        '<div class="col debug"><p class="text-right"><i class="wi wi-sunset"><br>' . $weatherObject -> liveweer[0] -> sunder . '</i></div>' .
    '</div>' .
    '<div class="row debug">' .
        '<div class="col debug"><i class="wi wi-' . $weatherObject -> liveweer[0] -> d0weer . '"></i></div>' .
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
        '<div class="col debug"><p class="text-left"><small>KNMI Weergegevens via <a href="https://www.Weerlive.nl">Weerlive.nl</a></p></small></div>' .
    '</div>' .
'</div>'  .
'</div>'  .
'</div>';
?>

