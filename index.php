<?php

require_once __DIR__.'/vendor/autoload.php';

use Opmvpc\StructuresDonnees\Lists\Collection;

$collection = new Collection();

$collection->push(1);
$collection->push(2);
$collection->push(3);
$collection->push(4);
$collection->push(5);

//var_dump($collection);


try {
    // Attempt to access an index that doesn't exist
    echo $collection->get(5); // This will throw an exception if index 5 does not exist
} catch (Exception $e) {
    // Handle the exception
    echo "Caught exception: " . $e->getMessage(); // Outputs: Caught exception: La clé n'existe pas dans la liste
}
//var_dump($test);

/*function cube($n)
{
    return ($n * $n * $n);
}

$test = $collection->map('cube');
var_dump($test);*/
