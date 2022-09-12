<?php
namespace src;

use interfaces\Arrayable;
use interfaces\HasAttributes;
use interfaces\Jsonable;

class Data implements Arrayable , Jsonable {
    use HasAttributes;

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }

    public function toJson($options)
    {
        // TODO: Implement toJson() method.
    }

    public function from(){

    }

    public function collection(){

    }
}