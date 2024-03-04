<?php
namespace App\TriangleShape;
use App\Geometrical\Shapes\GeometricalShapes;

require_once './GeometricalShapes.php';
class Triangle extends GeometricalShapes {
    static $counter = 1;
    public function __construct() {
        $tempCounter = self::$counter;
        echo "<b><br>Triangle {$tempCounter}<br></b>";
        self::$counter++;
    }
    public function setValue( $triangleSide1, $triangleSide2, $triangleLand, $triangleHeight ) {
        $this->length = $triangleLand;
        $this->height = $triangleHeight;
        $this->triangleSide1 = $triangleSide1;
        $this->triangleSide2 = $triangleSide2;
    }
    public function Area() {
        $this->area = $this->half * ( $this->length * $this->height );
        return "Area of Triangle is : (<b> {$this->half} * {$this->length} * {$this->height} </b>) = <b>{$this->area}</b>.<br>";
    }

    public function Circumference() {
        $this->circumference = $this->triangleSide1 + $this->triangleSide2 + $this->length;
        return "Circumference of Triangle is : (<b> {$this->triangleSide1} + {$this->triangleSide2} + {$this->length} </b>) = <b>{$this->circumference}</b>.<br>";
    }
    public function __destruct() {
        echo $this->divider;
    }
}
?>