<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 11/11/2016
 * Time: 10:21 AM
 */
namespace Goat\Backend;
//here is our trait that will be overriden

trait BehaviorTrait{
    public function behaviors(){/*1*/}
}

//we extand controller since we need its main function for routing etc
class Behavior extends Controller
{
    use BehaviorTrait;
    public function __construct()
    {
        parent::__construct();
        $dummy = $this->behaviors();
        
    }
    public function behaviors()
    {
        /*parent will override this?*/
    }
    public function init()
    {
        //overriden by user code
    }
}