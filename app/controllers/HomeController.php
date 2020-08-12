<?php
class HomeController extends BaseController{
   public function home()
   {
       $Article  = Article::first();
       require dirname(__FILE__).'/../views/home.php';
   }
}