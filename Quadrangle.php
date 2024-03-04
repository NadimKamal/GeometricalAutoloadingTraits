<?php
namespace App\QuadrangleShape;
Use App\Geometrical\Shapes\GeometricalShapes;
require_once './GeometricalShapes.php';
class Quadrangle extends GeometricalShapes {
    static $counter = 1;
    public function __construct() {
        $tempCounter = self::$counter;
        echo "<b><br>Quadrangle {$tempCounter}<br></b>";
        self::$counter++;
    }
    public function setValue( $quadrangleLength, $quadrangleWidth ) {
        $this->length = $quadrangleLength;
        $this->width = $quadrangleWidth;
    }
    public function Area() {
        $this->area = $this->length * $this->width;
        return "Area of Quadrangle is : (<b> {$this->length} * {$this->width} </b>) = <b>{$this->area}</b>.<br>";
    }
    public function Circumference() {
        $this->circumference = $this->two * ( $this->length + $this->width );
        return "Circumference of Quadrangle is : [<b> {$this->two} * ( {$this->length} + {$this->width} ) </b>] = <b>{$this->circumference}</b><br>";
    }
    public function __destruct() {
        echo $this->divider;
    }
}
?>