<?php namespace App\Controllers;
class Filtercontrol extends BaseController{
    public function index(){
        echo " welcome to the home page";

    }
    public function login(){
        // set user session
        $session=session();
        $session->set("isLoggedIn",1);
    }
    public function logout(){
        // session remove 
        session()->destroy();
    }
    public function route1(){
        echo "this route is protected ";

    }
    public function route2(){
        echo "this route is open for all";
    }
    public function noAcess(){
        echo "Access Denied Login to proceed";
    }
}