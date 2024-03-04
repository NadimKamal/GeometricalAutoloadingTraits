<?php
namespace App\CubeShape;
use App\Geometrical\Shapes\GeometricalShapes;
use App\Trait\Volume;

require_once './GeometricalShapes.php';
require_once './Traits.php';
class Cube extends GeometricalShapes {
    static $counter = 1;
    public function __construct() {
        $tempCounter = self::$counter;
        echo "<b><br>Cube {$tempCounter}<br></b>";
        self::$counter++;
    }
    public function setValue( $cubeLength ) {
        $this->length = $cubeLength;
    }

    public function Area() {
        $this->area = $this->six * ( $this->length ** $this->two );
        return "Area of Cube is : [<b> {$this->six} * </b>(<b> {$this->length} * {$this->length} </b>) ] = <b>{$this->area}</b><br>";
    }
    public function Circumference() {
        $this->circumference = $this->twelve * $this->length;
        return "Circumference of Cube is : (<b> {$this->twelve} * {$this->length} </b>) = <b>{$this->circumference}</b><br>";
    }
    // This is Trait
    use Volume;
    public function __destruct() {
        echo $this->divider;
    }
}
?>