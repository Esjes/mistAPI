<?php

if(isset($_GET["city"])){
    $City = $_GET["city"];
}else{
    $City = "Breda";
}


$url = "http://weerlive.nl/api/json-data-10min.php?key=0a11e7d089&locatie=".$City;

$json = file_get_contents($url);

//var_dump($json);

$weatherObject = json_decode($json);  

//var_dump($weatherObject);



echo 

'<div class="wrapper">' .
'<div class="container bg space">' .
    '<div class="row debug">' .
        '<div class="col debug"><p class="text-left"><i class="wi wi-sunrise iconsizeA"></i><br>' . $weatherObject -> liveweer[0] -> sup . '</i></div>' .
        '<div class="col debug">' .
            '<div class="row"><div class="col debug text-center"><div  id="klokbalk"></div></div></div>' .
            '<div class="row"><div class="col debug text-center"><p>' . $weatherObject -> liveweer[0] -> plaats . '</p></div></div>' .  
                '<div class="row"><div class="col debug text-center"><form action="selectCity.php" method="GET">' .
                '<select class="bg" name="City">' .
                '<option selected>Selecteer stad</option>' .
                '<option value="Breda">Breda</option>' .
                '<option value="Groningen">Groningen</option>' .
                '<option value="Utrecht">Utrecht</option>' .
                '<option value="Den-Haag">Den Haag</option>' .
                '</select><button class="button" type="submit">Ga</button></form></div></div>' .  
        '</div>' .
        '<div class="col debug"><p class="text-right"><i class="wi wi-sunset iconsizeA"></i><br>' . $weatherObject -> liveweer[0] -> sunder . '</p></div>' .
    '</div>' .
    '<div class="row debug">' .
        '<div class="col debug text-center iconsizeB"><i class="wi wi-' . $weatherObject -> liveweer[0] -> d0weer . '"></i></div>' .
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
                '<div class="row debug"><div class="col debug "><i class="wi wi-mist iconsizeC grey"></i><p class="text-center"><small>Mist</small></p></div></div>' .
                '<div class="row debug>"><div class="col debug"><p class="text-center">0 %</p><p class="text-right"><small>kans</small></p></div></div>' .
                
            '</div>' .
            '<div class="col debug">' .
                    '<div class="row debug"><div class="col debug"><i class="wi wi-sleet iconsizeC blue"></i><p class="text-center"><small>Rijp</small></p></div></div>' .
                    '<div class="row debug>"><div class="col debug"><p class="text-center">0 %</p><p class="text-right"><small>kans</small></p></div></div>' .
            '</div>' .
            '<div class="col debug">' .
                    '<div class="row debug"><div class="col debug"><i class="wi wi-bliksem iconsizeC yellow"></i><p class="text-center"><small>Onweer</small></p></div></div>' .
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

'</div>';
?>

