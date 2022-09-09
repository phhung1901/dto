<?php
class Collection implements CollectionInterface{

    private $elements;

    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    public function isEmpty()
    {
        // TODO: Implement isEmpty() method.
    }

    public function filter($callback)
    {
        // TODO: Implement filter() method.
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }

    public function add($element)
    {
        // TODO: Implement add() method.
    }

    public function first()
    {
        // TODO: Implement first() method.
    }

    public function last()
    {
        // TODO: Implement last() method.
    }

    public function map($callback)
    {
        // TODO: Implement map() method.
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }
}