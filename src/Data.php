<?php
namespace src;

include "../interface/HasAttributes.php";
include "../interface/Arrayable.php";
include "../interface/Jsonable.php";




use interfaces\Arrayable;
use interfaces\HasAttributes;
use interfaces\Jsonable;

class Data implements Arrayable , Jsonable {
    use HasAttributes;

    public function toArray($array)
    {
        // TODO: Implement toArray() method.
        $object = new \stdClass();
        foreach ($array as $key => $value){
            $object->$key = $value;
        }
        return$object;
    }

    public function toJson($options)
    {
        // TODO: Implement toJson() method.
        return json_encode($this->toArray(), $options);
    }

    public static function from(array $array = []){
        $instance = new static();
        return $instance->setAttribute($array);
    }

    public function collection(array $array = []){
        $instances = [];
        $instance = new static();
        foreach ($array as $value){
            array_push($instances, $instance->setAttribute($array));
        }
        return$instances;
    }
}