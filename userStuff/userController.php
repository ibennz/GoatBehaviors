<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 11/11/2016
 * Time: 10:28 AM
 */
use Goat\Backend\Controller;
class myController extends Controller{
    //this override in the controller class it extends
    public function behaviors()
    {
        return [
            'user' => [
                'isAdmin' => true
            ]
        ];
    }
}