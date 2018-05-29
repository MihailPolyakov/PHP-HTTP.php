<?php
$animals=[
    'Africa'=>[
        'Syncerus caffer',
        'Poelagus marjorita',
        'Loxodonta',
        'Hippopotamus amphibius',
        'Otocyon megalotis',
        'Tragelaphus eurycerus',
        'Gazella dorcas',
        ],
    'Australia'=>['Macropus'],
    'South-America'=>['Eunectes murinus'],
    'North-America'=>['Ursus arctos x maritimus'],
    'Antarctica'=>['Spheniscidae'],
];

$result = [];
foreach ($animals as $countinent) {
    $result = array_merge($result, array_filter($countinent, function ($item){ return count(explode(' ', $item)) === 2; }) );
}

echo "<pre>";
print_r($result);
echo "</pre>";


$firstwords = [];
$secondwords = [];

foreach ($result as $value) {
	$afs=explode(' ', $value);
	$firstwords[]= $afs[0];
	$secondwords[] = $afs[1];
	shuffle($secondwords);
}

print_r($firstwords);
print_r($secondwords);

foreach ($firstwords as $i => $value) {
	$firstwords[$i]=$firstwords[$i] . ' ' . $secondwords[$i];
}

echo "<pre>";
print_r($firstwords);
echo "</pre>";





?>