<?php

declare(strict_types=1);

namespace Opmvpc\StructuresDonnees\Lists;

class Collection extends ArrayList implements CollectionInterface
{
    public function map(callable $callback): CollectionInterface { 
        // On peut retourner l'interface car il fera lui-même le lien avec les classes implémentées!!
        // donc permet de généraliser le return aussi, plus "puissant" de renvoyer une Interface 

        /*$collectionmap = new Collection(); 
        $collectionmap->elements = array_map($callback, $this->elements);
        return $collectionmap;
        -----> pas bon car pas le tableau d'un tableau...*/

        $newarray = array_map($callback, $this->elements);
        return new Collection($newarray);
    }

    public function filter(callable $callback): CollectionInterface {
        
    }

    public function reduce(callable $callback, mixed $initial = null): mixed {}

    public function forEach(callable $callback): void {}

    public function some(callable $callback): bool {}

    public function every(callable $callback): bool {}

    public function find(callable $callback): mixed {}

    public function findIndex(callable $callback): int {}

    public function join(string $separator = ', '): string {}

    public function reverse(): CollectionInterface {}

    public function sort(callable $callback = null): CollectionInterface {}

    public function concat(...$collections): CollectionInterface {}

    public function fill(mixed $value = null, int $start = 0, ?int $end = null): CollectionInterface {}
}
