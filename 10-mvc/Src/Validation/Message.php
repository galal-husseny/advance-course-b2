<?php 
namespace Src\Validation;

class Message {
    public static array $messages;
    public static array $attributes;
    public function __construct(array $messages , array $attributes) {
        self::$attributes = $attributes;
        self::$messages = $messages;
    }

    public static function generate($field , $rule)
    {
        if(array_key_exists((string)$rule,self::$messages)){
            return self::$messages[(string)$rule]; //rule custom message
        }

        if(array_key_exists($field . '.' . $rule,self::$messages)){
            return self::$messages[$field . '.' . $rule]; //field.rule custom message
        }

        return str_replace(':attribute',self::getAttrVal($field),$rule->message()); // default message
    }

    public static function getAttrVal($field)
    {
        return self::$attributes[$field] ?? $field;
    }
}