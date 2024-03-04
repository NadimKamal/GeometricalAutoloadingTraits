<?php
namespace App\CylinderShape;
use App\Geometrical\Shapes\GeometricalShapes;
use App\Trait\Volume;

require_once './GeometricalShapes.php';
require_once './Traits.php';
class Cylinder extends GeometricalShapes {

    static $counter = 1;
    public function __construct() {
        $tempCounter = self::$counter;
        echo "<b><br>Cylinder {$tempCounter} → ( </b>π = ".PI()."<b> )</b><br>";
        self::$counter++;
    }
    public function setValue( $cylinderRadius, $cylinderHeight ) {
        $this->radius = $cylinderRadius;
        $this->height = $cylinderHeight;
    }
    public function Area() {
        $this->area = ( $this->two * PI() * $this->radius ) * ( $this->radius + $this->height );
        return "Area of Cylinder is : [<b> {$this->two} * π * {$this->radius} * </b>(<b> {$this->radius} + {$this->height} </b>) ] = <b>{$this->area}</b><br>";
    }
    public function Circumference() {
        $this->circumference = $this->two * PI() * $this->radius * $this->height;
        return "Circumference of Cylinder is : (<b> {$this->two} * π * {$this->radius} * {$this->height} </b>) = <b>{$this->circumference}</b><br>";
    }
// This is Trait
    use Volume;

    public function __destruct() {
        echo $this->divider;
    }
}
?>