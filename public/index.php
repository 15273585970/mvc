<?php
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\Cache;

    require "../vendor/autoload.php";
      
    $capsule = new Capsule();
    $capsule->addConnection(require "../config/database.php");
    $capsule->bootEloquent();

    require "../config/routes.php";
?>