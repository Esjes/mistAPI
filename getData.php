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
'<div class="container bg bg-border space">' .
    '<div class="row debug">' .
        '<div class="col debug"><p class="text-left"><i class="wi wi-sunrise iconsizeA l-yellow"></i><br>' . $weatherObject -> liveweer[0] -> sup . '</i></div>' .
        '<div class="col debug">' .
            '<div class="row"><div class="col debug text-center"><div  id="klokbalk"></div></div></div>' . 
                '<div class="row"><div class="col debug text-center"><form action="selectCity.php" method="GET">' .
                '<input type="text" class="bg text-center" name="City" id="Breda" placeholder="Plaatsnaam">' .
                '<button class="go bg" type="submit"><i class="wi wi-refresh"></i></button></form></div></div>' .  
            '<div class="row"><div class="col debug text-center iconsizeB blue"><p>' . $weatherObject -> liveweer[0] -> plaats . '</p></div></div>' . 
        '</div>' .
        '<div class="col debug"><p class="text-right"><i class="wi wi-sunset iconsizeA l-yellow"></i><br>' . $weatherObject -> liveweer[0] -> sunder . '</p></div>' .
    '</div>' .
    '<div class="row debug">' .
        '<div class="col debug text-center"><i class="wi wi-' . $weatherObject -> liveweer[0] -> d0weer . ' iconsizeB l-yellow"></i></div>' .
    '</div>' .
    '<div class="row debug">' .
        '<div class="col debug"><p class="text-center iconsizeB blue">' . $weatherObject -> liveweer[0] -> temp . '°</p></div>' .
    '</div>' .
    '<div class="row debug">' .
        '<div class="col debug">' .
            '<div class="row debug"><div class="col debug"><p class="text-center"><small>Dauwpunt</small></p></div></div>' .
            '<div class="row debug>"><div class="col debug"><p class="text-center blue">' . $weatherObject -> liveweer[0] -> dauwp . '</p></div></div>' .
        '</div>' .
        '<div class="col debug">' .
                '<div class="row debug"><div class="col debug"><p class="text-center"><small>Luchtvochtigheid</small></p></div></div>' .
                '<div class="row debug>"><div class="col debug"><p class="text-center blue">' . $weatherObject -> liveweer[0] -> lv . '</p></div></div>' .
        '</div>' .
        '<div class="col debug">' .
                '<div class="row debug"><div class="col debug"><p class="text-center"><small>Windsnelheid</small></p></div></div>' .
                '<div class="row debug>"><div class="col debug"><p class="text-center blue">' . $weatherObject -> liveweer[0] -> winds . '</p></div></div>' .
        '</div>' .
    '</div>' .
    '<div class="row bg debug">' .
            '<div class="col debug">' .
                '<div class="row debug"><div class="col debug"><p class="text-center">Mist</p></div></div>' .
                '<div class="row debug"><div class="col debug "><i class="wi wi-mist iconsizeC l-yellow text-left"></i></div></div>' .
                '<div class="row debug"><div class="col debug"><p class="text-center iconsizeA blue">0 %</p></div></div>' .
                
            '</div>' .
            '<div class="col debug">' .
                    '<div class="row debug"><div class="col debug"><p class="text-center">Rijp</p></div></div>' .
                    '<div class="row debug"><div class="col debug"><i class="wi wi-sleet iconsizeC l-yellow text-left"></i></div></div>' .
                    '<div class="row debug"><div class="col debug"><p class="text-center iconsizeA blue">0 %</p></div></div>' .
            '</div>' .
            '<div class="col debug">' .
                    '<div class="row debug"><div class="col debug"><p class="text-center">Onweer</p></div></div>' .
                    '<div class="row debug"><div class="col debug"><i class="wi wi-bliksem iconsizeC l-yellow text-left"></i></div></div>' .
                    '<div class="row debug"><div class="col debug"><p class="text-center iconsizeA blue">0 %</p></div></div>' .
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

