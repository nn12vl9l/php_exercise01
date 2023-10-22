<?php
class Car
{
    public $name;
    public $num;
    public $color;

    public function __construct($name, $num, $color)
    {
        $this->name = $name;
        $this->num = $num;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->num;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setNumber($num)
    {
        $this->num = $num;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function information()
    {
        return "車名: {$this->name}" . PHP_EOL .
            "車体番号: {$this->num}" . PHP_EOL .
            "カラー: {$this->color}" . PHP_EOL;
    }
}
