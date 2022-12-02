<?php
namespace Src\Validation;

use Src\Validation\Rules\MaxRule;
use Src\Validation\Rules\MinRule;
use Src\Validation\Rules\BetweenRule;
use Src\Validation\Rules\RequiredRule;
use Src\Validation\Rules\AlphaNumericalRule;

class RulesMapper {
    private static array $map = [
        'required'=>RequiredRule::class,
        'alnum'=>AlphaNumericalRule::class,
        'min'=>MinRule::class,
        'max'=>MaxRule::class,
        'between'=>BetweenRule::class
    ];

    public static function resolve(string $rule ,array $args)
    {
        return new self::$map[$rule](...$args); //spread
    }
}
