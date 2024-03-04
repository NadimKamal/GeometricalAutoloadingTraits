<?php
use App\CircleShape\Circle;
use App\CubeShape\Cube;
use App\CylinderShape\Cylinder;
use App\QuadrangleShape\Quadrangle;
use App\TriangleShape\Triangle;
require_once './Triangle.php';
require_once './Quadrangle.php';
require_once './Circle.php';
require_once './Cylinder.php';
require_once './Cube.php';

//Triangle Object One
$triangleObject_1 = new Triangle;
$triangleObject_1->setValue( 19, 5, 11, 3.79 );
echo $triangleObject_1->Area();
echo $triangleObject_1->Circumference();

//Triangle Object Two
$triangleObject_2 = new Triangle;
$triangleObject_2->setValue( 13, 5, 6, 8.58 );
echo $triangleObject_2->Area();
echo $triangleObject_2->Circumference();

//Quadrangle Object One
$quadrangleObject_1 = new Quadrangle;
$quadrangleObject_1->setValue( 3.96, 4 );
echo $quadrangleObject_1->Area();
echo $quadrangleObject_1->Circumference();

//Quadrangle Object Two
$quadrangleObject_2 = new Quadrangle;
$quadrangleObject_2->setValue( 7.67, 4.03 );
echo $quadrangleObject_2->Area();
echo $quadrangleObject_2->Circumference();

//Circle Object One
$circleObject_1 = new Circle;
$circleObject_1->setValue( 9.43 );
echo $circleObject_1->Area();
echo $circleObject_1->Circumference();

//Circle Object Two
$circleObject_2 = new Circle;
$circleObject_2->setValue( 4.44 );
echo $circleObject_2->Area();
echo $circleObject_2->Circumference();

//Cylinder Object One
$cylinderObject_1 = new Cylinder;
$cylinderObject_1->setValue( 4, 5 );
echo $cylinderObject_1->Area();
echo $cylinderObject_1->Circumference();
echo $cylinderObject_1->CylinderVolume();

//Cylinder Object Two
$cylinderObject_2 = new Cylinder;
$cylinderObject_2->setValue( 6, 5 );
echo $cylinderObject_2->Area();
echo $cylinderObject_2->Circumference();
echo $cylinderObject_2->CylinderVolume();

//Cube Object One
$cubeObject_1 = new Cube;
$cubeObject_1->setValue( 4.44 );
echo $cubeObject_1->Area();
echo $cubeObject_1->Circumference();
echo $cubeObject_1->CubeVolume();

//Cube Object Two
$cubeObject_2 = new Cube;
$cubeObject_2->setValue( 3.96 );
echo $cubeObject_2->Area();
echo $cubeObject_2->Circumference();
echo $cubeObject_2->CubeVolume();
?>