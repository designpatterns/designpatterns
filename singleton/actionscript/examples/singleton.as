package
{
    import flash.display.*;

    class God {        
        private static var instance:God;        
        
        //since constructor in AS cant be private
        public function God(){
	    	trace("god created");
    	}
        
        public static function getInstance():God     
        {               
             if(instance == null){         
                    God.instance = new God();    
            }            
            return God.instance;  
        }
        
    }

	public class Main extends Sprite
	{
		public function Main()
		{
			var g:God = God.getInstance();
            
            //the constructor will not run
            var g2:God = God.getInstance();
		}
    }
}
