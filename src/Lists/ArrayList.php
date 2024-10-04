<?php

declare(strict_types=1);

namespace Opmvpc\StructuresDonnees\Lists;

use Exception;

class ArrayList implements ListInterface
{
    protected array $elements;

    public function __construct($elements = null)
    {
        if ($elements === null) {
        $this->elements = [];
    } else {
        $this->elements = [$elements];

    }
    }

    public function __toString(): string
    {
        return json_encode($this->elements, JSON_PRETTY_PRINT);
    }

    public function push(mixed $element = null): void {
        $this->elements[] = $element;
        //ou array_push($this->elements, $element);
    }

    public function get(int $index): mixed {
         if (array_key_exists($index, $this->elements) === false) {
            throw new Exception("La clé n'existe pas dans la liste");
        }
        return $this->elements[$index];
    }

    public function set(int $index, mixed $element): void {
        $this->elements[$index] = $element;
    }

    public function clear(): void {
        $this->elements = [];
    }

    public function includes(mixed $element): bool {
        return in_array($element, $this->elements);
    }

    public function isEmpty(): bool {
        return count($this->elements) === 0;
    }

    public function indexOf(mixed $element): int { // chercher l'index de l'élément
        $index = array_search($element, $this->elements);
        if ($index === false) {
            throw new Exception("L'élément n'existe pas dans la liste");
        }
        return $index; // pas besoin de else car le throw exception nous sortirait de la fonction
        
    }

    public function remove(int $index): void {
        unset($this->elements[$index]);
        $this->elements = array_values($this->elements);
    }

    public function size(): int {
        return count($this->elements);
    }

    public function toArray(): array {
        return $this->elements;
    }
}
