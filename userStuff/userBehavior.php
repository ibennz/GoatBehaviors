<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 11/11/2016
 * Time: 10:26 AM
 */
use Goat\Backend\Behavior;
class myBehavior extends Behavior{
    public function init()
    {
        $dummy = $this->behaviors();
        //here we override init and do our works if the behavior is set

    }
    public function behaviors()
    {
        return parent::behaviors(); // TODO: Change the autogenerated stub
    }
}