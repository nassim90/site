<?php
class Request{
   public $url;  //URL call from users
        function __construct(){
      $this->url = $_SERVER['PATH_INFO'];

        }



}



 ?>
