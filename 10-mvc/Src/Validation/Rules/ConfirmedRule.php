<?php
namespace Src\Validation\Rules;

use Src\Validation\Rules\Contract\Rule;

class ConfirmedRule implements Rule {
    public function apply($field , $value , $data) : bool {
        return $data[$field] === $data[$field.'_confirmation'];
     }
     public function message() :string {
         return ":attribute dosen't match";
     }
     public function __toString() :string {
         return "confirmed";
     }
}