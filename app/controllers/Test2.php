<?php


class Test2 { //witData 


    public function index (){
        $data = ['nameOfFunction'=>'index()'];
        require_once '../app/views/pages/test2-index.php';
    }

    public function contactUs(){
        $data=['nameOfFunction'=>'contactUs2()'];
        require_once '../app/views/pages/test2-contactus.php';
    }





}