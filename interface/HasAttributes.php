<?php
namespace interfaces;

trait HasAttributes{
    protected $original;
    protected $casts;
    protected $attributes;
    protected $default_casts;

    public function __get($key)
    {
        // TODO: Implement __get() method.
        if (property_exists($this, $key)) {
            return $this->$key;
        } else {
            throw  new \Exception("Property undefined");
        }
    }

    public function __set($key, $value)
    {
        // TODO: Implement __set() method.
        if (property_exists($this, $key)) {
            $this->$key = $value;
        } else {
            throw  new \Exception("Property undefined");
        }
    }

}