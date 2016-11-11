<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 11/11/2016
 * Time: 10:17 AM
 */
namespace Goat\Backend;
class Controller{
    use BehaviorTrait;
    //private variable
    private $_behaviors;
    public function __construct()
    {
        $this->_behaviors = $this->behaviors();
        //check if our behaviors is set
        if(!empty($this->_behaviors))
        {
            //then we procced  to create a new instance of the behavior class
            //heres the hic, we need to create a new instance of the user behavior then execute it
            require_once ( APP_DIR . "behaviors/" . key($this->_behaviors) . "Behaviors" . ".php");
            $FQN = __NAMESPACE__ . "\\" . key($this->_behaviors)."Behavior";
            //now here if we create a new instance of our object, it wont inherits what THIS class have as params such as the behaviors() rules
            $obj = new $FQN;
        }
    }
    public function behaviors()
    {
        //is mostly overriden
        return [];
    }
    final private function nonoverridable()
    {
        //do some main core action, like routing or w/e
    }
}