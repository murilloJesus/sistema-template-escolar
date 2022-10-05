<?php

namespace App\Classes;

use Spatie\Color\Hex;
use Spatie\Color\Hsl;

class ColorCalculator
{

    const DARK = 20;
    const LIGHT = 80;
    const SATURATE = 100;


    public $baseColor;
    public $hex;
    public $hsl;


    public $defaultRules = [
        "color" => [0, -1, -1],
        "saturate" => [0, self::SATURATE, -1],
        "light" => [0, -1, self::LIGHT],
        "dark" => [0, -1, self::DARK],

        "complementary" => [180, -1, -1],
        "light-complementary" => [180, self::SATURATE, -1],
        "light-complementary" => [180, -1, self::LIGHT],
        "dark-complementary" => [180, -1, self::DARK],

        "triadic-120" => [120, -1, -1],
        "saturate-triadic-120" => [120, self::SATURATE, -1],
        "light-triadic-120" => [120, -1, self::LIGHT],
        "dark-triadic-120" => [120, -1, self::DARK],

        "triadic-240" => [240, -1, -1],
        "saturate-triadic-240" => [240, self::SATURATE, -1],
        "light-triadic-240" => [240, -1, self::LIGHT],
        "dark-triadic-240" => [240, -1, self::DARK],

        "tetradic-90" => [90, -1, -1],
        "saturate-tetradic-90" => [90, self::SATURATE, -1],
        "light-tetradic-90" => [90, -1, self::LIGHT],
        "dark-tetradic-90" => [90, -1, self::DARK],

        "tetradic-270" => [270, -1, -1],
        "saturate-tetradic-270" => [270, self::SATURATE, -1],
        "light-tetradic-270" => [270, -1, self::LIGHT],
        "dark-tetradic-270" => [270, -1, self::DARK],

    ];

    /**
     * Create a new class instance.
     *
     * @return void
     */
    public function __construct($baseColor)
    {
        $this->baseColor = $baseColor;
        $this->hex = Hex::fromString($this->baseColor);
        $this->hsl = $this->hex->toHsl();
    }

    public function fromDefaultRuler($pre = null){
        return $this->getColorset($this->defaultRules, $pre);
    }

    public function getColorset($rules, $pre){

        $colorset = [];

        foreach ($rules as $name => $rule) {
            $colorset[ $pre ? "$pre-$name" : $name ] = $this->convert(
                $rule[0],
                $rule[1] == -1 ? $this->hsl->saturation() : $rule[1],
                $rule[2] == -1 ? $this->hsl->lightness() : $rule[2]);
        }

        return $colorset;

    }

    public  function convert($hue, $saturation, $lightess){

        $newHsl = self::createHsl(
            self::calcMax($this->hsl->hue(), $hue, 360),
            $saturation,
            $lightess
        );

        $hsl = Hsl::fromString($newHsl);

        return $hsl->toHex();

    }

    private static function calcMax($hue, $val, $max){
        $newV = $hue + $val;
        return $newV > $max ? ($newV) - $max : ($newV);
    }

    private static function createHsl($h, $s, $l){
        $h = round($h);
        $s = round($s);
        $l = round($l);

        return "hsl($h,$s%,$l%)";
    }



}
