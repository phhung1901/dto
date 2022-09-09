<?php
interface ArrayAccess extends CollectionInterface{
    public function offsetUnset($offset);

    public function offsetGet($offset);

    public function offsetExists($offset);

    public function offsetSet($offset, $value);
}