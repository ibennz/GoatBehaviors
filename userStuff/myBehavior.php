<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 11/11/2016
 * Time: 10:26 AM
 */
use Goat\Backend\Behavior;
/*
 * Extend behaviors which extend controller so we can use controller functions
 * */
class myBehavior extends Behavior{

    /*
     * Public variable to hold our behaviors.
     * */
    public $behaviors;
    /*
     * Initiate our behaviors
     * */
    public function init()
    {
        if($this->nonoverridable() == "something")
        {
            var_dump($this->behaviors);
        }
    }
}