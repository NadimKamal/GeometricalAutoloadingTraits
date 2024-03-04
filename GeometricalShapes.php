<?php
namespace App\Geometrical\Shapes;
abstract class GeometricalShapes {
    protected $length, $width, $height, $radius, $area, $circumference;
    protected $triangleSide1, $triangleSide2;
    protected $half = 0.5, $two = 2, $three = 3, $six = 6, $twelve = 12;
    protected $divider = "---";
    abstract protected function Area();
    abstract protected function Circumference();
}
?>