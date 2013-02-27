<?
interface IBMW
{
	public function paintTo($color);
}
//may also create some whitelist of available colors and validate it..
class BMW implements IBMW{
    public function paintTo($color = 'white'){
            return 'painted to '. $color;
    }
}
      
 
class BMWFactory
{
  public static function create( $color )
  {
     $bmw = new BMW;
     return $bmw->paintTo($color);
  }
}
 
//besides color, you can pass array with many options
$myBlackBMW = BMWFactory::create('black');
echo $myBlackBMW;