<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 11/11/2016
 * Time: 10:17 AM
 */
namespace Goat\Backend;

class Controller{
    //private variable
    private $_behaviors;
    public function __construct()
    {
        $this->_behaviors = $this->behaviors();
        //check if our behaviors is set
        if(!empty($this->_behaviors))
        {
            //hardcoded for testing purposes.
            require_once str_replace("controller.php", "userStuff\\myBehavior.php", __FILE__);
            //this has no namespace
            $FQN = "myBehavior";
            $reflector = new \ReflectionClass($FQN);
            //this is to avoid the instance to have a parent class which would be a new instance of this class thus overriding the variable we change.
            //now that i think about it.. why I just dont make the init function static? 
            $obj = $reflector->newInstanceWithoutConstructor();
            //pass the behaviors array rule to our new instance
            $obj->behaviors =  $this->_behaviors;
            //invoke the init call
            $obj->init();

        }
    }
    /*
     * Is overridden in the controller instance
     * */
    public function behaviors()
    {
        return [];
    }

    final public function nonoverridable()
    {
        return "something";
        //do some main core action, like routing or w/e
    }
}