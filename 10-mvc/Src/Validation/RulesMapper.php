<?php
namespace Src\Validation;

use Src\Validation\Rules\MaxRule;
use Src\Validation\Rules\MinRule;
use Src\Validation\Rules\BetweenRule;
use Src\Validation\Rules\RequiredRule;
use Src\Validation\Rules\ConfirmedRule;
use Src\Validation\Rules\AlphaNumericalRule;
use Src\Validation\Rules\ExistsRule;
use Src\Validation\Rules\UniqueRule;

class RulesMapper {
    private static array $map = [
        'required'=>RequiredRule::class,
        'alnum'=>AlphaNumericalRule::class,
        'min'=>MinRule::class,
        'max'=>MaxRule::class,
        'between'=>BetweenRule::class,
        'confirmed'=>ConfirmedRule::class,
        'unique'=>UniqueRule::class,
        'exists'=>ExistsRule::class
    ];

    public static function resolve(string $rule ,array $args)
    {
        return new self::$map[$rule](...$args); //spread
    }
}
