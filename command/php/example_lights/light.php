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
      return $cmd->execute();        
   }
}
 
/* The Receiver class */
class Light {
 
   public function turnOn() {
      return "The light is on";
   }
 
   public function turnOff() {
      return "The light is off";
   }
}
 
/* The Command for turning on the light - ConcreteCommand #1 */
class FlipUpCommand implements Command {
   private $theLight;
 
   public function FlipUpCommand(Light $light) {
      $this->theLight = $light;
   }
 
   public function execute(){
      return $this->theLight->turnOn();
   }
}
 
/* The Command for turning off the light - ConcreteCommand #2 */
class FlipDownCommand implements Command {
   private $theLight;
 
   public function FlipDownCommand($light) {
      $this->theLight = $light;
   }
 
   public function execute() {
      return $this->theLight->turnOff();
   }
}


