<?php namespace App\Controllers;
class Session extends BaseController{
    public function sessiondata(){
        $session=session();
        $userdata = $session->get();

        echo $userdata; 

    }
}