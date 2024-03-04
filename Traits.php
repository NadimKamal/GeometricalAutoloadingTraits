<?php
namespace App\Trait;
trait Volume {
    protected $volume;
    public function CylinderVolume() {
        $this->volume = PI() * ( $this->radius ** $this->two ) * $this->height;
        return "Volume of Cylinder From Trait: [<b> π * </b>(<b> {$this->radius} * {$this->radius} </b>)<b> * {$this->height} </b>] = <b>{$this->volume}</b><br>";
    }
    public function CubeVolume() {
        $this->volume = $this->length ** $this->three;
        return "Volume of Cube From Trait: (<b> {$this->length} * {$this->length} * {$this->length} </b>) = <b>{$this->volume}</b><br>";
    }
}
?>