<?php
$masyvas = [
    'mano knygos', 
    'zurnalai' => 'seni žurnalai', 
    'zaislai' => 'katės žaislai', 
    'mano batai'
];

echo '<pre>';
print_r($masyvas);

foreach($masyvas as $index => $value) {
    echo '<br>';
    echo $index . ' => ' . $value;
}

foreach(range(1, 5) as $value) {
    echo '<br>';
    echo $value;
    
}

$colors = ['red', 'green', 'blue', 'yellow'];

foreach ($colors as &$value) {}

unset($value);

foreach ($colors as $value) {
    echo '<br>';
    echo 'Reikšmė: ' . $value . '<br>';
 }

 for ($i = 1;$i <= 15;$i++){
    if (rand(0, 10)> 9){
        if($i == 2) 
            continue;
    }
    echo $i;
    echo '<br>';
  }
  echo 'Ciklo pabaiga';
 
  ?>