<?php
// The interface so we can be sure that its a command
interface Command {
   public function execute();
}
 
 
/* The Invoker class */
class Switcher {
   private $history = array();
 
   public function storeAndExecute(Command $cmd) {
      $this->history[] = $cmd; // optional 
      $cmd->execute();        
   }
}
 
/* The Receiver class */
class Light {
 
   public function turnOn() {
      echo ("The light is on");
   }
 
   public function turnOff() {
      echo ("The light is off");
   }
}
 
/* The Command for turning on the light - ConcreteCommand #1 */
class FlipUpCommand implements Command {
   private $theLight;
 
   public function FlipUpCommand(Light $light) {
      $this->theLight = $light;
   }
 
   public function execute(){
      $this->theLight->turnOn();
   }
}
 
/* The Command for turning off the light - ConcreteCommand #2 */
class FlipDownCommand implements Command {
   private $theLight;
 
   public function FlipDownCommand($light) {
      $this->theLight = $light;
   }
 
   public function execute() {
      $this->theLight->turnOff();
   }
}
 
/* The test class or client */
// The invoker knows nothing about the the reciever
      $lamp = new Light();
      $switchUp = new FlipUpCommand($lamp);
      $switchDown = new FlipDownCommand($lamp);
 
      $s = new Switcher();
 
      $case = "off";
      
      if($case == "on")
         $s->storeAndExecute($switchUp);
      else
         $s->storeAndExecute($switchDown);
