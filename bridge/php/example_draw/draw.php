<?php
//Drawing interface
interface DrawingAPI {
    public function drawCircle($dX, $dY, $dRadius);
}
 
//drawing option 1
class DrawingAPI1 implements DrawingAPI {
 
    public function drawCircle($dX, $dY, $dRadius) {
        echo "API1.circle at ".$dX.":".$dY." radius ".$dRadius."<br/>";
    }
}
 
//drawing option 2
class DrawingAPI2 implements DrawingAPI {
 
    public function drawCircle($dX, $dY, $dRadius) {
        echo "API2.circle at ".$dX.":".$dY." radius ".$dRadius."<br/>";
    }
}
 





/*
Shape abstract for setting the drawing option only
*/
abstract class Shape {
 
    protected $drawingAPI;
 
    protected function __construct(DrawingAPI $_drawingAPI) {
        $this->drawingAPI = $_drawingAPI;
    }
}
 
class CircleShape extends Shape {
 
    private $dX;
    private $dY;
    private $dRadius;
 
    public function __construct($dX, $dY,$dRadius, DrawingAPI $oDrawingAPI) {
        parent::__construct($oDrawingAPI);

        $this->dX = $dX;
        $this->dY = $dY;
        $this->dRadius = $dRadius;
    }
 
    public function draw() {
        $this->drawingAPI->drawCircle(
                $this->dX,
                $this->dY,
                $this->dRadius
        );
    }
}
 
