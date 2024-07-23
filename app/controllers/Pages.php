
<?php

//Easiest way
//Data & Page (Just) in same function directly
//app/views/pages/about



class Pages {
  public function index(){  //default function
    $data = ['title' => 'TraversyMVC'];
      require_once '../app/views/pages/index.php';
    } 

  public function about(){
    $data = ['title' => 'About Us'];
      require_once '../app/views/pages/about.php';
    } 
  }



/* // Second way
class Pages {
  public function index(){
    $data = ['title' => 'TraversyMVC'];
    if (file_exists('../app/views/pages/index.php')) {
      require_once '../app/views/pages/index.php';
    } else {
      die('View does not exist');
    }
  }

  public function about(){
    $data = ['title' => 'About Us'];
    if (file_exists('../app/views/pages/about.php')) {
      require_once '../app/views/pages/about.php';
    } else {
      die('View does not exist');
    }
  }
}
*/


/* Best Way
  class Pages extends Controller {
    public function __construct(){
    
    }
    
    public function index(){
      $data = ['title' => 'TraversyMVC',]; 
      $this->view('pages/index', $data);
    }

    public function about(){


      $data = ['title' => 'About Us'];
      $this->view('pages/about', $data);
    }
  }

  */



