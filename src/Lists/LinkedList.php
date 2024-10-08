<?php

declare(strict_types=1);

namespace Opmvpc\StructuresDonnees\Lists;

use Opmvpc\StructuresDonnees\Node;

class LinkedList implements ListInterface
{
    protected Node $head;
    protected int $size;

    public function __construct()
    {
        $this->head = new Node(null);
        $this->size = 0;
    }

    public function __toString(): string
    {
        return json_encode($this->toArray(), JSON_PRETTY_PRINT);
    }

    public function push(mixed $element): void {
        /* donc il faut ajouter à la linkedlist
        un element pour un node et
         un new object node dans lequel on push l'element
         et la référence au nouveau node dans le node précédent*/
    }

    public function get(int $index): mixed {}

    public function set(int $index, mixed $element): void {}

    public function clear(): void {}

    public function includes(mixed $element): bool {}

    public function isEmpty(): bool {}

    public function indexOf(mixed $element): int {}

    public function remove(int $index): void {}

    public function size(): int {}

    public function toArray(): array {}
}
