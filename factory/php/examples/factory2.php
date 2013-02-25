<?
//may also create some whitelist of available colors and validate it..
class BMW {
    public function __construct($color = 'white'){
            echo 'new '. $color .' BMW created';
    }
}
      
 
class BMWFactory
{
  public static function create( $color )
  {
     return new BMW($color);
  }
}
 
//besides color, you can pass array with many options
$myBlackBMW = BMWFactory::create('black');
