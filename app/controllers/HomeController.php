<?php

use app\common\enums\UsersType;

class HomeController extends BaseController{
   public function home()
   {
       $Article  = Users::first();
    
       if (   $Article->enable != UsersType::可用  ){
           return $this->fail('','测试信息!!',400);
       }

       require dirname(__FILE__).'/../views/home.php';
   }
}