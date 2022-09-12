<?php
namespace interfaces;

interface IteratorAggregate extends CollectionInterface{
    public function getIterator();
}