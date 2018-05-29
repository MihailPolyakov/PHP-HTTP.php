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
    'Canada'=>['Ursus arctos x maritimus'],
    'Antarctica'=>['Spheniscidae'],
];

$result = [];
foreach ($animals as $countinent) {
    $result = array_merge($result, array_filter($countinent, function ($item){ return count(explode(' ', $item)) === 2; }) );
}

echo "<pre>";
print_r($result);
echo "</pre>";

$string = implode(', ', $result);
echo "$string";


/*shuffle($result);
echo "<pre>";
print_r($result);
echo "</pre>";*/
/*print_r ($result);*/

/*foreach ($animals as $continient => $zoo )
{
echo "$continient";
}*/

?>