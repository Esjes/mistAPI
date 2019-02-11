<?php

$url = "http://weerlive.nl/api/json-data-10min.php?key=0a11e7d089&locatie=Breda";

$json = file_get_contents($url);

//var_dump($json);

$weatherObject = json_decode($json);  

//var_dump($weatherObject);

echo '<h1>' . $weatherObject -> liveweer[0] -> temp . '</h1>';

echo '<p>' . $weatherObject -> liveweer[0] -> sup . '</p>';
echo '<p>' . $weatherObject -> liveweer[0] -> sunder . '</p>';
?>

