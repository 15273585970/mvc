<?php
class HomeController extends BaseController{
   public function home()
   {
       $Article  = Users::first();
       require dirname(__FILE__).'/../views/home.php';
   }
}