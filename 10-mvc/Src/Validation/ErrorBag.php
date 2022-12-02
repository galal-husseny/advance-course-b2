<?php
namespace Src\Validation;

class ErrorBag {
    private array $errors = [];

    public function append($field , $message)
    {
        $this->errors[$field][] = $message;
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error(string $field) :?string
    {
        return $this->errors[$field][0] ?? null;
    }

    public function fails() :bool
    {
        return !empty($this->errors);
    }

    public function passes()
    {
        return empty($this->errors);
    }
}