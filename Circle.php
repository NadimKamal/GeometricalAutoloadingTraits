<?php
namespace App\CircleShape;
Use App\Geometrical\Shapes\GeometricalShapes;
require_once './GeometricalShapes.php';
class Circle Extends GeometricalShapes {
    static $counter = 1;
    public function __construct() {
        $tempCounter = self::$counter;
        echo "<br><b>Circle {$tempCounter} → ( </b>π = ".PI()."<b> )</b><br>";
        self::$counter++;
    }
    public function setValue( $circleRadius ) {
        $this->radius = $circleRadius;
    }
    public function Area() {
        $this->area = PI() * $this->radius ** $this->two;
        return "Area of Circle is : (<b> π * {$this->radius} * {$this->radius} </b>) = <b>{$this->area}</b><br>";
    }
    public function Circumference() {
        $this->circumference = $this->two * PI() * $this->radius;
        return "Circumference of Circle is : (<b> {$this->two} * π * {$this->radius} </b>) = <b>{$this->circumference}</b><br>";

    }
    public function __destruct() {
        echo $this->divider;
    }
}
?>