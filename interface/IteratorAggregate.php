<?php
interface IteratorAggregate extends CollectionInterface{
    public function getIterator();
}