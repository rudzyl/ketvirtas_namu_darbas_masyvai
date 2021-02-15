<?php

//nr1
echo '<h4>pirma uzduotis</h4>';

$array = [];
for($i = 0; $i < 30; $i++) {
    array_push($array, rand(5, 25));
}
print_r($array);

//nr2
echo '<h4>antra uzduotis </h4>';
echo '<h5>a) dalis</h5>';

$didesnesNei = 0;
foreach($array as $value) {
    if($value > 10) {
        $didesnesNei++;
    }
}
echo 'Masyve yra reiksmiu didesniu uz desimt ' . $didesnesNei;

echo '<h5>b) dalis</h5>';

rsort($array);
print_r($array[0]);

echo '<h5>c) dalis</h5>';

echo 'Visu reiksmiu suma ' . array_sum($array);

echo '<h5>d) dalis</h5>';

$arrayNew = [];
foreach($array as $key => $value) {
    $element = $value - $key;
    array_push($arrayNew, $element);
}
print_r($arrayNew);

echo '<h5>e) dalis</h5>';

for($i = 0;$i <10; $i++) {
    $papildymas = rand(5, 25);
    array_push($arrayNew, $papildymas);
}
print_r($arrayNew);

echo '<h5>f) dalis</h5>';

$porinis = [];
$nePorinis = [];
foreach($arrayNew as $key => $value) {
    if($key % 2 === 0) {
        array_push($porinis, $key);
    } else {
        array_push($nePorinis, $key);
    }
}
print_r($porinis);

echo '<h5>g) dalis</h5>';

for($i = 0; $i < count($array); $i++) {
    if(($i % 2 === 0) && ($array[$i] > 15)) {
       $pakeitimas = array($i => 0);
       $array = array_replace($array, $pakeitimas); 
    }
}
print_r($array);

echo '<h5>h) dalis</h5>';

for($i = 0; $i < count($array); $i++) {
    if($array[$i] < 10) {
        echo $i;
        break;
    }
}

echo '<h5>i) dalis</h5>';

$ilgis = count($array);
for($i = 0; $i < $ilgis; $i++) {
    if($i % 2 == 0) {
        unset($array[$i]);
    }
}
print_r($array);
echo '<br>';
echo 'poriniu indeksu is viso ' . count($array);

echo '<h4>trecia uzduotis</h4>';

$masyvas = [];
$raides = "ABCD";
for($i = 0; $i < 200; $i++) {
    array_push($masyvas, $raides[rand(0, 3)]);
}
echo '<pre>';
print_r(array_count_values($masyvas));
echo '</pre>';

echo '<h4>ketvirta uzduotis</h4>';

sort($masyvas);
print_r($masyvas);

echo '<h4>penkta uzduotis</h4>';

$pirmas = [];
$antras = [];
$trecias = [];
for($i = 0; $i < 200; $i++) {
    array_push($pirmas, $raides[rand(0, 3)]);
}
for($i = 0; $i < 200; $i++) {
    array_push($antras, $raides[rand(0, 3)]);
}
for($i = 0; $i < 200; $i++) {
    array_push($trecias, $raides[rand(0, 3)]);
}
$naujas = [];
for($i = 0; $i < 200; $i++) {
    array_push($naujas, ($pirmas[$i] . $antras[$i] . $trecias[$i]));
}
print_r($naujas);
echo '<br>';
echo 'Is viso unikaliu reiksmiu kombinaciju: ' . count($naujas);


// array fill