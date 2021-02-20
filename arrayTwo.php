<?php
//nr1
echo '<h4>pirma uzduotis</h4>';

$array = [];
foreach(range(1, 10) as $index1 => $val1) {
    foreach(range(1, 5) as $index2 => $val2) {
        $array[$index1][$index2] = rand(5, 25);
    }
}
_d($array);

echo '<h4>antra uzduotis</h4>';
echo '<h5>a) dalis</h5>';

$count = 0;
foreach($array as $val1) {
    foreach($val1 as $val2) {
        if($val2 > 10) {
            $count++;
        }
    }
}
print_r($count);

echo '<h4>antra uzduotis</h4>';
echo '<h5>b) dalis</h5>';

$biggest = 0;
for($i = 0; $i < count($array);$i++) {
    for($j = 0; $j < count($array[$i]); $j++){
        if($biggest < $array[$i][$j]) {
            $biggest = $array[$i][$j];
        }
    }
}
echo 'didziausias' . $biggest;

echo '<h4>antra uzduotis</h4>';
echo '<h5>c) dalis</h5>';

$sum = 0;
for($i = 0; $i < count($array);$i++) {
    for($j = 0; $j < count($array[$i]); $j++){
        
    }
}

echo '<h4>antra uzduotis</h4>';
echo '<h5>d) dalis</h5>';

foreach ($array as $key => $_) {
    foreach(range(5, 7) as $val) {
        $array[$key][$val] = rand(5, 25);
    }
}
_d($array);

echo '<h4>antra uzduotis</h4>';
echo '<h5>e) dalis</h5>';

$naujasMasyvas = [];
foreach($array as $val) {
    $suma = 0;
    foreach($val as $key) {
        $suma += $key;
    }
    $naujasMasyvas[] = $suma;
}
_d($naujasMasyvas);

//usort 5 uzduotis
//rusiavimas
_d($array);
uasort($array, function($a, $b) {
    return $a[0] <=> $b[0];
});
_d($array);

echo '<h4>trecia uzduotis</h4>';

 $masyvas = [];
 foreach(range(1, 3) as $index1 => $val1) {
     foreach(range(rand(1, 3), rand(1, 3)) as $index2 => $val2) {
         $masyvas[$index1][$index2] = chr(rand(65,90));
    }
}
echo '<pre>';
_d($masyvas);
echo '</pre>';

foreach($masyvas as $arr) {
        sort($arr);
}
unset($arr);
echo '<pre>';
_d($masyvas);
echo '</pre>';

echo '<h4>ketvirta uzduotis</h4>';

sort($masyvas);
_d($masyvas);

echo '<h4>penkta uzduotis</h4>';

$masyvas5 = [];
foreach(range(1, 30) as $index1 => $val1) {
    foreach(range(1, 2) as $index2 => $val2) {
        $userId = rand(1, 1000000);
        $placeIn = rand(0, 100);
        if(!in_array($userId, $masyvas5)) {
            $masyvas5[$val1][$val2] = ['user_id' => $userId, 'place_in_row' => $placeIn];
        }
    }
}
_d($masyvas5);

echo '<h4>sesta uzduotis</h4>';

echo '<h4>septinta uzduotis</h4>';
$lorem = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, rand(5, 15));
$name[] = $lorem;
$surname[] = $lorem;

echo '<h4>astunta uzduotis</h4>';

$masyvas8 = [];
for ($i = 0; $i < 10; $i++) {
    $random = rand(0, 5);
    $vidinis = [];
    if ($random == 0) {
        $masyvas8[$i] =  rand(0, 10);
    } else {
        for ($j = 0; $j < $random; $j++) {
            $vidinis[$j] = rand(0, 10);
        }
        $masyvas8[$i] =  $vidinis;
    }
}
_d($masyvas8);

echo '<h4>devinta uzduotis</h4>';

$sum = 0;
foreach($masyvas8 as $value) {
    if(is_array($value)) {
        $sum = array_sum($value);
    }
}
echo $sum;

echo '<h4>desimta uzduotis</h4>';

$masyvas10 = [];
$simboliai = '#%+*@裡';
$simboliaiLength = mb_strlen($simboliai);
foreach(range(1, 10) as $index1 => $val1) {
    foreach(range(1, 2) as $index2 => $val2) {
        $value = $simboliai[rand(0, $simboliaiLength - 1)];
        $color = '#' . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
        if(!in_array($value, $masyvas10)) {
            $masyvas10[$val1][$val2] = ['value' => $value, 'color' => $color];
        }
    }
}
echo '<pre>';
print_r($masyvas10);
echo '</pre>';